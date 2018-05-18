<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
	</head>
	<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'?>">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				<tr>
					<td align="center" valign="top">
						<div id="template_header_image">
							<?php
								if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
									echo '<p style="margin-top:0;"><img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" /></p>';
								}
							?>
						</div>
						
						<!-- addition for new orders only -->
						<?php if ( ! $sent_to_admin ) : ?>
						<table border="0" cellpadding="20" cellspacing="0" width="100%" id="template_container">
							<tr>
								<td>
									<p class="introduction-text">
										Hi, my name is Jaimee, thank you for placing your order with us.<br /><br />
										I will be looking after you and your order the whole way through the process.<br />
										My role is to help you in any way I can.<br />
										I’m always happy to help answer questions, no matter how small.<br />
										I can be contacted directly on 1300 40 20 39 or by email at <a href="mailto:support@fsoinfo.com.au">support@fsoinfo.com.au</a> <br /><br />
										Below is the Order Confirmation which sets out the specifics of your shower screen. <br />
										Take care to review the PDF Drawing and make sure the sizes are correct.<br /><br />
										Once you are happy with everything, click on the <span class="confirm-order">&nbsp; <a> Confirm Order </a>&nbsp;</span>&nbsp;tab.<br />
										I will be in touch with you again shortly after, to keep you up to date with the progress of your Order. <br /><br />
										Thanks again,<br /><br />
										Jaimee Tracey<br />
										Customer Support<br />
										Frameless Showers Online<br />
										1300 40 20 39<br /><br />
										<img src="https://www.framelessshowersonline.com.au/wp-content/uploads/2017/11/logo.png" alt="Frameless Shower Screens" style="border: none;">
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p style="text-align: center;">
										<img src="https://www.framelessshowersonline.com.au/wp-content/uploads/2018/03/order-flow-26032018.png">
									</p>
								</td>
							</tr>
						</table>
						<?php endif; ?>
						<!-- end addition -->
						
						
						<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_container">
							<tr>
								<td align="center" valign="top">
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header">
										<tr>
											<td id="header_wrapper">
												<h1><?php echo $email_heading; ?></h1>
											</td>
										</tr>
									</table>
									<!-- End Header -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<!-- Body -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_body">
										<tr>
											<td valign="top" id="body_content">
												<!-- Content -->
												<table border="0" cellpadding="10" cellspacing="0" width="100%">
													<tr>
														<td valign="top">
															<div id="body_content_inner">
