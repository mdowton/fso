<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
	<thead>
		<tr>
			<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
			do_action( 'woocommerce_review_order_before_cart_contents' );

			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					?>
					<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
						<td class="product-name">
							<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
							<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
							<?php echo WC()->cart->get_item_data( $cart_item ); ?>
						</td>
						<td class="product-total">
							<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
						</td>
					</tr>
					<?php
				}
			}

			do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
	</tbody>
	<tfoot>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>
		<script>
					$('document').ready(function(){
						$('.cart-pickup').hide();
						$('.cart-pickup-free').hide();
						$('.cart-pickup-cost').hide();
						$('.shipping').hide();
						
						$('.custompickup').on( "change", function() {
							if($('#customlocalpickup').is(":checked")){
								$('#customlocalpickup').attr('checked', true);
								$('#customshippingpickup').attr('checked', false);
								$('.cart-pickup').show();
								$('.cart-pickup-free').show();
								$('.cart-pickup-cost').show();
								$('.shipping').hide();
								$('#enable_pickup').val('yes');
							}
							else if($('#customshippingpickup').is(":checked")){
								$('#customshippingpickup').attr('checked', true);
								$('#customlocalpickup').attr('checked', false);
								$('.shipping').show();
								$('.cart-pickup').hide();
								$('.cart-pickup-free').hide();
								$('.cart-pickup-cost').hide();
								$('#enable_pickup').val('no');
							} 
							else {
								/* $('#customlocalpickup').attr('checked', false);
								$('.cart-pickup').hide();
								$('.cart-pickup-free').hide();
								$('.cart-pickup-cost').hide();
								$('#enable_pickup').val('no'); */
							} 
						});
						
						$('.custompickup').on( "change", function() {
							var enablepick = $('#enable_pickup').val();
							if(enablepick == 'yes'){
								$('select#free_pick_up_locations').change(function() {
									var pickupidfree = $("#free_pick_up_locations option:selected").data('id');
									var pickupidfreeprice = $("#free_pick_up_locations option:selected").val();
									$('#shipping_pickupid').val(pickupidfree);
									$('#shipping_pickup').val(pickupidfreeprice);
									//alert(pickupidfree);
								});
								$('select#cost_pick_up_locations').change(function() {
									var pickupidcost = $("#cost_pick_up_locations option:selected").data('id');
									var pickupidcostprice = $("#cost_pick_up_locations option:selected").val();
									$('#shipping_pickupid').val(pickupidcost);
									$('#shipping_pickup').val(pickupidcostprice);
									//alert(pickupidcost);
								});
							}
							else{}
						});
						
						setTimeout(shipping_changed, 1500);
						$('input[name="shipping_method[0]"]').change(function () {
							setTimeout(shipping_changed, 1500);
                                
						});      
						
						function shipping_changed()
						{
							var shipping = $('.current_shipping_cost').text();
							var shipping = $.trim(shipping);
							shipping_cost = shipping.substr(1);
							if (isNaN( shipping_cost )) {
									shipping_cost = 0;
								} else {
									shipping_cost;
								}
							//	alert(shipping_cost);
							$('#shipping_cost').val(shipping_cost);
							if(shipping_cost > 0){
								$('#customshippingpickup').attr('checked', true);
								$('.shipping').show(); 
							}
							var sub_price = $('.cart-subtotal .get_subtotal .woocommerce-Price-amount.amount').text();
							var subtotalprice = Math.round(sub_price.replace(/\D(\d{2})$/, '.$1').replace(/[^\d.]+/g, ""));
							$('#runningcustomprice').val(subtotalprice);
							
							var runningcustomprice = parseInt($('input[name="runningcustomprice"]').val());
							var pickup_final_total = parseFloat(runningcustomprice) + parseFloat(shipping_cost);
							$('.order-total .woocommerce-Price-amount').html('<b>$' + (pickup_final_total) + '.00</b>');      
						}
						
						$('#reset_loc').click(function(){
							
							$('#free_pick_up_locations').prop('selectedIndex',0);
							$('#cost_pick_up_locations').prop('selectedIndex',0);
						});
					});
					$('#pickup_state').on( "change", function() {
					var state =$('#pickup_state').val();
							$.ajax({
							   type: 'post',
							   url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
							   data: 'action=update_order_installer_free&nonce=<?php echo wp_create_nonce('nonce_update_order_installer_free'); ?>&state='+state,  
							   success: function(data){
								    console.log(data);
								 $('#free_pick_up_locations').html(data);	
							   },
							   error: function(xhr, textStatus, errorThrown) {
								 // console.log(xhr.responseText);
							   }
							});
                        $.ajax({
							   type: 'post',
							   url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
							   data: 'action=update_order_installer_status&nonce=<?php echo wp_create_nonce('nonce_update_order_installer_status'); ?>&state='+state,  
							   success: function(data){
								   // console.log(data);
								 $('#cost_pick_up_locations').html(data);	
							   },
							   error: function(xhr, textStatus, errorThrown) {
								 // console.log(xhr.responseText);
							   }
							});

					});
		</script>
		<!-- shipping pickup locations -->
		<script>
					$('#reset').click(function() {
						$(":reset").css("background-color", "#d5d5d5");
						$('#cost_pick_up_locations').prop('disabled', false);
						$('#free_pick_up_locations').prop('disabled', false);
						$('#shipping_pickupid').val('');
						$('#shipping_pickup').val('');
						$('#pickup_state').prop('selectedIndex',0);
						$('#free_pick_up_locations').prop('selectedIndex',0);
						$('#cost_pick_up_locations').prop('selectedIndex',0);
					});
					$('#cost_pick_up_locations').on( "change", function() {
						var pscost = ($("#pscost").is(":selected"));
						var cost = parseInt($("#cost_pick_up_locations").val());
						var runningcustomprice = parseInt($('input[name="runningcustomprice"]').val());
						var pickup_final_total = runningcustomprice + cost;
						
						$('.order-total .woocommerce-Price-amount').html('<b>$' + (runningcustomprice) + '.00</b>');
						//alert(pickup_final_total);
						
						if(pscost){
							$('#free_pick_up_locations').prop('disabled', false);
						}
						else{
							$('#free_pick_up_locations').prop('disabled', true);
						}
						
						if(cost){
							//$('#shipping_pickup').val('' + (cost) + '');
							$('.order-total .woocommerce-Price-amount').html('<b>$' + (pickup_final_total) + '.00</b>');
							//alert(cost);
						}
					});
					$('#free_pick_up_locations').on( "change", function() {
						var psfree = ($("#psfree").is(":selected"));
						var free = parseInt($("#free_pick_up_locations").val());
						var runningcustomprice = parseInt($('input[name="runningcustomprice"]').val());
						var pickup_final_total = runningcustomprice + free;
						
						$('.order-total .woocommerce-Price-amount').html('<b>$' + (runningcustomprice) + '.00</b>');
						//alert(pickup_final_total);
						
						if(psfree){
							$('#cost_pick_up_locations').prop('disabled', false);
						}
						else{
							$('#cost_pick_up_locations').prop('disabled', true);
						}
						
						if(free){
							//$('#shipping_pickup').val('' + (free) + '');
							$('.order-total .woocommerce-Price-amount').html('<b>$' + (pickup_final_total) + '.00</b>');
							//alert(free);
						}
					});

		</script>
	</tfoot>
		
	<tfoot id="local_pickups">
		<tr>
			<th colspan="2">Select a pick up or delivery option</th>
		</tr>
		<tr>
			<p class="form-row pickup-check form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field " id="check_pickup" data-priority="">
			<th>Pick up Options</th>
			<td><input type="radio" name="custompickup" class="custompickup" id="customlocalpickup"/></td>
			</p>
		</tr>
		<tr>
			<th>Delivery Options</th>
			<td><input type="radio" name="custompickup" class="custompickup" id="customshippingpickup"/><div id="delivery_hide"></div></td>
		</tr>
		
		<tr class="cart-pickup">
			<th>Pickup States</th>
			<td>
				<select name="pickup_state" id="pickup_state" class="select_pickup"  data-placeholder="">
					<option value="">Please Select…</option>
					<option value="ACT">Australian Capital Territory</option>
					<option value="NSW">New South Wales</option>
					<option value="NT">Northern Territory</option>
					<option value="QLD">Queensland</option>
					<option value="SA">South Australia</option>
					<option value="TAS">Tasmania</option>
					<option value="VIC">Victoria</option>
					<option value="WA">Western Australia</option>
				</select>
			</td>
		</tr>
		<tr class="cart-pickup-free">
			<th>Free Pickup Locations</th>
			<td>
				<select name="pick_up_locations_free" id="free_pick_up_locations" class="select_pickup"  data-placeholder="">
				<option value="0">Please select</option>
				</select>
				<input id="reset" type="button" value="Reset">
			</td>
		</tr>
		<tr class="cart-pickup-cost">
			<th>At Cost Pickup Locations</th>
			<td>
				<select name="pick_up_locations_paid" id="cost_pick_up_locations" class="select_pickup"  data-placeholder="">
					<option value="0">Please select</option>

				</select>
			</td>
		</tr>   
		
		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

			<?php wc_cart_totals_shipping_html(); ?>

			<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

		<?php endif; ?>
		
    </tfoot>

		
<tfoot>
	  
		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
					<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
						<th><?php echo esc_html( $tax->label ); ?></th>
						<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>
		<tr class="cart-subtotal">
			<th><?php _e( 'Subtotal', 'woocommerce' ); ?></th>
			<td class="get_subtotal"><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>
		<tr class="order-total">
			<th><?php _e( 'Total', 'woocommerce' ); ?></th>
			<td><?php wc_cart_totals_order_total_html(); ?></td>
		</tr>
		<tr class="shipping-total">
			<th></th>
			<td>
			<div class="current_shipping_cost">
                <?php
				echo $current_shipping_cost = WC()->cart->get_cart_shipping_total();
				?>
            </div>
			</td>
		</tr>
		<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

	</tfoot>
</table>
