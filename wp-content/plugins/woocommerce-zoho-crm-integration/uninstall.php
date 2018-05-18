<?php
//check that file was called from wordpress admin
if (!defined('WP_UNINSTALL_PLUGIN'))
	exit();

global $wpdb;
//delete options
delete_option('hn_zoho_integration_version');
//delete tables
$wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "hn_zoho_crm_field_mapping");
$wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "hn_zoho_crm_log");
$wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "hn_zoho_crm_report");

?>