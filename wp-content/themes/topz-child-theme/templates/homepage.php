<?php 

/* Template Name: Homepage  */
get_header(); ?>
<?php 
	$topz_sidebar_template	= get_post_meta( get_the_ID(), 'page_sidebar_layout', true );
	$topz_sidebar 					= get_post_meta( get_the_ID(), 'page_sidebar_template', true );
?>

	<div class="container">
		<div class="row">
		<?php 
			if ( is_active_sidebar( $topz_sidebar ) && $topz_sidebar_template != 'right' && $topz_sidebar_template !='full' ):
			$topz_left_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_left_expand');
			$topz_left_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_left_expand_md');
			$topz_left_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_left_expand_sm');
		?>
			<aside id="left" class="sidebar <?php echo esc_attr( $topz_left_span_class ); ?>">
				<?php dynamic_sidebar( $topz_sidebar ); ?>
			</aside>
		<?php endif; ?>
		
			<div id="contents" role="main" class="main-page <?php topz_content_page(); ?>">
				<?php
				get_template_part('templates/content', 'page')
				?>
			</div>
			<?php 
			if ( is_active_sidebar( $topz_sidebar ) && $topz_sidebar_template != 'left' && $topz_sidebar_template !='full' ):
				$topz_left_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_left_expand');
				$topz_left_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_left_expand_md');
				$topz_left_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_left_expand_sm');
			?>
				<aside id="right" class="sidebar <?php echo esc_attr($topz_left_span_class); ?>">
					<?php dynamic_sidebar( $topz_sidebar ); ?>
				</aside>
			<?php endif; ?>
		</div>		
	</div>
<?php get_footer(); ?>

