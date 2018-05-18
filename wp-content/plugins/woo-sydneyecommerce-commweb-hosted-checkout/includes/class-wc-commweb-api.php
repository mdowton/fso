<?php

if (!defined('ABSPATH')) {
    exit;
}

class WC_COMMWEB_HOSTED_API {

    private static $log;
    public static $_live_url = "https://paymentgateway.commbank.com.au/api/nvp/version/45";
    public static $_checkout_url_js = 'https://paymentgateway.commbank.com.au/checkout/version/45/checkout.js';

    public static function log($message) {
	if (empty(self::$log)) {
	    self::$log = new WC_Logger();
	}

	self::$log->add('commweb-hosted-checkout', $message);

	if (defined('WP_DEBUG') && WP_DEBUG) {
	    error_log($message);
	}
    }

    public static function getSetting() {
	$options = get_option('woocommerce_commweb_hosted_checkout_settings');
	return $options;
    }

    public static function getMerchantId() {
	$option = self::getSetting();
	return $option['merchant_id'];
    }

    public static function getApiPassword() {
	$option = self::getSetting();
	return $option['api_password'];
    }

    public static function getApiUsername() {
	$merchant_id = self::getMerchantId();
	return 'merchant.' . $merchant_id;
    }

    public static function getDebug() {
	$option = self::getSetting();
	return $option['debug'];
    }

    public static function getCheckoutSession($order_id, $id_for_commweb) {
	$order = new WC_Order($order_id);
	$amount = number_format($order->get_total(), 2, '.', '');
	$merchant = self::getMerchantId();
	$apiPassword = self::getApiPassword();
	$url = self::$_live_url;
	$fields = array(
	    'apiOperation' => urlencode('CREATE_CHECKOUT_SESSION'),
	    'apiPassword' => urlencode($apiPassword),
	    'apiUsername' => urlencode(self::getApiUsername()),
	    'merchant' => urlencode($merchant),
	    'order.id' => urlencode($id_for_commweb),
	    'order.amount' => urlencode($amount),
	    'order.currency' => urlencode('AUD')
	);
	$fields_string = '';
	if (self::getDebug() == 'yes') {
	    self::log('Checkout session request: ' . print_r($fields, true));
	}
	foreach ($fields as $key => $value) {
	    $fields_string .= $key . '=' . $value . '&';
	}
	rtrim($fields_string, '&');
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, count($fields));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	$error = curl_error($ch);
	curl_close($ch);
	if ($result != '') {
	    $arr_session_id = null;
	    parse_str(html_entity_decode($result), $arr_session_id);
	    if (self::getDebug() == 'yes') {
		self::log('Checkout session response: ' . print_r($arr_session_id, true));
	    }
	    if (isset($arr_session_id['result']) && $arr_session_id['result'] == 'ERROR') {
		$session_id = '';
	    } else {
		$session_id = $arr_session_id['session_id'];
		$_SESSION['SuccessIndicator'] = $arr_session_id['successIndicator'];
		$_SESSION['CurrentOrderId'] = $order_id;
	    }
	} else {
	    self::log('Error: ' . print_r($error, true));
	    $session_id = '';
	}
	return $session_id;
    }

    public static function getOrderCommwebDetail($id_for_commweb) {
	$url = self::$_live_url;
	$fields = array(
	    'apiOperation' => urlencode('RETRIEVE_ORDER'),
	    'apiPassword' => urlencode(self::getApiPassword()),
	    'apiUsername' => urlencode(self::getApiUsername()),
	    'merchant' => urlencode(self::getMerchantId()),
	    'order.id' => urlencode($id_for_commweb)
	);
	$fields_string = '';
	foreach ($fields as $key => $value) {
	    $fields_string .= $key . '=' . $value . '&';
	}
	rtrim($fields_string, '&');
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, count($fields));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = str_replace("%5B0%5D", '', $result);
	$output = null;
	parse_str(html_entity_decode($result), $output);
	if (self::getDebug() == 'yes') {
	    self::log('Order detail from commweb: ' . print_r($output, true));
	}
	return $output;
    }

}
