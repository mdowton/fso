<?php 
	do_action( 'before' ); 
?>
<?php if ( class_exists( 'WooCommerce' ) && !topz_options()->getCpanelValue( 'disable_cart' ) ) { ?>
<?php
	$topz_page_header = ( get_post_meta( get_the_ID(), 'page_header_style', true ) != '' ) ? get_post_meta( get_the_ID(), 'page_header_style', true ) : topz_options()->getCpanelValue('header_style');
	if($topz_page_header == 'style7'){
		get_template_part( 'woocommerce/minicart-ajax-style3' ); 
	}elseif($topz_page_header == 'style6'){
		get_template_part( 'woocommerce/minicart-ajax-style2' ); 
	}else{
		get_template_part( 'woocommerce/minicart-ajax' ); 
	}
	
?>
<?php } ?>