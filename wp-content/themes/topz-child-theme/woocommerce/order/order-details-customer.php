<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
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
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="woocommerce-customer-details">

	<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

		<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">

			<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

				<?php endif; ?>

				<h2 class="woocommerce-column__title"><?php _e( 'Billing address', 'woocommerce' ); ?></h2>

				<address>
					<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
					<?php if ( $order->get_billing_phone() ) : ?>
						<p class="woocommerce-customer-details--phone"><?php echo esc_html( $order->get_billing_phone() ); ?></p>
					<?php endif; ?>
					<?php if ( $order->get_billing_email() ) : ?>
						<p class="woocommerce-customer-details--email"><?php echo esc_html( $order->get_billing_email() ); ?></p>
					<?php endif; ?>
				</address>

				<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

			</div><!-- /.col-1 -->

			<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
				<?php
				$enablepickup = get_post_meta( $order->get_id(), '_enable_pickup' , true );
				if($enablepickup == 'yes') {
					global $wpdb;
					$pickupid = get_post_meta( $order->get_id(), '_shipping_pickupcostid' , true );
					//echo $pickupid;
					$pickups = $wpdb->get_results( 
						"
						SELECT * 
						FROM wp_woocommerce_pickups
						WHERE location_id = '".$pickupid."'  
						"
					);
				?>
					<h2 class="woocommerce-column__title"><?php _e( 'Pickup address', 'woocommerce' ); ?></h2>
					<?php foreach ( $pickups as $pickup ) : ?>
						<address>
							<?php echo $pickup->address; ?>
							<p><a href="<?php echo $pickup->pdf; ?>" target="_blank" class="pdflink">Pickup Order PDF</a></p>
						</address>
					<?php endforeach; ?>
				<?php } 
				else {?>
					<h2 class="woocommerce-column__title"><?php _e( 'Delivery address', 'woocommerce' ); ?></h2>

					<address>
						<?php echo ( $address = $order->get_formatted_shipping_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
					</address>
				<?php } ?> 

			</div><!-- /.col-2 -->

		</section><!-- /.col2-set -->

	<?php endif; ?>

</section>
