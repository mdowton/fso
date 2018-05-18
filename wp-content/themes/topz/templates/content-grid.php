<?php 
	$format = get_post_format();
	global $post;
?>
	<div id="post-<?php the_ID();?>" <?php post_class( topz_blogcol() ); ?>>
		<div class="entry clearfix">
			<?php if( $format == '' || $format == 'image' ){ ?>
				<?php if ( get_the_post_thumbnail() ){ ?>
					<div class="entry-thumb">	
						<a class="entry-hover" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('topz_grid_thumb');?>			
						</a>
					</div>			
				<?php } ?>
				<div class="entry-content">				
					<div class="content-top">
						<div class="entry-title">
							<h4><a href="<?php echo get_permalink($post->ID)?>"><?php topz_trim_words( $post->post_title );?></a></h4>
						</div>
					</div>
					<div class="readmore"><a href="<?php echo get_permalink($post->ID)?>"><i class="fa fa-caret-right"></i><?php esc_html_e('Read More', 'topz'); ?></a></div>
				</div>
			<?php } elseif( !$format == ''){?>
			<div class="wp-entry-thumb">	
				<?php if( $format == 'video' || $format == 'audio' ){ ?>	
					<?php echo ( $format == 'video' ) ? '<div class="video-wrapper">'. topz_get_entry_content_asset($post->ID) . '</div>' : topz_get_entry_content_asset($post->ID); ?>										
				<?php } ?>
				
				<?php if( $format == 'gallery' ) { 
					if(preg_match_all('/\[gallery(.*?)?\]/', $post->post_content, $matches)){
						$attrs = array();
						if (count($matches[1])>0){
							foreach ($matches[1] as $m){
								$attrs[] = shortcode_parse_atts($m);
							}
						}
						$ids = '';
						if (count($attrs)> 0){
							foreach ($attrs as $attr){
								if (is_array($attr) && array_key_exists('ids', $attr)){
									$ids = $attr['ids'];
									break;
								}
							}
						}
					?>
						<div id="gallery_slider_<?php echo $post->ID; ?>" class="carousel slide gallery-slider" data-interval="0">	
							<div class="carousel-inner">
								<?php
									$ids = explode(',', $ids);						
									foreach ( $ids as $i => $id ){ ?>
										<div class="item<?php echo ( $i== 0 ) ? ' active' : '';  ?>">			
												<?php echo wp_get_attachment_image($id, 'full'); ?>
										</div>
									<?php }	?>
							</div>
							<a href="#gallery_slider_<?php echo $post->ID; ?>" class="left carousel-control" data-slide="prev"><?php esc_html_e( 'Prev', 'topz' ) ?></a>
							<a href="#gallery_slider_<?php echo $post->ID; ?>" class="right carousel-control" data-slide="next"><?php esc_html_e( 'Next', 'topz' ) ?></a>
						</div>
					<?php }	?>							
				<?php } ?>
			</div>
			<div class="entry-content">				
				<div class="content-top">
					<div class="entry-title">
						<h4><a href="<?php echo get_permalink($post->ID)?>"><?php topz_trim_words( $post->post_title ); ?></a></h4>
					</div>
					<div class="entry-meta">
							<span class="entry-author">
								<i class="fa fa-user"></i><?php esc_html_e('Post By:', 'topz'); ?> <?php the_author_posts_link(); ?>
							</span>
							<span class="entry-comment">
								<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php echo $post-> comment_count .  ( ($post-> comment_count) > 1 ? esc_html__('  Comments', 'topz') : esc_html__('  Comment', 'topz')); ?></a>
							</span>
					</div>
					<div class="entry-summary">
						<?php 												
							if ( preg_match('/<!--more(.*?)?-->/', $post->post_content, $matches) ) {
								$content = explode($matches[0], $post->post_content, 2);
								$content = $content[0];
								$content = wp_trim_words($post->post_content, 22, '...');
								echo $content;	
							} else {
								the_content('...');
							}		
						?>	
					</div>
				</div>
				<div class="readmore"><a href="<?php echo get_permalink($post->ID)?>"><i class="fa fa-caret-right"></i><?php esc_html_e('Read More', 'topz'); ?></a></div>
			</div>
			<?php } ?>
		</div>
	</div>

