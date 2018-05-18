<?php
/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
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
 * @version     3.2.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';

?><table id="addresses" cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top; margin-bottom: 40px; padding:0;" border="0">
	<tr>
		<td style="text-align:<?php echo $text_align; ?>; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; border:0; padding:0;" valign="top" width="50%">
			<h2><?php _e( 'Billing address', 'woocommerce' ); ?></h2>

			<address class="address">
				<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
				<?php if ( $order->get_billing_phone() ) : ?>
					<br/><?php echo esc_html( $order->get_billing_phone() ); ?>
				<?php endif; ?>
				<?php if ( $order->get_billing_email() ): ?>
					<p><?php echo esc_html( $order->get_billing_email() ); ?></p>
				<?php endif; ?>
			</address>
		</td>
		<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && ( $shipping = $order->get_formatted_shipping_address() ) ) : ?>
			<td style="text-align:<?php echo $text_align; ?>; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; padding:0;" valign="top" width="50%">
			
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
				<h2><?php _e( 'Pickup Address', 'woocommerce' ); ?></h2>
					<?php foreach ( $pickups as $pickup ) : ?>
						<address class="address">
							<?php echo $pickup->address; ?>
							<p><a href="<?php echo $pickup->pdf; ?>" target="_blank" class="pdflink">Pickup Order PDF</a></p>
						</address>
					<?php endforeach; ?>
			<?php } 
			else {?>
				<h2><?php _e( 'Delivery address', 'woocommerce' ); ?></h2>

				<address class="address"><?php echo $shipping; ?></address>
			<?php } ?> 
			
			</td>
		<?php endif; ?>
	</tr>
</table>
