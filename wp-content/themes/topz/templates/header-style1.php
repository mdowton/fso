<?php 
/* 
** Content Header
*/
$topz_page_header = get_post_meta( get_the_ID(), 'page_header_style', true );
$topz_colorset = topz_options()->getCpanelValue('scheme');
$topz_logo = topz_options()->getCpanelValue('sitelogo');
$sticky_menu 		= topz_options()->getCpanelValue( 'sticky_menu' );
$topz_page_header  = ( get_post_meta( get_the_ID(), 'page_header_style', true ) != '' ) ? get_post_meta( get_the_ID(), 'page_header_style', true ) : topz_options()->getCpanelValue('header_style');
?>
<header id="header" class="header header-<?php echo esc_attr( $topz_page_header ); ?>">
	<div class="header-locations">
		<div class="container rows">
				<div class="locations-text pull-left">
				<ul>
					<li><strong>Pick Up Locations</strong></li>
					<li>Sydney</li>
					<li>Brisbane</li>
					<li>Melbourne</li>
					<li>Canberra</li>
					<li>Adelaide</li>
					<li>Darwin</li>
					<li>Perth</li>
					<li>Dubbo</li>
					<li>Tamworth</li>
					<li>Hobart</li>
					<li>Wollongong</li>
					<li>Newcastle</li>
					<li>Albury</li>
					<li>+ More</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container rows">
			<!-- Sidebar Top Menu -->
			<?php if (is_active_sidebar('top')) {?>
			<div class="top-header">
				<?php dynamic_sidebar('top'); ?>
			</div>
			<?php }?>
		</div>
	</div>
	<div class="header-mid">
		<div class="container rows">
			<div class="row">
				<!-- Logo -->
				<div class="top-header col-lg-3 col-md-2 pull-left">
					<div class="topz-logo">
						<?php topz_logo(); ?>
					</div>
				</div>
				<!-- Primary navbar -->
				<?php if ( has_nav_menu('primary_menu') ) { ?>
				<div id="main-menu" class="main-menu clearfix col-lg-6 col-md-7 pull-left">
					<nav id="primary-menu" class="primary-menu">
						<div class="mid-header clearfix">
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
					<div class="sw-topz-search pull-right">
						<?php get_template_part( 'widgets/sw_top/searchcate' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>