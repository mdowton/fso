<?php 
add_action( 'wp_enqueue_scripts', 'ya_enqueue_styles' );
function ya_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/*** Remove Description tabs ***/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );       // Remove the description tab
    unset( $tabs['reviews'] );    // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

add_action( 'init', 'jk_remove_sidebar' );
function jk_remove_sidebar() {
// if ( is_product() ) {
// remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
//      }
}


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7); 
remove_action('wp_print_styles', 'print_emoji_styles');

function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );//ALL tabs
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
	//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );// Button
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
	
function update_order_installer_status() {
  check_ajax_referer( 'nonce_update_order_installer_status', 'nonce' );
  // we are safe now
  global $wpdb;
  $state = $_POST['state'];
 $paid_pickps = $wpdb->get_results( 
						"
						SELECT * 
						FROM wp_woocommerce_pickups
						WHERE pickup = 'paid'
						AND state = '".$state."'
						AND status = 1
						ORDER BY suburb ASC
						"
					);   
					?>
						<option id="pscostselect" value="">Please select</option>
					<?php
      foreach ( $paid_pickps as $paid_pickp ) :
				?>
					
					<option data-id="<?php echo $paid_pickp->location_id; ?>" value="<?php echo $paid_pickp->cost; ?>"><?php echo $paid_pickp->suburb; ?></option>
					
		<?php endforeach; 
		//echo '<option id="pscost" value="">Clear Selection</option>';
}
 
add_action( 'wp_ajax_update_order_installer_status', 'update_order_installer_status' );
add_action( 'wp_ajax_nopriv_update_order_installer_status', 'update_order_installer_status' );

function update_order_installer_free() {
  check_ajax_referer( 'nonce_update_order_installer_free', 'nonce' );
  // we are safe now
  global $wpdb;
  $state = $_POST['state'];
 $free_pickps = $wpdb->get_results( 
						"
						SELECT * 
						FROM wp_woocommerce_pickups
						WHERE pickup = 'free'
						AND state = '".$state."'
						AND status = 1
						ORDER BY suburb ASC
						"
					);
					?>
					
   <option id="psfreeselect" value="">Please select</option>
<?php 					
      foreach ( $free_pickps as $free_pickps ) :
				?>
					
					<option data-id="<?php echo $free_pickps->location_id; ?>" value="<?php echo $free_pickps->cost; ?>"><?php echo $free_pickps->suburb; ?></option>
					
		<?php endforeach; 
		//echo '<option id="psfree" value="">Clear Selection</option>';
}
add_action( 'wp_ajax_update_order_installer_free', 'update_order_installer_free' );
add_action( 'wp_ajax_nopriv_update_order_installer_free', 'update_order_installer_free' );

/*** Custom Running Price update ***/
function update_order_installer_price() {
 check_ajax_referer( 'nonce_update_order_installer_price', 'nonce' );
  // we are safe now
	 $runingtotal = $_POST['runingtotal'];
	 $productid = $_POST['productid'];
	 update_post_meta( $productid, '_regular_price', $runingtotal );
	 update_post_meta( $productid, '_price', $runingtotal );
	 echo "Updated";
	
}
add_action( 'wp_ajax_update_order_installer_price', 'update_order_installer_price' );
add_action( 'wp_ajax_nopriv_update_order_installer_price', 'update_order_installer_price' );


//Custom icon for PayPal payment option on WooCommerce checkout page.

function paypal_checkout_icon() {
	return '/wp-content/uploads/2018/01/paypal.png'; 
}
add_filter( 'woocommerce_paypal_icon', 'paypal_checkout_icon' );

add_filter( 'wp_default_editor', create_function('', 'return "html";') );

/** Pdf landscape oriention **/
add_filter( 'wpo_wcpdf_paper_orientation', 'wcpdf_landscape', 10, 2 );
function wcpdf_landscape($paper_orientation, $template_type) {
    // use $template type ( 'invoice' or 'packing-slip') to set paper oriention for only one document type.
    $paper_orientation = 'landscape';
    return $paper_orientation;
}

/** Pdf page size **/
add_filter( 'wpo_wcpdf_paper_format', 'wcpdf_custom_inch_page_size', 10, 2 );
function wcpdf_custom_inch_page_size($paper_format, $template_type) {
    // change the values below
    $width = 5.5; //inches!
    $height = 8.5; //inches!
 
    //convert inches to points
    $paper_format = array( 0, 0, $width * 72, $height * 72 );
 
    return $paper_format;
}

/** Change shipping text on checkout page **/
add_filter( 'woocommerce_shipping_package_name', 'custom_shipping_package_name' );
function custom_shipping_package_name( $name ) {
  return 'Delivery';
}

// define the woocommerce_admin_order_totals_after_shipping callback 
function action_woocommerce_admin_order_totals_after_shipping( $order_id ) { 
    // make action magic happen here... 
	?>
	<tr class="customship">

		<style>
		.wc-order-items-editable table.wc-order-totals tr:nth-child(1) {
			display: none;
		}
		.wc-order-items-editable table.wc-order-totals tr:nth-child(3) {
			display: none;
		}
		.inside .wc-order-items-editable table tbody#order_shipping_line_items tr {
			display: none;
		}
		</style>
	
		<?php 
		$enablepickup = get_post_meta( $order_id, '_enable_pickup' , true ); 
		if($enablepickup == 'yes') {?>
		<td class="label enablepickup">Pickup:</td>
		<td width="1%"></td>
		<td class="total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo get_post_meta( $order_id, '_shipping_pickupcost' , true ); ?></span></td>
		<?php } 
		else {?>
		<td class="label enableshipping">Delivery:</td>
		<td width="1%"></td>
		<td class="total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo get_post_meta( $order_id, '_order_shipping' , true ); ?></span></td>
		<?php } ?>
	</tr>

<?php
}; 
// run the action 
do_action( 'woocommerce_admin_order_totals_after_shipping', $order_id );          
// add the action
add_action( 'woocommerce_admin_order_totals_after_shipping', 'action_woocommerce_admin_order_totals_after_shipping', 10, 1 ); 


// define the woocommerce_admin_order_totals_after_total callback 
function action_woocommerce_admin_order_totals_after_total( $order_id ) { 
    // make action magic happen here... 
	?>
	<tr class="customtotal">
		<td class="label">Total:</td>
		<td width="1%"></td>
		<td class="total customprice">
			<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo get_post_meta( $order_id, '_order_total' , true ); ?></span>			
		</td>
	</tr>

<?php
}; 
// run the action 
do_action( 'woocommerce_admin_order_totals_after_total', $order_id );          
// add the action 
add_action( 'woocommerce_admin_order_totals_after_total', 'action_woocommerce_admin_order_totals_after_total', 10, 1 ); 

add_filter( 'woocommerce_cart_no_shipping_available_html', 'change_noship_message' );
add_filter( 'woocommerce_no_shipping_available_html', 'change_noship_message' );
function change_noship_message() {
    print "Please contact us for a delivery cost to this location.";
}

function wc_custom_addresses_labels( $translated_text, $text, $domain )
{
    switch ( $translated_text )
    {
		
        case 'Billing details' : /* Front-end */
            $translated_text = __( 'Customer Details', 'woocommerce' );
            break;

        case 'Ship to a different address?' : 
            $translated_text = __( 'Delivery Address <div style="float: right; font-size: 14px; margin-left: 10px; margin-top: 2px;">(Pick up is not available for this method)</div>', 'woocommerce' );
            break;

    }
    return $translated_text;
}
add_filter( 'gettext', 'wc_custom_addresses_labels', 20, 3 );

/** auto address country **/

//billing dropdown
add_filter('woogoogad_restrict_billing_country_filter', 'my_google_billing_country');
function my_google_billing_country()
{
	return 'AU'; //change with the two-letters country code you want
}

//shipping dropdown
add_filter('woogoogad_restrict_shipping_country_filter', 'my_google_shipping_country');
function my_google_shipping_country()
{
	return 'AU'; //change with the two-letters country code you want
}

/** pdf file name changed **/
add_filter( 'wpo_wcpdf_filename', 'wpo_wcpdf_custom_filename', 10, 4 );
function wpo_wcpdf_custom_filename( $filename, $template_type, $order_ids, $context ) {
    $invoice_string = _n( 'invoice', 'invoices', count($order_ids), 'woocommerce-pdf-invoices-packing-slips' );
    $new_prefix = _n( 'pdf-drawing', 'pdf-drawings', count($order_ids), 'woocommerce-pdf-invoices-packing-slips' );
    $new_filename = str_replace($invoice_string, $new_prefix, $filename);
 
    return $new_filename;
}
// Rename the flat rate shipping label when the cost is $0
function wc_ninja_change_flat_rate_label( $label, $method ) {
	//echo $method->method_id;
	if ( 'free_shipping' === $method->method_id && $method->cost == 0 ) {
		$label = "Only Pickup is available on this postcode";
		?>
		<script>
		$(document).ready(function() {
			// By Default Disable radio button
			$("#customshippingpickup").attr('disabled', true); 
			$("#delivery_hide").text("Contact us for pricing to this postcode ");
		});
		</script>
		<?php
	}
	else{
		?>
		<script>
		$(document).ready(function() {
			// By Default Disable radio button
			$('#enable_pickup').val('no');
		});
		</script>
		<?php
	}

	return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label', 'wc_ninja_change_flat_rate_label', 10, 2 );

/** change place order text on checkout **/

add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' ); 

function woo_custom_order_button_text() {
    return __( 'Submit', 'woocommerce' ); 
}
 