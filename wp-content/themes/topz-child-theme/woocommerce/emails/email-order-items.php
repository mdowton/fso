<?php
/**
 * Email Order Items
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-items.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';

foreach ( $items as $item_id => $item ) :
	$product = $item->get_product();
	if ( apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
		?>
		<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'order_item', $item, $order ) ); ?>">
			<td class="td" style="text-align:<?php echo $text_align; ?>; vertical-align:middle; border: 1px solid #eee; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; word-wrap:break-word;">
			       <div style="position: absolute !important;margin-left: 7.6%;margin-top: -19% !important;">
			
			<?php

				// Show title/image etc
				if ( $show_image ) {
					echo apply_filters( 'woocommerce_order_item_thumbnail', '<div style="margin-bottom: 5px"><img src="' . ( $product->get_image_id() ? current( wp_get_attachment_image_src( $product->get_image_id(), 'thumbnail' ) ) : wc_placeholder_img_src() ) . '" alt="' . esc_attr__( 'Product image', 'woocommerce' ) . '" height="' . esc_attr( $image_size[1] ) . '" width="' . esc_attr( $image_size[0] ) . '" style="vertical-align:middle; margin-' . ( is_rtl() ? 'left' : 'right' ) . ': 10px;" /></div>', $item );
				}

				// Product name
				echo apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false );

				// SKU
				if ( $show_sku && is_object( $product ) && $product->get_sku() ) {
					echo ' (#' . $product->get_sku() . ')';
				}

				// allow other plugins to add additional product information here
				do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text );

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
				
				 $doorpanelwidth = wc_get_order_item_meta( $item_id, '_doorpanel_width' , true );
				 $doorpanelheight = wc_get_order_item_meta( $item_id, '_doorpanel_height' , true );
				 $panelwidth = wc_get_order_item_meta( $item_id, '_panel_width' , true );
				 $panelheight = wc_get_order_item_meta( $item_id, '_panel_height' , true );
				 $hingepanelwidth = wc_get_order_item_meta( $item_id, '_hingepanel_width' , true );
				 $hingepanelheight = wc_get_order_item_meta( $item_id, '_hingepanel_height' , true );
				 $returnpanelwidth = wc_get_order_item_meta( $item_id, '_returnpanel_width' , true );
				 $returnpanelheight = wc_get_order_item_meta( $item_id, '_returnpanel_height' , true );
				
				
				echo '<h3 class="checkout-title">Shower Size</h3>
						<div class="row">
							<div class="right-column-selections">';
								if( $productid == 4280 ) {
								echo ' 
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door: '.$door.'mm</div>
								</div></br>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div></br>
								<div id="panel-width" class="size_checkout"> 
									<div class="s-size-checkout">Panel: '.$panel.'mm</div>
								</div></br>
								<div id="hinge-panel" class="size_checkout"> 
									<div class="s-size-checkout">Hinge Panel: '.$hingepanel.'mm</div>
								</div>';
								}
								else if( $productid == 4271 ) {
								echo ' 
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width: '.$width.'mm</div>
								</div>';
								}
								else if( $productid == 4262 ) {
								echo ' 
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width: '.$width.'mm</div>
								</div>
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door: '.$door.'mm</div>
								</div>';
								}
								else if( $productid == 4255 ) {
								echo ' 
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door: '.$door.'mm</div>
								</div>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width: '.$width.'mm</div>
								</div>
								<div id="hinge-panel" class="size_checkout"> 
									<div class="s-size-checkout">Hinge Panel: '.$hingepanel.'mm</div>
								</div>';
								}
								else if( $productid == 4248 ) {
								echo '
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door: '.$door.'mm</div>
								</div>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width: '.$width.'mm</div>
								</div>
								<div id="screen-depth" class="size_checkout"> 
									<div class="s-size-checkout">Depth: '.$depth.'mm</div>
								</div>';
								}
								else if( $productid == 4241 ) { 
								echo ' 
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width: '.$width.'mm</div>
								</div>';
								}
								else if( $productid == 3743 ) {
								echo '
								<div id="door-width" class="size_checkout"> 
									<div class="s-size-checkout">Door: '.$door.'mm</div>
								</div>
								<div id="screen-height" class="size_checkout"> 
									<div class="s-size-checkout">Height: '.$height.'mm</div>
								</div>
								<div id="screen-width" class="size_checkout"> 
									<div class="s-size-checkout">Width: '.$width.'mm</div>
								</div>
								<div id="screen-depth" class="size_checkout"> 
									<div class="s-size-checkout">Depth: '.$depth.'mm</div>
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
											<div class="s-size-checkout">Panel: '.$panelwidth.'mm&nbsp;X&nbsp;'.$panelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel: '.$doorpanelwidth.'mm&nbsp;X&nbsp;'.$doorpanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel: '.$hingepanelwidth.'mm&nbsp;X&nbsp;'.$hingepanelheight.'mm</div>
										</div>';
										}
										else if( $productid == 4271 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel: '.$panelwidth.'mm&nbsp;X&nbsp;'.$panelheight.'mm</div>
										</div>';
										}
										else if( $productid == 4262 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel: '.$doorpanelwidth.'mm&nbsp;X&nbsp;'.$doorpanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel: '.$hingepanelwidth.'mm&nbsp;X&nbsp;'.$hingepanelheight.'mm</div>
										</div>';
										}
										else if( $productid == 4255 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel: '.$panelwidth.'mm&nbsp;X&nbsp;'.$panelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel: '.$doorpanelwidth.'mm&nbsp;X&nbsp;'.$doorpanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel: '.$hingepanelwidth.'mm&nbsp;X&nbsp;'.$hingepanelheight.'mm</div>
										</div>';
										}
										else if( $productid == 4241 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Panel: '.$panelwidth.'mm&nbsp;X&nbsp;'.$panelheight.'mm</div>
										</div>';
										}
										else if( $productid == 3743 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel: '.$hingepanelwidth.'mm&nbsp;X&nbsp;'.$hingepanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel: '.$doorpanelwidth.'mm&nbsp;X&nbsp;'.$doorpanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Return Panel: '.$returnpanelwidth.'mm&nbsp;X&nbsp;'.$returnpanelheight.'mm</div>
										</div>';
										}
										else if( $productid == 4248 ) {
										echo ' 
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Door Panel: '.$doorpanelwidth.'mm&nbsp;X&nbsp;'.$doorpanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Hinge Panel: '.$hingepanelwidth.'mm&nbsp;X&nbsp;'.$hingepanelheight.'mm</div>
										</div>
										<div id="shower-type" class="size_checkout"> 
											<div class="s-size-checkout">Return Panel: '.$returnpanelwidth.'mm&nbsp;X&nbsp;'.$returnpanelheight.'mm</div>
										</div>';
										}
										else{}
									echo'
								   </div>
								</div>';

						echo '<h3 class="checkout-selections">Selections</h3>';
								echo '
								<div id="shower-type" class="size_checkout"> 
									<div class="s-size-checkout">Shower Type: '.$screen.'</div>
								</div>
								<div id="hardware" class="size_checkout"> 
									<div class="s-size-checkout">Hardware: '.$hardwarefinish.'</div>
								</div>';
								if($handletype){
								echo '
								<div id="handle" class="size_checkout"> 
									<div class="s-size-checkout">Handle: '.$handletype.'</div>
								</div>';
								}
								echo '
								<div id="glass" class="size_checkout"> 
									<div class="s-size-checkout">Glass: '.$glasstype.'</div>
								</div>
								<div id="glasstreatment" class="size_checkout"> 
									<div class="s-size-checkout">Glass Treatment: '.$glasstreatment.'</div>
								</div>';     
						
				
				// allow other plugins to add additional product information here
				do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text );

			?></td>
			 <td class="td" style="text-align:<?php echo $text_align; ?>; vertical-align:middle; border: 1px solid #eee; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;"><?php echo apply_filters( 'woocommerce_email_order_item_quantity', $item->get_quantity(), $item ); ?></td>
			<td class="td" style="text-align:<?php echo $text_align; ?>; vertical-align:middle; border: 1px solid #eee; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;"><?php echo $order->get_formatted_line_subtotal( $item ); ?></td>
			
		</tr>
		<?php 
	}

	if ( $show_purchase_note && is_object( $product ) && ( $purchase_note = $product->get_purchase_note() ) ) : ?>
		<tr>
			<td colspan="3" style="text-align:<?php echo $text_align; ?>; vertical-align:middle; border: 1px solid #eee; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;"><?php echo wpautop( do_shortcode( wp_kses_post( $purchase_note ) ) ); ?></td>
		</tr>
	<?php endif; ?>

<?php endforeach; ?>
