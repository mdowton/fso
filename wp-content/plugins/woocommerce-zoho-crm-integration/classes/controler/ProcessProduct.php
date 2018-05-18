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
if (!class_exists('ProcessProduct')):
class ProcessProduct extends ProcessMapping {
    public function __construct(){
    }

    public function GetData($product_id){
        $product_object = wc_get_product( $product_id );
        if ( is_object( $product_object ) ) {
            $product_data['name'] = $product_object->get_name();
            $product_data['date_created'] = $product_object->get_date_created();
            $product_data['date_modified'] = $product_object->get_date_modified();
            $product_data['description'] = $product_object->get_description();
            $product_data['short_description'] = $product_object->get_short_description();
            $product_data['sku'] = $product_object->get_sku();
            $product_data['price'] = $product_object->get_price();
            $product_data['regular_price'] = $product_object->get_regular_price();
            $product_data['date_on_sale_from'] = $product_object->get_date_on_sale_from();
            $product_data['date_on_sale_to'] = $product_object->get_date_on_sale_to();
            $product_data['total_sales'] = $product_object->get_total_sales();
            $product_data['tax_status'] = $product_object->get_tax_status();
            $product_data['tax_class'] = $product_object->get_tax_class();
            $product_data['stock_quantity'] = $product_object->get_stock_quantity();
        }
        return $product_data;
    }
}
endif;