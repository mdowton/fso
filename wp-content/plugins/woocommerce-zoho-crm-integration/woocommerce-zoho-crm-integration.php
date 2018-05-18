<?php
/**
 * Plugin Name: WooCommerce Zoho CRM Integration
 * Plugin URI: https://store.magenest.com/woocommerce-zoho-crm-integration.html
 * Description: Export product, customer and order information to Zoho crm
 * Author: Magenest
 * Author URI: https://store.magenest.com/
 * Version: 2.2
 * Text Domain: hn_zoho_integration
 * Domain Path: /languages/
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


if ( ! defined( 'ZOHO_TEXT_DOMAIN' ) ) {
	define( 'ZOHO_TEXT_DOMAIN', 'hn_zoho_integration' );
}

// Plugin Folder Path
if ( ! defined( 'HNZOHO_PATH' ) ) {
	define( 'HNZOHO_PATH', plugin_dir_path( __FILE__ ) );
}

// Plugin Folder URL
if ( ! defined( 'HNZOHO_URL' ) ) {
	define( 'HNZOHO_URL', plugins_url( 'woocommerce-zoho-crm-integration', 'woocommerce-zoho-crm-integration.php' ) );
}

// Plugin Root File
if ( ! defined( 'HNZOHO_FILE' ) ) {
	define( 'HNZOHO_FILE', plugin_basename( __FILE__ ) );
}

class HN_Zoho_Integration {

	private static $hnzoho_instance;

	/** plugin version number */
	const VERSION = '2.2';

	public $logger;

	public function __construct() {
		global $wpdb;

		register_activation_hook( __FILE__, array( $this, 'install' ) );
		add_action( 'init', array( $this, 'load_domain' ), 1 );
		add_action( 'init', array( $this, 'start_module' ), 10 );
		add_filter( 'woocommerce_get_settings_pages', array( $this, 'add_settings_page' ), 10, 1 );
		add_action('admin_notices', array($this, 'notices'));
		if ( is_admin() ) {
			add_action( 'admin_menu', array( $this, 'admin_menu' ), 5 );
			add_action( 'admin_init', array( $this, 'sync_admin_init' ), 5 );
			$this->include_for_admin();
		}


	}

	public function start_module(){
		include HNZOHO_PATH . "classes/ModuleInvoices.php";
		new ModuleInvoices();
		include HNZOHO_PATH . "classes/ModuleSalesOrders.php";
		new ModuleSalesOrders();
		include HNZOHO_PATH . "classes/ModulePurchaseOrders.php";
		new ModulePurchaseOrders();

		include HNZOHO_PATH . "classes/ModuleLeads.php";
		new ModuleLeads();
		include HNZOHO_PATH . "classes/ModuleAccounts.php";
		new ModuleAccounts();
		include HNZOHO_PATH . "classes/ModuleContacts.php";
		new ModuleContacts();

		include HNZOHO_PATH . "classes/ModuleProducts.php";
		new ModuleProducts();
	}

	public function sync_admin_init() {
		add_action( 'admin_post_syncZohoCRM', array( $this, 'process_queue_zoho' ) );
	}

	public function process_queue_zoho() {
		// zoho sync
		if ( isset( $_POST['btnSubmit'] ) ) {
			global $wpdb;
			$tbl = $wpdb->prefix . 'hn_zoho_crm_report';
			if ( ! class_exists( 'Module' . $_POST['module'] ) ) {
				include HNZOHO_PATH . 'classes/Module' . $_POST['module'] . '.php';
			}
			$id        = isset( $_POST['zh_wooc_id'] ) ? $_POST['zh_wooc_id'] : 0;
			$report    = $wpdb->get_row( "SELECT * FROM {$tbl} WHERE `id` = '{$id}'", ARRAY_A );
			$className = 'Module' . $_POST['module'];
			$module    = new $className();

			if ( $_POST['module'] == "Products" ) {
				$productObj = wc_get_product( $report['woocommerce_id'] );
				$module->ProcessProducts( $productObj, $report['woocommerce_id'] );
			} else {
				$xml = $module->PrepareXml( $report['woocommerce_id'] );
				$resultSend = $module->sendCurlRequest( "insertRecords", $xml );
				// insert report
				if ( $resultSend['zoho_id'] == false ) {
					// sync error
					$data['status']  = 0;
					$data['zoho_id'] = 0;
					$data['mess']    = "Sync error: " . $resultSend['zoho_mess'];
					set_transient( 'zoho-sync-error', $resultSend['zoho_mess'], 5 );
				} else {
					$data['status']  = 1;
					$data['zoho_id'] = $resultSend['zoho_id'];
					$data['mess']    = $resultSend['zoho_mess'];
					set_transient( 'zoho-sync-success', true, 5 );
				}

				$wpdb->update( $tbl, $data, array( 'id' => $_POST['zh_wooc_id'] ) );
			}
			if ( $_POST['btnSubmit'] == 'Sync' ) {
				wp_redirect( admin_url( 'admin.php?page=zoho-queue' ) );
			} else {
				wp_redirect( admin_url( 'admin.php?page=zoho-sync-error' ) );
			}
		}

		// delete button
		if (isset($_POST['btnDelete']) && isset($_POST['zh_wooc_id'])){
			global $wpdb;
			$table = $wpdb->prefix . 'hn_zoho_crm_report';
			if ($wpdb->delete($table, array('id' => $_POST['zh_wooc_id']))){
				// delete successfull
				set_transient( 'zoho-delete-success', true, 5 );
				wp_redirect($_SERVER['HTTP_REFERER']);
			} else {
				// delete error
				set_transient( 'zoho-delete-error', true, 5 );
				wp_redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function notices(){
		if( get_transient( 'zoho-delete-success' ) ){
			echo '<div class="updated notice-success is-dismissible"><p>Delete successfull.</p></div>';
			/* Delete transient, only display this notice once. */
			delete_transient( 'zoho-delete-success' );
		}
		if( get_transient( 'zoho-delete-error' ) ){
			echo '<div class="updated notice-error is-dismissible"><p>Delete error.</p></div>';
			/* Delete transient, only display this notice once. */
			delete_transient( 'zoho-delete-error' );
		}

		if( get_transient( 'zoho-sync-success' ) ){
			echo '<div class="notice notice-success is-dismissible"><p>Synchronize successfull.</p></div>';
			/* Delete transient, only display this notice once. */
			delete_transient( 'zoho-sync-success' );
		}
		if( get_transient( 'zoho-sync-error' ) ){
			echo '<div class="notice notice-error is-dismissible"><p>Synchronize error: '.get_transient('zoho-sync-error').'</p></div>';
			/* Delete transient, only display this notice once. */
			delete_transient( 'zoho-sync-error' );
		}

		if( get_transient( 'zoho-success' ) ){
			echo '<div class="notice notice-success is-dismissible"><p>'. get_transient( 'zoho-success' ) .'</p></div>';
			/* Delete transient, only display this notice once. */
			delete_transient( 'zoho-success' );
		}
		if( get_transient( 'zoho-error' ) ){
			echo '<div class="notice notice-error is-dismissible"><p>'. get_transient('zoho-sync-error') .'</p></div>';
			/* Delete transient, only display this notice once. */
			delete_transient( 'zoho-error' );
		}
	}

	/**
	 * Load the Text Domain for i18n
	 *
	 * @return void
	 * @access public
	 */
	function load_domain() {
		load_plugin_textdomain( ZOHO_TEXT_DOMAIN, false, 'woocommerce-zoho-crm-integration/languages/' );
	}

	/**
	 * Queue up the JavaScript file for the admin page, only on our admin page
	 *
	 * @param string $hook
	 *   The current page in the admin
	 *
	 * @return void
	 * @access public
	 */
	public function load_custom_scripts( $hook ) {
		global $woocommerce;

		if ( is_object( $woocommerce ) ) {
			wp_enqueue_style( 'woocommerce_admin_styles', $woocommerce->plugin_url() . '/assets/css/admin.css' );
		}
		wp_enqueue_style( 'datatables', HNZOHO_URL . '/js/datatables/css/jquery.dataTables.min.css' );

		$jquery_version = isset ( $wp_scripts->registered ['jquery-ui-core']->ver ) ? $wp_scripts->registered ['jquery-ui-core']->ver : '1.9.2';

		wp_enqueue_script( 'woocommerce_writepanel' );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'datatables-for-fue', HNZOHO_URL . '/js/datatables/js/jquery.dataTables.min.js' );

		wp_enqueue_style( 'jquery-ui' );

		wp_enqueue_style( 'jquery-ui-style' );
		wp_enqueue_style( 'jquery-ui-core' );
		wp_enqueue_style( 'jquery-ui-accordion' );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-datepicker' );

		wp_enqueue_script( 'jquery-ui-accordion' );
	}

	/**
	 * Run every time.  Used since the activation hook is not executed when updating a plugin
	 *
	 * @since 0.1
	 */
	public function install() {
		global $wpdb;
		// get current version to check for upgrade
		$installed_version = get_option( 'hn_zoho_integration_version' );

		// install
		if ( $installed_version == false ) {

			// install default settings, terms, etc

			if ( ! function_exists( 'dbDelta' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			}
			$prefix = $wpdb->prefix;

			$query = "CREATE TABLE IF NOT EXISTS `{$prefix}hn_zoho_crm_field_mapping` (
			`id` int(11) unsigned NOT NULL auto_increment,
			`wooc_field` VARCHAR (255)  NOT NULL,
			`zoho_field` VARCHAR (255)  NOT NULL,
			`zoho_module` VARCHAR (255) NOT NULL,
			`wooc_action` VARCHAR (255) NOT NULL,
			`enable` tinyint (4) NOT NULL,
			CONSTRAINT `field_mapping` PRIMARY KEY (`id`, `zoho_field`, `zoho_module`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			$sa = dbDelta( $query );

			$query = "CREATE TABLE IF NOT EXISTS `{$prefix}hn_zoho_crm_log` (
			`id` int(11) unsigned NOT NULL auto_increment,
			`mess` text NULL,
			`type` varchar (255) NULL,
			`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;";
			dbDelta( $query );

			$query = "CREATE TABLE IF NOT EXISTS `{$prefix}hn_zoho_crm_report` (
			`id` int(11) unsigned NOT NULL auto_increment,
			`woocommerce_id` varchar (255) NULL,
			`zoho_id` varchar (255) NULL,
			`type` varchar (255) NULL,
			`status` BOOLEAN NOT NULL,
			`mess` VARCHAR (255),
			`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;";
			dbDelta( $query );

			update_option( 'hn_zoho_integration_version', self::VERSION );

		}

		// upgrade if installed version lower than plugin version
		if ( - 1 === version_compare( $installed_version, self::VERSION ) && $installed_version != false ) {
			$this->upgrade();
		}
	}


	/**
	 * Perform any version-related changes
	 *
	 * @since 1.0
	 *
	 * @param int $installed_version the currently installed version of the plugin
	 */
	public function upgrade() {
		global $wpdb;

		$prefix = $wpdb->prefix;
		// from version 2.1
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_field_mapping` CHANGE `op` `wooc_field` VARCHAR (255);";
		$wpdb->query( $query );
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_field_mapping` CHANGE `value` `zoho_field` VARCHAR (255);";
		$wpdb->query( $query );
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_field_mapping` ADD `zoho_module` VARCHAR(255) NOT NULL AFTER `zoho_field`;";
		$wpdb->query( $query );
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_field_mapping` ADD `wooc_action` VARCHAR(255) NOT NULL AFTER `zoho_module`;";
		$wpdb->query( $query );
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_field_mapping` DROP PRIMARY KEY, ADD PRIMARY KEY (`zoho_field`,`zoho_module`)";
		$wpdb->query( $query );
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_report` ADD `status` BOOLEAN NOT NULL AFTER `type`";
		$wpdb->query( $query );
		$query = "ALTER TABLE `{$prefix}hn_zoho_crm_report` ADD `mess` VARCHAR (255) NOT NULL AFTER `status`";
		$wpdb->query( $query );

		// update the installed version option
		update_option( 'hn_zoho_integration_version', self::VERSION );
	}

	/**
	 * add menu items
	 */
	public function admin_menu() {
		add_menu_page( __( 'Zoho CRM Integration' ), __( 'Zoho CRM Integration' ), 'manage_woocommerce', 'zoho-crm-integration', array(
			$this,
			'zoho_crm_integration'
		) );

		add_submenu_page( 'zoho-crm-integration', __( 'Fields Mapping Settings', 'woocommerce' ), __( 'Fields Mapping Settings', 'woocommerce' ), 'manage_woocommerce', 'zoho-field-mapping', array(
			$this,
			'zoho_field_mapping'
		) );

		add_submenu_page( 'zoho-crm-integration', __( 'Report', 'woocommerce' ), __( 'Report', 'woocommerce' ), 'manage_woocommerce', 'zoho-report', array(
			$this,
			'zoho_report'
		) );

		add_submenu_page( 'zoho-crm-integration', __( 'Manual sync', 'woocommerce' ), __( 'Manual sync', 'woocommerce' ), 'manage_woocommerce', 'zoho-queue', array(
			$this,
			'zoho_queue'
		) );

		add_submenu_page( 'zoho-crm-integration', __( 'Error Sync', 'woocommerce' ), __( 'Error Sync', 'woocommerce' ), 'manage_woocommerce', 'zoho-sync-error', array(
			$this,
			'zoho_error'
		) );
	}

	public function zoho_crm_integration() {
		wp_redirect( admin_url( 'admin.php?page=wc-settings&tab=hnzoho' ) );
	}

	/**
	 * Page that allow admin setting mapping fields between Woocommerce and ZohoCRM
	 */
	public function zoho_field_mapping() {

		$fields_mapping = include HNZOHO_PATH . 'admin/zoho-mapping-fields-setting.php';
		$fields_mapping->output();
	}

	public function zoho_report() {
		$report = include HNZOHO_PATH . 'admin/zoho-report.php';
		$report->output();
	}

	public function zoho_queue() {
		if ( ! class_exists( 'ZohoQueue' ) ) {
			include HNZOHO_PATH . 'templates/ZohoQueue.php';
		}
		$report = new ZohoQueue();
		$report->output();
	}

	public function zoho_error() {
		if ( ! class_exists( 'ZohoSyncError' ) ) {
			$report = include HNZOHO_PATH . 'templates/ZohoSyncError.php';
		}
		$report->output();
	}

	public function add_settings_page() {
		$settings [] = include( HNZOHO_PATH . 'admin/zoho-settings.php' );

		return apply_filters( 'hnzoho_setting_classes', $settings );
	}

	/**
	 * include necessary files for backend function
	 */
	public function include_for_admin() {
		add_action( 'admin_enqueue_scripts', array( $this, 'load_custom_scripts' ), 99 );
		require_once plugin_dir_path( __FILE__ ) . 'admin/zoho-mapping-fields-setting.php';
		require_once plugin_dir_path( __FILE__ ) . 'admin/zoho-report.php';
	}

	/**
	 * Get the singleton instance of our plugin
	 *
	 * @return class The Instance
	 * @access public
	 */
	public static function getInstance() {
		if ( ! self::$hnzoho_instance ) {
			self::$hnzoho_instance = new HN_Zoho_Integration();
		}

		return self::$hnzoho_instance;
	}
}

$hnzoho_loaded = HN_Zoho_Integration::getInstance();
