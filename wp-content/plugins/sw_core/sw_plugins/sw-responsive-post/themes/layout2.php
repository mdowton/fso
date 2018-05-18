<?php 
/**
** Theme: Responsive Slider
** Author: Smartaddons
** Version: 1.0
**/
//var_dump($category);
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
	<div id="<?php echo esc_attr( $id ) ?>" class="responsive-post-slider3 style2 clearfix" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>" data-autoplay="<?php echo esc_attr( $autoplay ); ?>">
		<div class="resp-slider-container">
			<div class="box-title"><?php echo ( $title2 != '' ) ? '<h3>'. esc_html( $title2 ) .'</h3>' : ''; ?></div>
			<div class="description"><?php echo ( $description != '' ) ? '<p>'. esc_html( $description ) .'</p>' : ''; ?></div>
			<div class="slider responsive">
				<?php 
				$sl = 0;
				foreach ($list as $post){
				$sl++; 
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
					<div class="item widget-pformat-detail clearfix">
						<div class="item-inner">								
							<div class="item-detail">
								<div class="img_over">
									<a href="<?php echo get_permalink($post->ID)?>" >
										<?php 
										if ( has_post_thumbnail( $post->ID ) ){
											echo get_the_post_thumbnail( $post->ID, 'topz_blog-responsive3' ) ? get_the_post_thumbnail( $post->ID, 'topz_blog-responsive3' ): '<img src="'.get_template_directory_uri().'/assets/img/placeholder/'.'large'.'.png" alt="No thumb">';		
										}else{
											echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder/'.'large'.'.png" alt="No thumb">';
										}
										?></a>
									</div>
									<div class="entry-content">
										<div class="item-title">
											<div class="item-sl">0<?php echo $sl; ?>.</div>
											<h4><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title;?></a></h4>
											<div class="description">
												<?php 										
												$content = self::ya_trim_words($post->post_content, $length, ' ');						
												echo $content;
												?>
											</div>
										</div>
										<div class="readmore"><a href="<?php echo get_permalink($post->ID);?>" title="View more" ><?php esc_html_e('[ Explore now ]','sw_core');?></a></div>
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