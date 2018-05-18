<?php get_template_part('templates/head'); ?>
<div class="wrapper_404">
	<div class="container">
		<div class="row">
			<div class="content_404">
				<div class="item-right">
					<div class="block-top">
						<h2><?php esc_html_e( 'Oops', 'topz' ) ?> <span><?php esc_html_e( '404', 'topz' ) ?></span> <?php esc_html_e( 'Page !', 'topz' ) ?></h2>
						<div class="warning-code"><p><?php esc_html_e( 'Its looking like you may have taken a wrong turn.Dont worry...it happens to the best of us.', 'topz' ) ?></p></div>
					</div>
					<div class="block-middle">
						<div class="topz_search_404">
							<?php get_template_part( 'widgets/sw_top/search' ); ?>
						</div>
					</div>
					<div class="block-bottom">
						<a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-404 back2home" title="<?php esc_attr_e( 'Back To Home', 'topz' ) ?>"><?php esc_html_e( "Back To Home", 'topz' )?><i class="fa fa-angle-right" aria-hidden="true"></i></a>				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>