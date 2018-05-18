<?php
/**
 * Plugin Name: SW Core
 * Plugin URI: http://www.smartaddons.com
 * Description: A plugin developed for many shortcode in theme
 * Version: 1.2.3
 * Author: Smartaddons
 * Author URI: http://www.smartaddons.com
 * This Widget help you to show images of product as a beauty reponsive slider
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

if( !function_exists( 'is_plugin_active' ) ){
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
/* define plugin path */
if ( ! defined( 'SWPATH' ) ) {
	define( 'SWPATH', plugin_dir_path( __FILE__ ) );
}
/* define plugin URL */
if ( ! defined( 'SWURL' ) ) {
	define( 'SWURL', plugins_url(). '/sw_core' );
}

function sw_core_construct(){
	/*
	** Require file
	*/
	if( class_exists( 'Vc_Manager' ) ){
		require_once ( SWPATH . '/visual-map.php' );
	}
	require_once( SWPATH . 'sw_plugins/sw-plugins.php' );
	
	/*
	** Load text domain
	*/
	load_plugin_textdomain( 'sw_core', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
	
	/*
	** Call action and filter
	*/
	add_filter('style_loader_tag', 'sw_clean_style_tag');
	add_filter('widget_text', 'do_shortcode');
	add_action('init', 'sw_head_cleanup');
	add_action( 'wp_enqueue_scripts', 'Sw_AddScript', 20 );
}

add_action( 'plugins_loaded', 'sw_core_construct', 20 );

/**
 * Clean up output of stylesheet <link> tags
 */
function sw_clean_style_tag($input) {
	preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);
	$media = $matches[3][0] === 'print' ? ' media="print"' : '';
	return '<link rel="stylesheet" href="' . esc_url( $matches[2][0] ) . '"' . $media . '>' . "\n";
}

	

function sw_head_cleanup() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action('init', 'sw_head_cleanup');

function Sw_AddScript(){
	wp_register_style('ya_photobox_css', SWURL . '/css/photobox.css', array(), null);	
	wp_register_style('fancybox_css', SWURL . '/css/jquery.fancybox.css', array(), null);
	wp_register_style('shortcode_css', SWURL . '/css/shortcodes.css', array(), null);
	wp_register_script('photobox_js', SWURL . '/js/photobox.js', array(), null, true);
	wp_register_script('fancybox', SWURL . '/js/jquery.fancybox.pack.js', array(), null, true);
	wp_enqueue_style( 'fancybox_css' );
	wp_enqueue_style( 'shortcode_css' );
	wp_enqueue_script( 'fancybox' );
}

class YA_Shortcodes{
	protected $supports = array();

	protected $tags = array( 'icon', 'button', 'bloginfo', 'colorset', 'get_url' );

	public function __construct(){
		$this->add_shortcodes();
	}
	
	public function add_shortcodes(){
		if ( is_array($this->tags) && count($this->tags) ){
			foreach ( $this->tags as $tag ){
				add_shortcode($tag, array($this, $tag));
			}
		}
	}
	
	function icon( $atts ) {
		
		// Attributes
		extract( shortcode_atts(
			array(
				'tag' => 'span',
				'name' => '*',
				'class' => '',
				'border'=>'',
				'bg'    =>'',
				'color' => ''
			), $atts )
		);
		$attributes = array();
	
		$classes = preg_split('/[\s,]+/', $class, -1, PREG_SPLIT_NO_EMPTY);
		
		if ( !preg_match('/fa-/', $name) ){
			$name = 'fa-'.$name;
		}
		array_unshift($classes, $name);
		
		$classes = array_unique($classes);
		
		$attributes[] = 'class="fa '.implode(' ', $classes).'"';
		if(!empty($color)&&!empty($bg)&&!empty($border)){
			$attributes[] = 'style="color: '.$color.';background:'.$bg.';border:1px solid '.$border.'"';
		}
		if ( !empty($color) ){
			$attributes[] = 'style="color: '.$color.'"';
		}
		
		// Code
		return "<$tag ".implode(' ', $attributes)."></$tag>";
	}
	
	public function button( $atts, $content = null ){
		// Attributes
		extract( shortcode_atts(
			array(
				'id' => '',
				'tag' => 'span',
				'class' => 'btn',
				'target' => '',
				'type' => 'default',
				'border' =>'',
				'color' =>'',
				'size'	=> '',
				'icon' => '',
				'href' => '#'
			), $atts )
		);
		$attributes = array();
		
		$classes = $class;
		if ( $type != '' ){
			$type = ' btn-'.$type;
		}
		if( $size != '' ){
			$size = 'btn-'.$size;
		}
		$classes .= $type.' '.$size;
		$attributes[] = 'class="'.$classes.'"';
		if ( !empty($id) ){
			$attributes[] = 'id="'.esc_attr($id).'"';
		}
		if ( !empty($target) ){
			if ( 'a' == $tag ){
				$attributes[] = 'target="'.esc_attr($target).'"';
			} else {
				// html5
				$attributes[] = 'data-target="'.esc_attr($target).'"';
			}
		}
		
		if ( 'a' == $tag ){
			$attributes[] = 'href="'.esc_attr($href).'"';
		}
		if( $icon != '' ){
			$icon = '<i class="'.$icon.'"></i>';
		}
		return "<$tag ".implode(' ', $attributes).">".$icon."".do_shortcode($content)."</$tag>";
	}


	/**
	 * Bloginfo
	 * */
	function bloginfo( $atts){
		extract( shortcode_atts(array(
				'show' => 'wpurl',
				'filter' => 'raw'
			), $atts)
		);
		$html = '';
		$html .= get_bloginfo($show, $filter);

		return $html;
	}
	
	function colorset($atts){
		$value = ya_options()->getCpanelValue('scheme'); 
		return $value;
	}	
	
	/*
	* Get URL shortcode
	*/
	function get_url($atts) {
		if(is_front_page()){
			$frontpage_ID = get_option('page_on_front');
			$link =  get_site_url().'/?page_id='.$frontpage_ID ;
			return $link;
		}
		elseif(is_page()){
			$pageid = get_the_ID();
			$link = get_site_url().'/?page_id='.$pageid ;
			return $link;
		}
		else{
			$link = $_SERVER['REQUEST_URI'];
			return $link;
		}
	}
}
new YA_Shortcodes();

/*
 * Vertical mega menu
 *
 */
function yt_vertical_megamenu_shortcode($atts){
 extract( shortcode_atts( array(
  'menu_locate' =>'',
  'title'  =>'',
  'el_class' => ''
  ), $atts ) );
 $output = '<div class="vc_wp_custommenu wp_verticle_topz wpb_content_element ' . $el_class . '">';
 if($title != ''){
  $output.='<div class="mega-left-title">
  <strong>'.$title.'</strong>
 </div>';
}
$output.='<div class="wrapper_vertical_menu vertical_megamenu">';
ob_start();
$output .= wp_nav_menu( array( 'theme_location' => $menu_locate , 'menu_class' => 'nav vertical-megamenu' ) );
$output .= ob_get_clean();
$output .= '</div></div>';
return $output;
}
add_shortcode('ya_mega_menu','yt_vertical_megamenu_shortcode');

/*
 * Pricing Table
 * @since v1.0
 *
 */
 
/*
** main
*/
if( !function_exists('pricing_table_shortcode') ) {
	function pricing_table_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'style' => 'style1',
		), $atts ) );
		
	   return '<div class="pricing-table clearfix '.$style.'">' . do_shortcode($content) . '</div></div>';
	}
	add_shortcode( 'pricing_table', 'pricing_table_shortcode' );
}

/*
** section
*/
if( !function_exists('pricing_shortcode') ) {
	function pricing_shortcode( $atts, $content = null, $style_table) {
		
		extract( shortcode_atts( array(
			'style' =>'style1',
			'size' => 'one-five',
			'featured' => 'no',
			'description'=>'',
			'plan' => '',
			'cost' => '$20',
			'currency'=>'',
			'per' => 'month',
			'button_url' => '',
			'button_text' => 'Purchase',
			'button_target' => 'self',
			'button_rel' => 'nofollow'
		), $atts ) );
		
		//set variables
		$featured_pricing = ( $featured == 'yes' ) ? 'most-popular' : NULL;
		
		//start content1  
		$pricing_content1 ='';
		$pricing_content1 .= '<div class="pricing pricing-'. $size .' '. $featured_pricing . '">';
				$pricing_content1 .= '<div class="header">'. esc_html( $plan ). '</div>';
				$pricing_content1 .= '<div class="price">'. esc_html( $cost ) .'/'. esc_html( $per ) .'</div>';
			$pricing_content1 .= '<div class="pricing-content">';
				$pricing_content1 .= ''. $content. '';
			$pricing_content1 .= '</div>';
			if( $button_url ) {
				$pricing_content1 .= '<a href="'. esc_url( $button_url ) .'" class="signup" target="_'. esc_attr( $button_target ).'" rel="'. esc_attr( $button_rel ) .'" '.'>'. esc_html( $button_text ) .'</a>';
			}
		$pricing_content1 .= '</div>';
	
		//start content2  
		$pricing_content2 ='';
		$pricing_content2 .= '<div class="pricing pricing-'. $size .' '. $featured_pricing . '">';
			$pricing_content2 .= '<div class="header"><h3>'. esc_html( $plan ). '</h3><span>'.esc_html( $description ).'</span></div>';
				
			$pricing_content2 .= '<div class="pricing-content">';
				$pricing_content2 .= ''. $content. '';
			$pricing_content2 .= '</div>';
			$pricing_content2 .= '<div class="price"><span class="span-1"><p>'.$currency.'</p>'. esc_html( $cost ) .'</span><span class="span-2">'. esc_html( $per ) .'</span></div>';
			if( $button_url ) {
				$pricing_content2 .= '<div class="plan"><a href="'. esc_url( $button_url ) .'" class="signup" target="_'. esc_attr( $button_target ) .'" rel="'. esc_attr( $button_rel ) .'" '.'>'. esc_html( $button_text ) .'</a></div>';
			}
		$pricing_content2 .= '</div>';
		//start basic
		$pricing_content4 ='';
		$pricing_content4 .= '<div class="pricing pricing-'. $size .' '. $featured_pricing . '">';
			$pricing_content4 .= '<div class="price"><span class="span-1">'. esc_html( $cost ) .'<p>'.$currency.'</p></span><span class="span-2">'. esc_html( $per ) .'</span></div>';
			if( $button_url ) {
				$pricing_content4 .= '<div class="plan"><a href="'. esc_url( $button_url ) .'" class="signup" target="_'. esc_attr( $button_target ) .'" rel="'. esc_attr( $button_rel ) .'" '.'>'. esc_html( $button_text ) .'</a></div>';
			}
		$pricing_content4 .= '</div>';
			//start content5  
		$pricing_content5 ='';
		$pricing_content5 .= '<div class="pricing pricing-'. $size .' '. $featured_pricing . '">';
				$pricing_content5 .= '<div class="header">'. esc_html( $plan ). '</div>';
				$pricing_content5 .= '<div class="price"><p class="currency">'.$currency.'</p><p class="cost">'. esc_html( $cost ) .'</p>/'. esc_html( $per ) .'</div>';
				$pricing_content5 .='<div class="description"><span>'.esc_html( $description ).'</span></div>';
			$pricing_content5 .= '<div class="pricing-content">';
				$pricing_content5 .= ''. $content. '';
			$pricing_content5 .= '</div>';
			
				$pricing_content5 .= '<div class="footer">'. esc_html( $button_text ).'</div>';

		$pricing_content5 .= '</div>';
		if($style == 'style1'||$style == 'style3'){
			return $pricing_content1;
		}
		if($style == 'style2') {
			return $pricing_content2;
		}
		if($style == 'basic'){
			return $pricing_content4;
		}
		if($style == 'vprice'){
			return $pricing_content5;
		}
	}
	
	add_shortcode( 'pricing', 'pricing_shortcode' );
}
/*
*	Popup newsletter
*/
function ya_popup_subscribe( $atts ){
	extract(shortcode_atts(array(
		'title' => '',
		'description' => '',
		'background' => '',
		'background_mobile' => '',
		'link_mobile' =>'',
		'facebook_link' => '',
		'twitter_link' => '',
		'googleplus_link' => '',
		'instagram_link' => '',
		'dribbble_link' => '',
	), $atts));
	ob_start();
	?>
	<?php if( topz_mobile_check() ): ?>
		<div id="subscribe_popup" class="subscribe-popup" <?php echo ( $background_mobile != '' ) ? 'style="background: url('.esc_url( home_url('/') ). esc_attr( $background_mobile ) .')"' : '' ?>>
			<div class="subscribe-popup-container">
				<div class="link-mobile">
					<?php echo '<a href="'. esc_url( $link_mobile ) .'" class="enjoy-it">'. esc_html__( "enjoy it", "sw_core" ) .'</a>'; ?>
				</div>
				<div class="subscribe-checkbox">
					<label for="popup_check">
						<input id="popup_check" name="popup_check" type="checkbox" />
						<?php echo '<span>' . esc_html__( "Don't show this popup again!", "sw_core" ) . '</span>'; ?>
					</label>
				</div>
			</div>
		</div>
	<?php else: ?>
	<div id="subscribe_popup" class="subscribe-popup" <?php echo ( $background != '' ) ? 'style="background: url('.esc_url( home_url('/') ). esc_attr( $background ) .')"' : '' ?>>
		<div class="subscribe-popup-container">
			<h2><?php echo esc_html( $title ); ?></h2>
			<div class="description"><?php echo esc_html( $description ); ?></div>
			<div class="subscribe-form">
				<?php
					if( is_plugin_active( 'mailchimp-for-wp/mailchimp-for-wp.php' ) ){
						echo do_shortcode( '[mc4wp_form]' );  
					}else{
				?>
					<div class="alert alert-warning alert-dismissible" role="alert">
						<a class="close" data-dismiss="alert">&times;</a>
						<p><?php esc_html_e('Please active mailchimp plugin first!', 'sw_core'); ?></p>
					</div>
				<?php
					}
				?>
			</div>
			<div class="subscribe-checkbox">
				<label for="popup_check">
					<input id="popup_check" name="popup_check" type="checkbox" />
					<?php echo '<span>' . esc_html__( "Don't show this popup again!", "sw_core" ) . '</span>'; ?>
				</label>
			</div>
			<div class="subscribe-social">
				<h3><?php echo esc_html__('follow us','sw_core'); ?></h3>
				<div class="subscribe-social-inner">
					<?php echo ( $facebook_link != '' ) ? '<a href="'. esc_url( $facebook_link ) .'" class="social-fb"><span class="fa fa-facebook"></span></a>' : ''; ?>
					<?php echo ( $twitter_link != '' ) ? '<a href="'. esc_url( $twitter_link ) .'" class="social-tw"><span class="fa fa-twitter"></span></a>' : ''; ?>
					<?php echo ( $googleplus_link != '' ) ? '<a href="'. esc_url( $googleplus_link ) .'" class="social-gplus"><span class="fa fa-google-plus"></span></a>' : ''; ?>
					<?php echo ( $instagram_link != '' ) ? '<a href="'. esc_url( $instagram_link ) .'" class="social-pin"><span class="fa fa-instagram"></span></a>' : ''; ?>
					<?php echo ( $dribbble_link != '' ) ? '<a href="'. esc_url( $dribbble_link ) .'" class="social-linkedin"><span class="fa  fa-dribbble"></span></a>' : ''; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
<?php	
	$output = ob_get_clean();
	return $output;
	
}
add_shortcode('ya_popup_subscribe','ya_popup_subscribe');
	
	
/**
 * Clean up gallery_shortcode()
 *
 * Re-create the [gallery] shortcode and use thumbnails styling from Bootstrap
 *
 * @link http://twitter.github.com/bootstrap/components.html#thumbnails
 */
function ya_gallery($attr) {
	$post = get_post();

	static $instance = 0;
	$instance++;

	if (!empty($attr['ids'])) {
		if (empty($attr['orderby'])) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}

	$output = apply_filters('post_gallery', '', $attr);

	if ($output != '') {
		return $output;
	}

	if (isset($attr['orderby'])) {
		$attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
		if (!$attr['orderby']) {
			unset($attr['orderby']);
		}
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => '',
		'icontag'    => '',
		'captiontag' => '',
		'columns'    => 3,
		'size'       => 'medium',
		'include'    => '',
		'exclude'    => ''
		), $attr)
	);

	$id = intval($id);

	if ($order === 'RAND') {
		$orderby = 'none';
	}

	if (!empty($include)) {
		$_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

		$attachments = array();
		foreach ($_attachments as $key => $val) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif (!empty($exclude)) {
		$attachments = get_children(array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
	} else {
		$attachments = get_children(array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
	}

	if (empty($attachments)) {
		return '';
	}

	if (is_feed()) {
		$output = "\n";
		foreach ($attachments as $att_id => $attachment) {
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		}
		return $output;
	}
	
	if (!wp_style_is('ya_photobox_css')){
		wp_enqueue_style('ya_photobox_css');
	}
	
	if (!wp_enqueue_script('photobox_js')){
		wp_enqueue_script('photobox_js');
	}
	
	$output = '<ul id="photobox-gallery-' . esc_attr( $instance ). '" class="thumbnails photobox-gallery gallery gallery-columns-'.esc_attr( $columns ).'">';

	$i = 0;
	$width = 100/$columns - 1;
	foreach ($attachments as $id => $attachment) {
		//$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
		$link = '<a class="thumbnail" href="' .esc_url( wp_get_attachment_url($id) ) . '">';
		$link .= wp_get_attachment_image($id);
		$link .= '</a>';
		
		$output .= '<li style="width: '.esc_attr( $width ).'%;">' . $link;
		$output .= '</li>';
	}

	$output .= '</ul>';
	
	add_action('wp_footer', 'ya_add_script_gallery', 50);
	
	return $output;
}
add_action( 'after_setup_theme', 'ya_setup_gallery', 20 );
function ya_setup_gallery(){
	if ( current_theme_supports('bootstrap-gallery') ) {
		remove_shortcode('gallery');
		add_shortcode('gallery', 'ya_gallery');
	}
}

function ya_add_script_gallery() {
	$script = '';
	$script .= '<script type="text/javascript">
				jQuery(document).ready(function($) {
					try{
						// photobox
						$(".photobox-gallery").each(function(){
							$("#" + this.id).photobox("li a");
							// or with a fancier selector and some settings, and a callback:
							$("#" + this.id).photobox("li:first a", { thumbs:false, time:0 }, imageLoaded);
							function imageLoaded(){
								console.log("image has been loaded...");
							}
						})
					} catch(e){
						console.log( e );
					}
				});
			</script>';
	
	echo $script;
}
/*
   * Shortcode change logo footer 
   *
  */
  function topz_change_logo( $atts ){
		extract(shortcode_atts(array(
		'title' => '',
		'colorset' => '',
		'post_status' => 'publish',
		'el_class' => ''
		), $atts));
		$topz_logo = topz_options()->getCpanelValue('sitelogo');
		$topz_colorset = topz_options()->getCpanelValue('scheme');
		$site_logo = topz_options()->getCpanelValue('sitelogo');
		$output   ='';
		$output  .='<div class="ya-logo">';
		$output	 .='<a  href="'.esc_url( home_url( '/' ) ).'">';
					if(topz_options()->getCpanelValue('sitelogo')){
		$output	 .='<img src="'.esc_url( $topz_logo ).'" alt="logo"/>';
					}else{
						$logo = get_template_directory_uri().'/assets/img/logo-footer.png';
		$output	 .='<img src="'.esc_url( $logo ).'" alt="logo"/>';
					}
		$output	 .='</a>';
		$output  .='</div>';
		return $output; 
  }
  add_shortcode('logo_footer','topz_change_logo');

/***********************
Sw text block
************************/
function topz_text_blog( $atts ){
	extract( shortcode_atts( array(
		'title'		=> '',
		'description'	=> '',
		'images'	=> '',
		'readmore'	=> '',
		'link'	=> '',
		), $atts )
	);
	ob_start();	?>
	<div class="topz-text-block clearfix">
		<div class="image">
			<?php echo wp_get_attachment_image( $images, 'thumbnail' ); ?>
		</div>
		<div class="content-info">
			<h3><?php echo $title; ?></h3>
			<p><?php echo $description; ?></p>
			<a href="<?php echo $link; ?>">[ <?php echo esc_html($readmore); ?> ]</a>
		</div>
	</div>
	<?php 
	$output = ob_get_clean();
	return $output;
}
add_shortcode('sw_text_blog','topz_text_blog');