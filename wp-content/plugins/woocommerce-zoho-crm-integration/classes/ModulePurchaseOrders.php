<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 23/01/2018
 * Time: 12:46
 */
if ( ! defined('ABSPATH') ) exit();
if (!class_exists('MagenestZohoConnect'))
    include HNZOHO_PATH . "classes/controler/MagenestZohoConnect.php";
if (!class_exists('ModulePurchaseOrders')) :
    class ModulePurchaseOrders extends MagenestZohoConnect {
        public function __construct(){

            if (!class_exists('ProcessOrder')){
                include HNZOHO_PATH . "classes/controler/ProcessOrder.php";
            }
            parent::__construct();
            $this->target_url = $this->base_url . 'PurchaseOrders';

            global $wpdb;
            $query = "SELECT DISTINCT `wooc_action` FROM `{$wpdb->prefix}hn_zoho_crm_field_mapping` WHERE `zoho_module` = 'PurchaseOrders'";
            $hookActions = $wpdb->get_results($query, ARRAY_A);

            foreach ($hookActions as $hookAction){
                if ($hookAction['wooc_action'] == 'zoho_server')
                    continue;
                // add queue or auto sync
                $sync = get_option('zoho_sync', true);

                if($sync == 'queue') {
                    add_action($hookAction['wooc_action'], array($this, 'PurchaseOrdersQueue'));
                } else {
                    add_action($hookAction['wooc_action'], array($this, 'ProcessPurchaseOrders'));
                }
            }

        }

        public function PurchaseOrdersQueue($id){
            $this->insert_report($id, 0, "Order Sync to PurchaseOrders", 0, __("Not yet be synchronized"));
        }
        /*
         * get xml and sync from cart order
         */
        public function ProcessPurchaseOrders($order_id){
            if (empty($order_id)) {
                new WP_Error( 'checkout-error', "Sync error! Not order!" );
                return;
            }
            $resultSend = $this->sendCurlRequest("insertRecords",$this->PrepareXml($order_id));
            // insert report
            if ($resultSend['zoho_id'] == false){
                // sync error
                $this->insert_report($order_id, 0, "Order sync to PurchaseOrders", 0, "Sync error: " . $resultSend['zoho_mess']);
            } else {
                $this->insert_report($order_id, $resultSend['zoho_id'], "Order sync to PurchaseOrders", 1, $resultSend['zoho_mess']);
            }
        }

        public function PrepareXml($orderID){
            $processOrder = new ProcessOrder();
            $data = $processOrder->GetAllDataOrder( $orderID );

            $xml = '<PurchaseOrders><row no="1">';
            $xml .= $processOrder->Mapping($data , "PurchaseOrders");
            $xml .= $processOrder->MappingProductDetail($data['items']);
            $xml.= '</row></PurchaseOrders>';

            return $xml;
        }

    }
endif;