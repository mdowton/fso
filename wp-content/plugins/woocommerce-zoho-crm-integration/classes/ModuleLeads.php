<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 26/01/2018
 * Time: 11:27
 */
if (!defined('ABSPATH')) exit();
if (!class_exists('MagenestZohoConnect'))
    include HNZOHO_PATH . "classes/controler/MagenestZohoConnect.php";
if (!class_exists('ModuleLeads')) :
class ModuleLeads extends MagenestZohoConnect {
    public function __construct(){
        if (!class_exists('ProcessUser'))
            include HNZOHO_PATH . 'classes/controler/ProcessUser.php';
        parent::__construct();
        $this->target_url = $this->base_url . 'Leads';
        global $wpdb;
        $query = "SELECT DISTINCT `wooc_action` FROM `{$wpdb->prefix}hn_zoho_crm_field_mapping` WHERE `zoho_module` = 'Leads'";
        $hookActions = $wpdb->get_results($query, ARRAY_A);

        foreach ($hookActions as $hookAction){
            if ($hookAction['wooc_action'] == 'zoho_server')
                continue;
            // add queue or auto sync
            $sync = get_option('zoho_sync', true);

            if($sync == 'queue') {
                add_action($hookAction['wooc_action'], array($this, 'LeadsQueue'));
            } else {
                add_action($hookAction['wooc_action'], array($this, 'ProcessLeads'));
            }
        }
    }

    /*
     * get xml and sync from cart order or register user
     */
    public function ProcessLeads($id){
        $resultSend = $this->sendCurlRequest("insertRecords",$this->PrepareXml($id));
        // insert report
        if ($resultSend['zoho_id'] == false){
            // sync error
            $this->insert_report($id, 0, "Sync to Leads", 0, "Sync error: " . $resultSend['zoho_mess']);
        } else {
            $this->insert_report($id, $resultSend['zoho_id'], "Sync to Leads", 1, $resultSend['zoho_mess']);
        }
    }

    public function LeadsQueue($id){
        $this->insert_report($id, 0, "Order Sync to Leads", 0, __("Not yet be synchronized"));
    }

    public function PrepareXml($id){
        $processUser = new ProcessUser();
        if ( $id instanceof WP_User ) {
            // get data from WP_User
            $data = $processUser->GetAllDataUser( $id );
        } else {
            // get data from cart order
            $data = $processUser->GetUserDataFromCartOrder($id);
        }

        $xml = '<Leads><row no="1">';
        $xml .= $processUser->Mapping($data , "Leads");
        $xml.= '</row></Leads>';

        return $xml;
    }

}
endif;