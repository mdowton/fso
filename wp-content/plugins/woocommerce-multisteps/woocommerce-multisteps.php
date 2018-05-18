<?php
/**
 * Plugin Name: 	WooCommerce Multisteps
 * Plugin URI:		http://exiliensoft.com/
 * Description:		A wooCommerce multisteps plugin on how to add a custom product fields.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (!defined('WMSO_PLUGIN_DIR'))
    define( 'WMSO_PLUGIN_DIR', dirname(__FILE__) );

if (!defined('WMSO_PLUGIN_ROOT_PHP'))
    define( 'WMSO_PLUGIN_ROOT_PHP', dirname(__FILE__).'/'.basename(__FILE__)  );

if (!defined('WMSO_PLUGIN_ADMIN_DIR'))
    define( 'WMSO_PLUGIN_ADMIN_DIR', dirname(__FILE__) . '/admin' );

 require_once(WMSO_PLUGIN_ADMIN_DIR . '/admin-scripts-styles.php' );
 
 require_once(WMSO_PLUGIN_ADMIN_DIR . '/multistep-form.php' );
 require_once(WMSO_PLUGIN_ADMIN_DIR . '/woo-custom-fields.php' );
 require_once(WMSO_PLUGIN_ADMIN_DIR . '/save-woo-custom-fields.php' );
 
 require_once(WMSO_PLUGIN_DIR.'/frontend/scripts-styles.php');
/**
 * Add a custom product tab.
 */
function custom_product_tabs( $tabs) {

	$tabs['giftcard'] = array(
		'label'		=> __( 'Multisteps Product configuration', 'woocommerce' ),
		'target'	=> 'giftcard_options',
		'class'		=> array( 'show_if_gift_card' ),
// 		'priority'	=> 55, // Not yet
	);

	// Code to reposition
	$insert_at_position = 2; // This can be changed
	
	
	return $tabs;

}
add_filter( 'woocommerce_product_data_tabs', 'custom_product_tabs' );


/*** Save multistep custom woocommerce fields ***/ 
function save_custom_field_name( $cart_item_data, $product_id ) {
	/** Save Screen Orientation fields **/
	if( isset( $_REQUEST['runingtotal'] ) ) {
        $cart_item_data[ 'runingtotal' ] = $_REQUEST['runingtotal'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['draw-hinghiddenwith'] ) ) {
        $cart_item_data[ 'draw-hinghiddenwith' ] = $_REQUEST['draw-hinghiddenwith'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['draw-hinghiddenwithout'] ) ) {
        $cart_item_data[ 'draw-hinghiddenwithout' ] = $_REQUEST['draw-hinghiddenwithout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['size-hinghidden'] ) ) {
        $cart_item_data[ 'size-hinghidden' ] = $_REQUEST['size-hinghidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['size-hing'] ) ) {
        $cart_item_data[ 'size-hing' ] = $_REQUEST['size-hing'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	// if( isset( $_REQUEST['screen-holes'] ) ) {
        // $cart_item_data[ 'screen-holes' ] = $_REQUEST['screen-holes'];
        // /* below statement make sure every add to cart action as unique line item */
        // $cart_item_data['unique_key'] = md5( microtime().rand() );
    // }
	// if( isset( $_REQUEST['screen-seals'] ) ) {
        // $cart_item_data[ 'screen-seals' ] = $_REQUEST['screen-seals'];
        // /* below statement make sure every add to cart action as unique line item */
        // $cart_item_data['unique_key'] = md5( microtime().rand() );
    // }
	// if( isset( $_REQUEST['screen-dome'] ) ) {
        // $cart_item_data[ 'screen-dome' ] = $_REQUEST['screen-dome'];
        // /* below statement make sure every add to cart action as unique line item */
        // $cart_item_data['unique_key'] = md5( microtime().rand() );
    // }
	// if( isset( $_REQUEST['screen-package'] ) ) {
        // $cart_item_data[ 'screen-package' ] = $_REQUEST['screen-package'];
        // /* below statement make sure every add to cart action as unique line item */
        // $cart_item_data['unique_key'] = md5( microtime().rand() );
    // }
	// if( isset( $_REQUEST['screen-cost'] ) ) {
        // $cart_item_data[ 'screen-cost' ] = $_REQUEST['screen-cost'];
        // /* below statement make sure every add to cart action as unique line item */
        // $cart_item_data['unique_key'] = md5( microtime().rand() );
    // }
	// if( isset( $_REQUEST['screen-profit'] ) ) {
        // $cart_item_data[ 'screen-profit' ] = $_REQUEST['screen-profit'];
        // /* below statement make sure every add to cart action as unique line item */
        // $cart_item_data['unique_key'] = md5( microtime().rand() );
    // }
	
	/** Save Dimensions width,height,depth fields **/
	if( isset( $_REQUEST['doorwidth'] ) ) {
        $cart_item_data[ 'doorwidth' ] = $_REQUEST['doorwidth'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['screenheight'] ) ) {
        $cart_item_data[ 'screenheight' ] = $_REQUEST['screenheight'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['screendepth'] ) ) {
        $cart_item_data[ 'screendepth' ] = $_REQUEST['screendepth'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['screenwidth'] ) ) {
        $cart_item_data[ 'screenwidth' ] = $_REQUEST['screenwidth'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['paneldepth'] ) ) {
        $cart_item_data[ 'paneldepth' ] = $_REQUEST['paneldepth'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['hingepanel'] ) ) {
        $cart_item_data[ 'hingepanel' ] = $_REQUEST['hingepanel'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	/** Save Right box values in cart **/
	if( isset( $_REQUEST['door_widthcheckout'] ) ) {
        $cart_item_data[ 'door_widthcheckout' ] = $_REQUEST['door_widthcheckout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['screen_heightcheckout'] ) ) {
        $cart_item_data[ 'screen_heightcheckout' ] = $_REQUEST['screen_heightcheckout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['screen_depthcheckout'] ) ) {
        $cart_item_data[ 'screen_depthcheckout' ] = $_REQUEST['screen_depthcheckout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['screen_widthcheckout'] ) ) {
        $cart_item_data[ 'screen_widthcheckout' ] = $_REQUEST['screen_widthcheckout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['panel_widthcheckout'] ) ) {
        $cart_item_data[ 'panel_widthcheckout' ] = $_REQUEST['panel_widthcheckout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['hinge_panelcheckout'] ) ) {
        $cart_item_data[ 'hinge_panelcheckout' ] = $_REQUEST['hinge_panelcheckout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['panel_checkout'] ) ) {
        $cart_item_data[ 'panel_checkout' ] = $_REQUEST['panel_checkout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['doorpanel_checkout'] ) ) {
        $cart_item_data[ 'doorpanel_checkout' ] = $_REQUEST['doorpanel_checkout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['hingepanel_checkout'] ) ) {
        $cart_item_data[ 'hingepanel_checkout' ] = $_REQUEST['hingepanel_checkout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['returnpanel_checkout'] ) ) {
        $cart_item_data[ 'returnpanel_checkout' ] = $_REQUEST['returnpanel_checkout'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	/** Manufacture size values for technical drawing image **/
	if( isset( $_REQUEST['doorpanel_width'] ) ) {
        $cart_item_data[ 'doorpanel_width' ] = $_REQUEST['doorpanel_width'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['doorpanel_height'] ) ) {
        $cart_item_data[ 'doorpanel_height' ] = $_REQUEST['doorpanel_height'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['hingepanel_width'] ) ) {
        $cart_item_data[ 'hingepanel_width' ] = $_REQUEST['hingepanel_width'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['hingepanel_height'] ) ) {
        $cart_item_data[ 'hingepanel_height' ] = $_REQUEST['hingepanel_height'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['returnpanel_width'] ) ) {
        $cart_item_data[ 'returnpanel_width' ] = $_REQUEST['returnpanel_width'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['returnpanel_height'] ) ) {
        $cart_item_data[ 'returnpanel_height' ] = $_REQUEST['returnpanel_height'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['panel_width'] ) ) {
        $cart_item_data[ 'panel_width' ] = $_REQUEST['panel_width'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['panel_height'] ) ) {
        $cart_item_data[ 'panel_height' ] = $_REQUEST['panel_height'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['technicalimg_leftright'] ) ) {
        $cart_item_data[ 'technicalimg_leftright' ] = $_REQUEST['technicalimg_leftright'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['advancedoptions_bathwidthhidden'] ) ) {
        $cart_item_data[ 'advancedoptions_bathwidthhidden' ] = $_REQUEST['advancedoptions_bathwidthhidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['advancedoptions_bathheighthidden'] ) ) {
        $cart_item_data[ 'advancedoptions_bathheighthidden' ] = $_REQUEST['advancedoptions_bathheighthidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['technicalimg_with_out'] ) ) {
        $cart_item_data[ 'technicalimg_with_out' ] = $_REQUEST['technicalimg_with_out'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	
	/** Save Hardware Finish fields **/
	if( isset( $_REQUEST['fitting'] ) ) {
        $cart_item_data[ 'fitting' ] = $_REQUEST['fitting'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['prefitting'] ) ) {
        $cart_item_data[ 'prefitting' ] = $_REQUEST['prefitting'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['glass'] ) ) {
        $cart_item_data[ 'glass' ] = $_REQUEST['glass'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['preglass'] ) ) {
        $cart_item_data[ 'preglass' ] = $_REQUEST['preglass'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	if( isset( $_REQUEST['fitting-finishhidden'] ) ) {
        $cart_item_data[ 'fitting-finishhidden' ] = $_REQUEST['fitting-finishhidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	/** Save Handle Type fields **/
	if( isset( $_REQUEST['fitting-handlehidden'] ) ) {
        $cart_item_data[ 'fitting-handlehidden' ] = $_REQUEST['fitting-handlehidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	/** Save Glass Type fields **/
	if( isset( $_REQUEST['glass-typehidden'] ) ) {
        $cart_item_data[ 'glass-typehidden' ] = $_REQUEST['glass-typehidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	/** Save Glass Treatment fields **/
	if( isset( $_REQUEST['glass-treatmenthidden'] ) ) {
        $cart_item_data[ 'glass-treatmenthidden' ] = $_REQUEST['glass-treatmenthidden'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	
	/** Save Advanced options input fields **/
	if( isset( $_REQUEST['optioninput-top1value'] ) ) {
        $cart_item_data[ 'optioninput-top1value' ] = $_REQUEST['optioninput-top1value'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['optioninput-top2value'] ) ) {
        $cart_item_data[ 'optioninput-top2value' ] = $_REQUEST['optioninput-top2value'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['optioninput-bottom1value'] ) ) {
        $cart_item_data[ 'optioninput-bottom1value' ] = $_REQUEST['optioninput-bottom1value'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['optioninput-bottom2value'] ) ) {
        $cart_item_data[ 'optioninput-bottom2value' ] = $_REQUEST['optioninput-bottom2value'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['advancedoptions-bottomlastll'] ) ) {
        $cart_item_data[ 'advancedoptions-bottomlastll' ] = $_REQUEST['advancedoptions-bottomlastll'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['advancedoptions-bottomlastlr'] ) ) {
        $cart_item_data[ 'advancedoptions-bottomlastlr' ] = $_REQUEST['advancedoptions-bottomlastlr'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['advancedoptions-bottomlastrl'] ) ) {
        $cart_item_data[ 'advancedoptions-bottomlastrl' ] = $_REQUEST['advancedoptions-bottomlastrl'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }
	if( isset( $_REQUEST['advancedoptions-bottomlastrr'] ) ) {
        $cart_item_data[ 'advancedoptions-bottomlastrr' ] = $_REQUEST['advancedoptions-bottomlastrr'];
        /* below statement make sure every add to cart action as unique line item */
        $cart_item_data['unique_key'] = md5( microtime().rand() );
    }

    return $cart_item_data;
}
add_action( 'woocommerce_add_cart_item_data', 'save_custom_field_name', 10, 2 );

/*** Render multistep custom woocommerce fields on cart and checkout page ***/ 
function render_meta_on_cart_and_checkout( $cart_data, $cart_item = null ) {
    $custom_items = array();
    /* Woo 2.4.2 updates */
    if( !empty( $cart_data ) ) {
        $custom_items = $cart_data;
    }

	echo '<h3 class="checkout-title">Shower Size</h3>
	<div class="row">
		<div class="right-column-selections">';
			if( $cart_item['product_id'] == 4280 ) {
			echo ' 
			<div id="door-width" class="size_checkout"> 
				<div class="s-size-checkout">Door:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'door_widthcheckout' ].'</div>
			</div></br>
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div></br>
			<div id="panel-width" class="size_checkout"> 
				<div class="s-size-checkout">Panel:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'panel_widthcheckout' ].'</div>
			</div></br>
			<div id="hinge-panel" class="size_checkout"> 
				<div class="s-size-checkout">Hinge Panel:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'hinge_panelcheckout' ].'</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4271 ) {
			echo ' 
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div>
			<div id="screen-width" class="size_checkout"> 
				<div class="s-size-checkout">Width:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_widthcheckout' ].'</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4262 ) {
			echo ' 
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div>
			<div id="screen-width" class="size_checkout"> 
				<div class="s-size-checkout">Width:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_widthcheckout' ].'</div>
			</div>
			<div id="door-width" class="size_checkout"> 
				<div class="s-size-checkout">Door:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'door_widthcheckout' ].'</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4255 ) {
			echo ' 
			<div id="door-width" class="size_checkout"> 
				<div class="s-size-checkout">Door:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'door_widthcheckout' ].'</div>
			</div>
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div>
			<div id="screen-width" class="size_checkout"> 
				<div class="s-size-checkout">Width:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_widthcheckout' ].'</div>
			</div>
			<div id="hinge-panel" class="size_checkout"> 
				<div class="s-size-checkout">Hinge Panel:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'hinge_panelcheckout' ].'</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4248 ) {
			echo '
			<div id="door-width" class="size_checkout"> 
				<div class="s-size-checkout">Door:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'door_widthcheckout' ].'</div>
			</div>
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div>
			<div id="screen-width" class="size_checkout"> 
				<div class="s-size-checkout">Width:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_widthcheckout' ].'</div>
			</div>
			<div id="screen-depth" class="size_checkout"> 
				<div class="s-size-checkout">Depth:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_depthcheckout' ].'</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4241 ) { 
			echo ' 
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div>
			<div id="screen-width" class="size_checkout"> 
				<div class="s-size-checkout">Width:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_widthcheckout' ].'</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 3743 ) {
			echo '
			<div id="door-width" class="size_checkout"> 
				<div class="s-size-checkout">Door:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'door_widthcheckout' ].'</div>
			</div>
			<div id="screen-height" class="size_checkout"> 
				<div class="s-size-checkout">Height:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_heightcheckout' ].'</div>
			</div>
			<div id="screen-width" class="size_checkout"> 
				<div class="s-size-checkout">Width:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_widthcheckout' ].'</div>
			</div>
			<div id="screen-depth" class="size_checkout"> 
				<div class="s-size-checkout">Depth:</div>
				<div class="s-size-o-checkout">'.$cart_item[ 'screen_depthcheckout' ].'</div>
			</div>';
			}
			else{}
		echo '
		</div>
	</div>';	

	echo '<h3 class="checkout-manu">Manufacture Size</h3>
	<div class="row">
		<div class="right-column-selections">';
			if( $cart_item['product_id'] == 4280 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="panel-text">Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-p" class="s-size-o-checkout">'.$cart_item[ 'panel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="doorpanel-text">Door Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-dp" class="s-size-o-checkout">'.$cart_item[ 'doorpanel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="hingepanel-text">Hinge Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-hp" class="s-size-o-checkout">'.$cart_item[ 'hingepanel_checkout' ].'</div>
				</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4271 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="panel-text">Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-p" class="s-size-o-checkout">'.$cart_item[ 'panel_checkout' ].'</div>
				</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4262 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="doorpanel-text">Door Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-dp" class="s-size-o-checkout">'.$cart_item[ 'doorpanel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="hingepanel-text">Hinge Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-hp" class="s-size-o-checkout">'.$cart_item[ 'hingepanel_checkout' ].'</div>
				</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4255 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="panel-text">Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-p" class="s-size-o-checkout">'.$cart_item[ 'panel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="doorpanel-text">Door Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-dp" class="s-size-o-checkout">'.$cart_item[ 'doorpanel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="hingepanel-text">Hinge Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-hp" class="s-size-o-checkout">'.$cart_item[ 'hingepanel_checkout' ].'</div>
				</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4241 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="panel-text">Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-p" class="s-size-o-checkout">'.$cart_item[ 'panel_checkout' ].'</div> 
				</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 3743 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="hingepanel-text">Hinge Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-hp" class="s-size-o-checkout">'.$cart_item[ 'hingepanel_checkout' ].'</div>
				</div>
			</div> 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="doorpanel-text">Door Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-dp" class="s-size-o-checkout">'.$cart_item[ 'doorpanel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="returnpanel-text">Return Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-rp" class="s-size-o-checkout">'.$cart_item[ 'returnpanel_checkout' ].'</div>
				</div>
			</div>';
			}
			else if( $cart_item['product_id'] == 4248 ) {
			echo ' 
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="doorpanel-text">Door Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-dp" class="s-size-o-checkout">'.$cart_item[ 'doorpanel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="hingepanel-text">Hinge Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-hp" class="s-size-o-checkout">'.$cart_item[ 'hingepanel_checkout' ].'</div>
				</div>
			</div>
			<div class="size_checkout"> 
				<div class="clear right-column-heading s-size-checkoutpanel"><div id="returnpanel-text">Return Panel:</div></div>
				<div class="right-column-output">
					<div id="door-width-rp" class="s-size-o-checkout">'.$cart_item[ 'returnpanel_checkout' ].'</div>
				</div>
			</div>';
			}
			else{}
		echo'
	   </div>
	</div>';
	
	echo '<h3 class="checkout-selections">Selections</h3>';
	 /** Render Screen Orientation fields **/
	if( isset( $cart_item['size-hinghidden'] ) ) {
        $custom_items[] = array( "name" => 'Shower Type', "value" => $cart_item['size-hinghidden'] );
    }
	
	/** Render Hardware Finish fields **/
	if( isset( $cart_item['fitting-finishhidden'] ) ) {
        $custom_items[] = array( "name" => 'Hardware', "value" => $cart_item['fitting-finishhidden'] );
    }
	
	/** Render Handle Type fields **/
	if( isset( $cart_item['fitting-handlehidden'] ) ) {
        $custom_items[] = array( "name" => 'Handle', "value" => $cart_item['fitting-handlehidden'] );
    }
	
	/** Render Glass Type fields **/
	if( isset( $cart_item['glass-typehidden'] ) ) {
        $custom_items[] = array( "name" => 'Glass', "value" => $cart_item['glass-typehidden'] );
    }
	
	/** Render Glass Treatment fields **/
	if( isset( $cart_item['glass-treatmenthidden'] ) ) {
        $custom_items[] = array( "name" => 'Glass Treatment', "value" => $cart_item['glass-treatmenthidden'] );
    }


		/* foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			  echo "<pre>";
			print_r($cart_item);  
				$cart_item['data']->set_price( $cart_item[ 'runingtotal' ]);    
			}
			// get cart quantity
			 $qty = WC()->cart->get_cart_contents_count();
			 WC()->cart->subtotal = $cart_item[ 'runingtotal' ];
			 WC()->cart->total = $cart_item[ 'runingtotal' ]*$qty; */
	/* echo "<pre>";
			print_r($cart_item); */

    return $custom_items;
}
add_filter( 'woocommerce_get_item_data', 'render_meta_on_cart_and_checkout', 10, 2 );



/*** Add multistep custom woocommerce fields with order meta ***/ 
function custom_order_meta_handler( $item_id, $values, $cart_item_key ) {
	/** Order meta Screen Orientation fields **/		
	if( isset( $values['runingtotal'] ) ) {
	wc_update_order_item_meta( $item_id, "_line_subtotal", $values[ 'runingtotal' ]);
	wc_update_order_item_meta( $item_id, "_line_total", $values[ 'runingtotal' ]); 
	}
	

    if( isset( $values['size-hinghidden'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen", $values['size-hinghidden'] );
    }
	/* if( isset( $values['screen-holes'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen Orientation Holes", $values['screen-holes'] );
    }
	if( isset( $values['screen-seals'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen Orientation Seals", $values['screen-seals'] );
    }
	if( isset( $values['screen-dome'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen Orientation Dome", $values['screen-dome'] );
    }
	if( isset( $values['screen-package'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen Orientation Package", $values['screen-package'] );
    }
	if( isset( $values['screen-cost'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen Orientation Additional Cost", $values['screen-cost'] );
    }
	if( isset( $values['screen-profit'] ) ) {
        wc_add_order_item_meta( $item_id, "Screen Orientation Profit", $values['screen-profit'] );
    } */
	
	/** Order Meta Dimensions width,height,depth fields **/
	if( isset( $values['doorwidth'] ) ) {
        wc_add_order_item_meta( $item_id, "Door", $values['doorwidth'] );
    }
	if( isset( $values['screenheight'] ) ) {
        wc_add_order_item_meta( $item_id, "Height", $values['screenheight'] );
    }
	if( isset( $values['screendepth'] ) ) {
        wc_add_order_item_meta( $item_id, "Depth", $values['screendepth'] );
    }
	if( isset( $values['screenwidth'] ) ) {
        wc_add_order_item_meta( $item_id, "Width", $values['screenwidth'] );
    }
	if( isset( $values['paneldepth'] ) ) {
        wc_add_order_item_meta( $item_id, "Panel", $values['paneldepth'] );
    }
	if( isset( $values['hingepanel'] ) ) {
        wc_add_order_item_meta( $item_id, "Hinge Panel", $values['hingepanel'] );
    }
	
	/** Order Meta Hardware Finish fields **/
	if( isset( $values['fitting-finishhidden'] ) ) {
        wc_add_order_item_meta( $item_id, "Hardware Finish Title", $values['fitting-finishhidden'] );
    }
	
	/** Order Meta Handle Type fields **/
	if( isset( $values['fitting-handlehidden'] ) ) {
        wc_add_order_item_meta( $item_id, "Handle Type Title", $values['fitting-handlehidden'] );
    }
	
	/** Order Meta Glass Type fields **/
	if( isset( $values['glass-typehidden'] ) ) {
        wc_add_order_item_meta( $item_id, "Glass Type Title", $values['glass-typehidden'] );
    }
	
	/** Order Meta Glass Treatment fields **/
	if( isset( $values['glass-treatmenthidden'] ) ) {
        wc_add_order_item_meta( $item_id, "Glass Treatment Title", $values['glass-treatmenthidden'] );
    }
	
	/** Order Meta Technical Drawing fields **/
	/* if( isset( $values['draw-hinghiddenwith'] ) ) {
        wc_add_order_item_meta( $item_id, "Technical Drawing Image", "<a href='".$values['draw-hinghiddenwith']."'><img src='".$values['draw-hinghiddenwith']."' class='draw-image'></a>" );
    }
	if( isset( $values['draw-hinghiddenwithout'] ) ) {
        wc_add_order_item_meta( $item_id, "Technical Drawing Image", "<a href='".$values['draw-hinghiddenwithout']."'><img src='".$values['draw-hinghiddenwithout']."' class='draw-image'></a>" );
    } */
	
	if( isset( $values['doorpanel_width'] ) ) {
		wc_add_order_item_meta( $item_id, "_doorpanel_width", $values['doorpanel_width'] );
	}
	if( isset( $values['doorpanel_height'] ) ) {
		wc_add_order_item_meta( $item_id, "_doorpanel_height", $values['doorpanel_height'] );
	}
	if( isset( $values['hingepanel_width'] ) ) {
		wc_add_order_item_meta($item_id, "_hingepanel_width", $values['hingepanel_width'] );
	}
	if( isset( $values['hingepanel_height'] ) ) {
		wc_add_order_item_meta($item_id, "_hingepanel_height", $values['hingepanel_height'] );
	}
	if( isset( $values['returnpanel_width'] ) ) {
		wc_add_order_item_meta($item_id, "_returnpanel_width", $values['returnpanel_width'] );
	}
	if( isset( $values['returnpanel_height'] ) ) {
		wc_add_order_item_meta($item_id, "_returnpanel_height", $values['returnpanel_height'] );
	}
	if( isset( $values['panel_width'] ) ) {
		wc_add_order_item_meta($item_id, "_panel_width", $values['panel_width'] );
	}
	if( isset( $values['panel_height'] ) ) {
		wc_add_order_item_meta($item_id, "_panel_height", $values['panel_height'] );
	}
	
	if( isset( $values['technicalimg_leftright'] ) ) {
		wc_add_order_item_meta($item_id, "_technicalimg_leftright", $values['technicalimg_leftright'] );
	}
	if( isset( $values['advancedoptions_bathwidthhidden'] ) ) {
		wc_add_order_item_meta($item_id, "_advancedoptions_bathwidthhidden", $values['advancedoptions_bathwidthhidden'] );
	}
	if( isset( $values['advancedoptions_bathheighthidden'] ) ) {
		wc_add_order_item_meta($item_id, "_advancedoptions_bathheighthidden", $values['advancedoptions_bathheighthidden'] );
	}
	if( isset( $values['technicalimg_with_out'] ) ) {
		wc_add_order_item_meta($item_id, "_technicalimg_with_out", $values['technicalimg_with_out'] );
	} 
	
	if ( isset( $values['optioninput-top1value'] ) == '') {
		wc_add_order_item_meta($item_id, "_advancedoptions-topleft", 0); 
	}
	else if ( ( $values['optioninput-top1value'] ) == 0) {
		wc_add_order_item_meta($item_id, "_advancedoptions-topleft", 0); 
	}
	else{
		wc_add_order_item_meta($item_id, "_advancedoptions-topleft", $values['optioninput-top1value'] );
	}
	
	if ( isset( $values['optioninput-top2value'] ) == '') {
		wc_add_order_item_meta($item_id, "_advancedoptions-topright", 0);
	}
	else if ( ( $values['optioninput-top2value'] ) == 0) {
		wc_add_order_item_meta($item_id, "_advancedoptions-topright", 0);
	}
	else {
		wc_add_order_item_meta($item_id, "_advancedoptions-topright", $values['optioninput-top2value'] );
	}
	
	if ( isset( $values['optioninput-bottom1value'] ) == '') {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomleft', 0);
	}
	else if ( ( $values['optioninput-bottom1value'] ) == 0) {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomleft', 0);
	}
	else {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomleft', $values['optioninput-bottom1value'] );
	}
	
	if ( isset( $values['optioninput-bottom2value'] ) == '') {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomright', 0);
	}
	else if ( ( $values['optioninput-bottom2value'] ) == 0) {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomright', 0);
	}
	else {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomright', $values['optioninput-bottom2value'] );
	}
	
	if ( isset( $values['advancedoptions-bottomlastll'] ) == '') {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastll', 0);
	}
	else if ( ( $values['advancedoptions-bottomlastll'] ) == 0) {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastll', 0);
	}
	else {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastll', $values['advancedoptions-bottomlastll'] );
	}
	
	
	if ( isset( $values['advancedoptions-bottomlastlr'] ) == '') {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastlr', 0);
	}
	else if ( ( $values['advancedoptions-bottomlastlr'] ) == 0) {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastlr', 0);
	}
	else {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastlr', $values['advancedoptions-bottomlastlr'] );
	}
	
	if ( isset( $values['advancedoptions-bottomlastrl'] ) == '') {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastrl', 0);
	}
	else if ( ( $values['advancedoptions-bottomlastrl'] ) == 0) {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastrl', 0);
	}
	else {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastrl', $values['advancedoptions-bottomlastrl'] );
	}
	
	if ( isset( $values['advancedoptions-bottomlastrr'] ) == '') {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastrr', 0);
	}
	else if ( ( $values['advancedoptions-bottomlastrr'] ) == 0) {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastrr', 0);
	}
	else {
		wc_add_order_item_meta($item_id, '_advancedoptions-bottomlastrr', $values['advancedoptions-bottomlastrr'] );
	}  
	
	
	if( isset($values['draw-hinghiddenwith'])) {
		wc_add_order_item_meta($item_id, "_draw-hinghiddenwith", $values['draw-hinghiddenwith'] );
	}
	if( isset($values['draw-hinghiddenwithout'])) {
		wc_add_order_item_meta($item_id, "_draw-hinghiddenwithout", $values['draw-hinghiddenwithout'] );
	}
	
}
add_action( 'woocommerce_add_order_item_meta', 'custom_order_meta_handler', 1, 3 );

/**
 * Add the custom price field to the checkout
 **/
add_action('woocommerce_after_order_notes', 'custom_checkout_field');
function custom_checkout_field( $checkout ) {
				
				echo'
				<input type="hidden" name="enable_pickup" id="enable_pickup" value="">
				<input type="hidden" name="shipping_pickupcost" id="shipping_pickup" value="">
				<input type="hidden" name="shipping_pickupcostid" id="shipping_pickupid" value="">
				
				<input type="hidden" name="shipping_cost" id="shipping_cost" value="">
				<input type="hidden" class="input-hidden runningtotal_price" name="runningcustomprice" id="runningcustomprice" value="">';
				
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		echo '<div id="custom_pricefield_hidden_checkout_field">

				<input type="hidden" id="technicalimg_leftright" name="technicalimg_leftright" value="' . $cart_item[ 'technicalimg_leftright' ] . '">
				<input type="hidden" id="technicalimg_with_out" name="technicalimg_with_out" value="' . $cart_item[ 'technicalimg_with_out' ] . '">
				
				<input id="advancedoptions_bathwidthhidden" type="hidden" name="advancedoptions_bathwidthhidden" value="' . $cart_item[ 'advancedoptions_bathwidthhidden' ] . '"/>
				<input id="advancedoptions_bathheighthidden" type="hidden" name="advancedoptions_bathheighthidden" value="' . $cart_item[ 'advancedoptions_bathheighthidden' ] . '"/>
				
				<input type="hidden" id="doorpanel_width" name="doorpanel_width" value="' . $cart_item[ 'doorpanel_width' ] . '">
				<input type="hidden" id="doorpanel_height" name="doorpanel_height" value="' . $cart_item[ 'doorpanel_height' ] . '">
				<input type="hidden" id="hingepanel_width" name="hingepanel_width" value="' . $cart_item[ 'hingepanel_width' ] . '">
				<input type="hidden" id="hingepanel_height" name="hingepanel_height" value="' . $cart_item[ 'hingepanel_height' ] . '">
				<input type="hidden" id="returnpanel_width" name="returnpanel_width" value="' . $cart_item[ 'returnpanel_width' ] . '">
				<input type="hidden" id="returnpanel_height" name="returnpanel_height" value="' . $cart_item[ 'returnpanel_height' ] . '">
				<input type="hidden" id="panel_width" name="panel_width" value="' . $cart_item[ 'panel_width' ] . '">
				<input type="hidden" id="panel_height" name="panel_height" value="' . $cart_item[ 'panel_height' ] . '">
				
				<input id="optioninput-top1" type="hidden" name="advancedoptions-topleft" value="' . $cart_item[ 'optioninput-top1value' ] . '"/>
				<input id="optioninput-top2" type="hidden" name="advancedoptions-topright" value="' . $cart_item[ 'optioninput-top2value' ] . '"/>
				<input id="optioninput-bottom1" type="hidden" name="advancedoptions-bottomleft" value="' . $cart_item[ 'optioninput-bottom1value' ] . '"/>
				<input id="optioninput-bottom2" type="hidden" name="advancedoptions-bottomright" value="' . $cart_item[ 'optioninput-bottom2value' ] . '"/>
				<input id="optioninput-bottomleft1" type="hidden" name="advancedoptions-bottomlastll" value="' . $cart_item[ 'advancedoptions-bottomlastll' ] . '"/>
				<input id="optioninput-bottomleft2" type="hidden" name="advancedoptions-bottomlastlr" value="' . $cart_item[ 'advancedoptions-bottomlastlr' ] . '"/>
				<input id="optioninput-bottomright1" type="hidden" name="advancedoptions-bottomlastrl" value="' . $cart_item[ 'advancedoptions-bottomlastrl' ] . '"/>
				<input id="optioninput-bottomright2" type="hidden" name="advancedoptions-bottomlastrr" value="' . $cart_item[ 'advancedoptions-bottomlastrr' ] . '"/>
				
				<input id="drawhiddenwith" name="draw-hinghiddenwith" type="hidden" value="' . $cart_item[ 'draw-hinghiddenwith' ] . '">
				<input id="drawhiddenwithout" name="draw-hinghiddenwithout" type="hidden" value="' . $cart_item[ 'draw-hinghiddenwithout' ] . '">
				
			</div>';	
	}
}

/**
 * Add the field to the checkout page
 */
 function cw_custom_checkbox_fields( ) {

    echo '<div class="extra-fields">
			<span class="fss-terms">The shower cannot be resized, altered, exchanged or refunded. <br />We recommend that a suitably experienced person measures the shower.</span>
    
            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field custom-check measure1" id="measure_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="measure" id="measure1" value="1"> I am a suitably experienced person and will measure the shower myself <abbr class="required" title="required">*</abbr></label></p>
        
            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check measure2" id="measure_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="measure" id="measure2" value="1"> I will engage a suitably experienced person to measure the shower <abbr class="required" title="required">*</abbr></label></p>
         </div>
		 <div class="extra-fields">
			<span class="fss-terms"> We recommend that a suitably experienced person installs the shower</span>
    
            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field custom-check engage1" id="engage_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="engage" id="engage1" value="1"> I am a suitably experienced person and will install the shower myself <abbr class="required" title="required">*</abbr></label></p>
        
            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check engage2" id="engage_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="engage" id="engage2" value="1"> I will engage a suitably experienced person to install the shower <abbr class="required" title="required">*</abbr></label></p>
         </div>
		 <div class="extra-fields">
			<span class="fss-terms-text"><a href="https://www.framelessshowersonline.com.au/wp-content/uploads/2018/03/FSO-Terms-of-Trade.pdf" target="_blank"><strong>Here is a link to the full Terms and Conditions for you to read.</strong></a></span>
			
			<p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check" id="read_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="read" id="read" value="1"> I have read the terms and conditions <abbr class="required" title="required">*</abbr></label></p>
        
            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check" id="understand_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="understand" id="understand" value="1"> I understand the terms and conditions <abbr class="required" title="required">*</abbr></label></p>
						
			<p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check" id="agree_field" data-priority=""><label class="checkbox ">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="agree" id="agree" value="1"> I agree to the terms and conditions <abbr class="required" title="required">*</abbr></label></p>
			
			
         </div>';
}
add_action('woocommerce_review_order_before_payment', 'cw_custom_checkbox_fields');

/** old text
<div class="tcscroll">
			The terms and conditions document includes the following provisions:

a licence of the copyright in the website (and restrictions on what may be done with the material on the website)
a disclaimer of liability
a clause governing the use of passwords and restricted areas of the website
an acceptable use clause
a variation clause
an entire agreement clause
a clause specifying the applicable law and the jurisdiction in which disputes will be decided
a provision specifying some of the information which needs to be disclosed under the Ecommerce Regulations
Please read the notes accompanying the terms and conditions very carefully. You will of course need to adapt the terms to suit your website and business.

Alternative T&Cs
We publish probably the widest range of website T&Cs documents available in English.  The full range of documents are available both on website-contracts.co.uk (as MS Word documents) and Docular (where they can be edited online and downloaded in a variety of formats, including HTML).  We generally recommend using Docular.

A selection of our website T&Cs documents are listed in the tables below, but we have many more variations on website-contracts.co.uk and Docular.

            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check" id="read_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="read" id="read" value="1"> I have read the terms and conditions <abbr class="required" title="required">*</abbr></label></p>
        
            <p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check" id="understand_field" data-priority=""><label class="checkbox">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="understand" id="understand" value="1"> I understand the terms and conditions <abbr class="required" title="required">*</abbr></label></p>
						
			<p class="form-row terms-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field  custom-check" id="agree_field" data-priority=""><label class="checkbox ">
						<input type="checkbox" class="input-checkbox custom-checkbox" name="agree" id="agree" value="1"> I agree to the terms and conditions <abbr class="required" title="required">*</abbr></label></p>
			</div>
**/

/** Custom Checkbox validation **/
add_action('woocommerce_checkout_process', 'cw_custom_process_checkbox');
function cw_custom_process_checkbox() {
    global $woocommerce;

    if (!$_POST['measure'])
        wc_add_notice( __( 'Measure Shower Screen' ), 'error' );
	if (!$_POST['engage'])
        wc_add_notice( __( 'Engage Experienced Person' ), 'error' );
	if (!$_POST['read'])
        wc_add_notice( __( 'I have read the terms and conditions' ), 'error' );
	if (!$_POST['understand'])
        wc_add_notice( __( 'I understand the terms and conditions' ), 'error' );
	if (!$_POST['agree'])
        wc_add_notice( __( 'I agree  to the terms and conditions' ), 'error' );
	
	if (!$_POST['custompickup']) {
		wc_add_notice( __( 'Please choose the pick up location' ), 'error' );
	}	
	else if ($_POST['enable_pickup'] == 'yes') {
		
		/* if ((!$_POST['pick_up_locations_free']) && (!$_POST['pick_up_locations_paid'])) {
			wc_add_notice( __( 'Please choose the pick up location area' ), 'error' );
		}
		else{} */ 
		if ($_POST['shipping_pickupcost'] == '') {
			wc_add_notice( __( 'Please choose the pick up location area' ), 'error' );
		}
		else{}
		
	}
	else{}
	
}


/*** Update value of field ***/
add_action('woocommerce_checkout_update_order_meta', 'customise_checkout_field_update_order_meta');
 
function customise_checkout_field_update_order_meta($order_id)
{
	
	if (!empty($_POST['runningcustomprice'])) {
		
		if($_POST['enable_pickup'] == 'yes') {
			if(!empty($_POST['shipping_pickupcost'])) {
				$final_total_pickup = $_POST['runningcustomprice'] + $_POST['shipping_pickupcost'];
				update_post_meta($order_id, '_order_total', sanitize_text_field($final_total_pickup));
			}
			else {
				$final_total_pickup = $_POST['runningcustomprice'];
				update_post_meta($order_id, '_order_total', sanitize_text_field($final_total_pickup));
			}
		}
		else if($_POST['enable_pickup'] == 'no') {
			if(!empty($_POST['shipping_cost'])){
				$final_total_pickup = $_POST['runningcustomprice'] + $_POST['shipping_cost'];
				update_post_meta($order_id, '_order_total', sanitize_text_field($final_total_pickup));
			}
		}
		else{}
		
	}
	
	if (!empty($_POST['measure'])) {
		update_post_meta($order_id, '_screen_measure', sanitize_text_field($_POST['measure']));
	}
	if (!empty($_POST['enable_pickup'])) {
		update_post_meta($order_id, '_enable_pickup', sanitize_text_field($_POST['enable_pickup']));
	}
	if (!empty($_POST['shipping_pickupcost'])) {
		update_post_meta($order_id, '_shipping_pickupcost', sanitize_text_field($_POST['shipping_pickupcost']));
	}
	if (!empty($_POST['shipping_pickupcostid'])) {
		update_post_meta($order_id, '_shipping_pickupcostid', sanitize_text_field($_POST['shipping_pickupcostid']));
	}
	if (!empty($_POST['doorpanel_width'])) {
		update_post_meta($order_id, '_doorpanel_width', sanitize_text_field($_POST['doorpanel_width']));
	}
	if (!empty($_POST['doorpanel_height'])) {
		update_post_meta($order_id, '_doorpanel_height', sanitize_text_field($_POST['doorpanel_height']));
	}
	if (!empty($_POST['hingepanel_width'])) {
		update_post_meta($order_id, '_hingepanel_width', sanitize_text_field($_POST['hingepanel_width']));
	}
	if (!empty($_POST['hingepanel_height'])) {
		update_post_meta($order_id, '_hingepanel_height', sanitize_text_field($_POST['hingepanel_height']));
	}
	if (!empty($_POST['returnpanel_width'])) {
		update_post_meta($order_id, '_returnpanel_width', sanitize_text_field($_POST['returnpanel_width']));
	}
	if (!empty($_POST['returnpanel_height'])) {
		update_post_meta($order_id, '_returnpanel_height', sanitize_text_field($_POST['returnpanel_height']));
	}
	if (!empty($_POST['panel_width'])) {
		update_post_meta($order_id, '_panel_width', sanitize_text_field($_POST['panel_width']));
	}
	if (!empty($_POST['panel_height'])) {
		update_post_meta($order_id, '_panel_height', sanitize_text_field($_POST['panel_height']));
	}
	
	if (!empty($_POST['technicalimg_leftright'])) {
		update_post_meta($order_id, '_technicalimg_leftright', sanitize_text_field($_POST['technicalimg_leftright']));
	}
	if (!empty($_POST['advancedoptions_bathwidthhidden'])) {
		update_post_meta($order_id, '_advancedoptions_bathwidthhidden', sanitize_text_field($_POST['advancedoptions_bathwidthhidden']));
	}
	if (!empty($_POST['advancedoptions_bathheighthidden'])) {
		update_post_meta($order_id, '_advancedoptions_bathheighthidden', sanitize_text_field($_POST['advancedoptions_bathheighthidden']));
	}
	if (!empty($_POST['technicalimg_with_out'])) {
		update_post_meta($order_id, '_technicalimg_with_out', sanitize_text_field($_POST['technicalimg_with_out']));
	}
	
	if (($_POST['advancedoptions-topleft']) == '') {
		update_post_meta($order_id, '_advancedoptions-topleft', 0);
	}
	else if (($_POST['advancedoptions-topleft']) == 0) {
		update_post_meta($order_id, '_advancedoptions-topleft', 0);
	}
	else{
		update_post_meta($order_id, '_advancedoptions-topleft', sanitize_text_field($_POST['advancedoptions-topleft']));
	}
	
	if (($_POST['advancedoptions-topright']) == '') {
		update_post_meta($order_id, '_advancedoptions-topright', 0);
	}
	else if (($_POST['advancedoptions-topright']) == 0) {
		update_post_meta($order_id, '_advancedoptions-topright', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-topright', sanitize_text_field($_POST['advancedoptions-topright']));
	}
	
	if (($_POST['advancedoptions-bottomleft']) == '') {
		update_post_meta($order_id, '_advancedoptions-bottomleft', 0);
	}
	else if (($_POST['advancedoptions-bottomleft']) == 0) {
		update_post_meta($order_id, '_advancedoptions-bottomleft', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-bottomleft', sanitize_text_field($_POST['advancedoptions-bottomleft']));
	}
	
	if (($_POST['advancedoptions-bottomright']) == '') {
		update_post_meta($order_id, '_advancedoptions-bottomright', 0);
	}
	else if (($_POST['advancedoptions-bottomright']) == 0) {
		update_post_meta($order_id, '_advancedoptions-bottomright', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-bottomright', sanitize_text_field($_POST['advancedoptions-bottomright']));
	}
	
	if (($_POST['advancedoptions-bottomlastll']) == '') {
		update_post_meta($order_id, '_advancedoptions-bottomlastll', 0);
	}
	else if (($_POST['advancedoptions-bottomlastll']) == 0) {
		update_post_meta($order_id, '_advancedoptions-bottomlastll', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-bottomlastll', sanitize_text_field($_POST['advancedoptions-bottomlastll']));
	}
	
	
	if (($_POST['advancedoptions-bottomlastlr']) == '') {
		update_post_meta($order_id, '_advancedoptions-bottomlastlr', 0);
	}
	else if (($_POST['advancedoptions-bottomlastlr']) == 0) {
		update_post_meta($order_id, '_advancedoptions-bottomlastlr', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-bottomlastlr', sanitize_text_field($_POST['advancedoptions-bottomlastlr']));
	}
	
	if (($_POST['advancedoptions-bottomlastrl']) == '') {
		update_post_meta($order_id, '_advancedoptions-bottomlastrl', 0);
	}
	else if (($_POST['advancedoptions-bottomlastrl']) == 0) {
		update_post_meta($order_id, '_advancedoptions-bottomlastrl', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-bottomlastrl', sanitize_text_field($_POST['advancedoptions-bottomlastrl']));
	}
	
	if (($_POST['advancedoptions-bottomlastrr']) == '') {
		update_post_meta($order_id, '_advancedoptions-bottomlastrr', 0);
	}
	else if (($_POST['advancedoptions-bottomlastrr']) == 0) {
		update_post_meta($order_id, '_advancedoptions-bottomlastrr', 0);
	}
	else {
		update_post_meta($order_id, '_advancedoptions-bottomlastrr', sanitize_text_field($_POST['advancedoptions-bottomlastrr']));
	}
	
	
	if (!empty($_POST['draw-hinghiddenwith'])) {
		update_post_meta($order_id, '_draw-hinghiddenwith', sanitize_text_field($_POST['draw-hinghiddenwith']));
	}
	if (!empty($_POST['draw-hinghiddenwithout'])) {
		update_post_meta($order_id, '_draw-hinghiddenwithout', sanitize_text_field($_POST['draw-hinghiddenwithout']));
	} 
}

/*** Redirect to checkout page ***/
add_filter('woocommerce_add_to_cart_redirect', 'themeprefix_add_to_cart_redirect');
function themeprefix_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = wc_get_checkout_url();
 return $checkout_url;
} 

/**
 * Add 'Gift Card' product option
 */
function add_gift_card_product_option( $product_type_options ) {

	$product_type_options['gift_card'] = array(
		'id'            => '_gift_card',
		'wrapper_class' => 'show_if_simple show_if_variable',
		'label'         => __( 'Multisteps Product configuration', 'woocommerce' ),
		'description'   => __( 'Gift Cards allow users to put in personalised messages.', 'woocommerce' ),
		'default'       => 'no'
	);

	return $product_type_options;

}
add_filter( 'product_type_options', 'add_gift_card_product_option' );


/* remove WooCommerce action  */
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

/** Removing a ship to different address from checkout page **/
//add_filter( 'woocommerce_cart_needs_shipping_address', '__return_false');

// Ship to a different address closed by default
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );  
