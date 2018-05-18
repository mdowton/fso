<?php
/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
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

do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php if ( ! $sent_to_admin ) : ?>
	<p class="order-details-text">
		Thank you for placing your Order today for Made-to-Measure Goods.<br />
		Attached for your review is the PDF drawing of those goods implementing the dimensions specified by the Buyer in that Order.<br />
		Please carefully review the PDF and satisfy yourself that the Goods you require are accurately shown.<br /><br />
		You will find 7 documents listed below with corresponding directions.<br />
		Please review all the documentation and bring to our attention any items that need correcting.
	</p>

<table class="pdf-email-docs" style="font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" border="1" bordercolor="#121212" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td><h3>PDF Drawing</h3>
		Please check the attached document to ensure that the measurements you have supplied and require are correctly shown.</td>
  </tr>
  <tr>
    <td><h3>Terms of Trade</h3>
		Please read this document. <a href="https://www.framelessshowersonline.com.au/wp-content/uploads/2018/03/FSO-Terms-of-Trade.pdf">Click here to view</a></td>
  </tr>
  <tr>
    <td><h3>Vehicle Loading</h3>
		This document provides details about your package and what you will require if you are picking it up.  <a href="https://www.framelessshowersonline.com.au/wp-content/uploads/2018/03/Vehicle-Loading.pdf">Click here to view</a></td>
  </tr>
  <tr>
    <td><h3>Unpacking Procedure</h3>
		This document sets out the procedure that is required when unpacking your Goods.  <a href="https://www.framelessshowersonline.com.au/wp-content/uploads/2018/03/Unpacking-Procedure.pdf">Click here to view</a></td>
  </tr>
  <tr>
    <td><h3>Installation Procedure</h3>
		This document sets out the procedure that is required when your Goods are installed.  <a href="https://www.framelessshowersonline.com.au/wp-content/uploads/2018/03/Installation-Procedure.pdf">Click here to view</a></td>
  </tr>
</table>
<br />
	<h2><?php printf( __( 'Order #%s', 'woocommerce' ), $order->get_order_number() ); ?> (<?php printf( '<time datetime="%s">%s</time>', $order->get_date_created()->format( 'c' ), wc_format_datetime( $order->get_date_created() ) ); ?>)</h2>
<?php else : ?>
	<h2><a class="link" href="<?php echo esc_url( admin_url( 'post.php?post=' . $order->get_id() . '&action=edit' ) ); ?>"><?php printf( __( 'Order #%s', 'woocommerce' ), $order->get_order_number() ); ?></a> (<?php printf( '<time datetime="%s">%s</time>', $order->get_date_created()->format( 'c' ), wc_format_datetime( $order->get_date_created() ) ); ?>)</h2>
<?php endif; ?>

<div style="margin-bottom: 40px;">
	<table class="td" cellspacing="0" cellpadding="6" style="width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" border="1">
		<thead>
			<tr>
				<th class="td" scope="col" style="text-align:<?php echo $text_align; ?>;"><?php _e( 'Product', 'woocommerce' ); ?></th>
				<th class="td" scope="col" style="text-align:<?php echo $text_align; ?>;"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="td" scope="col" style="text-align:<?php echo $text_align; ?>;"><?php _e( 'Price', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php echo wc_get_email_order_items( $order, array(
				'show_sku'      => $sent_to_admin,
				'show_image'    => false,
				'image_size'    => array( 32, 32 ),
				'plain_text'    => $plain_text,
				'sent_to_admin' => $sent_to_admin,
			) ); ?> 
		</tbody>
		<tfoot>
			<?php
			if ( $totals = $order->get_order_item_totals() ) {
			$i = 0;
			foreach ( $totals as $total ) {
			$i++;
			 
			//start ignore total labels pt1
			if (($total['label'] !== 'Shipping:') ) :
			//end ignore total labels pt1
			?>
			<tr>
			 <th scope="row" colspan="2" style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['label']; ?></th>
			 <td style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['value']; ?></td>
			</tr>
			 
			<?php
			endif;
			if ( $i == 2 ):
			?>
			<tr>
			<?php 
			$enablepickup = get_post_meta( $order->get_id(), '_enable_pickup' , true );
			if($enablepickup == 'yes') {?>
			 <th scope="row" colspan="2" style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo "Pickup"; ?></th>
			 <td style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo wc_price(get_post_meta( $order->get_id(), '_shipping_pickupcost' , true )); ?></td>
			 <?php } 
			else {?>
			 <th scope="row" colspan="2" style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo "Delivery"; ?></th> 
			 <td style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo wc_price(get_post_meta( $order->get_id(), '_order_shipping' , true )); ?></td>
			 <?php } ?> 
			</tr>
			
			<?php
			endif;
			//end ignore total labels pt2 
			}
			}
			?>
		</tfoot>
	</table>
	<p class="order-confirm">
	<br />
		Please click on the link below to instruct us to proceed with your Order.<br />
		Upon receipt of your instructions and the payment into our account, your Goods will proceed to the manufacturer and you will be notified of such.
	</p>
	<p class="approve-order">
	<a href="https://www.framelessshowersonline.com.au/thank-you/?email=<?php echo get_post_meta( $order->get_id(), '_billing_email' , true ); ?>" class="acceptterms">Accept Terms - Approve Documents - <span>CONFIRM ORDER</span></a>
	</p>
</div>

<p style="margin:0 0 16px">
	<?php 
	$enablepickup = get_post_meta( $order->get_id(), '_enable_pickup' , true );
	if($enablepickup == 'yes') {?>
		<strong>Payment Method:</strong>
		<?php echo get_post_meta( $order->get_id(), '_payment_method_title' , true ); ?>
	<?php } 
	else {?>
		<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email ); ?> 
	<?php } ?> 
</p> 

