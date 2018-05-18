<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'wp_enqueue_scripts','enqueue_styles' );

		//includes scripts and styles in the frontend
     function enqueue_styles() {
			wp_enqueue_style( 'multistep-product', plugins_url('/frontend/css/multistep-product.css', WMSO_PLUGIN_ROOT_PHP), false, '0.19.0' );
			wp_enqueue_style( 'jquerysctipttop', plugins_url('/frontend/css/jquerysctipttop.css', WMSO_PLUGIN_ROOT_PHP), false, '0.19.0' );
			wp_enqueue_style( 'jquery-ui-css', plugins_url('/frontend/css/jquery-ui.css', WMSO_PLUGIN_ROOT_PHP), false, '0.19.0' );
			
			wp_enqueue_script( 'jquery-min', plugins_url('/frontend/js/jquery-min.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			//wp_enqueue_script( 'jquery-ui', plugins_url('/frontend/js/jquery-ui.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			wp_enqueue_script( 'easing', plugins_url('/frontend/js/jquery.easing.min.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			wp_enqueue_script( 'multisteps', plugins_url('/frontend/js/multisteps.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			wp_enqueue_script( 'frontend-custom', plugins_url('/frontend/js/frontend-custom.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			wp_enqueue_script( 'price-calculate', plugins_url('/frontend/js/price-calculate.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			wp_enqueue_script( 'product-validations', plugins_url('/frontend/js/product-validations.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			wp_enqueue_script( 'canvas-line', plugins_url('/frontend/js/canvas-line.js', WMSO_PLUGIN_ROOT_PHP), array('jquery'));
			
			
			
		}

?>