<?php
/**
 * Hungnam ZohoCRM Integration Settings
 *
 */
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

if (! class_exists ( 'HN_Zoho_Settings' )) :

if (!class_exists('WC_Settings_Page')) 
	include_once dirname (HNZOHO_PATH) . '/woocommerce/includes/admin/settings/class-wc-settings-page.php';
	
	/**
	 * WC_Settings_Accounts
	 */
	class HN_Zoho_Settings extends WC_Settings_Page {
		
		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->id = 'hnzoho';
			$this->label = __ ( 'ZohoCRM integration', ZOHO_TEXT_DOMAIN );
			global $current_section;
			
			add_filter ( 'woocommerce_settings_tabs_array', array ( $this, 'add_settings_page' ), 20 );
			add_action ( 'woocommerce_settings_' . $this->id, array ( $this, 'output' ) );
			add_action ( 'woocommerce_settings_save_' . $this->id, array ( $this, 'save' ) );
		}
		
		/**
		 * Get settings array
		 *
		 * @return array
		 */
		public function get_settings() {
			
			$api_limit_note = __("This event will be incurred when our module calls Zoho api excedd maximum number of calls per day. To view called number time of your zoho account let open your Zoho CRM page > set up > Developer  Space > CRM API Usage Information",ZOHO_TEXT_DOMAIN) ;
			$api_auth_key_note  = __('The plugin will generate auth key automatically when you enter user and password of ZohoCRM', ZOHO_TEXT_DOMAIN);
			
			$options = apply_filters ( 'woocommerce_zohocrm_settings', array (

                array (
                    'title' => __ ( 'Zoho CRM Integration Options', ZOHO_TEXT_DOMAIN ),
                    'type' => 'title',
                    'id' => 'zoho_processing_options_title'
                ),

                array (
                    'title' => __ ( 'Choose Zoho Server', ZOHO_TEXT_DOMAIN ),
                    'type' => 'radio',
                    'id' => 'zoho_server_options',
                    'options' => array(
                        'zoho.com' => 'CRM.ZOHO.COM',
                        'zoho.eu' => 'CRM.ZOHO.EU',
                        'zoho.com.cn' => 'CRM.ZOHO.COM.CN'
                    ),
                    'autoload' => false
                ),

                array (
                    'title' => __ ( 'Zoho CRM Mail ID', ZOHO_TEXT_DOMAIN ),
                    'id' => 'zoho_crm_user_id',
                    'type' => 'text',
                    'autoload' => false
                ),

                array (
                    'name' => __ ( 'Zoho CRM Password', ZOHO_TEXT_DOMAIN ),
                    'id' => 'zoho_crm_user_password',
                    'type' => 'password',
                    'autoload' => false
                ),


                array (
                    'title' => __ ( 'Zoho API Auth Token', ZOHO_TEXT_DOMAIN ),
                    'desc' => __ ( $api_auth_key_note, ZOHO_TEXT_DOMAIN ),
                    'desc_tip' => true,
                    'id' => 'zoho_crm_api_auth_key',
                    'type' => 'text',
                    'autoload' => false,
                    'custom_attributes' => array(
                        'disabled' => 'disabled'
                    )
                ) ,


                array(
                    'title' => __('Sync Zoho CRM', ZOHO_TEXT_DOMAIN),
                    'id' => 'zoho_sync',
                    'type'  => 'select',
                    'options' => array(
                        'auto' => 'Auto Sync Zoho CRM',
                        'queue' => 'Add to Queue'
                    )
                ),

                array(
                    'title' => __('Duplicate', ZOHO_TEXT_DOMAIN),
                    'id' => 'zoho_duplicate',
                    'desc' => __ ( "Check the duplicate records in Zoho server, choose action if duplicate: ", ZOHO_TEXT_DOMAIN ),
                    'desc_tip' => true,
                    'type'  => 'select',
                    'custom_attributes' => array(
                        'required' => 'required'
                    ),
                    'options' => array(
                        '1' => 'Add to Sync error',
                        '2' => 'Update the duplicate record'
                    )
                ),
                array(
                    'type' => 'sectionend',
                    'id' => 'zoho_end'
                ),
			));
			
			return $options;
		}

        /**
         * Save settings.
         */
        public function save() {
            if (!class_exists('MagenestZohoConnect')){
                include HNZOHO_PATH . "classes/MagenestZohoConnect.php";
            }
            $server = get_option('zoho_server_options');
            $username = get_option('zoho_crm_user_id');
            $password = get_option('zoho_crm_user_password');

            $connect = new MagenestZohoConnect();
            if ($_POST['zoho_server_options'] != $server || $_POST['zoho_crm_user_id'] != $username || $_POST['zoho_crm_user_password'] != $password){
                $auth_key = $connect->getAuthFromZoho($_POST['zoho_crm_user_id'], $_POST['zoho_crm_user_password'], $_POST['zoho_server_options']);
                if (!$auth_key) {
                    return ;
                } else {
                    update_option('zoho_crm_api_auth_key', $auth_key);
                }
            }

            global $current_section;

            $settings = $this->get_settings();
            WC_Admin_Settings::save_fields( $settings );

            if ( $current_section ) {
                do_action( 'woocommerce_update_options_' . $this->id . '_' . $current_section );
            }
        }

	}

endif;

return new HN_Zoho_Settings ();

//return new HN_Zoho_Settings ();