<?php
/**
 * Order Item Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-item.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
	return;
}
?>
<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'woocommerce-table__line-item order_item', $item, $order ) ); ?>">

	<td class="woocommerce-table__product-name product-name">
		<?php
			$is_visible        = $product && $product->is_visible();
			$product_permalink = apply_filters( 'woocommerce_order_item_permalink', $is_visible ? $product->get_permalink( $item ) : '', $item, $order );

			echo apply_filters( 'woocommerce_order_item_name', $product_permalink ? sprintf( '<a href="%s">%s</a>', $product_permalink, $item->get_name() ) : $item->get_name(), $item, $is_visible );
			echo //apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( '&times; %s', $item->get_quantity() ) . '</strong>', $item );

			do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order );

			//wc_display_item_meta( $item );
			
			$productid = wc_get_order_item_meta( $item_id, '_product_id', true );
				
				$screen = wc_get_order_item_meta( $item_id, 'Screen', true );
				$door = wc_get_order_item_meta( $item_id, 'Door', true );
				$height = wc_get_order_item_meta( $item_id, 'Height', true );
				$depth = wc_get_order_item_meta( $item_id, 'Depth', true );
				$width = wc_get_order_item_meta( $item_id, 'Width', true );
				$panel = wc_get_order_item_meta( $item_id, 'Panel', true );
				$hingepanel = wc_get_order_item_meta( $item_id, 'Hinge Panel', true );
				$hardwarefinish = wc_get_order_item_meta( $item_id, 'Hardware Finish Title', true );
				$handletype = wc_get_order_item_meta( $item_id, 'Handle Type Title', true );
				$glasstype = wc_get_order_item_meta( $item_id, 'Glass Type Title', true );
				$glasstreatment = wc_get_order_item_meta( $item_id, 'Glass Treatment Title', true );
				
				 $doorpanelwidth = get_post_meta( $order->get_id(), '_doorpanel_width' , true );
				 $doorpanelheight = get_post_meta( $order->get_id(), '_doorpanel_height' , true );
				 $panelwidth = get_post_meta( $order->get_id(), '_panel_width' , true );
				 $panelheight = get_post_meta( $order->get_id(), '_panel_height' , true );
				 $hingepanelwidth = get_post_meta( $order->get_id(), '_hingepanel_width' , true );
				 $hingepanelheight = get_post_meta( $order->get_id(), '_hingepanel_height' , true );
				 $returnpanelwidth = get_post_meta( $order->get_id(), '_returnpanel_width' , true );
				 $returnpanelheight = get_post_meta( $order->get_id(), '_returnpanel_height' , true );
				
				
				echo '<h3 class="checkout-title">Shower Size</h3>
						<div class="row">
							<div class="right-column-selections">';
								if( $productid == 4280 ) {
								echo ' 
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door:</div>
									<div class="s-size-o-checkout">'.$door.'&nbsp;mm</div>
								</div></br>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div></br>
								<div id="panel-width" class="size_checkout"> 
									<div class="s-size-checkout">Panel:</div>
									<div class="s-size-o-checkout">'.$panel.'&nbsp;mm</div>
								</div></br>
								<div id="hinge-panel" class="size_checkout"> 
									<div class="s-size-checkout">Hinge Panel:</div>
									<div class="s-size-o-checkout">'.$hingepanel.'&nbsp;mm</div>
								</div>';
								}
								else if( $productid == 4271 ) {
								echo ' 
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width:</div>
									<div class="s-size-o-checkout">'.$width.'&nbsp;mm</div>
								</div>';
								}
								else if( $productid == 4262 ) {
								echo ' 
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width:</div>
									<div class="s-size-o-checkout">'.$width.'&nbsp;mm</div>
								</div>
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door:</div>
									<div class="s-size-o-checkout">'.$door.'&nbsp;mm</div>
								</div>';
								}
								else if( $productid == 4255 ) {
								echo ' 
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door:</div>
									<div class="s-size-o-checkout">'.$door.'&nbsp;mm</div>
								</div>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width:</div>
									<div class="s-size-o-checkout">'.$width.'&nbsp;mm</div>
								</div>
								<div id="hinge-panel" class="size_checkout"> 
									<div class="s-size-checkout">Hinge Panel:</div>
									<div class="s-size-o-checkout">'.$hingepanel.'&nbsp;mm</div>
								</div>';
								}
								else if( $productid == 4248 ) {
								echo '
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door:</div>
									<div class="s-size-o-checkout">'.$door.'&nbsp;mm</div>
								</div>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width:</div>
									<div class="s-size-o-checkout">'.$width.'&nbsp;mm</div>
								</div>
								<div id="screen-depth" class="size_checkout"> 
									<div class="s-size-checkout">Depth:</div>
									<div class="s-size-o-checkout">'.$depth.'&nbsp;mm</div>
								</div>';
								}
								else if( $productid == 4241 ) { 
								echo ' 
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width:</div>
									<div class="s-size-o-checkout">'.$width.'&nbsp;mm</div>
								</div>';
								}
								else if( $productid == 3743 ) {
								echo '
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door:</div>
									<div class="s-size-o-checkout">'.$door.'&nbsp;mm</div>
								</div>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height:</div>
									<div class="s-size-o-checkout">'.$height.'&nbsp;mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width:</div>
									<div class="s-size-o-checkout">'.$width.'&nbsp;mm</div>
								</div>
								<div id="screen-depth" class="size_checkout"> 
									<div class="s-size-checkout">Depth:</div>
									<div class="s-size-o-checkout">'.$depth.'&nbsp;mm</div>
								</div>';
								}
								else{}
							echo '
							</div>
						</div>';

						echo '<h3 class="checkout-manu">Manufacture Size</h3>
								<div class="row">
									<div class="right-column-selections">';
										if( $productid == 4280 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel:</div>
											<div class="s-size-o-checkout">'.$panelwidth.'&nbsp;X&nbsp;'.$panelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel:</div>
											<div class="s-size-o-checkout">'.$doorpanelwidth.'&nbsp;X&nbsp;'.$doorpanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel:</div>
											<div class="s-size-o-checkout">'.$hingepanelwidth.'&nbsp;X&nbsp;'.$hingepanelheight.'&nbsp;mm</div>
										</div>';
										}
										else if( $productid == 4271 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel:</div>
											<div class="s-size-o-checkout">'.$panelwidth.'&nbsp;X&nbsp;'.$panelheight.'&nbsp;mm</div>
										</div>';
										}
										else if( $productid == 4262 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel:</div>
											<div class="s-size-o-checkout">'.$doorpanelwidth.'&nbsp;X&nbsp;'.$doorpanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel:</div>
											<div class="s-size-o-checkout">'.$hingepanelwidth.'&nbsp;X&nbsp;'.$hingepanelheight.'&nbsp;mm</div>
										</div>';
										}
										else if( $productid == 4255 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel:</div>
											<div class="s-size-o-checkout">'.$panelwidth.'&nbsp;X&nbsp;'.$panelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel:</div>
											<div class="s-size-o-checkout">'.$doorpanelwidth.'&nbsp;X&nbsp;'.$doorpanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel:</div>
											<div class="s-size-o-checkout">'.$hingepanelwidth.'&nbsp;X&nbsp;'.$hingepanelheight.'&nbsp;mm</div>
										</div>';
										}
										else if( $productid == 4241 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel:</div>
											<div class="s-size-o-checkout">'.$panelwidth.'&nbsp;X&nbsp;'.$panelheight.'&nbsp;mm</div>
										</div>';
										}
										else if( $productid == 3743 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel:</div>
											<div class="s-size-o-checkout">'.$hingepanelwidth.'&nbsp;X&nbsp;'.$hingepanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel:</div>
											<div class="s-size-o-checkout">'.$doorpanelwidth.'&nbsp;X&nbsp;'.$doorpanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Return Panel:</div>
											<div class="s-size-o-checkout">'.$returnpanelwidth.'&nbsp;X&nbsp;'.$returnpanelheight.'&nbsp;mm</div>
										</div>';
										}
										else if( $productid == 4248 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel:</div>
											<div class="s-size-o-checkout">'.$doorpanelwidth.'&nbsp;X&nbsp;'.$doorpanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel:</div>
											<div class="s-size-o-checkout">'.$hingepanelwidth.'&nbsp;X&nbsp;'.$hingepanelheight.'&nbsp;mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Return Panel:</div>
											<div class="s-size-o-checkout">'.$returnpanelwidth.'&nbsp;X&nbsp;'.$returnpanelheight.'&nbsp;mm</div>
										</div>';
										}
										else{}
									echo'
								   </div>
								</div>';

						echo '<h3 class="checkout-selections">Selections</h3>';
								echo '
								<div class="row">
									<div id="shower-type" class="size_checkout"> 
										<div class="s-size-checkout">Shower Type:</div>
										<div class="s-size-o-checkout">'.$screen.'</div>
									</div>
									<div id="hardware" class="size_checkout"> 
										<div class="s-size-checkout">Hardware:</div>
										<div class="s-size-o-checkout">'.$hardwarefinish.'</div>
									</div>';
									if($handletype){
									echo '
									<div id="handle" class="size_checkout"> 
										<div class="s-size-checkout">Handle:</div>
										<div class="s-size-o-checkout">'.$handletype.'</div>
									</div>';
									}
									echo '
									<div id="glass" class="size_checkout"> 
										<div class="s-size-checkout">Glass:</div>
										<div class="s-size-o-checkout">'.$glasstype.'</div>
									</div>
									<div id="glasstreatment" class="size_checkout"> 
										<div class="s-size-checkout">Glass Treatment:</div>
										<div class="s-size-o-checkout">'.$glasstreatment.'</div>
									</div>
								</div>';
			


			do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order );
		?>
	</td>

	<td class="woocommerce-table__product-quantity product-quantity">
		<?php echo apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( ' %s', $item->get_quantity() ) . '</strong>', $item ); ?>
	</td>
	<td class="woocommerce-table__product-subtotal product-subtotal">
		<?php echo $order->get_formatted_line_subtotal( $item ); ?>
	</td>

</tr>

<?php if ( $show_purchase_note && $purchase_note ) : ?>

<tr class="woocommerce-table__product-purchase-note product-purchase-note">

	<td colspan="2"><?php echo wpautop( do_shortcode( wp_kses_post( $purchase_note ) ) ); ?></td>

</tr>

<?php endif; ?>
