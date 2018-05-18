<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php get_template_part('header'); ?>

<?php topz_breadcrumb_title(); ?>

<div class="container">
	<div class="row">

		<div id="contents-detail" <?php topz_content_product_detail(); ?> role="main">
			<?php
				/**
				 * woocommerce_before_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action('woocommerce_before_main_content');
			?>
			<div class="single-product clearfix">
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>
			
			</div>
			
			<?php
				/**
				 * woocommerce_after_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action('woocommerce_after_main_content');
			?>
		</div>
		
		<?php if ( is_active_sidebar('left-product-detail') && topz_sidebar_product() == 'left' ):
			$topz_left_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_left_expand');
			$topz_left_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_left_expand_md');
			$topz_left_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_left_expand_sm');
		?>
		<aside id="left" class="sidebar <?php echo esc_attr($topz_left_span_class); ?>">
			<?php dynamic_sidebar('left-product-detail'); ?>
		</aside>
		<?php endif; ?>
		<?php if ( is_active_sidebar('right-product-detail') && topz_sidebar_product() == 'right' ):
			$topz_right_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_right_expand');
			$topz_right_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_right_expand_md');
			$topz_right_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_right_expand_sm');
		?>
		<aside id="right" class="sidebar <?php echo esc_attr($topz_right_span_class); ?>">
			<?php dynamic_sidebar('right-product-detail'); ?>
		</aside>
		<?php endif; ?>
		
	</div>
</div>

<?php get_template_part('footer'); ?>
