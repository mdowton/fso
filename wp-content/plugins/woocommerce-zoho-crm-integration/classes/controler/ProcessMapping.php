<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 23/01/2018
 * Time: 13:21
 */
if (! defined('ABSPATH')) exit();
if (!class_exists('ProcessMapping')) :
class ProcessMapping{
    /*
     * return xml data
     */
    public function Mapping( $data, $module ){
        global $wpdb;
        $query = "SELECT * FROM `{$wpdb->prefix}hn_zoho_crm_field_mapping` WHERE `zoho_module` = '{$module}'";
        $fields = $wpdb->get_results($query,ARRAY_A);
        $dataField = '';
        foreach ($fields as $field){

            // if field['wooc_action'] empty -> wooc_field is data in the zoho server which is retrieved
            if ($field['wooc_action'] == 'zoho_server'){
                $dataField .= '<FL val="' .$field['zoho_field']. '">' . $field['wooc_field'] . '</FL>';
                continue;
            }
            $dataField .= '<FL val="' .$field['zoho_field']. '"><![CDATA[' . $data[$field['wooc_field']] . ']]></FL>';
        }

        return $dataField;
    }

    public function CheckDuplicate($query, $module){
    	if (!class_exists('MagenestZohoConnect')){
    		include 'MagenestZohoConnect.php';
	    }
	    $query = MagenestZohoConnect::replaceSpecialCharacter($query);
        $url =  "https://crm." . get_option('zoho_server_options') ."/crm/private/xml/" .$module. "/searchRecords";
        $param = "authtoken=" .get_option('zoho_crm_api_auth_key'). "&scope=crmapi&criteria=(".$query.")";

        $ch = curl_init ();
        /* set url to send post request */
        curl_setopt ( $ch, CURLOPT_URL, $url );
        /* allow redirects */
        curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION, 1 );
        /* return a response into a variable */
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        /* times out after 300s */
        curl_setopt ( $ch, CURLOPT_TIMEOUT, 300 );
        /* set POST method */
        curl_setopt ( $ch, CURLOPT_POST, true );
        /* add POST fields parameters */
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $param );
        $result = curl_exec($ch);
        curl_close ( $ch );

        //convert result fomart XML from Zoho to array
        $p = xml_parser_create();
        xml_parse_into_struct($p, $result, $vals, $index);
        xml_parser_free($p);
        if($vals[1]['tag']=='RESULT'){
            $obj_id = $vals[4]['value'];
            return $obj_id;
        } else {
            // obj not exits
            return false;
        }
    }

}
endif;