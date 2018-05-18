<?php 

/**
* Layout Best Sales
* @version     1.0.0
**/


$term_name = esc_html__( 'Best Sales', 'sw_woocommerce' );
$viewall = get_permalink( wc_get_page_id( 'shop' ) );	
$default = array(
	'post_type' 			=> 'product',		
	'post_status' 			=> 'publish',
	'ignore_sticky_posts'   => 1,
	'showposts'				=> $numberposts,
	'meta_key' 		 		=> 'total_sales',
	'orderby' 		 		=> 'meta_value_num',
	);
if( $category != '' ){
	$term = get_term_by( 'slug', $category, 'product_cat' );	
	if( $term ) :
		$term_name = $term->name;
	$viewall = get_term_link( $term->term_id, 'product_cat' );
	endif;

	$default['tax_query'] = array(
		array(
			'taxonomy'	=> 'product_cat',
			'field'	=> 'slug',
			'terms'	=> $category,
			'operator' => 'IN'
			)
		);
}
$id = 'sw_bestsales_'.$this->generateID();
$list = new WP_Query( $default );
if ( $list -> have_posts() ){
	?>
	<div id="<?php echo $id; ?>" class="sw-woo-container-slider responsive-slider best-selling-product style1 clearfix loading" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>"  data-autoplay="<?php echo esc_attr( $autoplay ); ?>">
		<div class="box-slider-title clearfix">
			<?php if( $title1 != '' ){ 
				$titles = strpos($title1, ' ');
				?>
				<h2><p><?php echo substr( $title1, 0, $titles ) ?></p> <?php echo substr( $title1, $titles + 1 ) ?></h2>
				<?php } ?>
			<?php echo ( $description != '' ) ? '<div class="slider-description">'. $description .'</div>' : ''; ?>
		</div>
		<div class="resp-slider-container">			
			<div class="slider responsive">	
				<?php 
				$count_items 	= 0;
				$numb 			= ( $list->found_posts > 0 ) ? $list->found_posts : count( $list->posts );
				$count_items 	= ( $numberposts >= $numb ) ? $numb : $numberposts;
				$i 				= 0;
				while($list->have_posts()): $list->the_post();global $product, $post;
				$terms_id = get_the_terms( $post->ID, 'product_cat' );
				$term_str = '';
				if( count( $terms_id ) ) :
					$term_str .= '<a href="'. get_term_link( $terms_id[0]->term_id, 'product_cat' ) .'">'. esc_html( $terms_id[0]->name ) .'</a>';
				endif;
				$class = ( $product->get_price_html() ) ? '' : 'item-nonprice';
				if( $i % $item_row == 0 ){
					?>
					<div class="item product <?php echo esc_attr( $class )?>">
						<?php } ?>
						<div class="item-wrap">
							<div class="item-detail">										
								<div class="item-img products-thumb">			
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'topz_shop-image2' ); ?></a>
									<?php sw_label_sales() ?>
									<div class="item-bottom">
										<?php echo topz_quickview(); ?>
										<?php if ( class_exists( 'YITH_WOOCOMPARE' ) ){ 
											$yith_compare = new YITH_Woocompare_Frontend();
											?>
											<div class="woocommerce product compare-button">
												<a href="javascript:void(0)" class="compare button"  title="<?php esc_html_e( 'Add to Compare', 'sw_woocommerce' ) ?>" data-product_id="<?php echo esc_attr($post->ID); ?>" rel="nofollow"> <?php esc_html('compare','sw-woocomerce'); ?></a>
											</div>
											<?php } ?>
											<?php
											if ( class_exists( 'YITH_WCWL' ) ){
												echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
											} 
											?>	
										</div>
									</div>		
									<div class="item-content">
										<div class="categories-name">
											<?php echo $term_str; ?>
										</div>	
										<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php sw_trim_words( get_the_title(), $title_length ); ?></a></h4>								
										<!-- price -->
										<?php if ( $price_html = $product->get_price_html() ){?>
										<div class="item-price">
											<span>
												<?php echo $price_html; ?>
											</span>
										</div>
										<?php } ?>	
										<!-- add to cart -->
										<div class="item-button"><?php woocommerce_template_loop_add_to_cart(); ?></div>
									</div>								
								</div>
							</div>
							<?php if( ( $i+1 ) % $item_row == 0 || ( $i+1 ) == $count_items ){?> </div><?php } ?>
							<?php $i++; endwhile; wp_reset_postdata();?>
						</div>
					</div>					
				</div>
				<?php
			}else{
				echo '<div class="alert alert-warning alert-dismissible" role="alert">
				<a class="close" data-dismiss="alert">&times;</a>
				<p>'. esc_html__( 'Has no product in this category', 'sw_woocommerce' ) .'</p>
			</div>';
		}	
		?>