<?php 	
	$topz_page_footer   	 = ( get_post_meta( get_the_ID(), 'page_footer_style', true ) != '' ) ? get_post_meta( get_the_ID(), 'page_footer_style', true ) : topz_options()->getCpanelValue( 'footer_style' );
	$topz_copyright_text 	 = topz_options()->getCpanelValue( 'footer_copyright' ); 
	$topz_copyright_footer = get_post_meta( get_the_ID(), 'copyright_footer_style', true );
	$topz_copyright_footer  = ( get_post_meta( get_the_ID(), 'copyright_footer_style', true ) != '' ) ? get_post_meta( get_the_ID(), 'copyright_footer_style', true ) : topz_options()->getCpanelValue('copyright_style');
?>

<footer id="footer" class="footer default theme-clearfix">
	<!-- Content footer -->
	<div class="container">
		<?php 
			if( $topz_page_footer != '' ) :
				echo sw_get_the_content_by_id( $topz_page_footer ); 
			endif;
		?>
	</div>
	<div class="footer-copyright <?php echo esc_attr( $topz_copyright_footer ); ?>">
		<div class="container">
			<!-- Copyright text -->
			<div class="copyright-text">
				<?php if( $topz_copyright_text == '' ) : ?>
					<p>&copy;<?php echo date('Y') .' '. esc_html__('WordPress Theme TopZ. All Rights Reserved. Designed by ','topz'); ?><a class="mysite" href="<?php echo esc_url( 'http://www.wpthemego.com/' ); ?>"><?php esc_html_e('WPThemeGo.com','topz');?></a>.</p>
				<?php else : ?>
					<?php echo wp_kses( $topz_copyright_text, array( 'a' => array( 'href' => array(), 'title' => array(), 'class' => array() ), 'p' => array()  ) ) ; ?>
				<?php endif; ?>
			</div>
			<?php if (is_active_sidebar('footer-copyright')){ ?>
			<div class="sidebar-copyright">
				<?php dynamic_sidebar('footer-copyright'); ?>
			</div>
		<?php } ?>
		</div>
	</div>
</footer>