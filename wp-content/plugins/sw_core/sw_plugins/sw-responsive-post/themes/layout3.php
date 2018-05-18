<?php 
/**
** Theme: Responsive Slider
** Author: Smartaddons
** Version: 1.0
**/

$default = array(
	'category' => $category, 
	'orderby' => $orderby,
	'order' => $order, 
	'numberposts' => $numberposts,
	);
$list = get_posts($default);
do_action( 'before' ); 
$id = 'sw_reponsive_post_slider_'.rand().time();
if ( count($list) > 0 ){
	?>
	<div class="clear"></div>
	<div id="<?php echo esc_attr( $id ) ?>" class="responsive-post-slider4 responsive-slider clearfix loading" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>" data-autoplay="<?php echo esc_attr( $autoplay ); ?>">
		<div class="resp-slider-container">
			<?php if( $title2 != '' ){ 
				$titles = strpos($title2, ' ');
				?>
				<h2><p><?php echo substr( $title2, 0, $titles ) ?></p> <?php echo substr( $title2, $titles + 1 ) ?></h2>
				<?php } ?>
				<div class="description"><?php echo ( $description != '' ) ? '<p>'. esc_html( $description ) .'</p>' : ''; ?></div>
				<div class="slider responsive">
					<?php foreach ($list as $post){ 
						if (has_post_format('video', $post)) {
							$icon = 'icon-facetime-video';
						}
						elseif (has_post_format('aside', $post)) {
							$icon = 'icon-edit';
						}
						elseif (has_post_format('audio', $post)) {
							$icon = 'icon-volume-down';
						}
						elseif (has_post_format('quote', $post)) {
							$icon = 'icon-quote-left';
						}
						elseif (has_post_format('status', $post)) {
							$icon = 'icon-comment';
						}
						elseif (has_post_format('chat', $post)) {
							$icon = 'icon-comments';
						}
						elseif (has_post_format(array('image', 'gallery'), $post)) {
							$icon = 'icon-picture';


						}else $icon = 'icon-pencil';
						?>
						<?php if($post->post_content != Null) { ?>
						<div class="item widget-pformat-detail">
							<div class="item-inner">								
								<div class="item-detail">
									<div class="entry-content">
										<div class="entry-date">
											<div class="day-time"><?php echo get_the_time( 'd', $post->ID );?></div>
											<div class="month-time"><?php echo get_the_time( 'M', $post->ID );?></div>
										</div>
										<div class="item-info">
											<h4>
												<a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title;?></a>
											</h4>
											<div class="date-acount">
												<span><?php echo get_the_time( 'M d, Y', $post->ID ) ?></span>
												<span><?php esc_html_e('By ','sw_core');?><?php the_author_posts_link(); ?></span>
											</div>
											<div class="description">
												<?php 										
												$content = self::ya_trim_words($post->post_content, $length, ' ');	
												echo $content;
												?>
											</div>
											<div class="readmore">
												<a href="<?php echo get_permalink($post->ID);?>" title="View more" ><?php esc_html_e('[ Read more ]','sw_core');?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php }?>
					</div>
				</div>
			</div>
			<?php } ?>