<?php
	if( topz_mobile_check() ) : ?>
	<?php if (!have_posts()) : ?>
	<div class="no-result">
		<div class="no-result-image">
			<span class="image">
				<img class="img_logo" alt="404" src="<?php echo get_template_directory_uri(); ?>/assets/img/no-result.png">
			</span>
		</div>
		<h3><?php esc_html_e('no products found','topz');?></h3>
		<p><?php esc_html_e('Sorry, but nothing matched your search terms.','topz');?><br/><?php  esc_html_e('Please try again with some different keywords.', 'topz'); ?></p>
		<a href="<?php echo get_permalink( get_option('woocommerce_shop_page_id') ); ?>" title="Shop"><?php esc_html_e('back to categories','topz');?></a>
	</div>
<?php endif; ?>
<?php else : ?>
<?php if (!have_posts()) : ?>
	<div class="no-result">		
			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'topz'); ?></p>
		<?php get_search_form(); ?>
	</div>
<?php endif; ?>
<?php endif; ?>