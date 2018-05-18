<?php
/**
 * topz initial setup and constants
 */
function topz_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'topz', get_template_directory() . '/lang' );

	// Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
	register_nav_menus(array(
		'primary_menu' => esc_html__('Primary Menu', 'topz'),
		'vertical_menu' => esc_html__( 'Vertical Menu', 'topz' ),
	));
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	if( topz_options()->getCpanelValue( 'product_zoom' ) ) :
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-slider' );
	endif;
	
	add_image_size( 'topz_blog-responsive1', 480, 480, true );
	add_image_size( 'topz_blog-responsive2', 470, 520, true );
	add_image_size( 'topz_blog-responsive3', 585, 450, true );
	add_image_size( 'topz_shop-image', 600, 700, true );
	add_image_size( 'topz_shop-image2', 600, 600, true );
	add_image_size( 'topz_grid_thumb', 570, 350, true );
	add_image_size( 'topz_detail_thumb', 870, 370, true );
	
	add_theme_support( "title-tag" );
	
	add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
	
	// Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
	add_theme_support('post-thumbnails');

	// Add post formats (http://codex.wordpress.org/Post_Formats)
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	
	// Custom image header
	$topz_header_arr = array(
		'default-image' => get_template_directory_uri().'/assets/img/logo-default.png',
		'uploads'       => true
	);
	add_theme_support( 'custom-header', $topz_header_arr );
	
	// Custom Background 
	$topz_bgarr = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);
	add_theme_support( 'custom-background', $topz_bgarr );
	
	// Tell the TinyMCE editor to use a custom stylesheet
	add_editor_style( 'css/editor-style.css' );
	
	new Topz_Menu();
}
add_action('after_setup_theme', 'topz_setup');

