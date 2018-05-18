<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


add_action( 'admin_enqueue_scripts', 'enqueue_styles_scripts' ) ;
/**
 * Proper way to enqueue scripts and styles.
 */
function enqueue_styles_scripts() {
	wp_enqueue_style( 'multistep-product', plugins_url('/admin/css/admin.css', WMSO_PLUGIN_ROOT_PHP), false, '0.19.0' );

	wp_enqueue_script( 'easing', plugins_url('/admin/js/admin.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));

}