<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Load colors
$bg              = get_option( 'woocommerce_email_background_color' );
$body            = get_option( 'woocommerce_email_body_background_color' );
$base            = get_option( 'woocommerce_email_base_color' );
$base_text       = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text            = get_option( 'woocommerce_email_text_color' );

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
?>
#wrapper {
	background-color: <?php echo esc_attr( $bg ); ?>;
	margin: 0;
	padding: 70px 0 70px 0;
	-webkit-text-size-adjust: none !important;
	width: 100%;
}


<?/**
#template_container {
	box-shadow: 0 1px 4px rgba(0,0,0,0.1) !important;
	background-color: <?php echo esc_attr( $body ); ?>;
	border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
	border-radius: 3px !important;
}
**/?>


#template_header {
	background-color: <?php echo esc_attr( $base ); ?>;
	border-radius: 3px 3px 0 0 !important;
	color: <?php echo esc_attr( $base_text ); ?>;
	border-bottom: 0;
	font-weight: bold;
	line-height: 100%;
	vertical-align: middle;
	//font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
}

#template_header h1,
#template_header h1 a {
	color: <?php echo esc_attr( $base_text ); ?>;
}

#template_footer td {
	padding: 0;
	-webkit-border-radius: 6px;
}

#template_footer #credit {
	border:0;
	color: <?php echo esc_attr( $base_lighter_40 ); ?>;
	font-family: Arial;
	font-size:12px;
	line-height:125%;
	padding: 0 48px 48px 48px;
}

#body_content {
	background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
	padding: 48px 48px 0;
}

#body_content table td td {
	padding: 12px;
}

#body_content table td th {
	padding: 12px;
}

#body_content td ul.wc-item-meta {
	font-size: small;
	margin: 1em 0 0;
	padding: 0;
	list-style: none;
}

#body_content td ul.wc-item-meta li {
	margin: 0.5em 0 0;
	padding: 0;
}

#body_content td ul.wc-item-meta li p {
	margin: 0;
}

#body_content p {
	margin: 0 0 16px;
}

#body_content_inner {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	//font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 150%;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

.td {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
}

.address {
	padding:12px 0;
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
}

.text {
	color: <?php echo esc_attr( $text ); ?>;
	//font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
}

.link {
	color: <?php echo esc_attr( $base ); ?>;
}

#header_wrapper {
	padding: 20px 20px;
	display: block;
}

h1 {
	color: <?php echo esc_attr( $base ); ?>;
	//font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
	font-size: 30px;
	font-weight: 300;
	line-height: 100%;
	margin: 0;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
	text-shadow: 0 1px 0 <?php echo esc_attr( $base_lighter_20 ); ?>;
	-webkit-font-smoothing: antialiased;
}

h2 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	//font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
	font-size: 18px;
	font-weight: bold;
	line-height: 130%;
	margin: 0 0 18px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	//font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
	font-size: 16px;
	font-weight: bold;
	line-height: 130%;
	margin: 16px 0 8px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
	color: <?php echo esc_attr( $base ); ?>;
	font-weight: normal;
	text-decoration: underline;
}

img {
	border: none;
	display: inline;
	font-size: 14px;
	font-weight: bold;
	height: auto;
	line-height: 100%;
	outline: none;
	text-decoration: none;
	text-transform: capitalize;
}
.test1 {
    position: absolute;
    margin-top: -24.4%;
    margin-left: 12.6%;
}
.test2 {
    position: absolute;
    margin-top: -24.4%;
    margin-left: 34.6%;
}
.test3 {
    position: absolute;
    margin-top: -24.4%;
    margin-left: 54.9%;
}
.test4 {
    position: absolute;
    margin-top: -12.2%;
    margin-left: 12.6%;
}
.test5 {
    position: absolute;
    margin-top: -12%;
    margin-left: 34.6%;
}
.test6 {
    position: absolute;
    margin-top: -12%;
    margin-left: 54.9%;
}

<?/** email templates **/?>

.pdf-email-docs h3 {
	color: #0085A6;
	padding-top: 0px;
}
.pdf-email-docs {
	//font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;
	font-family: Arial, sans-serif;
	color: #363636;
}

.pdf-email-docs a {
	color: #0085A6;
	font-weight: bold;
	font-family: Arial, sans-serif;
	//font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;
}

.order-details-text, .order-confirm {
	font-weight: bold;
	font-size: 14px;
}

.approve-order {
	width: 100%;
	padding: 12px 0 10px 0;
	background: #00FFFF;
	border: 1px solid #000000;
	text-align: center;
}

.approve-order a {
	color: #000000;
	font-size: 18px;
	font-weight: bold;
}

.approve-order a span {
	color: #000000;
	font-size: 24px;
	font-weight: bold;
}


.checkout-title {
    text-transform: capitalize;
	color: #D9D9D9;
    font-size: 18px !important;
    font-weight: 600;
	text-align: center;
	background: #DC5DA5;
	border-radius: 4px;
	border: 1px solid #A9A9A9;
	padding: 10px 0px;
	max-width: 204px;
}
.size_checkout {
    display: inline-flex;
    width: 100%;
	font-weight: bold;
}
.s-size-checkout {
    width: 18%;
}
.s-size-o-checkout {
    width: 100%;
    font-weight: 400;
}  
.checkout-manu {
	text-transform: capitalize;
    color: #333333;
    font-size: 18px !important;
    font-weight: 600;
	text-align: center;
	background: #C4FCFD;
	border-radius: 4px;
	border: 1px solid #333333;
	padding: 10px 0px;
	margin-top: 15px;
	max-width: 204px;
}
.checkout-selections {
	text-transform: capitalize;
    color: #333333;
    font-size: 18px !important;
    font-weight: 600;
	text-align: center;
	background: #A6A6A6;
	border-radius: 4px;
	border: 1px solid #333333;
	padding: 10px 0px;	
	margin-top: 15px;
	max-width: 204px;
}

.introduction-text {
	color: #121212;
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 120%;
}

.confirm-order {
	background: #00FFFF;
	border: 1px solid #000000;
	text-align: center;
}

.confirm-order a {
	padding: 6px 10px 5px 10px;
	color: #000000;
	font-size: 13px;
	font-weight: bold;
	text-decoration: none;
}

.footer-text {
	font-size: 12px;
	font-style: italic;
}	
 

<?php
