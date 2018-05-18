<?php do_action( 'wpo_wcpdf_before_document', $this->type, $this->order ); ?>


<?php do_action( 'wpo_wcpdf_after_document_label', $this->type, $this->order ); ?>

<div class="row pdf_inovice">
    <div class="col-sm-4 pdfinvoice_text"> 
		<div class="pdf_order"> 
						
							<?php do_action( 'wpo_wcpdf_before_order_data', $this->type, $this->order ); ?>
								<div class="table-div" style="width:100%">
									<div class="tr-div order_number pdf_order">
										<div class="td-div order_th"><h4 class="order_number">Order No:</h4></div>
										<div class="td-div order_numbertext"><?php $this->order_number(); ?></div>
									</div>
									<div class="tr-div order_date pdf_order">
										<div class="td-div order_th"><h4 class="order_date">Order Date:</h4></div>       
										<div class="td-div order_datetext"><?php $this->order_date(); ?></div>
									</div>
								
							<?php do_action( 'wpo_wcpdf_after_order_data', $this->type, $this->order ); ?>
							
							<?php $items = $this->get_order_items(); foreach( $items as $item_id => $item ) : ?>
								<?php do_action( 'wpo_wcpdf_before_item_meta', $this->type, $item, $this->order  ); ?>
									<div class="tr-div glass_type pdf_order">
										<div class="td-div order_th"><h4 class="glass_type">Glass:</h4></div>  
										<div class="td-div glass_typetext">
											<?php
											$glasstype = wc_get_order_item_meta( $item_id, 'Glass Type Title', true );
											if($glasstype == 'Standard'){
												echo 'Clear Float('.$glasstype.')'; 
											}
											else if($glasstype == 'Claralite'){
												echo 'Low Iron('.$glasstype.')'; 
											}
											else if($glasstype == 'Frosted'){
												echo 'Matelux('.$glasstype.')'; 
											}
											?>
										</div>
									</div>
								<?php do_action( 'wpo_wcpdf_after_item_meta', $this->type, $item, $this->order  ); ?>
							<?php endforeach; ?>
							   </div>	 		  
		</div> 
		<div class="pdfsupport">
				<h5 class="pdfsupport_text">
					<div>support@fsoinfo.com.au</div>
					<div>6/14 Jura Street</div>
					<div>Heatherbrae NSW </div>
					<div>1300 40 20 39</div>
				</h5>  
		</div> 
	</div> 
    <div class="col-sm-8 pdfinvoice_image">
		<?php do_action( 'wpo_wcpdf_before_order_details', $this->type, $this->order ); ?>

		<table>
			<tbody>
				<?php $items = $this->get_order_items(); if( sizeof( $items ) > 0 ) : foreach( $items as $item_id => $item ) : ?>
				<tr class="<?php echo apply_filters( 'wpo_wcpdf_item_row_class', $item_id, $this->type, $this->order, $item_id ); ?>">
					<td class="product">
						<?php $description_label = __( 'Description', 'woocommerce-pdf-invoices-packing-slips' ); // registering alternate label translation ?>
						<span class="item-name"><?php //echo $item['name']; ?></span>
						<?php do_action( 'wpo_wcpdf_before_item_meta', $this->type, $item, $this->order  ); ?>
						
						<span class="item-meta"><?php //echo $item['meta']; ?></span>
						
						<?php
						$data = wc_get_order_item_meta( $item_id, '_product_id', true );
						
						global $wpdb;
						$order_id = $wpdb->get_var( $wpdb->prepare(
							"SELECT order_id FROM {$wpdb->prefix}woocommerce_order_items WHERE order_item_id = %d",
						  $item_id
						) );
						
						$orderclass = wc_get_order_item_meta( $item_id, '_technicalimg_leftright', true );
						$orderimgclass = wc_get_order_item_meta( $item_id, '_technicalimg_with_out', true );
						$topleft = wc_get_order_item_meta( $item_id, '_advancedoptions-topleft', true );
						$topright = wc_get_order_item_meta( $item_id, '_advancedoptions-topright', true );
						$bottomleft = wc_get_order_item_meta( $item_id, '_advancedoptions-bottomleft', true );
						$bottomright = wc_get_order_item_meta( $item_id, '_advancedoptions-bottomright', true );
						$bottomlleft = wc_get_order_item_meta( $item_id, '_advancedoptions-bottomlastll', true );
						$bottomlright = wc_get_order_item_meta( $item_id, '_advancedoptions-bottomlastlr', true );
						$bottomrleft = wc_get_order_item_meta( $item_id, '_advancedoptions-bottomlastrl', true );
						$bottomrright = wc_get_order_item_meta( $item_id, '_advancedoptions-bottomlastrr', true );
						$advancedwithimg = wc_get_order_item_meta( $item_id, '_draw-hinghiddenwith', true );
						$advancedwithoutimg = wc_get_order_item_meta( $item_id, '_draw-hinghiddenwithout', true );
						$panelheight = wc_get_order_item_meta( $item_id, '_panel_height', true );
						$panelheightextra = ($panelheight - 200) ;
						$hingeheight = wc_get_order_item_meta( $item_id, '_hingepanel_height', true );
						$hingeheightextra = ($hingeheight - 200) ;
						$reutnpanelheightextra = wc_get_order_item_meta(  $item_id, '_returnpanel_height', true );
						$bathheightextra = wc_get_order_item_meta(  $item_id, '_advancedoptions_bathheighthidden', true );
						$hingeheightextra1 = ($reutnpanelheightextra - $bathheightextra - 200) ;
						
						if($data == 4280){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>
								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
								
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topleft; ?>
								</div>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<div class="demo5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlleft; ?>
								</div>
								<div class="demo6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlright; ?>
								</div>
								<div class="demo7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrleft; ?>
								</div>
								<div class="demo8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrright; ?>
								</div>
							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>
								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
							<?php } 
						} 
						
						else if($data == 4271){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_panel_height', true ); ?>
								</div>
								
								<div class="test2extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $panelheightextra; ?>
								</div>
								
								<?php if($orderclass == 'left'){ ?>
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php  echo $topleft; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<?php }
								else { ?>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<?php } ?>
								<div class="demo5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlleft; ?>
								</div>
								<div class="demo6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlright; ?>
								</div> 

							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_panel_height', true ); ?>
								</div>
								
								<div class="test2extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $panelheightextra; ?>
								</div> 
							<?php } 
						} 
						
						else if($data == 4262){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>

								<div class="test4extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
								
								<?php if($orderclass == 'left'){ ?>
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topleft; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<?php } 
								else { ?>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<?php } ?>
								
								<div class="demo7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrleft; ?>
								</div>
								<div class="demo8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrright; ?>
								</div>
							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>

								<div class="test4extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
							<?php } 
						} 
						
						else if($data == 4255){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>

								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
								
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topleft; ?>
								</div>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<div class="demo5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlleft; ?>
								</div>
								<div class="demo6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlright; ?>
								</div>
								<div class="demo7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrleft; ?>
								</div>
								<div class="demo8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrright; ?>
								</div>
							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_panel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>

								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
							<?php } 
						} 
						
						else if($data == 4248){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>
								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
								<div class="test6extra1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra1; ?>
								</div>
								<div class="test7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_advancedoptions_bathwidthhidden', true ); ?>
								</div>
								<div class="test8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_advancedoptions_bathheighthidden', true ); ?>
								</div>
								
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topleft; ?>
								</div>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<div class="demo5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlleft; ?>
								</div>
								<div class="demo6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlright; ?>
								</div>
								<div class="demo7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrleft; ?>
								</div>
								<div class="demo8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrright; ?>
								</div>
							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>
								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
								<div class="test6extra1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra1; ?>
								</div>
								<div class="test7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_advancedoptions_bathwidthhidden', true ); ?>
								</div>
								<div class="test8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_advancedoptions_bathheighthidden', true ); ?>
								</div>
							<?php } 
						} 
						
						else if($data == 4241){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_panel_height', true ); ?>
								</div>
								
								<div class="test2extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $panelheightextra; ?>
								</div>
								
								<?php if($orderclass == 'left'){ ?>
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topleft; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<?php } 
								else { ?>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<?php } ?>
								
								<div class="demo5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlleft; ?>
								</div>
								<div class="demo6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlright; ?>
								</div>
								<!--<div class="demo7 product-<?php //echo $data; ?> <?php //echo $orderclass; ?> <?php //echo $orderimgclass; ?>" >
								<?php //echo $bottomrleft; ?>
								</div>
								<div class="demo8 product-<?php //echo $data; ?> <?php //echo $orderclass; ?> <?php //echo $orderimgclass; ?>" >
								<?php //echo $bottomrright; ?>
								</div>-->
							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_panel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_panel_height', true ); ?>
								</div>
								
								<div class="test2extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $panelheightextra; ?>
								</div>
								
							<?php } 
						} 
						
						else if($data == 3743){
							if($topleft > 0 || $topright > 0 || $bottomleft > 0 || $bottomright > 0 || $bottomlleft > 0 || $bottomlright > 0 || $bottomrleft > 0 || $bottomrright > 0)
							{
						?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>
								
								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
								
								<div class="demo1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topleft; ?>
								</div>
								<div class="demo2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $topright; ?>
								</div>
								<div class="demo3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomleft; ?>
								</div>
								<div class="demo4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomright; ?>
								</div>
								<div class="demo5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlleft; ?>
								</div>
								<div class="demo6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomlright; ?>
								</div>
								<div class="demo7 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrleft; ?>
								</div>
								<div class="demo8 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo $bottomrright; ?>
								</div>
							<?php }
							else {
							?>
								<!--<h5 class="drawimg-text">Technical Drawing Image</h5>-->
								<div class="withimg product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<img src='<?php echo $advancedwithoutimg; ?>' class="draw-image">
								</div>
								
								<div class="test1 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>" >
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_width', true ); ?>
								</div>
								<div class="test2 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta( $item_id, '_doorpanel_height', true ); ?>
								</div>
								<div class="test3 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_width', true ); ?>
								</div>
								<div class="test4 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_returnpanel_height', true ); ?>
								</div>
								<div class="test5 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_width', true ); ?>
								</div>
								<div class="test6 product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo wc_get_order_item_meta(  $item_id, '_hingepanel_height', true ); ?>
								</div>
								
								<div class="test6extra product-<?php echo $data; ?> <?php echo $orderclass; ?> <?php echo $orderimgclass; ?>">
								<?php echo $hingeheightextra; ?>
								</div>
							<?php } 
						} ?>
						
						<?php do_action( 'wpo_wcpdf_after_item_meta', $this->type, $item, $this->order  ); ?>
					</td>
				</tr>
				<?php endforeach; endif; ?>
			</tbody> 
		</table>

		<?php do_action( 'wpo_wcpdf_after_order_details', $this->type, $this->order ); ?>

	</div>
</div>
<?php do_action( 'wpo_wcpdf_after_document', $this->type, $this->order ); ?>
