<?php get_template_part('header'); ?>
<?php 
	$topz_sidebar_template = topz_options()->getCpanelValue('sidebar_blog') ;
	$topz_blog_styles = topz_options()->getCpanelValue('blog_layout');
?>

<?php topz_breadcrumb_title(); ?>

<div class="container">
	<div class="row">
		<div class="category-contents <?php topz_content_blog(); ?>">
			<!-- No Result -->
			<?php if (!have_posts()) : ?>
			<?php get_template_part('templates/no-results'); ?>
			<?php endif; ?>			
			
			<?php 
				$topz_blogclass = 'blog-content blog-content-'. $topz_blog_styles;
				if( $topz_blog_styles == 'grid' ){
					$topz_blogclass .= ' row';
				}
			?>
			<div class="<?php echo esc_attr( $topz_blogclass ); ?>">
			<?php 			
				while( have_posts() ) : the_post();
					get_template_part( 'templates/content', $topz_blog_styles );
				endwhile;
			?>
			<?php get_template_part('templates/pagination'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<?php if ( is_active_sidebar('left-blog') && $topz_sidebar_template == 'left' ):
			$topz_left_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_left_expand');
			$topz_left_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_left_expand_md');
			$topz_left_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_left_expand_sm');
		?>
		<aside id="left" class="sidebar <?php echo esc_attr($topz_left_span_class); ?>">
			<?php dynamic_sidebar('left-blog'); ?>
		</aside>

		<?php endif; ?>
		<?php if ( is_active_sidebar('right-blog') && $topz_sidebar_template =='right' ):
			$topz_right_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_right_expand');
			$topz_right_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_right_expand_md');
			$topz_right_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_right_expand_sm');
		?>
		<aside id="right" class="sidebar <?php echo esc_attr($topz_right_span_class); ?>">
			<?php dynamic_sidebar('right-blog'); ?>
		</aside>
		<?php endif; ?>
	</div>
</div>
<?php get_template_part('footer'); ?>
