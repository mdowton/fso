<?php
$lib_dir = trailingslashit( str_replace( '\\', '/', get_template_directory() . '/lib/' ) );

if( !defined('TOPZ_DIR') ){
	define( 'TOPZ_DIR', $lib_dir );
}

if( !defined('TOPZ_URL') ){
	define( 'TOPZ_URL', trailingslashit( get_template_directory_uri() ) . 'lib' );
}

if( !defined('TOPZ_OPTIONS_URL') ){
	define( 'TOPZ_OPTIONS_URL', trailingslashit( get_template_directory_uri() ) . 'lib/options/' ); 
}

defined('TOPZ_THEME') or die;

if (!isset($content_width)) { $content_width = 940; }

define("TOPZ_PRODUCT_TYPE","product");
define("TOPZ_PRODUCT_DETAIL_TYPE","product_detail");

require_once( get_template_directory().'/lib/options.php' );
function topz_Options_Setup(){
	global $topz_options, $options, $options_args;

	$options = array();
	$options[] = array(
			'title' => esc_html__('General', 'topz'),
			'desc' => wp_kses( __('<p class="description">The theme allows to build your own styles right out of the backend without any coding knowledge. Upload new logo and favicon or get their URL.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_019_cogwheel.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(	
					
					array(
						'id' => 'sitelogo',
						'type' => 'upload',
						'title' => esc_html__('Logo Image', 'topz'),
						'sub_desc' => esc_html__( 'Use the Upload button to upload the new logo and get URL of the logo', 'topz' ),
						'std' => get_template_directory_uri().'/assets/img/logo-default.png'
					),
					
					array(
						'id' => 'favicon',
						'type' => 'upload',
						'title' => esc_html__('Favicon', 'topz'),
						'sub_desc' => esc_html__( 'Use the Upload button to upload the custom favicon', 'topz' ),
						'std' => ''
					),
					
					array(
						'id' => 'tax_select',
						'type' => 'multi_select_taxonomy',
						'title' => esc_html__('Select Taxonomy', 'topz'),
						'sub_desc' => esc_html__( 'Select taxonomy to show custom term metabox', 'topz' ),
					),
					
					array(
						'id' => 'title_length',
						'type' => 'text',
						'title' => esc_html__('Title Length Of Item Listing Page', 'topz'),
						'sub_desc' => esc_html__( 'Choose title length if you want to trim word, leave 0 to not trim word', 'topz' ),
						'std' => 0
					),
					array(
						'id' => 'bg_breadcrumb',
						'type' => 'upload',
						'title' => esc_html__('Breadcrumb Background', 'topz'),
						'sub_desc' => esc_html__( 'Use upload button to upload custom background for breadcrumb.', 'topz' ),
						'std' => ''
					),					
			)		
		);
	
	$options[] = array(
			'title' => esc_html__('Schemes', 'topz'),
			'desc' => wp_kses( __('<p class="description">Custom color scheme for theme. Unlimited color that you can choose.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_163_iphone.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(		
				array(
					'id' => 'scheme',
					'type' => 'radio_img',
					'title' => esc_html__('Color Scheme', 'topz'),
					'sub_desc' => esc_html__( 'Select one of 2 predefined schemes', 'topz' ),
					'desc' => '',
					'options' => array(
								'default' => array('title' => 'Default', 'img' => get_template_directory_uri().'/assets/img/default.png'),
								'pink' => array('title' => 'Pink', 'img' => get_template_directory_uri().'/assets/img/pink.png'),
								'green' => array('title' => 'Green', 'img' => get_template_directory_uri().'/assets/img/green.png'),
									), //Must provide key => value(array:title|img) pairs for radio options
					'std' => 'default'
				),
					
				array(
					'id' => 'developer_mode',
					'title' => esc_html__( 'Developer Mode', 'topz' ),
					'type' => 'checkbox',
					'sub_desc' => esc_html__( 'Turn on/off compile less to css and custom color', 'topz' ),
					'desc' => '',
					'std' => '0'
				),
				
				array(
					'id' => 'scheme_color',
					'type' => 'color',
					'title' => esc_html__('Color', 'topz'),
					'sub_desc' => esc_html__('Select main custom color.', 'topz'),
					'std' => ''
				),
							
			)
	);
	
	$options[] = array(
			'title' => esc_html__('Layout', 'topz'),
			'desc' => wp_kses( __('<p class="description">SmartAddons Framework comes with a layout setting that allows you to build any number of stunning layouts and apply theme to your entries.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_319_sort.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
					array(
						'id' => 'layout',
						'type' => 'select',
						'title' => esc_html__('Box Layout', 'topz'),
						'sub_desc' => esc_html__( 'Select Layout Box or Wide', 'topz' ),
						'options' => array(
							'full' => esc_html__( 'Wide', 'topz' ),
							'boxed' => esc_html__( 'Boxed', 'topz' )
						),
						'std' => 'wide'
					),
				
					array(
						'id' => 'bg_box_img',
						'type' => 'upload',
						'title' => esc_html__('Background Box Image', 'topz'),
						'sub_desc' => '',
						'std' => ''
					),
					array(
							'id' => 'sidebar_left_expand',
							'type' => 'select',
							'title' => esc_html__('Left Sidebar Expand', 'topz'),
							'options' => array(
									'2' => '2/12',
									'3' => '3/12',
									'4' => '4/12',
									'5' => '5/12', 
									'6' => '6/12',
									'7' => '7/12',
									'8' => '8/12',
									'9' => '9/12',
									'10' => '10/12',
									'11' => '11/12',
									'12' => '12/12'
								),
							'std' => '3',
							'sub_desc' => esc_html__( 'Select width of left sidebar.', 'topz' ),
						),
					
					array(
							'id' => 'sidebar_right_expand',
							'type' => 'select',
							'title' => esc_html__('Right Sidebar Expand', 'topz'),
							'options' => array(
									'2' => '2/12',
									'3' => '3/12',
									'4' => '4/12',
									'5' => '5/12',
									'6' => '6/12',
									'7' => '7/12',
									'8' => '8/12',
									'9' => '9/12',
									'10' => '10/12',
									'11' => '11/12',
									'12' => '12/12'
								),
							'std' => '3',
							'sub_desc' => esc_html__( 'Select width of right sidebar medium desktop.', 'topz' ),
						),
						array(
							'id' => 'sidebar_left_expand_md',
							'type' => 'select',
							'title' => esc_html__('Left Sidebar Medium Desktop Expand', 'topz'),
							'options' => array(
									'2' => '2/12',
									'3' => '3/12',
									'4' => '4/12',
									'5' => '5/12',
									'6' => '6/12',
									'7' => '7/12',
									'8' => '8/12',
									'9' => '9/12',
									'10' => '10/12',
									'11' => '11/12',
									'12' => '12/12'
								),
							'std' => '4',
							'sub_desc' => esc_html__( 'Select width of left sidebar medium desktop.', 'topz' ),
						),
					array(
							'id' => 'sidebar_right_expand_md',
							'type' => 'select',
							'title' => esc_html__('Right Sidebar Medium Desktop Expand', 'topz'),
							'options' => array(
									'2' => '2/12',
									'3' => '3/12',
									'4' => '4/12',
									'5' => '5/12',
									'6' => '6/12',
									'7' => '7/12',
									'8' => '8/12',
									'9' => '9/12',
									'10' => '10/12',
									'11' => '11/12',
									'12' => '12/12'
								),
							'std' => '4',
							'sub_desc' => esc_html__( 'Select width of right sidebar.', 'topz' ),
						),
						array(
							'id' => 'sidebar_left_expand_sm',
							'type' => 'select',
							'title' => esc_html__('Left Sidebar Tablet Expand', 'topz'),
							'options' => array(
									'2' => '2/12',
									'3' => '3/12',
									'4' => '4/12',
									'5' => '5/12',
									'6' => '6/12',
									'7' => '7/12',
									'8' => '8/12',
									'9' => '9/12',
									'10' => '10/12',
									'11' => '11/12',
									'12' => '12/12'
								),
							'std' => '4',
							'sub_desc' => esc_html__( 'Select width of left sidebar tablet.', 'topz' ),
						),
					array(
							'id' => 'sidebar_right_expand_sm',
							'type' => 'select',
							'title' => esc_html__('Right Sidebar Tablet Expand', 'topz'),
							'options' => array(
									'2' => '2/12',
									'3' => '3/12',
									'4' => '4/12',
									'5' => '5/12',
									'6' => '6/12',
									'7' => '7/12',
									'8' => '8/12',
									'9' => '9/12',
									'10' => '10/12',
									'11' => '11/12',
									'12' => '12/12'
								),
							'std' => '4',
							'sub_desc' => esc_html__( 'Select width of right sidebar tablet.', 'topz' ),
						),				
				)
		);
			
	$options[] = array(
		'title' => esc_html__('Header & Footer', 'topz'),
			'desc' => wp_kses( __('<p class="description">SmartAddons Framework comes with a header and footer setting that allows you to build style header.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_336_read_it_later.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
				 array(
					'id' => 'header_style',
					'type' => 'select',
					'title' => esc_html__('Header Style', 'topz'),
					'sub_desc' => esc_html__('Select Header style', 'topz'),
					'options' => array(
							'style1'  => esc_html__( 'Style 1', 'topz' ),
							'style2'  => esc_html__( 'Style 2', 'topz' ),
							'style3'  => esc_html__( 'Style 3', 'topz' ),
							'style4'  => esc_html__( 'Style 4', 'topz' )
							),
					'std' => 'style1'
				),
				
				array(
					'id' => 'header_mid',
					'title' => esc_html__( 'Enable Background Header Mid', 'topz' ),
					'type' => 'checkbox',
					'sub_desc' => esc_html__( ' enable background hedaer mid on header', 'topz' ),
					'desc' => '',
					'std' => '0'
				),
				
				array(
						'id' => 'bg_header_mid',
						'title' => esc_html__( 'Background header mid', 'topz' ),
						'type' => 'upload',
						'sub_desc' => esc_html__( 'Choose header mid background image', 'topz' ),
						'desc' => '',
						'std' => get_template_directory_uri().'/assets/img/popup/bg-main.jpg'
					),
					
				array(
					'id' => 'disable_search',
					'title' => esc_html__( 'Disable Search', 'topz' ),
					'type' => 'checkbox',
					'sub_desc' => esc_html__( 'Check this to disable search on header', 'topz' ),
					'desc' => '',
					'std' => '0'
				),
				
				array(
					'id' => 'disable_cart',
					'title' => esc_html__( 'Disable Cart', 'topz' ),
					'type' => 'checkbox',
					'sub_desc' => esc_html__( 'Check this to disable cart on header', 'topz' ),
					'desc' => '',
					'std' => '0'
				),				
				
				array(
				   'id' => 'footer_style',
				   'type' => 'pages_select',
				   'title' => esc_html__('Footer Style', 'topz'),
				   'sub_desc' => esc_html__('Select Footer style', 'topz'),
				   'std' => ''
				),
				
				array(
					'id' => 'copyright_style',
					'type' => 'select',
					'title' => esc_html__('Copyright Style', 'topz'),
					'sub_desc' => esc_html__('Select Copyright style', 'topz'),
					'options' => array(
							'style1'  => esc_html__( 'Style 1', 'topz' ),
							'style2'  => esc_html__( 'Style 2', 'topz' ),
							'style3'  => esc_html__( 'Style 3', 'topz' ),
							'style4'  => esc_html__( 'Style 4', 'topz' )
							),
					'std' => 'style1'
				),

				array(
					'id' => 'footer_copyright',
					'type' => 'editor',
					'sub_desc' => '',
					'title' => esc_html__( 'Copyright text', 'topz' )
				),	
				
			)
	);
	$options[] = array(
			'title' => esc_html__('Navbar Options', 'topz'),
			'desc' => wp_kses( __('<p class="description">If you got a big site with a lot of sub menus we recommend using a mega menu. Just select the dropbox to display a menu as mega menu or dropdown menu.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_157_show_lines.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
				array(
						'id' => 'menu_type',
						'type' => 'select',
						'title' => esc_html__('Menu Type', 'topz'),
						'options' => array( 'dropdown' => 'Dropdown Menu', 'mega' => 'Mega Menu' ),
						'std' => 'mega'
					),
				array(
						'id' => 'menu_location',
						'type' => 'menu_location_multi_select',
						'title' => esc_html__('Theme Location', 'topz'),
						'sub_desc' => esc_html__( 'Select theme location to active mega menu and menu responsive.', 'topz' ),
						'std' => 'primary_menu'
					),			
				array(
						'id' => 'sticky_menu',
						'type' => 'checkbox',
						'title' => esc_html__('Active sticky menu', 'topz'),
						'sub_desc' => '',
						'desc' => '',
						'std' => '0'// 1 = on | 0 = off
					),
				array(
						'id' => 'menu_event',
						'type' => 'select',
						'title' => esc_html__('Menu Event', 'topz'),
						'options' => array( '' => esc_html__( 'Hover Event', 'topz' ), 'click' => esc_html__( 'Click Event', 'topz' ) ),
						'std' => ''
					),
			)
		);
	$options[] = array(
		'title' => esc_html__('Blog Options', 'topz'),
		'desc' => wp_kses( __('<p class="description">Select layout in blog listing page.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
		//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
		//You dont have to though, leave it topz for default.
		'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_071_book.png',
		//Lets leave this as a topz section, no options just some intro text set above.
		'fields' => array(
				array(
						'id' => 'sidebar_blog',
						'type' => 'select',
						'title' => esc_html__('Sidebar Blog Layout', 'topz'),
						'options' => array(
								'full' => esc_html__( 'Full Layout', 'topz' ),		
								'left'	=>  esc_html__( 'Left Sidebar', 'topz' ),
								'right' => esc_html__( 'Right Sidebar', 'topz' ),
						),
						'std' => 'left',
						'sub_desc' => esc_html__( 'Select style sidebar blog', 'topz' ),
					),
					array(
						'id' => 'blog_layout',
						'type' => 'select',
						'title' => esc_html__('Layout blog', 'topz'),
						'options' => array(
								'list'	=>  esc_html__( 'List Layout', 'topz' ),
								'grid' =>  esc_html__( 'Grid Layout', 'topz' )								
						),
						'std' => 'list',
						'sub_desc' => esc_html__( 'Select style layout blog', 'topz' ),
					),
					array(
						'id' => 'blog_column',
						'type' => 'select',
						'title' => esc_html__('Blog column', 'topz'),
						'options' => array(								
								'2' => '2 columns',
								'3' => '3 columns',
								'4' => '4 columns'								
							),
						'std' => '2',
						'sub_desc' => esc_html__( 'Select style number column blog', 'topz' ),
					),
			)
	);	
	$options[] = array(
		'title' => esc_html__('Product Options', 'topz'),
		'desc' => wp_kses( __('<p class="description">Select layout in product listing page.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
		//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
		//You dont have to though, leave it topz for default.
		'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_202_shopping_cart.png',
		//Lets leave this as a topz section, no options just some intro text set above.
		'fields' => array(
			array(
				'id' => 'product_banner',
				'title' => esc_html__( 'Select Banner', 'topz' ),
				'type' => 'select',
				'sub_desc' => '',
				'options' => array(
						'' => esc_html__( 'Use Banner', 'topz' ),
						'listing' => esc_html__( 'Use Category Product Image', 'topz' ),
					),
				'std' => '',
			),
			
			array(
				'id' => 'product_listing_banner',
				'type' => 'upload',
				'title' => esc_html__('Listing Banner Product', 'topz'),
				'sub_desc' => esc_html__( 'Use the Upload button to upload banner product listing', 'topz' ),
				'std' => get_template_directory_uri().'/assets/img/logo-default.png'
			),
			
			array(
				'id' => 'product_col_large',
				'type' => 'select',
				'title' => esc_html__('Product Listing column Desktop', 'topz'),
				'options' => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',							
					),
				'std' => '3',
				'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'topz' ),
			),
			
			array(
				'id' => 'product_col_medium',
				'type' => 'select',
				'title' => esc_html__('Product Listing column Medium Desktop', 'topz'),
				'options' => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',							
					),
				'std' => '2',
				'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'topz' ),
			),
			
			array(
				'id' => 'product_col_sm',
				'type' => 'select',
				'title' => esc_html__('Product Listing column Tablet', 'topz'),
				'options' => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',							
					),
				'std' => '2',
				'sub_desc' => esc_html__( 'Select number of column on Tablet Screen', 'topz' ),
			),
			
			array(
					'id' => 'sidebar_product',
					'type' => 'select',
					'title' => esc_html__('Sidebar Product Layout', 'topz'),
					'options' => array(
							'left'	=> esc_html__( 'Left Sidebar', 'topz' ),
							'full' => esc_html__( 'Full Layout', 'topz' ),		
							'right' => esc_html__( 'Right Sidebar', 'topz' )
					),
					'std' => 'left',
					'sub_desc' => esc_html__( 'Select style sidebar product', 'topz' ),
			),
			
			array(
				'id' => 'product_quickview',
				'title' => esc_html__( 'Quickview', 'topz' ),
				'type' => 'checkbox',
				'sub_desc' => '',
				'desc' => esc_html__( 'Turn On/Off Product Quickview', 'topz' ),
				'std' => '1'
			),
			
			array(
				'id' => 'product_zoom',
				'title' => esc_html__( 'Product Zoom', 'topz' ),
				'type' => 'checkbox',
				'sub_desc' => '',
				'desc' => esc_html__( 'Turn On/Off image zoom when hover on single product', 'topz' ),
				'std' => '1'
			),
			
			array(
				'id' => 'product_number',
				'type' => 'text',
				'title' => esc_html__('Product Listing Number', 'topz'),
				'sub_desc' => esc_html__( 'Show number of product in listing product page.', 'topz' ),
				'std' => 12
			),	
				
			array(
				'id' => 'info_typo1',
				'type' => 'info',
				'title' => esc_html( 'Config For Product Categories Widget', 'topz' ),
				'desc' => '',
				'class' => 'topz-opt-info'
			),

			array(
				'id' => 'product_number_item',
				'type' => 'text',
				'title' => esc_html__( 'Category Number Item Show', 'topz' ),
				'sub_desc' => esc_html__( 'Choose to number of item category that you want to show, leave 0 to show all category', 'topz' ),
				'std' => 8
			),	
			
			array(
				'id' => 'product_more_text',
				'type' => 'text',
				'title' => esc_html__( 'Category More Text', 'topz' ),
				'sub_desc' => esc_html__( 'Change more text on category product', 'topz' ),
				'std' => ''
			),
				
			array(
				'id' => 'product_less_text',
				'type' => 'text',
				'title' => esc_html__( 'Category Less Text', 'topz' ),
				'sub_desc' => esc_html__( 'Change less text on category product', 'topz' ),
				'std' => ''
			)
		)
);		
	$options[] = array(
			'title' => esc_html__('Typography', 'topz'),
			'desc' => wp_kses( __('<p class="description">Change the font style of your blog, custom with Google Font.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_151_edit.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
					array(
							'id' => 'google_webfonts',
							'type' => 'text',
							'title' => esc_html__('Use Google Webfont', 'topz'),
							'sub_desc' => esc_html__( 'Insert font style that you actually need on your webpage.', 'topz' ), 
							'std' => ''
						),
					array(
							'id' => 'webfonts_weight',
							'type' => 'multi_select',
							'sub_desc' => esc_html__( 'For weight, see Google Fonts to custom for each font style.', 'topz' ),
							'title' => esc_html__('Webfont Weight', 'topz'),
							'options' => array(
									'100' => '100',
									'200' => '200',
									'300' => '300',
									'400' => '400',
									'500' => '500',
									'600' => '600',
									'700' => '700',
									'800' => '800',
									'900' => '900'
								),
							'std' => ''
						),
					array(
							'id' => 'webfonts_assign',
							'type' => 'select',
							'title' => esc_html__( 'Webfont Assign to', 'topz' ),
							'sub_desc' => esc_html__( 'Select the place will apply the font style headers, every where or custom.', 'topz' ),
							'options' => array(
									'headers' => esc_html__( 'Headers',    'topz' ),
									'all'     => esc_html__( 'Everywhere', 'topz' ),
									'custom'  => esc_html__( 'Custom',     'topz' )
								)
						),
					 array(
							'id' => 'webfonts_custom',
							'type' => 'text',
							'sub_desc' => esc_html__( 'Insert the places will be custom here, after selected custom Webfont assign.', 'topz' ),
							'title' => esc_html__( 'Webfont Custom Selector', 'topz' )
						),
				)
		);
	
	$options[] = array(
		'title' => __('Social', 'topz'),
		'desc' => wp_kses( __('<p class="description">This feature allow to you link to your social.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
		//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
		//You dont have to though, leave it blank for default.
		'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_222_share.png',
		//Lets leave this as a blank section, no options just some intro text set above.
		'fields' => array(
				array(
						'id' => 'social-share-fb',
						'title' => esc_html__( 'Facebook', 'topz' ),
						'type' => 'text',
						'sub_desc' => '',
						'desc' => '',
						'std' => '',
					),
				array(
						'id' => 'social-share-tw',
						'title' => esc_html__( 'Twitter', 'topz' ),
						'type' => 'text',
						'sub_desc' => '',
						'desc' => '',
						'std' => '',
					),
				array(
						'id' => 'social-share-tumblr',
						'title' => esc_html__( 'Tumblr', 'topz' ),
						'type' => 'text',
						'sub_desc' => '',
						'desc' => '',
						'std' => '',
					),
				array(
						'id' => 'social-share-in',
						'title' => esc_html__( 'Linkedin', 'topz' ),
						'type' => 'text',
						'sub_desc' => '',
						'desc' => '',
						'std' => '',
					),
					array(
						'id' => 'social-share-instagram',
						'title' => esc_html__( 'Instagram', 'topz' ),
						'type' => 'text',
						'sub_desc' => '',
						'desc' => '',
						'std' => '',
					),
				array(
						'id' => 'social-share-go',
						'title' => esc_html__( 'Google+', 'topz' ),
						'type' => 'text',
						'sub_desc' => '',
						'desc' => '',
						'std' => '',
					),
				array(
					'id' => 'social-share-pi',
					'title' => esc_html__( 'Pinterest', 'topz' ),
					'type' => 'text',
					'sub_desc' => '',
					'desc' => '',
					'std' => '',
				)
					
			)
	);
	
	$options[] = array(
			'title' => esc_html__('Maintaincece Mode', 'topz'),
			'desc' => wp_kses( __('<p class="description">Enable and config for Maintaincece mode.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_083_random.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
					array(
						'id' => 'maintaince_enable',
						'title' => esc_html__( 'Enable Maintaincece Mode', 'topz' ),
						'type' => 'checkbox',
						'sub_desc' => esc_html__( 'Turn on/off Maintaince mode on this website', 'topz' ),
						'desc' => '',
						'std' => '0'
					),
					
					array(
						'id' => 'maintaince_background',
						'title' => esc_html__( 'Maintaince Background', 'topz' ),
						'type' => 'upload',
						'sub_desc' => esc_html__( 'Choose maintance background image', 'topz' ),
						'desc' => '',
						'std' => get_template_directory_uri().'/assets/img/maintaince/bg-main.jpg'
					),
					
					array(
						'id' => 'maintaince_content',
						'title' => esc_html__( 'Maintaince Content', 'topz' ),
						'type' => 'editor',
						'sub_desc' => esc_html__( 'Change text of maintaince mode', 'topz' ),
						'desc' => '',
						'std' => ''
					),
					
					array(
						'id' => 'maintaince_date',
						'title' => esc_html__( 'Maintaince Date', 'topz' ),
						'type' => 'date',
						'sub_desc' => esc_html__( 'Put date to this field to show countdown date on maintaince mode.', 'topz' ),
						'desc' => '',
						'placeholder' => 'mm/dd/yy',
						'std' => ''
					),
					
					array(
						'id' => 'maintaince_form',
						'title' => esc_html__( 'Maintaince Form', 'topz' ),
						'type' => 'text',
						'sub_desc' => esc_html__( 'Put shortcode form to this field and it will be shown on maintaince mode frontend.', 'topz' ),
						'desc' => '',
						'std' => ''
					),
					
				)
		);
	
	$options[] = array(
			'title' => esc_html__('Popup Config', 'topz'),
			'desc' => wp_kses( __('<p class="description">Enable popup and more config for Popup.</p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_083_random.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
					array(
						'id' => 'popup_active',
						'type' => 'checkbox',
						'title' => esc_html__( 'Active Popup Subscribe', 'topz' ),
						'sub_desc' => esc_html__( 'Check to active popup subscribe', 'topz' ),
						'desc' => '',
						'std' => '0'// 1 = on | 0 = off
					),	
					
					array(
						'id' => 'popup_background',
						'title' => esc_html__( 'Popup Background', 'topz' ),
						'type' => 'upload',
						'sub_desc' => esc_html__( 'Choose popup background image', 'topz' ),
						'desc' => '',
						'std' => get_template_directory_uri().'/assets/img/popup/bg-main.jpg'
					),
					
					array(
						'id' => 'popup_content',
						'title' => esc_html__( 'Popup Content', 'topz' ),
						'type' => 'editor',
						'sub_desc' => esc_html__( 'Change text of popup mode', 'topz' ),
						'desc' => '',
						'std' => ''
					),	
					
					array(
						'id' => 'popup_form',
						'title' => esc_html__( 'Popup Form', 'topz' ),
						'type' => 'text',
						'sub_desc' => esc_html__( 'Put shortcode form to this field and it will be shown on popup mode frontend.', 'topz' ),
						'desc' => '',
						'std' => ''
					),
					
				)
		);
	
	$options[] = array(
			'title' => esc_html__('Advanced', 'topz'),
			'desc' => wp_kses( __('<p class="description">Custom advanced with Cpanel, Widget advanced, Developer mode </p>', 'topz'), array( 'p' => array( 'class' => array() ) ) ),
			//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
			//You dont have to though, leave it topz for default.
			'icon' => TOPZ_URL.'/options/img/glyphicons/glyphicons_083_random.png',
			//Lets leave this as a topz section, no options just some intro text set above.
			'fields' => array(
					array(
						'id' => 'show_cpanel',
						'title' => esc_html__( 'Show cPanel', 'topz' ),
						'type' => 'checkbox',
						'sub_desc' => esc_html__( 'Turn on/off Cpanel', 'topz' ),
						'desc' => '',
						'std' => ''
					),
					
					array(
						'id' => 'widget-advanced',
						'title' => esc_html__('Widget Advanced', 'topz'),
						'type' => 'checkbox',
						'sub_desc' => esc_html__( 'Turn on/off Widget Advanced', 'topz' ),
						'desc' => '',
						'std' => '1'
					),					
					
					array(
						'id' => 'social_share',
						'title' => esc_html__( 'Social Share', 'topz' ),
						'type' => 'checkbox',
						'sub_desc' => esc_html__( 'Turn on/off social share', 'topz' ),
						'desc' => '',
						'std' => '1'
					),
					
					array(
						'id' => 'breadcrumb_active',
						'title' => esc_html__( 'Turn Off Breadcrumb', 'topz' ),
						'type' => 'checkbox',
						'sub_desc' => esc_html__( 'Turn off breadcumb on all page', 'topz' ),
						'desc' => '',
						'std' => '0'
					),
					
					array(
						'id' => 'back_active',
						'type' => 'checkbox',
						'title' => esc_html__('Back to top', 'topz'),
						'sub_desc' => '',
						'desc' => '',
						'std' => '1'// 1 = on | 0 = off
					),	
					
					array(
						'id' => 'direction',
						'type' => 'select',
						'title' => esc_html__('Direction', 'topz'),
						'options' => array( 'ltr' => 'Left to Right', 'rtl' => 'Right to Left' ),
						'std' => 'ltr'
					),
					
					
					array(
						'id' => 'advanced_css',
						'type' => 'textarea',
						'sub_desc' => esc_html__( 'Insert your own CSS into this block. This overrides all default styles located throughout the theme', 'topz' ),
						'title' => esc_html__( 'Custom CSS', 'topz' )
					),
					
					array(
						'id' => 'advanced_js',
						'type' => 'textarea',
						'placeholder' => esc_html__( 'Example: $("p").hide()', 'topz' ),
						'sub_desc' => esc_html__( 'Insert your own JS into this block. This customizes js throughout the theme', 'topz' ),
						'title' => esc_html__( 'Custom JS', 'topz' )
					)
				)
		);

	$options_args = array();

	//Setup custom links in the footer for share icons
	$options_args['share_icons']['facebook'] = array(
			'link' => 'http://www.facebook.com/SmartAddons.page',
			'title' => 'Facebook',
			'img' => TOPZ_URL.'/options/img/glyphicons/glyphicons_320_facebook.png'
	);
	$options_args['share_icons']['twitter'] = array(
			'link' => 'https://twitter.com/smartaddons',
			'title' => 'Folow me on Twitter',
			'img' => TOPZ_URL.'/options/img/glyphicons/glyphicons_322_twitter.png'
	);
	$options_args['share_icons']['linked_in'] = array(
			'link' => 'http://www.linkedin.com/in/smartaddons',
			'title' => 'Find me on LinkedIn',
			'img' => TOPZ_URL.'/options/img/glyphicons/glyphicons_337_linked_in.png'
	);


	//Choose a custom option name for your theme options, the default is the theme name in lowercase with spaces replaced by underscores
	$options_args['opt_name'] = TOPZ_THEME;

	$options_args['google_api_key'] = '';//must be defined for use with google webfonts field type

	//Custom menu title for options page - default is "Options"
	$options_args['menu_title'] = esc_html__('Theme Options', 'topz');

	//Custom Page Title for options page - default is "Options"
	$options_args['page_title'] = esc_html__('Topz Options ', 'topz') . wp_get_theme()->get('Name');

	//Custom page slug for options page (wp-admin/themes.php?page=***) - default is "topz_theme_options"
	$options_args['page_slug'] = 'topz_theme_options';

	//page type - "menu" (adds a top menu section) or "submenu" (adds a submenu) - default is set to "menu"
	$options_args['page_type'] = 'submenu';

	//custom page location - default 100 - must be unique or will override other items
	$options_args['page_position'] = 27;
	$topz_options = new Topz_Options($options, $options_args);
}
add_action( 'admin_init', 'topz_Options_Setup', 0 );
topz_Options_Setup();

function topz_widget_setup_args(){
	$topz_widget_areas = array(
		
		array(
				'name' => esc_html__('Sidebar Left Blog', 'topz'),
				'id'   => 'left-blog',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="block-title-widget"><h2><span>',
				'after_title' => '</span></h2></div>'
		),
		array(
				'name' => esc_html__('Sidebar Right Blog', 'topz'),
				'id'   => 'right-blog',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="block-title-widget"><h2><span>',
				'after_title' => '</span></h2></div>'
		),
		
		array(
				'name' => esc_html__('Top Header', 'topz'),
				'id'   => 'top',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
		),

		array(
				'name' => esc_html__('Top Header 2', 'topz'),
				'id'   => 'top2',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
		),

		array(
				'name' => esc_html__('Top Header 3', 'topz'),
				'id'   => 'top3',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
		),

		array(
				'name' => esc_html__('Top Header 4', 'topz'),
				'id'   => 'top4',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
		),
						
		array(
				'name' => esc_html__('Sidebar Left Product', 'topz'),
				'id'   => 'left-product',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="block-title-widget"><h2><span>',
				'after_title' => '</span></h2></div>'
		),
		
		array(
				'name' => esc_html__('Sidebar Right Product', 'topz'),
				'id'   => 'right-product',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="block-title-widget"><h2><span>',
				'after_title' => '</span></h2></div>'
		),
		
		array(
				'name' => esc_html__('Sidebar Left Detail Product', 'topz'),
				'id'   => 'left-product-detail',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="block-title-widget"><h2><span>',
				'after_title' => '</span></h2></div>'
		),
		
		array(
				'name' => esc_html__('Sidebar Right Detail Product', 'topz'),
				'id'   => 'right-product-detail',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="block-title-widget"><h2><span>',
				'after_title' => '</span></h2></div>'
		),
		
		array(
				'name' => esc_html__('Sidebar Bottom Detail Product', 'topz'),
				'id'   => 'bottom-detail-product',
				'before_widget' => '<div class="widget %1$s %2$s" data-scroll-reveal="enter bottom move 20px wait 0.2s"><div class="widget-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
		),
		
		array(
				'name' => esc_html__('Footer Copyright', 'topz'),
				'id'   => 'footer-copyright',
				'before_widget' => '<div class="widget %1$s %2$s"><div class="widget-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
		),
	);
	return $topz_widget_areas;
}