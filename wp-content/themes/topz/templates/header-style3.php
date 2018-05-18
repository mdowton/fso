<?php
/* 
** Content Header
*/
$topz_page_header = get_post_meta( get_the_ID(), 'page_header_style', true );
$topz_colorset = topz_options()->getCpanelValue('scheme');
$sticky_menu 		= topz_options()->getCpanelValue( 'sticky_menu' );
$topz_page_header  = ( get_post_meta( get_the_ID(), 'page_header_style', true ) != '' ) ? get_post_meta( get_the_ID(), 'page_header_style', true ) : topz_options()->getCpanelValue('header_style');
?>
<header id="header" class="header header-<?php echo esc_attr( $topz_page_header );?>">
	<div class="header-top">
		<div class="container">
			<!-- Sidebar Top Menu -->
			<?php if (is_active_sidebar('top3')) {?>
			<div class="top-header">
				<?php dynamic_sidebar('top3'); ?>
			</div>
			<?php }?>
		</div>
	</div>
	<div class="header-mid">
		<div class="container">
			<div class="header-open pull-left">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<!-- Logo -->
			<div class="top-header col-lg-3 col-md-2">
				<div class="topz-logo">
					<?php topz_logo(); ?>
				</div>
			</div>
			<?php if( !topz_options()->getCpanelValue( 'disable_cart' ) ) : ?>
				<div class="sw-topz-cart pull-right">
					<span><?php esc_html_e( 'Cart', 'topz' ) ?></span>
					<?php get_template_part( 'woocommerce/minicart-ajax' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<!-- Primary navbar -->
		<?php if ( has_nav_menu('vertical_menu') ) { ?>
		<div id="main-menu" class="main-menu main-menu-style">
			<div class="header-close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<nav id="primary-menu" class="primary-menu">
				<div class="mid-header">
					<div class="navbar-inner navbar-inverse">
						<?php
						$topz_menu_class = 'nav nav-pills';
						if ( 'mega' == topz_options()->getCpanelValue('menu_type') ){
							$topz_menu_class .= ' nav-mega';
						} else $topz_menu_class .= ' nav-css';
						?>
						<?php wp_nav_menu(array('theme_location' => 'vertical_menu', 'menu_class' => $topz_menu_class)); ?>
					</div>
				</div>
			</nav>
		</div>			
		<?php } ?>
		<!-- /Primary navbar -->
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<!-- Primary navbar -->
				<?php if ( has_nav_menu('primary_menu') ) { ?>
				<div id="main-menu" class="main-menu">
					<nav id="primary-menu" class="primary-menu">
						<div class="mid-header">
							<div class="navbar-inner navbar-inverse">
								<?php
								$topz_menu_class = 'nav nav-pills';
								if ( 'mega' == topz_options()->getCpanelValue('menu_type') ){
									$topz_menu_class .= ' nav-mega';
								} else $topz_menu_class .= ' nav-css';
								?>
								<?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => $topz_menu_class)); ?>
							</div>
						</div>
					</nav>
				</div>			
				<?php } ?>
				<!-- /Primary navbar -->
				<!-- Sidebar Top Menu -->
				<?php if( !topz_options()->getCpanelValue( 'disable_search' ) ) : ?>
					<div class="sw-topz-search">
						<span class="search-tog"><i class="fa fa-search" aria-hidden="true"></i></span>
						<?php get_template_part( 'widgets/sw_top/searchcate' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>