<?php get_template_part('templates/head'); ?>
<?php  $maintaince_attr = ( topz_options()->getCpanelValue( 'maintaince_background' ) != '' ) ? 'style="background: url( '. esc_url( topz_options()->getCpanelValue( 'maintaince_background' ) ) .' )"' : ''; ?>
<body class="sw-topz">
	<div class="body-wrapper" <?php echo $maintaince_attr; ?>>
		<div class="header-maintaince">
			<div class="header-logo">
				<div class="container">
					<div class="row">
						<h1>
							<?php $main_logo = topz_options()->getCpanelValue( 'sitelogo' ); ?>
							<a  href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<?php if( $main_logo != '' ){ ?>
									<img src="<?php echo esc_url( $main_logo ); ?>" alt="<?php bloginfo('name'); ?>"/>
								<?php }else{
									$logo = get_template_directory_uri().'/assets/img/maintaince/logo.png';
								?>
									<img src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo('name'); ?>"/>
								<?php } ?>
							</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
	
		<div id="main-content" class="main-content">
			<div class="container">
				<div class="page-top">
					<?php echo stripslashes( topz_options()->getCpanelValue( 'maintaince_content' ) ); ?>
				</div>
				<div class="page-bottom">
				
					<div id="countdown-container" class="countdown-container"></div>
					<?php if( topz_options()->getCpanelValue( 'maintaince_form' ) != '' ): ?> 
					<div class="form-subscribers">
						<div class="form-wrap">
							<?php echo do_shortcode( topz_options()->getCpanelValue( 'maintaince_form' ) ); ?>
						</div>
					</div>
					<?php endif; ?>
					
					<!-- Social Link -->
					<?php topz_social_link() ?>
				
				</div>
			</div>
		</div>	
		<?php $topz_copyright_text 	 = topz_options()->getCpanelValue( 'footer_copyright' );  ?>
		<div class="copyright">
			<address>
				<?php if( $topz_copyright_text == '' ) : ?>
					&copy;<?php echo date('Y') .' '. esc_html__( 'Topz. All Rights Reserved. Powered by ','topz' ); ?><a class="mysite" href="<?php echo esc_url( 'http://www.smartaddons.com/' ); ?>"><?php esc_html_e('SmartAddons.com','topz');?></a>
				<?php else: ?>
					<?php echo wp_kses( $topz_copyright_text, array( 'a' => array( 'href' => array(), 'title' => array(), 'class' => array() ), 'p' => array()  ) ) ; ?>
				<?php endif; ?>
			</address>
		</div>
	</div>
<?php wp_footer(); ?>	
</body>
</html>