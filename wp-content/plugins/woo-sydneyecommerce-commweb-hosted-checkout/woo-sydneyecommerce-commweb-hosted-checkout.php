<?php
/*
  Plugin Name: Commweb hosted checkout for woocommerce
  Plugin URI: http://www.sydneyecommerce.com.au
  Description: Allow customers to conveniently checkout directly with Commweb Hosted Checkout
  Author: Sydney Ecommerce
  Version: 1.0
  Author URI: http://www.sydneyecommerce.com.au
 */

add_action('plugins_loaded', 'woocommerce_sydneyecommerce_commweb_hosted_checkout_init', 0);
add_action('init', 'init_start_session', 1);

function init_start_session() {
    if (!session_id()) {
        session_start();
    }
}

function woocommerce_sydneyecommerce_commweb_hosted_checkout_init() {

    if (!class_exists('WC_Payment_Gateway')) {
        return;
    }

    class WC_COMMWEB_HOSTED_CHECKOUT extends WC_Payment_Gateway {

        public function __construct() {
            global $woocommerce;

            $this->id = 'commweb_hosted_checkout';
            $this->has_fields = false;

            // Load the form fields.
            $this->init_form_fields();

            // Load the settings.
            $this->init_settings();

            // Define user set variables
            $this->title = $this->settings['title'];
            $this->description = $this->settings['description'];
            $this->merchant_id = $this->settings['merchant_id'];
            $this->api_password = $this->settings['api_password'];
            $this->merchant_name = $this->settings['merchant_name'];
            $this->checkout_method = $this->settings['checkout_method'];
            $this->debug = $this->settings['debug'];
            $this->secure_3d = $this->settings['secure_3d'];

            include_once( dirname(__FILE__) . '/includes/class-wc-commweb-api.php' );
            add_action('woocommerce_api_wc_commweb_hosted_checkout', array($this, 'init_commwed_page'));
            if (version_compare(WOOCOMMERCE_VERSION, '2.0.0', '>=')) {
                add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
            } else {
                add_action('woocommerce_update_options_payment_gateways', array(&$this, 'process_admin_options'));
            }
        }

        /**
         * Admin Panel Options
         * - Options for bits like 'title' and availability on a country-by-country basis
         *
         * @since 1.0.0
         */
        public function admin_options() {
            ?>
            <h3><?php _e('Commweb hosted checkout', 'woocommerce'); ?></h3>
            <p><?php _e('Allow customers to conveniently checkout directly with Commweb.', 'woocommerce'); ?></p>
            <table class="form-table">
                <?php
                // Generate the HTML For the settings form.
                $this->generate_settings_html();
                ?>
            </table><!--/.form-table-->
            <?php
        }

        /**
         * Initialise Gateway Settings Form Fields
         */
        function init_form_fields() {

            $this->form_fields = array(
                'enabled' => array(
                    'title' => __('Enable/Disable', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Enable Commweb hosted checkout', 'woocommerce'),
                    'default' => 'yes'
                ),
                'title' => array(
                    'title' => __('Title', 'woocommerce'),
                    'type' => 'text',
                    'desc_tip' => true,
                    'description' => __('This controls the title which the user sees during checkout.', 'woocommerce'),
                    'default' => __('Commweb hosted checkout', 'woocommerce')
                ),
                'description' => array(
                    'title' => __('Description', 'woocommerce'),
                    'type' => 'textarea',
                    'desc_tip' => true,
                    'description' => __('This controls the description which the user sees during checkout.', 'woocommerce'),
                    'default' => __("Commweb hosted checkout", 'woocommerce')
                ),
                'merchant_id' => array(
                    'title' => __('Merchant ID', 'woocommerce'),
                    'type' => 'text',
                    'desc_tip' => true,
                    'description' => __('Please enter your Merchant ID; this is needed in order to take payment.', 'woocommerce'),
                    'default' => ''
                ),
                'api_password' => array(
                    'title' => __('API Password', 'woocommerce'),
                    'type' => 'text',
                    'desc_tip' => true,
                    'description' => __('Please enter your API Password; this is needed in order to take payment.', 'woocommerce'),
                    'default' => ''
                ),
                'merchant_name' => array(
                    'title' => __('Merchant name', 'woocommerce'),
                    'type' => 'text',
                    'desc_tip' => true,
                    'description' => __('String to display on head of Lightbox or Payment Page of Commweb.', 'woocommerce'),
                    'default' => __('Commweb hosted checkout', 'woocommerce')
                ),
                'checkout_method' => array(
                    'title' => __('Checkout method', 'woocommerce'),
                    'type' => 'select',
                    'class' => 'wc-enhanced-select',
                    'description' => __('To display the checkout interaction in a Lightbox Or To display the checkout interaction on a Hosted Payment Page'),
                    'default' => 'Lightbox',
                    'desc_tip' => true,
                    'options' => array(
                        'Lightbox' => __('Lightbox', 'woocommerce'),
                        'Redirect' => __('Redirect', 'woocommerce'),
                    )
                ),
                'secure_3d' => array(
                    'title' => __('3D Secure', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Enabled 3D Secure', 'woocommerce'),
                    'default' => 'no',
                    'desc_tip' => true,
                    'description' => __('Enabled 3D Secure', 'woocommerce'),
                ),
                'debug' => array(
                    'title' => __('Debug Log', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Enable Logging', 'woocommerce'),
                    'default' => 'yes',
                    'desc_tip' => true,
                    'description' => __('Log data of Commweb.', 'woocommerce'),
                ),
            );
        }

        /**
         * Process the payment and return the result
         * */
        function process_payment($order_id) {
            $_SESSION['order_id'] = $order_id;
            if (isset($_SESSION['CurrentOrderId'])) {
                unset($_SESSION['CurrentOrderId']);
            }
            return array(
                'result' => 'success',
                'redirect' => get_site_url() . '?wc-api=WC_COMMWEB_HOSTED_CHECKOUT'
            );
        }

        /**
         * Process commweb
         * */
        function init_commwed_page() {
            $order_id = $_SESSION['order_id'];
            $order = new WC_Order($order_id);
            $customer_id = get_current_user_id();
            $successIndicator = isset($_SESSION['SuccessIndicator']) ? $_SESSION['SuccessIndicator'] : '';

            $cancel_callback = wc_get_checkout_url();//WC_Cart::get_checkout_url();
            if (isset($_REQUEST['resultIndicator']) && $_REQUEST['resultIndicator'] == $successIndicator) {
                global $woocommerce;
                $order_detail_commweb = WC_COMMWEB_HOSTED_API::getOrderCommwebDetail($_SESSION['id_for_commweb']);
                if (isset($order_detail_commweb['result']) && $order_detail_commweb['result'] == 'SUCCESS') {
                    if ($this->secure_3d == 'yes') {
                        if (isset($order_detail_commweb['transaction_3DSecure_authenticationStatus']) && $order_detail_commweb['transaction_3DSecure_authenticationStatus'] == 'AUTHENTICATION_SUCCESSFUL') {
                            $process_order = true;
                        } else {
                            $process_order = false;
                            wc_add_notice(__('Payment was unsuccessful, please try again. Card holder is not enrolled', 'woocommerce'), $notice_type = 'error');
                        }
                    } else {
                        $process_order = true;
                    }
                    if ($process_order == true) {
                        $order->add_order_note(sprintf(__('Payment is successful. Transaction receipt: %s.', 'woocommerce'), $order_detail_commweb['transaction_transaction_receipt']));
                        $order->payment_complete();
                        $woocommerce->cart->empty_cart();
                        $redirect_url = $this->get_return_url($order);
                    } else {
                        $redirect_url = $cancel_callback;
                    }
                } else {
                    $redirect_url = $cancel_callback;
                }
                wp_redirect($redirect_url);
                exit();
            } else {
                $street = get_user_meta($customer_id, 'billing_address_1', true);
                $city = get_user_meta($customer_id, 'billing_city', true);
                $billing_postcode = get_user_meta($customer_id, 'billing_postcode', true);
                $state = get_user_meta($customer_id, 'billing_state', true);
                if ($this->debug == 'yes') {
                    WC_COMMWEB_HOSTED_API::log('start process Commweb');
                }
                $image_loading = esc_url(plugins_url('images/loading.gif', __FILE__));
                if ($this->checkout_method == 'Lightbox') {
                    $payment_method = 'Checkout.showLightbox();';
                } else {
                    $payment_method = 'Checkout.showPaymentPage();';
                }
                $total = number_format($order->get_total(), 2, '.', '');
                $complete_callback = get_site_url() . '?wc-api=WC_COMMWEB_HOSTED_CHECKOUT';
                if (isset($_SESSION['CurrentOrderId']) && $_SESSION['CurrentOrderId'] == $order_id) {
                    $checkout_session_id = '';
                    $id_for_commweb = '';
                } else {
                    $id_for_commweb = $order_id . '_' . str_replace(array(".", " "), '', microtime());
                    $_SESSION['id_for_commweb'] = $id_for_commweb;
                    $checkout_session_id = WC_COMMWEB_HOSTED_API::getCheckoutSession($order_id, $id_for_commweb);
                }
                ob_start();
                ?>
                <html>
                    <head>
                        <title><?php echo $this->merchant_name; ?></title>
                        <style>
                            #loading{
                                position: fixed;
                                left: 0px;
                                top: 0px;
                                width: 100%;
                                height: 100%;
                                z-index: 9999;
                                background: url('<?php echo $image_loading; ?>') 50% 50% no-repeat;
                            }
                        </style>
                        <script src="<?php echo WC_COMMWEB_HOSTED_API::$_checkout_url_js; ?>" 
                                data-complete="completeCallback"
                                data-cancel="cancelCallback">
                        </script>

                        <script type="text/javascript">
                            completeCallback = "<?php echo $complete_callback; ?>";
                            cancelCallback = "<?php echo $cancel_callback; ?>";
                            Checkout.configure({
                                merchant: "<?php echo $this->merchant_id; ?>",
                                session: {
                                    id: "<?php echo $checkout_session_id; ?>"
                                },
                                order: {
                                    amount: "<?php echo $total; ?>",
                                    currency: "AUD",
                                    description: "Commweb Order",
                                    id: "<?php echo $id_for_commweb; ?>"
                                },
                                billing: {
                                    address: {
                                        street: "<?php echo $street; ?>",
                                        city: "<?php echo $city; ?>",
                                        postcodeZip: "<?php echo $billing_postcode; ?>",
                                        stateProvince: "<?php echo $state; ?>",
                                        country: "<?php echo ''; ?>"
                                    }
                                },
                                interaction: {
                                    merchant: {
                                        name: "<?php echo $this->merchant_name; ?>"
                                    }
                                }
                            });
                <?php echo $payment_method; ?>
                        </script>
                    </head>
                    <body>
                        <div id="loading"></div>
                    </body>
                </html>
                <?php
                $contents = ob_get_contents();
                ob_end_clean();
                echo $contents;
                die();
            }
        }

    }

    /**
     * Add the gateway to WooCommerce
     * */
    function woocommerce_add_commweb_hosted_checkout_gateway($methods) {
        $methods[] = 'WC_COMMWEB_HOSTED_CHECKOUT';
        return $methods;
    }

    add_filter('woocommerce_payment_gateways', 'woocommerce_add_commweb_hosted_checkout_gateway');
}
