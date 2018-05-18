<?php if( !topz_options()->getCpanelValue( 'disable_search' ) ) : ?>
	<div class="top-form top-search">
		<div class="topsearch-entry">
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<form method="get" id="searchform_special" class="form-search searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
				<div>
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'topz' ); ?>" />
					<button type="submit" title="<?php esc_attr_e( 'Search', 'topz' ) ?>" class="fa fa-search button-search-pro form-button"></button>
					<input type="hidden" name="search_posttype" value="product" />
				</div>
			</form>
			<?php }else{ ?>
				<?php get_template_part('templates/searchform'); ?>
			<?php } ?>
		</div>
	</div>
	<?php 
		$topz_psearch = topz_options()->getCpanelValue('popular_search'); 
		if( $topz_psearch != '' ){
	?>
	<div class="popular-search-keyword">
		<div class="keyword-title"><?php esc_html_e( 'Popular Keywords', 'topz' ) ?>: </div>
		<?php 
			$topz_psearch = explode(',', $topz_psearch); 
			foreach( $topz_psearch as $key => $item ){
				echo ( $key == 0 ) ? '' : ',';
				echo '<a href="'. esc_url( home_url('/') ) .'?s='. esc_attr( $item ) .'">' . $item . '</a>';
			}
		?>		
	</div>
	<?php } ?>

<?php endif; ?>
	
