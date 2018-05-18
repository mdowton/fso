<?php finance_get_header(); ?>
	<section class="error-404">
		<div class="thm-container">
			<div class="text-center">
				<h1><?php echo esc_html('404','finance'); ?></h1>
				<h2><?php echo esc_html('Oops! That page cannot be found', 'finance'); ?></h2>
				<p><?php echo esc_html('Sorry, but the page you are looking for does not existing', 'finance'); ?></p>
				<a href="<?php echo get_home_url() ?>" class="thm-button inverse"><?php echo esc_html('go to home page', 'finance'); ?></a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>