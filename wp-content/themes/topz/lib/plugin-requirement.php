<?php
/***** Active Plugin ********/
require_once( get_template_directory().'/lib/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'topz_register_required_plugins' );
function topz_register_required_plugins() {
    $plugins = array(
      array(
        'name'               => esc_html__( 'WooCommerce', 'topz' ), 
        'slug'               => 'woocommerce', 
        'required'           => true, 
        'version'			 => '3.1.1'
        ),

      array(
        'name'               => esc_html__( 'Revslider', 'topz' ), 
        'slug'               => 'revslider', 
        'source'             => esc_url( 'http://demo.wpthemego.com/themes/sw_topz/plugins/revslider.zip' ), 
        'required'           => true, 
        'version'            => '5.4.5.1'
        ),

      array(
        'name'     			 => esc_html__( 'SW Core', 'topz' ),
        'slug'      		 => 'sw_core',
        'source'         	 => esc_url( 'http://demo.wpthemego.com/themes/sw_topz/plugins/sw_core.zip' ), 
        'required'  		 => true,   
        'version'			 => '1.2.3'
        ),

      array(
        'name'     			 => esc_html__( 'SW WooCommerce', 'topz' ),
        'slug'      		 => 'sw_woocommerce',
        'source'         	 => esc_url( 'http://demo.wpthemego.com/themes/sw_topz/plugins/sw_woocommerce.zip' ), 
        'required'  		 => true,
        'version'			 => '1.4.2'
        ),

      array(
        'name'               => esc_html__( 'Visual Composer', 'topz' ), 
        'slug'               => 'js_composer', 
        'source'             => esc_url( 'http://demo.wpthemego.com/themes/sw_topz/plugins/js_composer.zip' ), 
        'required'           => true, 
        'version'            => '5.2'
        ), 		
      array(
        'name'               => esc_html__( 'One Click Demo Import', 'topz' ), 
        'slug'               => 'one-click-demo-import', 
        'source'             => esc_url( 'http://demo.wpthemego.com/themes/sw_topz/plugins/one-click-demo-import.zip' ), 
        'required'           => true, 
        ),
      array(
        'name'     			 => esc_html__( 'WordPress Importer', 'topz' ),
        'slug'      		 => 'wordpress-importer',
        'required' 			 => true,
        ), 
      array(
        'name'      		 => esc_html__( 'MailChimp for WordPress Lite', 'topz' ),
        'slug'     			 => 'mailchimp-for-wp',
        'required' 			 => false,
        ),
      array(
        'name'      		 => esc_html__( 'Contact Form 7', 'topz' ),
        'slug'     			 => 'contact-form-7',
        'required' 			 => false,
        ),
      array(
        'name'      		 => esc_html__( 'Image Widget', 'topz' ),
        'slug'     			 => 'image-widget',
        'required' 			 => false,
        ),
      array(
        'name'      		 => esc_html__( 'YITH Woocommerce Compare', 'topz' ),
        'slug'      		 => 'yith-woocommerce-compare',
        'required'			 => false
        ),
      array(
        'name'     			 => esc_html__( 'YITH Woocommerce Wishlist', 'topz' ),
        'slug'      		 => 'yith-woocommerce-wishlist',
        'required' 			 => false
        ), 
      array(
        'name'     			 => esc_html__( 'WordPress Seo', 'topz' ),
        'slug'      		 => 'wordpress-seo',
        'required'  		 => false,
        ),

      );
if( topz_options()->getCpanelValue('developer_mode') ): 
   $plugins[] = array(
    'name'               => esc_html__( 'Less Compile', 'topz' ), 
    'slug'               => 'lessphp', 
    'source'             => esc_url( 'http://demo.wpthemego.com/themes/sw_topz/plugins/lessphp.zip' ), 
    'required'           => true, 
    );
endif;


$config = array();

tgmpa( $plugins, $config );

}
add_action( 'vc_before_init', 'topz_vcSetAsTheme' );
function topz_vcSetAsTheme() {
    vc_set_as_theme();
}