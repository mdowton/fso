<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 22/01/2018
 * Time: 16:20
 */
if ( ! defined( 'ABSPATH' ) ) exit;
if (!class_exists("ProcessMapping"))
    include HNZOHO_PATH . "classes/controler/ProcessMapping.php";
if (!class_exists('ProcessUser')) :
class ProcessUser extends ProcessMapping {
    public function __construct(){
    }

    public function GetAllDataUser($userID){
        $customer = new WC_Customer( $userID );

        $customer_data = array(
            'id'               => $customer->get_id(),
            'email'            => $customer->get_email(),
            'first_name'       => $customer->get_first_name(),
            'last_name'        => $customer->get_last_name(),
            'username'         => $customer->get_username(),
            'orders_count'     => $customer->get_order_count(),
            'total_spent'      => wc_format_decimal( $customer->get_total_spent(), 2 ),
            'avatar_url'       => $customer->get_avatar_url(),

            'billing_first_name' => $customer->get_billing_first_name(),
            'billing_last_name'  => $customer->get_billing_last_name(),
            'billing_company'    => $customer->get_billing_company(),
            'billing_address_1'  => $customer->get_billing_address_1(),
            'billing_address_2'  => $customer->get_billing_address_2(),
            'billing_city'       => $customer->get_billing_city(),
            'billing_state'      => $customer->get_billing_state(),
            'billing_postcode'   => $customer->get_billing_postcode(),
            'billing_country'    => $customer->get_billing_country(),
            'billing_email'      => $customer->get_billing_email(),
            'billing_phone'      => $customer->get_billing_phone(),

            'shipping_first_name' => $customer->get_shipping_first_name(),
            'shipping_last_name'  => $customer->get_shipping_last_name(),
            'shipping_company'    => $customer->get_shipping_company(),
            'shipping_address_1'  => $customer->get_shipping_address_1(),
            'shipping_address_2'  => $customer->get_shipping_address_2(),
            'shipping_city'       => $customer->get_shipping_city(),
            'shipping_state'      => $customer->get_shipping_state(),
            'shipping_postcode'   => $customer->get_shipping_postcode(),
            'shipping_country'    => $customer->get_shipping_country(),
        );

        return $customer_data;

    }

    public function GetUserDataFromCartOrder($orderID){
        $order = wc_get_order($orderID);

        $userData['billing_first_name'] = $order->get_billing_first_name();
        $userData['billing_last_name'] = $order->get_billing_last_name();
        $userData['billing_company'] = $order->get_billing_company();
        $userData['billing_address_1'] = $order->get_billing_address_1();
        $userData['billing_address_2'] = $order->get_billing_address_2();
        $userData['billing_city'] = $order->get_billing_city();
        $userData['billing_postcode'] = $order->get_billing_postcode();
        $userData['billing_country'] = $order->get_billing_country();
        $userData['billing_state'] = $order->get_billing_state();
        $userData['billing_email'] = $order->get_billing_email();
        $userData['billing_phone'] = $order->get_billing_phone();

        $userData['shipping_first_name'] = $order->get_shipping_first_name();
        $userData['shipping_last_name'] = $order->get_shipping_last_name();
        $userData['shipping_company'] = $order->get_shipping_company();
        $userData['shipping_address_1'] = $order->get_shipping_address_1();
        $userData['shipping_address_2'] = $order->get_shipping_address_2();
        $userData['shipping_city'] = $order->get_shipping_city();
        $userData['shipping_postcode'] = $order->get_shipping_postcode();
        $userData['shipping_country'] = $order->get_shipping_country();
        $userData['shipping_state'] = $order->get_shipping_state();

        return $userData;
    }
}
endif;