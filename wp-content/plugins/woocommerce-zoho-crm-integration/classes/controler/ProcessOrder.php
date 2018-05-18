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

if (!class_exists('ProcessOrder')) :
class ProcessOrder extends ProcessMapping {

    public function __construct(){

    }

    /*
     * return all field may have
     * module Invoice, SaleOrder
     */
    public function GetAllDataOrder( $orderID ){
        $orderData = array();
	    $order = new WC_Order($orderID);
        $items = $order->get_items();
        $orderData['order_id'] = '#' . $order->get_id();
        $orderData['status'] = $order->get_status();
        $orderData['date_created'] = $order->get_date_created();
        $orderData['currency'] = $order->get_currency();
        $orderData['discount_total'] = $order->get_discount_total();
        $orderData['discount_tax'] = $order->get_discount_tax();
        $orderData['shipping_total'] = $order->get_shipping_total();
        $orderData['shipping_tax'] = $order->get_shipping_tax();
        $orderData['cart_tax'] = $order->get_cart_tax();
        $orderData['total'] = $order->get_total();
        $orderData['total_tax'] = $order->get_total_tax();

        $orderData['billing_first_name'] = $order->get_billing_first_name();
        $orderData['billing_last_name'] = $order->get_billing_last_name();
        $orderData['billing_company'] = $order->get_billing_company();
        $orderData['billing_address_1'] = $order->get_billing_address_1();
        $orderData['billing_address_2'] = $order->get_billing_address_2();
        $orderData['billing_city'] = $order->get_billing_city();
        $orderData['billing_postcode'] = $order->get_billing_postcode();
        $orderData['billing_country'] = $order->get_billing_country();
        $orderData['billing_state'] = $order->get_billing_state();
        $orderData['billing_email'] = $order->get_billing_email();
        $orderData['billing_phone'] = $order->get_billing_phone();

        $orderData['shipping_first_name'] = $order->get_shipping_first_name();
        $orderData['shipping_last_name'] = $order->get_shipping_last_name();
        $orderData['shipping_company'] = $order->get_shipping_company();
        $orderData['shipping_address_1'] = $order->get_shipping_address_1();
        $orderData['shipping_address_2'] = $order->get_shipping_address_2();
        $orderData['shipping_city'] = $order->get_shipping_city();
        $orderData['shipping_postcode'] = $order->get_shipping_postcode();
        $orderData['shipping_country'] = $order->get_shipping_country();
        $orderData['shipping_state'] = $order->get_shipping_state();

        $orderData['note'] = $order->get_customer_note();

        foreach ($items as $item_id => $item){
            $itemData['product_id'] = $item->get_product_id();
//            $itemData['product_code'] = $values->get_c;
            $itemData['product_name'] = $item->get_name();
            $itemData['price'] = $item->get_subtotal();
            $itemData['qty'] = $item->get_quantity();
            $itemData['line_total'] = $item->get_total();

            // get booking items data
			$itemData['booking_info'] .= self::GetBookingOrderData($item_id);
            $items[$item_id] = $itemData;
        }
        $orderData['items'] = $items;
        return $orderData;
    }

    public function GetBookingOrderData($item_id){
    	if (!class_exists('WC_Booking_Data_Store')){
    		return false;
	    }
	    $booking_ids = WC_Booking_Data_Store::get_booking_ids_from_order_item_id( $item_id );
	    $booking_info = "%0D"; // enter character
	    $person = '';


	    foreach ($booking_ids as $booking_id){
	    	$booking = new WC_Booking($booking_id);
		    $product  = $booking->get_product();

		    if ( strtotime( 'midnight', $booking->get_start() ) === strtotime( 'midnight', $booking->get_end() ) ) {
			    $booking_date = sprintf( '%1$s', $booking->get_start_date() );
		    } else {
			    $booking_date = sprintf( '%1$s / %2$s', $booking->get_start_date(), $booking->get_end_date() );
		    }

		    if ( $product->has_persons() ) {
			    if ( $product->has_person_types() ) {
				    $person_types  = $product->get_person_types();
				    $person_counts = $booking->get_person_counts();

				    if ( ! empty( $person_types ) && is_array( $person_types ) ) {
					    foreach ( $person_types as $person_type ) {

						    if ( empty( $person_counts[ $person_type->get_id() ] ) ) {
							    continue;
						    }

						    $person .= sprintf( '%s: %d', $person_type->get_name(), $person_counts[ $person_type->get_id() ] );

					    }
				    }
			    } else {
			    	$person .= sprintf( __( '%d Persons', 'woocommerce-bookings' ), array_sum( $booking->get_person_counts() ) );
			    }
		    }

		    $booking_info .= '%0D Booking ID: #' . $booking_id;
		    $booking_info .= '%0D Product: ' . $product->get_name();
		    $booking_info .= '%0D Booking date: ' . $booking_date;
		    $booking_info .= '%0D Booking status: ' . $booking->get_status();
		    $booking_info .= '%0D Person(s): ' . $person;

	    }


	    return $booking_info;
    }


    /*
     * product is bought in the cart order
     */
    public function MappingProductDetail($products){
        $postXml = '<FL val="Product Details">';
        $count = 0;
        foreach( $products as $param ) {
            $count ++;
            // check product exitstance
            if( isset($param['product_code']) ) {
                $queryCheck = "(Product Name:".$param['product_name'].")AND(Product Code:".$param['product_code'].")";
            } else {
                $queryCheck = "(Product Name:".$param['product_name'].")";
            }
            $productID = $this->CheckDuplicate($queryCheck,"Products");

            if ( $productID == false ){
                // insert product to zoho
                if (!class_exists('ModuleProducts')){
                    include HNZOHO_PATH . 'classes/ModuleProducts.php';
//                    $moduleProduct = new ModuleProducts();
                }
                $moduleProduct = new ModuleProducts();
                $product_object = wc_get_product($param['product_id']);
                $resultSend = $moduleProduct->ProcessProducts($product_object,$param['product_id']);

                foreach ($resultSend as $value){
                    foreach ($value as $k => $v){
                        $prd = wc_get_product($k);
                        $a = array($prd->get_id(), $prd->get_parent_id(), $prd->get_name());

                        if ($prd->get_id() == $param['product_id']){
                            $productID = $v;
                            break;
                        }
                        if ($prd->get_parent_id() == $param['product_id'] && $prd->get_name() == $param['product_name']){
                            $productID = $v;
                            break;
                        }
                    }
                }
//                return $this->MappingProductDetail($products);
            }

            $postXml .= '<product no="' . $count . '">
                <FL val="Product Id">' . $productID . '</FL>
                <FL val="Product Name"><![CDATA[' . $param['product_name'] . ']]></FL>
                <FL val="Product Description"><![CDATA[' . $param['booking_info'] . ']]></FL>
                <FL val="Unit Price">' . $param['price'] . '</FL>
                <FL val="List Price">' . $param['price'] . '</FL>
                <FL val="Quantity">' . $param['qty'] . '</FL>
                <FL val="Total">' . $param['line_total'] . '</FL>
            </product>';
        }
        $postXml .= '</FL>';
        return $postXml;
    }

}
endif;