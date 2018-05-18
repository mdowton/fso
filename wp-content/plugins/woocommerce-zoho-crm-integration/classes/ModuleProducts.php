<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 06/02/2018
 * Time: 16:37
 */
if (!defined('ABSPATH')) exit();
if (!class_exists('MagenestZohoConnect'))
    include HNZOHO_PATH . "classes/controler/MagenestZohoConnect.php";
if (!class_exists('ModuleProducts')) :
class ModuleProducts extends MagenestZohoConnect {
    public function __construct(){
        if (!class_exists('ProcessProduct'))
            include HNZOHO_PATH . 'classes/controler/ProcessProduct.php';
        parent::__construct();
        $this->target_url = $this->base_url . 'Products';
        global $wpdb;
        $query = "SELECT DISTINCT `wooc_action` FROM `{$wpdb->prefix}hn_zoho_crm_field_mapping` WHERE `zoho_module` = 'Products'";
        $hookActions = $wpdb->get_results($query, ARRAY_A);

        foreach ($hookActions as $hookAction){
            if ($hookAction['wooc_action'] == 'zoho_server')
                continue;
            // add queue or auto sync
            $sync = get_option('zoho_sync', true);

            if($sync == 'queue') {
                add_action($hookAction['wooc_action'], array($this, 'ProductsQueue'), 10, 3);
            } else {
                add_action($hookAction['wooc_action'], array($this, 'CheckStatusProducts'), 10, 3);
            }
        }
    }

    public function ProcessProducts($product_object, $productID){
        if (!is_object($product_object)) {
	        set_transient( 'zoho-sync-error', "Object not found!", 5 );
	        return;
        }

        if ($product_object->is_type('variable')){
            // create pricebooks
            $resultSend = $this->sendCurlRequest("insertRecords",$this->PrepareXmlPriceBook($productID), '', "PriceBooks");
            // insert report
            if ($resultSend['zoho_id'] == false){
                // sync error
                $this->insert_report($productID, 0, "Product variation: Sync to Products", 0, "Sync error: " . $resultSend['zoho_mess']);
	            set_transient( 'zoho-sync-error', $resultSend['zoho_mess'], 5 );
	            return $resultSend;
            } else {
                $this->insert_report($productID, $resultSend['zoho_id'], "Product variation: Sync to Products", 1, $resultSend['zoho_mess']);
                $relatedData = array('id' => $resultSend['zoho_id'], 'relatedModule' => 'Products');
            }
            // add variation to product and related to Pricebooks
            $variations = $product_object->get_available_variations();
            foreach ($variations as $variation){
                $resultSend = $this->sendCurlRequest("insertRecords",$this->PrepareXml($variation['variation_id']));
                // insert report
                if ($resultSend['zoho_id'] == false){
                    // sync error

                    $this->insert_report($productID, 0, "Product variation: Sync to Products", 0, "Sync error: " . $resultSend['zoho_mess']);
	                set_transient( 'zoho-sync-error', $resultSend['zoho_mess'], 5 );
                } else {
                    $this->insert_report($productID, $resultSend['zoho_id'], "Product variation: Sync to Products", 1, $resultSend['zoho_mess']);
	                $returnResult[] = array($variation['variation_id'] => $resultSend['zoho_id']);
	                set_transient( 'zoho-sync-success', $resultSend['zoho_mess'], 5 );
	                // relate product
                    $xmlData = '<Products><row no="1"><FL val="PRODUCTID">' .$resultSend['zoho_id']. '</FL><FL val="list_price">' .$variation['variation_price']. '</FL></row></Products>';
                    $resultSend = $this->sendCurlRequest('updateRelatedRecords', $xmlData, $relatedData, "PriceBooks");

                }
            }
            return $returnResult;
        } elseif ($product_object->is_type('simple') || $product_object->is_type('booking')){
            // product simple
            $resultSend = $this->sendCurlRequest("insertRecords",$this->PrepareXml($productID));
            // insert report
            if ($resultSend['zoho_id'] == false){
                // sync error
                $this->insert_report($productID, 0, "Product: Sync to Products", 0, "Sync error: " . $resultSend['zoho_mess']);
	            set_transient( 'zoho-sync-error', $resultSend['zoho_mess'], 5 );
            } else {
                $this->insert_report($productID, $resultSend['zoho_id'], "Product: Sync to Products", 1, $resultSend['zoho_mess']);
	            set_transient( 'zoho-sync-success', true, 5 );
	            return array(array($productID => $resultSend['zoho_id']));
            }
        }

    }

    public function CheckStatusProducts($post_id, $post, $update){

        if ($_POST['publish'] != "Publish" || $post->post_type != 'product') {
            return;
        }

        if (!$product_object = wc_get_product( $post )) {
            return;
        }
        $this->ProcessProducts($product_object ,$post_id);
    }

    public function ProductsQueue($post_id, $post, $update){
        $this->insert_report($post_id, 0, "New product Sync to Products", 0, __("Not yet be synchronized"));
    }

    public function PrepareXml($id){
        $processProduct = new ProcessProduct();
        $data = $processProduct->GetData($id);
        $xml = '<Products><row no="1">';
        $xml .= $processProduct->Mapping($data , "Products");
        $xml.= '</row></Products>';
        return $xml;
    }

    public function PrepareXmlPriceBook($id){
        $processProduct = new ProcessProduct();
        $data = $processProduct->GetData($id);
        $xml = '<PriceBooks><row no="1">';
        $xml .= '<FL val="Price Book Name">'.$data['name'].'</FL>';
//        $xml .= '<FL val="Pricing Details">';
//        $xml .= '<row no=""';
//        $xml .= '</FL>';
        $xml.= '</row></PriceBooks>';
        return $xml;
    }


}
endif;