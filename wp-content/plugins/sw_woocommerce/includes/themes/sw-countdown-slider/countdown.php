<?php 
/**
* Layout Countdown Default
* @version     1.0.0
**/


$term_name = esc_html__( 'All Categories', 'sw_woocommerce' );
$default = array(
	'post_type' => 'product',	
	'meta_query' => array(		
		array(
			'key' => '_sale_price',
			'value' => 0,
			'compare' => '>',
			'type' => 'DECIMAL(10,5)'
			),
		array(
			'key' => '_sale_price_dates_from',
			'value' => time(),
			'compare' => '<',
			'type' => 'NUMERIC'
			),
		array(
			'key' => '_sale_price_dates_to',
			'value' => 0,
			'compare' => '>',
			'type' => 'NUMERIC'
			)
		),
	'orderby' => $orderby,
	'order' => $order,
	'post_status' => 'publish',
	'showposts' => $numberposts	
	);
if( $category != '' ){
	$term = get_term_by( 'slug', $category, 'product_cat' );
	if( $term ) :
		$term_name = $term->name;
	endif; 

	$default['tax_query'] = array(
		array(
			'taxonomy'  => 'product_cat',
			'field'     => 'slug',
			'terms'     => $category ));
}
$id = 'sw_countdown_'.$this->generateID();
$list = new WP_Query( $default );
if ( $list -> have_posts() ){ ?>
<div id="<?php echo $category.'_'.$id; ?>" class="sw-woo-container-slider responsive-slider countdown-slider loading" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>"  data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-circle="false">       
	<div class="resp-slider-container">
		<div class="slider responsive">	
			<?php 
			$count_items = 0;
			$count_items = ( $numberposts >= $list->found_posts ) ? $list->found_posts : $numberposts;
			$i = 0;
			while($list->have_posts()): $list->the_post();					
			global $product, $post;
			$class = ( $product->get_price_html() ) ? '' : 'item-nonprice';
			$start_time = get_post_meta( $post->ID, '_sale_price_dates_from', true );
			$countdown_time = get_post_meta( $post->ID, '_sale_price_dates_to', true );	
			$forginal_price = get_post_meta( $post->ID, '_regular_price', true );	
			$fsale_price = get_post_meta( $post->ID, '_sale_price', true );	
			$symboy = get_woocommerce_currency_symbol( get_woocommerce_currency() );
			$date = sw_timezone_offset( $countdown_time );
			if( $i % $item_row == 0 ){
				?>
				<div class="item-countdown product <?php echo esc_attr( $class )?>" id="<?php echo 'product_'.$id.$post->ID; ?>">
					<?php } ?>
					<div class="item-wrap">
						<div class="item-detail">
							<div class="item-image-countdown item-left col-lg-4 col-md-4 col-sm-4">
								<?php if( has_post_thumbnail() ){ ?>
								<a href="<?php echo get_the_permalink( $post->ID ); ?> ">	
									<?php echo get_the_post_thumbnail(  $post->ID, 'shop_single' ); ?>						
								</a>
								<?php } ?>				
							</div>
							<div class="item-content item-center col-lg-4 col-md-4 col-sm-4">
								<?php if( $title1 != '' ){?>
								<div class="box-title">
									<h3><?php echo ( $title1 != '' ) ? $title1 : $term_name; ?></h3>
								</div>
								<?php } ?>
								<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php sw_trim_words( get_the_title(), $title_length ); ?></a></h4>
								<!-- Price -->
								<?php if ( $price_html = $product->get_price_html() ){?>
								<div class="item-price">
									<span>
										<?php echo $price_html; ?>
									</span>
								</div>
								<?php } ?>
								<div class="description"><?php echo $post->post_excerpt; ?></div>
								<div class="product-countdown" data-date="<?php echo esc_attr( $date ); ?>"  data-price="<?php echo esc_attr( $symboy.$forginal_price ); ?>" data-starttime="<?php echo esc_attr( $start_time ); ?>" data-cdtime="<?php echo esc_attr( $countdown_time ); ?>" data-id="<?php echo 'product_'.$id.$post->ID; ?>"></div>					
								<div class="shop-now"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php esc_html_e( 'Shop now', 'sw_woocommerce' ) ?></a></div>
							</div>
							<div class="item-image-countdown item-right col-lg-4 col-md-4 col-sm-4">
								<?php 
								$gallery = get_post_meta($post->ID, '_product_image_gallery', true);
								$attachment_image = '';
								if(!empty($gallery)) {
									$gallery = explode(',', $gallery);
									$first_image_id = $gallery[0];
									$attachment_image = wp_get_attachment_image($first_image_id , 'topz_shop-image', false, array('class' => 'hover-image back'));
								}
								?>	
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php echo $attachment_image; ?></a>		
							</div>															
						</div>
					</div>
					<?php if( ( $i+1 ) % $item_row == 0 || ( $i+1 ) == $count_items ){?> </div><?php } ?>
					<?php $i ++; endwhile; wp_reset_postdata();?>
				</div>
			</div>            
		</div>
		<?php
	} 
	?>