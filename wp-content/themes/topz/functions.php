<?php
if ( !defined('TOPZ_THEME') ){
	define( 'TOPZ_THEME', 'topz_theme' );
}
/**
 * Variables
 */
require_once ( get_template_directory().'/lib/plugin-requirement.php' );			// Custom functions
require_once ( get_template_directory().'/lib/defines.php' );
require_once ( get_template_directory().'/lib/mobile-layout.php' );
require_once ( get_template_directory().'/lib/classes.php' );		// Utility functions
require_once ( get_template_directory().'/lib/utils.php' );			// Utility functions
require_once ( get_template_directory().'/lib/init.php' );			// Initial theme setup and constants
require_once ( get_template_directory().'/lib/cleanup.php' );		// Cleanup
require_once ( get_template_directory().'/lib/nav.php' );			// Custom nav modifications
require_once ( get_template_directory().'/lib/widgets.php' );		// Sidebars and widgets
require_once ( get_template_directory().'/lib/scripts.php' );		// Scripts and stylesheets
require_once ( get_template_directory().'/lib/metabox.php' );	// Custom functions
require_once (get_template_directory().'/lib/import/sw-import.php' );
if( class_exists( 'WooCommerce' ) ){
	require_once ( get_template_directory().'/lib/plugins/currency-converter/currency-converter.php' ); // currency converter
	require_once ( get_template_directory().'/lib/woocommerce-hook.php' );	// Utility functions
	
	if( class_exists( 'WC_Vendors' ) ) :
		require_once ( get_template_directory().'/lib/wc-vendor-hook.php' );			/** WC Vendor **/
	endif;
	
	if( class_exists( 'WeDevs_Dokan' ) ) :
		require_once ( get_template_directory().'/lib/dokan-vendor-hook.php' );			/** Dokan Vendor **/
	endif;
}function topz_template_load( $template ){ 
	if( !is_user_logged_in() && topz_options()->getCpanelValue('maintaince_enable') ){
		$template = get_template_part( 'maintaince' );
	}else{
		if( class_exists( 'WooCommerce' ) ){
			if ( is_tax( 'product_cat' ) || is_post_type_archive( 'product' ) ) {				
				$template = get_template_part( 'archive', 'product' );
			}			
		}
	}
	return $template;
}
add_filter( 'template_include', 'topz_template_load' );