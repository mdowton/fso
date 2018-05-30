<?php
/*** Get post content and display ***/
function display_custom_data_product_page()
{
	global $post;
	$gift_card = get_post_meta( $post->ID, '_gift_card', true );
	
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
	}
	   /* echo '<pre>';
	print_r($cart_item); */      

	
    if($gift_card == "yes")
	{
	/** Screen left backend get data **/	
	$mspc_screen_name1 = get_post_meta( $post->ID, '_mspc_screen_name1', true );
	$mspc_price_metre1 = get_post_meta( $post->ID, '_mspc_price_metre1', true );
	$mspc_screenimage_url1 = get_post_meta( $post->ID, '_mspc_screenimage_url1', true );
	$mspc_screenimageline_url1 = get_post_meta( $post->ID, '_mspc_screenimageline_url1', true );
	
	$mspc_price_holes1 = get_post_meta( $post->ID, '_mspc_price_holes1', true );
	$mspc_price_door_seals1 = get_post_meta( $post->ID, '_mspc_price_door_seals1', true );
	$mspc_price_floor_dome1 = get_post_meta( $post->ID, '_mspc_price_floor_dome1', true );
	$mspc_price_packaging1 = get_post_meta( $post->ID, '_mspc_price_packaging1', true );
	$mspc_price_additional_costs1 = get_post_meta( $post->ID, '_mspc_price_additional_costs1', true );
	$mspc_price_profit_component1 = get_post_meta( $post->ID, '_mspc_price_profit_component1', true );
	
	/** Screen right backend get data **/
	$mspc_screen_name2 = get_post_meta( $post->ID, '_mspc_screen_name2', true );
	$mspc_price_metre2 = get_post_meta( $post->ID, '_mspc_price_metre2', true );
	$mspc_screenimage_url2 = get_post_meta( $post->ID, '_mspc_screenimage_url2', true );
	$mspc_screenimageline_url2 = get_post_meta( $post->ID, '_mspc_screenimageline_url2', true );
	
	$mspc_price_holes2 = get_post_meta( $post->ID, '_mspc_price_holes2', true );
	$mspc_price_door_seals2 = get_post_meta( $post->ID, '_mspc_price_door_seals2', true );
	$mspc_price_floor_dome2 = get_post_meta( $post->ID, '_mspc_price_floor_dome2', true );
	$mspc_price_packaging2 = get_post_meta( $post->ID, '_mspc_price_packaging2', true );
	$mspc_price_additional_costs2 = get_post_meta( $post->ID, '_mspc_price_additional_costs2', true );
	$mspc_price_profit_component2 = get_post_meta( $post->ID, '_mspc_price_profit_component2', true );
				
	
	/** Hardware and Drawing1 get data **/
	$mspc_hardware_image_url1 = get_post_meta( $post->ID, '_mspc_hardware_image_url1', true );
	$hardware_title1 = get_post_meta( $post->ID, '_hardware_title1', true );
	$hardware_price1 = get_post_meta( $post->ID, '_hardware_price1', true );
	$mspc_drawing_image_url1 = get_post_meta( $post->ID, '_mspc_drawing_image_url1', true );
	
	/** Hardware and Drawing2 get data **/
	$mspc_hardware_image_url2 = get_post_meta( $post->ID, '_mspc_hardware_image_url2', true );
	$hardware_title2 = get_post_meta( $post->ID, '_hardware_title2', true );
	$hardware_price2 = get_post_meta( $post->ID, '_hardware_price2', true );
	$mspc_drawing_image_url2 = get_post_meta( $post->ID, '_mspc_drawing_image_url2', true );
	
	/** Hardware and Drawing3 get data **/
	$mspc_hardware_image_url3 = get_post_meta( $post->ID, '_mspc_hardware_image_url3', true );
	$hardware_title3 = get_post_meta( $post->ID, '_hardware_title3', true );
	$hardware_price3 = get_post_meta( $post->ID, '_hardware_price3', true );
	$mspc_drawing_image_url3 = get_post_meta( $post->ID, '_mspc_drawing_image_url3', true );
	
	/** Hardware and Drawing4 get data **/
	$mspc_hardware_image_url4 = get_post_meta( $post->ID, '_mspc_hardware_image_url4', true );
	$hardware_title4 = get_post_meta( $post->ID, '_hardware_title4', true );
	$hardware_price4 = get_post_meta( $post->ID, '_hardware_price4', true );
	$mspc_drawing_image_url4 = get_post_meta( $post->ID, '_mspc_drawing_image_url4', true );
	
	/** Hardware and Drawing5 get data **/
	$mspc_hardware_image_url5 = get_post_meta( $post->ID, '_mspc_hardware_image_url5', true );
	$hardware_title5 = get_post_meta( $post->ID, '_hardware_title5', true );
	$hardware_price5 = get_post_meta( $post->ID, '_hardware_price5', true );
	$mspc_drawing_image_url5 = get_post_meta( $post->ID, '_mspc_drawing_image_url5', true );
	
	/** Hardware and Drawing6 get data **/
	$mspc_hardware_image_url6 = get_post_meta( $post->ID, '_mspc_hardware_image_url6', true );
	$hardware_title6 = get_post_meta( $post->ID, '_hardware_title6', true );
	$hardware_price6 = get_post_meta( $post->ID, '_hardware_price6', true );
	$mspc_drawing_image_url6 = get_post_meta( $post->ID, '_mspc_drawing_image_url6', true );
	
	/** Hardware and Drawing7 get data **/
	$mspc_hardware_image_url7 = get_post_meta( $post->ID, '_mspc_hardware_image_url7', true );
	$hardware_title7 = get_post_meta( $post->ID, '_hardware_title7', true );
	$hardware_price7 = get_post_meta( $post->ID, '_hardware_price7', true );
	$mspc_drawing_image_url7 = get_post_meta( $post->ID, '_mspc_drawing_image_url7', true );
	
	/** Hardware and Drawing8 get data **/
	$mspc_hardware_image_url8 = get_post_meta( $post->ID, '_mspc_hardware_image_url8', true );
	$hardware_title8 = get_post_meta( $post->ID, '_hardware_title8', true );
	$hardware_price8 = get_post_meta( $post->ID, '_hardware_price8', true );
	$mspc_drawing_image_url8 = get_post_meta( $post->ID, '_mspc_drawing_image_url8', true );
	
	/** Hardware and Drawing9 get data **/
	$mspc_hardware_image_url9 = get_post_meta( $post->ID, '_mspc_hardware_image_url9', true );
	$hardware_title9 = get_post_meta( $post->ID, '_hardware_title9', true );
	$hardware_price9 = get_post_meta( $post->ID, '_hardware_price9', true );
	$mspc_drawing_image_url9 = get_post_meta( $post->ID, '_mspc_drawing_image_url9', true );
	
	/** Hardware and Drawing10 get data **/
	$mspc_hardware_image_url10 = get_post_meta( $post->ID, '_mspc_hardware_image_url10', true );
	$hardware_title10 = get_post_meta( $post->ID, '_hardware_title10', true );
	$hardware_price10 = get_post_meta( $post->ID, '_hardware_price10', true );
	$mspc_drawing_image_url10 = get_post_meta( $post->ID, '_mspc_drawing_image_url10', true );
	
	/** Hardware and Drawing11 get data **/
	$mspc_hardware_image_url11 = get_post_meta( $post->ID, '_mspc_hardware_image_url11', true );
	$hardware_title11 = get_post_meta( $post->ID, '_hardware_title11', true );
	$hardware_price11 = get_post_meta( $post->ID, '_hardware_price11', true );
	$mspc_drawing_image_url11 = get_post_meta( $post->ID, '_mspc_drawing_image_url11', true );
	
	/** Hardware and Drawing12 get data **/
	$mspc_hardware_image_url12 = get_post_meta( $post->ID, '_mspc_hardware_image_url12', true );
	$hardware_title12 = get_post_meta( $post->ID, '_hardware_title12', true );
	$hardware_price12 = get_post_meta( $post->ID, '_hardware_price12', true );
	$mspc_drawing_image_url12 = get_post_meta( $post->ID, '_mspc_drawing_image_url12', true );
	
	
	/** Glass backend get data **/
	$mspc_glass_image_url1 = get_post_meta( $post->ID, '_mspc_glass_image_url1', true );
	$glass_title1 = get_post_meta( $post->ID, '_glass_title1', true );
	$glass_price1 = get_post_meta( $post->ID, '_glass_price1', true );
	
	$mspc_glass_image_url2 = get_post_meta( $post->ID, '_mspc_glass_image_url2', true );
	$glass_title2 = get_post_meta( $post->ID, '_glass_title2', true );
	$glass_price2 = get_post_meta( $post->ID, '_glass_price2', true );
	
	$mspc_glass_image_url3 = get_post_meta( $post->ID, '_mspc_glass_image_url3', true );
	$glass_title3 = get_post_meta( $post->ID, '_glass_title3', true );
	$glass_price3 = get_post_meta( $post->ID, '_glass_price3', true );
	
	$mspc_glass_image_url4 = get_post_meta( $post->ID, '_mspc_glass_image_url4', true );
	$glass_title4 = get_post_meta( $post->ID, '_glass_title4', true );
	$glass_price4 = get_post_meta( $post->ID, '_glass_price4', true );
	
	$mspc_glass_image_url5 = get_post_meta( $post->ID, '_mspc_glass_image_url5', true );
	$glass_title5 = get_post_meta( $post->ID, '_glass_title5', true );
	$glass_price5 = get_post_meta( $post->ID, '_glass_price5', true );
	
	/** Advanced Options get data **/
	$mspc_advancedoptions_image_url1 = get_post_meta( $post->ID, '_mspc_advancedoptions_image_url1', true );
	$mspc_advancedoptions_image_url2 = get_post_meta( $post->ID, '_mspc_advancedoptions_image_url2', true );
	
	/** Review Backend get data **/
	$mspc_reviewbackend_image_url1 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url1', true );
	$mspc_reviewbackend_image_url2 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url2', true );
	$mspc_reviewbackend_image_url3 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url3', true );
	$mspc_reviewbackend_image_url4 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url4', true );
	
	/** Technical Drawings get data **/
	$mspc_technicaldrawing_image_url1 = get_post_meta( $post->ID, '_mspc_technicaldrawing_image_url1', true );
	$mspc_technicaldrawing_image_url2 = get_post_meta( $post->ID, '_mspc_technicaldrawing_image_url2', true );
	$mspc_advancedtechnicaldrawing_image_url1 = get_post_meta( $post->ID, '_mspc_advancedtechnicaldrawing_image_url1', true );
	$mspc_advancedtechnicaldrawing_image_url2 = get_post_meta( $post->ID, '_mspc_advancedtechnicaldrawing_image_url2', true );
	
	/**Screen Orientation Checkbox get data **/
	$mspc_doorwidthhide = get_post_meta( $post->ID, '_mspc_doorwidthhide', true );
	$mspc_screendepthhide = get_post_meta( $post->ID, '_mspc_screendepthhide', true );
	$mspc_screenwidthhide = get_post_meta( $post->ID, '_mspc_screenwidthhide', true );
	
	/**Handle Selection Checkbox get data **/
	$mspc_handleselectionhide = get_post_meta( $post->ID, '_mspc_handleselectionhide', true );
	
	/**Panel Width Checkbox get data **/
	$mspc_panelwidthhide = get_post_meta( $post->ID, '_mspc_panelwidthhide', true );
	
	/** Tooltip Message backend get data **/	
	$mspc_tootip_doorwidth = get_post_meta( $post->ID, '_mspc_tootip_doorwidth', true );
	$mspc_tootip_screenheight = get_post_meta( $post->ID, '_mspc_tootip_screenheight', true );
	$mspc_tootip_screenwidth = get_post_meta( $post->ID, '_mspc_tootip_screenwidth', true );
	$mspc_tootip_screendepth = get_post_meta( $post->ID, '_mspc_tootip_screendepth', true );
	
	$mspc_tootip_paneldepth = get_post_meta( $post->ID, '_mspc_tootip_paneldepth', true );
	$mspc_tootip_hingepanel = get_post_meta( $post->ID, '_mspc_tootip_hingepanel', true );
	$mspc_tooltip_hingepanel = get_post_meta( $post->ID, '_mspc_tooltip_hingepanel', true );

	/** Pdf Labels image uploads get data**/
	$mspc_pdfdrawing_image_url1 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url1', true );
	$mspc_pdfdrawing_image_url2 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url2', true );
	$mspc_pdfdrawing_image_url3 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url3', true );
	$mspc_pdfdrawing_image_url4 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url4', true );
	$mspc_pdfdrawing_image_url5 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url5', true );
	$mspc_pdfdrawing_image_url6 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url6', true );
	$mspc_pdfdrawing_image_url7 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url7', true );
	$mspc_pdfdrawing_image_url8 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url8', true );
	$mspc_pdfdrawing_image_url9 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url9', true );
	$mspc_pdfdrawing_image_url10 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url10', true );
	$mspc_pdfdrawing_image_url11 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url11', true );
	$mspc_pdfdrawing_image_url12 = get_post_meta( $post->ID, '_mspc_pdfdrawing_image_url12', true );

	$experiment_string = $_SERVER['QUERY_STRING'];
	$exp = false;
	
	if ($experiment_string === 'exp=cart_contact' ) {
		$exp = true;
	}

	?>

<div id="jquery-script-menu">
	<div class="jquery-script-center">
		<ul>
		</ul>

	<div class="jquery-script-clear"></div>
	</div>
</div>

<!-- multistep form -->
<div id="msform" <?php if($exp) { echo "class='split-test-page'"; } ?>>
	<!-- progressbar -->
	<ul id="progressbar">
	<li class="active">Size
		 
		<ul id="progressbar2">
			<li>Size2</li>
		</ul>
		 
	</li>	  
	<li>Fittings
		 
		 <?php
		if($mspc_handleselectionhide == 1)
		{
		?>
			<ul id="progressbar2">
				<li>Fittings2</li>
			</ul>
		<?php }
		else {
		?>
		<?php
		} 
		?>
		 
	</li>
	<li>glass
		 
		<ul id="progressbar2">
			<li>glass2</li>
		</ul>
 
	</li>
	<!-- Remove display links -->
	<?php if(!$exp) { ?>
		<li>Review</li>
		<li>Payment</li>
	<?php } ?>
	</ul>
	<!-- fieldsets -->
	
	
	<!-- Field step_Process_Size-1 -->

	<fieldset id="showertype">
		
		<h2 class="fs-title">Click on your Shower Type</h2>
		
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<label class="fsize-img">
				<a class="step-size"><span class="sz-title" value="title1"><?php echo $mspc_screen_name1; ?></span>
				</a><br>
				<input id="left-hinge" type="radio" name="size-hing" data-src="<?php echo $mspc_screenimage_url1;?>" data-srcline="<?php echo $mspc_screenimageline_url1;?>" data-class="left" data-drawingwithout="<?php echo $mspc_technicaldrawing_image_url1;?>" data-drawingwith="<?php echo $mspc_advancedtechnicaldrawing_image_url1;?>" data-title="<?php echo $mspc_screen_name1;?>" data-value="<?php echo $mspc_price_metre1;?>" value="<?php echo $mspc_screen_name1;?>" <?php if(isset($cart_item['size-hing'])){if($cart_item['size-hing'] == $mspc_screen_name1) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_screenimage_url1;?>" alt="" class="screen-image" /></div>
				<input id="hingehidden" name="size-hinghidden" type="hidden" value="">
				<input id="drawhiddenwith" name="draw-hinghiddenwith" type="hidden" value="">
				<input id="drawhiddenwithout" name="draw-hinghiddenwithout" type="hidden" value="">
				<input type="hidden" id="technicalimg_leftright" name="technicalimg_leftright" value="">
				<input type="hidden" id="technicalimg_with_out" name="technicalimg_with_out" value="">
				
				<input id="screenprice" class="screen-price" name="screen-price" type="hidden" value="<?php echo $mspc_price_metre1;?>">
				<input id="screenholes" class="screen-holes" name="screen-holes" type="hidden" value="<?php echo $mspc_price_holes1;?>">
				<input id="screenseals" class="screen-seals" name="screen-seals" type="hidden" value="<?php echo $mspc_price_door_seals1;?>">
				<input id="screendome" class="screen-dome" name="screen-dome" type="hidden" value="<?php echo $mspc_price_floor_dome1;?>">
				<input id="screenpackage" class="screen-package" name="screen-package" type="hidden" value="<?php echo $mspc_price_packaging1;?>">
				<input id="screencost" class="screen-cost" name="screen-cost" type="hidden" value="<?php echo $mspc_price_additional_costs1;?>">
				<input id="screenprofit" class="screen-profit" name="screen-profit" type="hidden" value="<?php echo $mspc_price_profit_component1;?>">
				
				</label>
			</div>
			<div class="col-md-6 col-xs-12">
				<label class="fsize-img">				
				<a class="step-size"><span class="sz-title" value="title2"><?php echo $mspc_screen_name2; ?></span>
				</a><br>
				<input id="right-hinge" type="radio" name="size-hing" data-src="<?php echo $mspc_screenimage_url2;?>" data-srcline="<?php echo $mspc_screenimageline_url2;?>" data-class="right" data-drawingwithout="<?php echo $mspc_technicaldrawing_image_url2;?>" data-drawingwith="<?php echo $mspc_advancedtechnicaldrawing_image_url2;?>" data-title="<?php echo $mspc_screen_name2;?>" data-value="<?php echo $mspc_price_metre1;?>" value="<?php echo $mspc_screen_name2;?>" <?php if(isset($cart_item['size-hing'])){if($cart_item['size-hing'] == $mspc_screen_name2) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_screenimage_url2;?>" alt="" class="screen-image" /></div>
				</label>
			</div>
		</div>
		<br>
		<div id="orientation-message" style="color:red"></div>

		<input type="button" name="next" class="clear next action-button continue door-img" value="Next" />
	</fieldset>

	<!-- End Process -->
	
	<!-- Field step_Process_Size-2 -->
	<fieldset>
		<h2 class="fs-title">Enter your Shower Size</h2>
	(Advanced options for out of level floor and walls can be selected later)

		<br></br>
		<div id="dimensiondigits-message" style="color:red"></div>
		<div class="door-dimensions">
		<?php 
		$id = get_the_ID(); 
		
		/** Angled Corner Shower **/
		if($id == 4280 ){
		?>
			<?php
			if($mspc_doorwidthhide == 1)
			{
			?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth screenname" type="text" value="<?php if(isset($cart_item['doorwidth'])){if($cart_item['doorwidth'] == $cart_item['doorwidth']) {echo $cart_item['doorwidth'];}} ?>"  name="doorwidth" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
				
			<?php }
			else {
				?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth doorwidthvalid screenname" type="hidden" value="0" name="doorwidth" placeholder="*Door Width (mm)" required /></div>
			<?php
			} 
			?>
			
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
			
			<?php
			if($mspc_panelwidthhide == 1)
			{	
			?>
				<div class="panel-depth"><input id="paneldepth" class="img-paneldepth screenname" type="hidden" value="<?php if(isset($cart_item['paneldepth'])){if($cart_item['paneldepth'] == $cart_item['paneldepth']) {echo $cart_item['paneldepth'];}} ?>" name="paneldepth" placeholder="*Panel (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_paneldepth;?>" required /></div>
			<?php }
			else {
			?>
				<div class="panel-depth"><input id="paneldepth" class="img-paneldepth paneldepthvalid screenname" type="hidden" value="0" name="paneldepth" placeholder="*Panel (mm)" required /></div>
			<?php
			} 
			?>
		
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_panelwidthhide == 1)
			{
			?>	
				<div class="hinge-panel"><input id="hingepanel" class="img-hingepanel screenname" type="text" value="<?php if(isset($cart_item['hingepanel'])){if($cart_item['hingepanel'] == $cart_item['hingepanel']) {echo $cart_item['hingepanel'];}} ?>" name="hingepanel" placeholder="*Hinge Panel (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_hingepanel;?>" required /></div>
			<?php }
			else {
			?>
				<div class="hinge-panel"><input id="hingepanel" class="img-hingepanel hingepanelvalid screenname" type="hidden" value="0" name="hingepanel" placeholder="*Hinge Panel (mm)" required /></div>
			<?php
			} 
			?>
		<?php } ?>
		
		<?php
		/** Wall to Wall **/
		if($id == 4255 ){
		?>
			<?php
			if($mspc_doorwidthhide == 1)
			{
			?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth screenname" type="text" value="<?php if(isset($cart_item['doorwidth'])){if($cart_item['doorwidth'] == $cart_item['doorwidth']) {echo $cart_item['doorwidth'];}} ?>"  name="doorwidth" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
				
			<?php }
			else {
				?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth doorwidthvalid screenname" type="hidden" value="0" name="doorwidth" placeholder="*Door Width (mm)" required /></div>
			<?php
			} 
			?>
			
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
		
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_screenwidthhide == 1)
			{
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenname" type="text" value="<?php if(isset($cart_item['screenwidth'])){if($cart_item['screenwidth'] == $cart_item['screenwidth']) {echo $cart_item['screenwidth'];}} ?>" name="screenwidth" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenwidthvalid screenname" type="hidden" value="0" name="screenwidth" placeholder="*Screen Width (mm)" required /></div>
			<?php
			} 
			?>
			
			<?php
			if($mspc_panelwidthhide == 1)
			{
			?>	
				<div class="hinge-panelwall"><input id="hingepanel" class="img-hingepanel screenname" type="text" value="<?php if(isset($cart_item['hingepanel'])){if($cart_item['hingepanel'] == $cart_item['hingepanel']) {echo $cart_item['hingepanel'];}} ?>" name="hingepanel" placeholder="*Hinge Panel (mm)" data-toggle="tooltip" title="<?php echo $mspc_tooltip_hingepanel;?>" required /></div>
			<?php }
			else {
			?>
				<div class="hinge-panelwall"><input id="hingepanel" class="img-hingepanel hingepanelvalid screenname" type="hidden" value="0" name="hingepanel" placeholder="*Hinge Panel (mm)" required /></div>
			<?php
			} 
			?>
		<?php } ?>
		
		<?php
		/** Over Bath Shower-Fixed **/
		if($id == 4271){
		?>
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
		
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_screenwidthhide == 1)
			{
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenname" type="text" value="<?php if(isset($cart_item['screenwidth'])){if($cart_item['screenwidth'] == $cart_item['screenwidth']) {echo $cart_item['screenwidth'];}} ?>" name="screenwidth" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenwidthvalid screenname" type="hidden" value="0" name="screenwidth" placeholder="*Screen Width (mm)" required /></div>
			<?php
			} 
			?>
		<?php } ?>
		
		<?php
		/** Over Bath Shower-Hinged **/
		if($id == 4262){
		?>
			<?php
			if($mspc_doorwidthhide == 1)
			{
			?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth screenname" type="text" value="<?php if(isset($cart_item['doorwidth'])){if($cart_item['doorwidth'] == $cart_item['doorwidth']) {echo $cart_item['doorwidth'];}} ?>"  name="doorwidth" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
				
			<?php }
			else {
				?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth doorwidthvalid screenname" type="hidden" value="0" name="doorwidth" placeholder="*Door Width (mm)" required /></div>
			<?php
			} 
			?>
			
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
			
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_screenwidthhide == 1)
			{
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenname" type="text" value="<?php if(isset($cart_item['screenwidth'])){if($cart_item['screenwidth'] == $cart_item['screenwidth']) {echo $cart_item['screenwidth'];}} ?>" name="screenwidth" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenwidthvalid screenname" type="hidden" value="0" name="screenwidth" placeholder="*Screen Width (mm)" required /></div>
			<?php
			} 
			?>
		<?php } ?>
		
		<?php
		/** Next To Bath Shower **/
		if($id == 4248){
		?>
			<?php
			if($mspc_screendepthhide == 1)
			{
			?>
				<div class="screen-depth"><input id="screendepth" class="img-screendepth screenname" type="text" value="<?php if(isset($cart_item['screendepth'])){if($cart_item['screendepth'] == $cart_item['screendepth']) {echo $cart_item['screendepth'];}} ?>" name="screendepth" placeholder="*Screen Depth (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screendepth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-depth"><input id="screendepth" class="img-screendepth screendepthvalid screenname" type="hidden" value="0" name="screendepth" placeholder="*Screen Depth (mm)" required /></div>
			<?php
			} 
			?>
			
			<?php
			if($mspc_doorwidthhide == 1)
			{
			?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth screenname" type="text" value="<?php if(isset($cart_item['doorwidth'])){if($cart_item['doorwidth'] == $cart_item['doorwidth']) {echo $cart_item['doorwidth'];}} ?>"  name="doorwidth" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
				
			<?php }
			else {
				?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth doorwidthvalid screenname" type="hidden" value="0" name="doorwidth" placeholder="*Door Width (mm)" required /></div>
			<?php
			} 
			?>
			
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
		
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_screenwidthhide == 1)
			{
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenname" type="text" value="<?php if(isset($cart_item['screenwidth'])){if($cart_item['screenwidth'] == $cart_item['screenwidth']) {echo $cart_item['screenwidth'];}} ?>" name="screenwidth" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenwidthvalid screenname" type="hidden" value="0" name="screenwidth" placeholder="*Screen Width (mm)" required /></div>
			<?php
			} 
			?>
		<?php } ?>
		
		<?php
		/** Fixed Panel Shower **/
		if($id == 4241){
		?>
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
			
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_screenwidthhide == 1)
			{
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenname" type="text" value="<?php if(isset($cart_item['screenwidth'])){if($cart_item['screenwidth'] == $cart_item['screenwidth']) {echo $cart_item['screenwidth'];}} ?>" name="screenwidth" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenwidthvalid screenname" type="hidden" value="0" name="screenwidth" placeholder="*Screen Width (mm)" required /></div>
			<?php
			} 
			?>
		<?php } ?> 
		
		<?php
		/** Corner Shower **/
		if($id == 3743){
		?>
			<?php
			if($mspc_doorwidthhide == 1)
			{
			?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth screenname" type="text" value="<?php if(isset($cart_item['doorwidth'])){if($cart_item['doorwidth'] == $cart_item['doorwidth']) {echo $cart_item['doorwidth'];}} ?>"  name="doorwidth" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
				
			<?php }
			else {
				?>
				<div class="door-width"><input id="doorwidth" class="img-doorwidth doorwidthvalid screenname" type="hidden" value="0" name="doorwidth" placeholder="*Door Width (mm)" required /></div>
			<?php
			} 
			?>
			
			<div class="screen-height"><input id="screenheight" class="img-screenheight screenname" type="text" value="<?php if(isset($cart_item['screenheight'])){if($cart_item['screenheight'] == $cart_item['screenheight']) {echo $cart_item['screenheight'];}} ?>" name="screenheight" placeholder="*Screen Height (mm)"    data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
			
			<?php
			if($mspc_screendepthhide == 1)
			{
			?>
				<div class="screen-depth"><input id="screendepth" class="img-screendepth screenname" type="text" value="<?php if(isset($cart_item['screendepth'])){if($cart_item['screendepth'] == $cart_item['screendepth']) {echo $cart_item['screendepth'];}} ?>" name="screendepth" placeholder="*Screen Depth (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screendepth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-depth"><input id="screendepth" class="img-screendepth screendepthvalid screenname" type="hidden" value="0" name="screendepth" placeholder="*Screen Depth (mm)" required /></div>
			<?php
			} 
			?>
		
			<div class="screen-image-single" id="doorimage-single"></div>
			
			<?php
			if($mspc_screenwidthhide == 1)
			{
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenname" type="text" value="<?php if(isset($cart_item['screenwidth'])){if($cart_item['screenwidth'] == $cart_item['screenwidth']) {echo $cart_item['screenwidth'];}} ?>" name="screenwidth" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
				
			<?php }
			else {
			?>
				<div class="screen-width"><input id="screenwidth" class="img-screenwidth screenwidthvalid screenname" type="hidden" value="0" name="screenwidth" placeholder="*Screen Width (mm)" required /></div>
			<?php
			} 
			?>  
		<?php } ?>

		
		</div>
		<br>
		<div id="dimension-message" style="color:red"></div>
		<!--<div id="doorwidtherror-message" style="color:red"></div>
		<div id="screenwidtherror-message" style="color:red"></div>
		<div id="screenheighterror-message" style="color:red"></div>
		<div id="screendeptherror-message" style="color:red"></div>
		<div id="panelerror-message" style="color:red"></div>
		<div id="hingepanelerror-message" style="color:red"></div>-->
		
			<input type="button" name="previous" class="previous action-button back button-positionleft" value="Back" />
			<input type="button" name="next" class="next action-button continue shower-size button-positionright" value="Next" />

	</fieldset>
	<!-- End Process -->
	
	<!-- Field step_Process_Fitting-1 -->
	<fieldset>
	<h2 class="fs-title hardware-select">Click on your Hardware Selection</h2>

	<div class="row">
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="hardware-box">
			<label class="select-img">
			<input id="fittingfinishhidden" name="fitting-finishhidden" type="hidden" value="">
			<input id="chrome-select" type="radio" name="fitting" data-title="<?php echo $hardware_title1;?>" data-src="<?php echo $mspc_hardware_image_url1;?>" data-value="<?php echo $hardware_price1;?>" value="<?php echo $hardware_title1;?>" <?php if(isset($cart_item['fitting'])){if($cart_item['fitting'] == $hardware_title1) {echo "checked";}} ?>/>
			
				<div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url1;?>" alt="<?php echo $hardware_title1;?>" /></div>
				<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title1;?>"><?php echo $hardware_title1;?></span> Included </a>
			</label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="hardware-box">
			<label class="select-img"><input id="satinchrome-select" type="radio" name="fitting" data-title="<?php echo $hardware_title2;?>" data-src="<?php echo $mspc_hardware_image_url2;?>" data-value="<?php echo $hardware_price2;?>" value="<?php echo $hardware_title2;?>" <?php if(isset($cart_item['fitting'])){if($cart_item['fitting'] == $hardware_title2) {echo "checked";}} ?>/>
			<div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url2;?>" alt="<?php echo $hardware_title2;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title2;?>"><?php echo $hardware_title2;?></span> + $<span class="ft-price" value="<?php echo $hardware_price2;?>"><?php echo $hardware_price2;?></span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="hardware-box">
			<label class="select-img"><input id="mattblack-select" type="radio" name="fitting" data-title="<?php echo $hardware_title3;?>" data-src="<?php echo $mspc_hardware_image_url3;?>" data-value="<?php echo $hardware_price3;?>" value="<?php echo $hardware_title3;?>" <?php if(isset($cart_item['fitting'])){if($cart_item['fitting'] == $hardware_title3) {echo "checked";}} ?>/>
			<div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url3;?>" alt="<?php echo $hardware_title3;?>" /></div> 
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title3;?>"><?php echo $hardware_title3;?></span> + $<span class="ft-price" value="<?php echo $hardware_price3;?>"><?php echo $hardware_price3;?></span></a></label>
		  </div>
		  </div>  
	</div>
		<br>
		<div id="hardwarefinish-message" style="color:red"></div>
	
		<div class="hardware-technical">
		<div class="hardware-image">
			<figure class="wpb_wrapper vc_figure">
			  <a data-rel="prettyPhoto[rel-4038-725637888]" href="<?php echo $mspc_drawing_image_url1;?>" target="_self" class="vc_single_image-wrapper vc_box_border_grey prettyphoto"><img src="<?php echo $mspc_drawing_image_url1;?>" class="vc_single_image-img attachment-full" /></a>
			</figure>		  
		</div>
		<div class="hardware-text">
			Hardware specification
		</div>
		<div class="clear"></div>
		</div>

		<input type="button" name="previous" class="previous action-button back" value="Back" />
		<input type="button" name="next" class="next action-button continue ft-finish" value="Next" />

	
	</fieldset>
	
	<!-- Field step_Process_Fitting-2 -->
	<?php
	if($mspc_handleselectionhide == 1)
	{
	?>
	
	<fieldset>
	<h2 class="fs-title">Click on your Handle Selection</h2>
	
	<!-- Inner chrome section -->
	<div id="chrome" class="inner-chrome">

	<div class="row">
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img">
			<input id="fittinghandlehidden" name="fitting-handlehidden" type="hidden" value="">
			<input id="handlehidden" name="handlehidden" type="hidden" value="<?php echo $mspc_handleselectionhide;?>">
			<input type="radio" name="prefitting" data-title="<?php echo $hardware_title4;?>" data-src="<?php echo $mspc_hardware_image_url4;?>" data-value="<?php echo $hardware_price4;?>" value="<?php echo $hardware_title4;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title4) {echo "checked";}} ?>/>
			
			<div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url4;?>" alt="<?php echo $hardware_title4;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title4;?>"><?php echo $hardware_title4;?></span> <span class="ft-price" value="<?php echo $hardware_price4;?>"><?/**<?php echo $hardware_price4;?>**/?>Included</span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div"> 
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title5;?>" data-src="<?php echo $mspc_hardware_image_url5;?>" data-value="<?php echo $hardware_price5;?>" value="<?php echo $hardware_title5;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title5) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url5;?>" alt="<?php echo $hardware_title5;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title5;?>"><?php echo $hardware_title5;?></span> + $<span class="ft-price" value="<?php echo $hardware_price5;?>"><?php echo $hardware_price5;?></span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title6;?>" data-src="<?php echo $mspc_hardware_image_url6;?>" data-value="<?php echo $hardware_price6;?>" value="<?php echo $hardware_title6;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title6) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url6;?>" alt="<?php echo $hardware_title6;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title6;?>"><?php echo $hardware_title6;?></span> + $<span class="ft-price" value="<?php echo $hardware_price6;?>"><?php echo $hardware_price6;?></span></a></label>
		  </div>
		  </div>
	</div>
	</div>
	
	<!-- Inner satin chrome section -->
	<div id="satin-chrome" class="inner-satinchrome">

	<div class="row">
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title7;?>" data-src="<?php echo $mspc_hardware_image_url7;?>" data-value="<?php echo $hardware_price7;?>" value="<?php echo $hardware_title7;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title7) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url7;?>" alt="<?php echo $hardware_title7;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title7;?>"><?php echo $hardware_title7;?></span> <span class="ft-price" value="<?php echo $hardware_price7;?>"><?php //echo $hardware_price7;?>Included</span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title8;?>" data-src="<?php echo $mspc_hardware_image_url8;?>" data-value="<?php echo $hardware_price8;?>" value="<?php echo $hardware_title8;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title8) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url8;?>" alt="<?php echo $hardware_title8;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title8;?>"><?php echo $hardware_title8;?></span> + $<span class="ft-price" value="<?php echo $hardware_price8;?>"><?php echo $hardware_price8;?></span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title9;?>" data-src="<?php echo $mspc_hardware_image_url9;?>" data-value="<?php echo $hardware_price9;?>" value="<?php echo $hardware_title9;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title9) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url9;?>" alt="<?php echo $hardware_title9;?>" /></div> 
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title9;?>"><?php echo $hardware_title9;?></span> + $<span class="ft-price" value="<?php echo $hardware_price9;?>"><?php echo $hardware_price9;?></span></a></label>
		  </div>
		  </div>
	</div>	
	</div>	
	
	<!-- Inner Matt black section -->
	<div id="matt-black" class="inner-mattblack">

		<div class="row">
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title10;?>" data-src="<?php echo $mspc_hardware_image_url10;?>" data-value="<?php echo $hardware_price10;?>" value="<?php echo $hardware_title10;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title10) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url10;?>" alt="<?php echo $hardware_title10;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title10;?>"><?php echo $hardware_title10;?></span> <span class="ft-price" value="<?php echo $hardware_price10;?>"><?php echo $hardware_price10; ?>Included</span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div"> 
		  <div class="handle-box">		  
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title11;?>" data-src="<?php echo $mspc_hardware_image_url11;?>" data-value="<?php echo $hardware_price11;?>" value="<?php echo $hardware_title11;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title11) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url11;?>" alt="<?php echo $hardware_title11;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title11;?>"><?php echo $hardware_title11;?></span> + $<span class="ft-price" value="<?php echo $hardware_price11;?>"><?php echo $hardware_price11;?></span></a></label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12 handle-div">
		  <div class="handle-box">
			<label class="select-img"><input type="radio" name="prefitting" data-title="<?php echo $hardware_title12;?>" data-src="<?php echo $mspc_hardware_image_url12;?>" data-value="<?php echo $hardware_price12;?>" value="<?php echo $hardware_title12;?>" <?php if(isset($cart_item['prefitting'])){if($cart_item['prefitting'] == $hardware_title12) {echo "checked";}} ?>/><div class="back-opaque"><img src="<?php echo $mspc_hardware_image_url12;?>" alt="<?php echo $hardware_title12;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $hardware_title9;?>"><?php echo $hardware_title12;?></span> + $<span class="ft-price" value="<?php echo $hardware_price12;?>"><?php echo $hardware_price12;?></span></a></label>
		  </div>
		  </div>
	</div>	
	</div>
	
			<div class="hardware-technical">
		<div class="hardware-image">	
			<figure class="wpb_wrapper vc_figure">
			  <a data-rel="prettyPhoto[rel-4038-725637887]" href="<?php echo $mspc_drawing_image_url4;?>" target="_self" class="vc_single_image-wrapper vc_box_border_grey prettyphoto"><img src="<?php echo $mspc_drawing_image_url4;?>" class="vc_single_image-img attachment-full" /></a>
			</figure>
		</div>
		<div class="hardware-text">
			Handle specification
		</div>
		<div class="clear"></div>
		</div>
	
	<div id="handletype-message" style="color:red"></div>

	<input type="button" name="previous" class="previous action-button back ft-typeback" value="Back" />
	<input type="button" name="next" class="next action-button continue ft-type gt-glassprice" value="Next" />
	</fieldset>
	
	<?php }
	else { ?>
	
	<?php
	} 
	?>
	<!--- End Process --->
	
	<!--- Field step_Process_Glass-1 --->
	<fieldset>
		<h2 class="fs-title">Click on your Glass Selection</h2>
		

		<div class="row">
		  <div class="col-md-4 col-xs-12">
		  <div class="glass-box">
			<label class="select-img">
			<input id="glasstypehidden" name="glass-typehidden" type="hidden" value="">
			<input type="radio" name="glass" id="glasstype-squaremetre" data-title="<?php echo $glass_title1;?>" data-src="<?php echo $mspc_glass_image_url1;?>" data-value="<?php echo $glass_price1;?>" value="<?php echo $glass_title1;?>" <?php if(isset($cart_item['glass'])){if($cart_item['glass'] == $glass_title1) {echo "checked";}} ?>/>
			
				<div class="back-opaque"><img src="<?php echo $mspc_glass_image_url1;?>" alt="<?php echo $glass_title1;?>" /></div>
				<a class="step-1"><span class="ft-title" value="<?php echo $glass_title1;?>"><?php echo $glass_title1;?></span> Included</a>
				<div class="glass-text">Standard 10mm toughened glass</div>
			</label>
		  </div>
		  </div>
		  <div class="col-md-4 col-xs-12">
		  <div class="glass-box">
			<label class="select-img"><input type="radio" name="glass" id="glasstype-squaremetre1" data-title="<?php echo $glass_title2;?>" data-src="<?php echo $mspc_glass_image_url2;?>" data-value="<?php echo $glass_price2;?>" value="<?php echo $glass_title2;?>" <?php if(isset($cart_item['glass'])){if($cart_item['glass'] == $glass_title2) {echo "checked";}} ?>/>
			<div class="back-opaque"><img src="<?php echo $mspc_glass_image_url2;?>" alt="<?php echo $glass_title2;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $glass_title2;?>"><?php echo $glass_title2;?></span>
			+ $<span class="ft-price gt-squaremetreprice1" value="<?php echo $glass_price2;?>"><?php echo $glass_price2;?></span></a>
				<div class="glass-text">Frosted 10mm toughened glass</div>
			</label>
		 </div>
		 </div>
		  <div class="col-md-4 col-xs-12">
		  <div class="glass-box">
			<label class="select-img"><input type="radio" name="glass" id="glasstype-squaremetre2" data-title="<?php echo $glass_title3;?>" data-src="<?php echo $mspc_glass_image_url3;?>" data-value="<?php echo $glass_price3;?>" value="<?php echo $glass_title3;?>" <?php if(isset($cart_item['glass'])){if($cart_item['glass'] == $glass_title3) {echo "checked";}} ?>/>
			<div class="back-opaque"><img src="<?php echo $mspc_glass_image_url3;?>" alt="<?php echo $glass_title3;?>" /></div>
			<a class="step-1"><span class="ft-title" value="<?php echo $glass_title3;?>"><?php echo $glass_title3;?><sup>TM</sup></span>
			+ $<span class="ft-price gt-squaremetreprice2" value="<?php echo $glass_price3;?>"><?php echo $glass_price3;?></span></a>
				<div class="glass-text">High clarity toughened glass</div>
			</label>
		  </div>
		  </div>
		</div>
		
		
		
		<div class="glass-technical">
			<ul>
				<li><div class="glass-video"><a data-rel="prettyPhoto[rel-4038-725637890]" href="https://youtu.be/AmBlY0LXhD8?rel=0" target="_self" class="vc_single_image-wrapper vc_box_border_grey prettyphoto"><i class="fa fa-play" aria-hidden="true"></i> Glass Options</a></div></li>
				<li><div class="glass-video"><a data-rel="prettyPhoto[rel-4038-725637890]" href="https://youtu.be/nNfnjoNx55s?rel=0" target="_self" class="vc_single_image-wrapper vc_box_border_grey prettyphoto"><i class="fa fa-play" aria-hidden="true"></i> Claralite<sup>TM</sup> Glass</a></div></li>
			</ul>
			<div class="clear"></div>
		</div>	
		
		<div id="glasstype-message" style="color:red"></div>

		<input type="button" name="previous" class="previous action-button back glass-typeback" value="Back" />
		<input type="button" name="next" class="next action-button continue glass-type" value="Next" />
	</fieldset>
     <!--- End Process --->
	 
	 <!--- Field step_Process_Glass-2 --->
	<fieldset>
		<h2 class="fs-title">Click on your Glass Treatment Selection</h2>
		
		<div class="row">

			<div class="col-md-6 col-xs-12"> 
			<div class="treatment-box right">
			<label class="select-img">
			<input id="glasstreatmenthidden" name="glass-treatmenthidden" type="hidden" value="">
			<input type="radio" name="preglass" data-title="<?php echo $glass_title4;?>" data-src="<?php echo $mspc_glass_image_url4;?>" data-value="<?php echo $glass_price4;?>" value="<?php echo $glass_title4;?>" <?php if(isset($cart_item['preglass'])){if($cart_item['preglass'] == $glass_title4) {echo "checked";}} ?>/>
			
				<div class="back-opaque"><img src="<?php echo $mspc_glass_image_url4;?>" alt="<?php echo $glass_title4;?>" /></div>
				<a class="step-1"><span class="ft-title" value="<?php echo $glass_title4;?>"><?php echo $glass_title4;?></span> - Included</a>
			</label>
			</div>
			</div>
			<div class="col-md-6 col-xs-12">
			<div class="treatment-box left">			
			<label class="select-img"><input type="radio" name="preglass" data-title="<?php echo $glass_title5;?>" data-src="<?php echo $mspc_glass_image_url5;?>" data-value="<?php echo $glass_price5;?>" value="<?php echo $glass_title5;?>" <?php if(isset($cart_item['preglass'])){if($cart_item['preglass'] == $glass_title5) {echo "checked";}} ?>/>
				<div class="back-opaque"><img src="<?php echo $mspc_glass_image_url5;?>" alt="<?php echo $glass_title5;?>" /></div>
				<a class="step-1"><span class="ft-title" value="<?php echo $glass_title5;?>"><?php echo $glass_title5;?></span> + $<span class="ft-price" value="<?php echo $glass_price5;?>"><?php echo $glass_price5;?></span></a>
			</label>
			</div>
			</div>

		</div>
		<br />
		<div id="glasstreatment-message" style="color:red"></div>
		
		<div class="treatment-box-text">
			<div class="treatment-text">EnduroShield application will make your glass up to 90% easier to clean. Guaranteed for 10 years.</div>
			<div class="treatment-video"><a data-rel="prettyPhoto[rel-4038-725637890]" href="https://youtu.be/-yheNStVtpw?rel=0" target="_self" class="vc_single_image-wrapper vc_box_border_grey prettyphoto"><i class="fa fa-play" aria-hidden="true"></i></a> EnduroShield</div>
		</div>	
		
		<?php echo '<input type="hidden" name="productid" id="productid" value="'.get_the_ID().'">' ?>
		
		<input type="button" name="previous" class="previous action-button back glasstreat-back" value="Back" />
		<input type="button" name="next" class="next action-button continue glass-treatment review-step reviewleftrightimage reviewadvancedleftrightimage totalprice" value="Next" />
		
		<script>
				setTimeout(price_changed, 1500);
				$(".totalprice").click(function() {
					setTimeout(price_changed, 1500);             
				});
				
				function price_changed()
				{
					$(".totalprice").click(function() {
						var runingtotal =$('#runingtotal').val();
						var productid =$('#productid').val();
						//alert(runingtotal);
							$.ajax({
							   type: 'post',
							   url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
							   data: 'action=update_order_installer_price&nonce=<?php echo wp_create_nonce('nonce_update_order_installer_price'); ?>&runingtotal='+runingtotal+'&productid='+productid,  
							   success: function(data){
								    console.log(data);
							   },
							   error: function(xhr, textStatus, errorThrown) {
								 // console.log(xhr.responseText);
							   }
							});

					});
				}
		</script>
		
	</fieldset>
     <!--- End Process --->
	 

	<!--- Field Process Review-Step --->
	<fieldset class="checking">
	
		<h2 class="fs-title hidden">Test Your Selection</h2>
	
	<!--- Field Process Advanced Options --->
	<div id="advancedoptions-floor-message" style="color:red"></div>
	<div class="accordion">Advanced Options - for out of square screen</div>
	<div class="panel">
	<div class="hidden-sm hidden-xs">
	<div class="advanced-options">

		<br></br>
		<hr class="hr-advanced" />
		<br>
		
		<div id="advancedoptions-floor-messageinner" style="color:red"></div>
		<div class="col-md-12 col-xs-12"> 
			<div class="optioninput-top">
				<!--<span class="plus-icontopleft"><input type="button" class="fa fa-plus qtyplus-topleft" field='quantity' value="+"/><input class="input-sm1 optioninput-top1" id="optioninput-top1" min="0" max="30" type="number" name="advancedoptions-topleft" value="0" placeholder="0"/><input type="button" class="fa fa-minus minus-topleft" field='quantity' value="-"/></span>-->
				<input id="optioninput-top1value" type="hidden" name="optioninput-top1value" value=""/>
				<!--<span class="plus-icontopright"><input type="button" class="fa fa-minus minus-topright" field='quantity' value="-"/><input class="input-sm2 optioninput-top2" id="optioninput-top2" min="0" max="30" type="number" name="advancedoptions-topright" value="" placeholder="0"/><input type="button" class="fa fa-plus qtyplus-topright" field='quantity' value="+"/></span>-->
				<input id="optioninput-top2value" type="hidden" name="optioninput-top2value" value=""/>
				<div class="top-mostleft">
					<div class="plus-topleft">
						<input type="text" class="input-sm1 optioninput-top1 redcir-topleft" id="optioninput-top1" name="advancedoptions-topleft" maxlength="2" value="" placeholder="+0"/>
						<div class="left-sign">
							<button class="fa fa-caret-up qtyplus-topleft topleft-arrow"></button>
							<button class="fa fa-caret-down minus-topleft bottomleft-arrow"></button>
							<!--<div class="fa fa-caret-up qtyplus-topleft topleft-arrow"></div>
							<div class="fa fa-caret-down minus-topleft bottomleft-arrow"></div>--> 
						</div>
					</div>
					<div class="plus-topright">
						<input type="text" class="input-sm2 optioninput-top2 redcir-topright" id="optioninput-top2" name="advancedoptions-topright" maxlength="2" value="" placeholder="+0"/>
						<div class="right-sign">
							<button class="fa fa-caret-up qtyplus-topright topleft-arrow"></button>
							<button class="fa fa-caret-down minus-topright bottomleft-arrow"></button>
							<!--<div class="fa fa-caret-up qtyplus-topright topleft-arrow"></div>
							<div class="fa fa-caret-down minus-topright bottomleft-arrow"></div>-->
						</div>  
					</div>
				</div>
			</div>
			
			<canvas class="myCanvasleft" id="myCanvasleft" width="200" height="260"></canvas>
			
			
			<div id="advancedoptions-image"> 
				<div id="advancedoptionsimage"></div>
				<input id="advancedoptions-imagevalueleft" type="hidden" name="advancedoptions-imageleft" data-src="<?php echo $mspc_advancedoptions_image_url1;?>" value=""/>
				<input id="advancedoptions-imagevalueright" type="hidden" name="advancedoptions-imageright" data-src="<?php echo $mspc_advancedoptions_image_url2;?>" value=""/>
					<div class="advancedoptions-panel">
						<div id="advancedoptions-returnpanel" class="advancedoptions-returnpanel">
							<div id="advancedoptions-returnpanel1"></div>
							<div id="advancedoptions-returnpanel2"></div>
							
							<?php 
							$id = get_the_ID(); 
							
							/** Next to Bath Shower **/
							if($id == 4248){
							?>
							<input class="advancedoptions_bath" id="advancedoptions_bathwidth" type="text" name="advancedoptions_bathwidth" value=""/>
							<input class="advancedoptions_bath" id="advancedoptions_bathheight" type="text" name="advancedoptions_bathheight" value=""/>
							<input id="advancedoptions_bathwidthhidden" type="hidden" name="advancedoptions_bathwidthhidden" value=""/>
							<input id="advancedoptions_bathheighthidden" type="hidden" name="advancedoptions_bathheighthidden" value=""/>
							<?php } ?>
							
						</div>

						<div id="advancedoptions-doorpanel" class="advancedoptions-doorpanel"></div>
						<div id="advancedoptions-hingepanel" class="advancedoptions-hingepanel"></div>
					</div> 
			</div>
			
			<canvas class="myCanvasright" id="myCanvasright" width="200" height="260"></canvas>
			
			
			<div class="optioninput-bottom">
				<!--<span class="plus-iconbottomleft"><input type="button" class="fa fa-plus qtyplus-middleleft" field='quantity' value="+"/><input class="input-sm3 optioninput-bottom1" id="optioninput-bottom1" min="0" max="30" type="hidden" name="advancedoptions-bottomleft" value="" placeholder="0"/><input type="button" class="fa fa-minus minus-middleleft" field='quantity' value="-"/></span>-->
				<input id="optioninput-bottom1value" type="hidden" name="optioninput-bottom1value" value=""/>
				<!--<span class="plus-iconbottomright"><input type="button" class="fa fa-plus qtyplus-middleright" field='quantity' value="+"/><input type="hidden" class="input-sm4 optioninput-bottom2" id="optioninput-bottom2" min="0" max="30" type="number" name="advancedoptions-bottomright" value="" placeholder="0"/><input type="button" class="fa fa-minus minus-middleright" field='quantity' value="-"/></span>-->
				<input id="optioninput-bottom2value" type="hidden" name="optioninput-bottom2value" value=""/>
				<div class="top-mostright">
					<div class="plus-topleft">
						<input type="text" class="input-sm3 optioninput-bottom1 redcir-middleleft" id="optioninput-bottom1" type="text" name="advancedoptions-bottomleft" maxlength="2" value="" placeholder="+0"/>
						<div class="left-sign">
							<button class="fa fa-caret-up qtyplus-middleleft topleft-arrow"></button>
							<button class="fa fa-caret-down minus-middleleft bottomleft-arrow"></button>
							<!--<div class="fa fa-caret-up qtyplus-middleleft topleft-arrow"></div>
							<div class="fa fa-caret-down minus-middleleft bottomleft-arrow"></div>-->
						</div>
					</div>
					<div class="plus-topright">
						<input type="text" class="input-sm4 optioninput-bottom2 redcir-middleright" id="optioninput-bottom2" name="advancedoptions-bottomright" maxlength="2" value="" placeholder="+0"/>
						<div class="right-sign">
							<button class="fa fa-caret-up qtyplus-middleright topleft-arrow"></button>
							<button class="fa fa-caret-down minus-middleright bottomleft-arrow"></button>
							<!--<div class="fa fa-caret-up qtyplus-middleright topleft-arrow"></div>
							<div class="fa fa-caret-down minus-middleright bottomleft-arrow"></div>-->
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-md-6 col-xs-12 optioninput-bottomleft mobilebottomleft"> 
			<!--<span class="plus-iconbottomlastleft1"><input type="button" class="fa fa-plus qtyplus-bottomlleft" field='quantity' value="+"/><input type="hidden" class="input-sm5 optioninput-bottomleft1" id="optioninput-bottomleft1" min="0" max="8" type="number" name="advancedoptions-bottomlastll" value="" placeholder="0"/><input type="button" class="fa fa-minus minus-bottomlleft" field="quantity" value="-"></span>-->
			<input id="optioninput-bottomleft1value" type="hidden" name="advancedoptions-input" value=""/>
			<!--<span class="plus-iconbottomlastleft2"><input type="button" class="fa fa-plus qtyplus-bottomleftright" field='quantity' value="+"/><input type="hidden" class="input-sm6 optioninput-bottomleft2" id="optioninput-bottomleft2" min="0" max="8" type="number" name="advancedoptions-bottomlastlr" value="" placeholder="0"/><input type="button" class="fa fa-minus minus-bottomleftright" field="quantity" value="-"></span>-->
			<input id="optioninput-bottomleft2value" type="hidden" name="advancedoptions-input" value=""/>
			<div class="bottom-mostleft">
				<div class="plus-bottomleft">
					<input type="text" class="input-sm5 optioninput-bottomleft1 redcir-bottomleft1" id="optioninput-bottomleft1" name="advancedoptions-bottomlastll" maxlength="2" value="" placeholder="+0"/>
					<div class="left-sign">
						<div class="fa fa-caret-up qtyplus-bottomlleft topleft-arrow"></div>
						<div class="fa fa-caret-down minus-bottomlleft bottomleft-arrow"></div>
					</div>
				</div>
				<div class="plus-bottomright">
					<input type="text" class="input-sm6 optioninput-bottomleft2 redcir-bottomleft2" id="optioninput-bottomleft2" name="advancedoptions-bottomlastlr" maxlength="2" value="" placeholder="+0"/>
					<div class="right-sign">
						<div class="fa fa-caret-up qtyplus-bottomleftright topleft-arrow"></div>
						<div class="fa fa-caret-down minus-bottomleftright bottomleft-arrow"></div>
					</div>
				</div>
			</div>
		</div>
		<canvas class="myCanvasleftbottom" id="myCanvasleftbottom"></canvas>
		<canvas class="doorline" id="myCanvasdoorline"></canvas>
		
		<div class="col-md-6 col-xs-12 optioninput-bottomright mobilebottomright"> 
			<!--<span class="plus-iconbottomlastright1"><input type="button" class="fa fa-plus qtyplus-bottomrightleft" field='quantity' value="+"/><input type="hidden" class="input-sm7 optioninput-bottomright1" id="optioninput-bottomright1" min="0" max="8" type="number" name="advancedoptions-bottomlastrl" value="" placeholder="0"/><input type="button" class="fa fa-minus minus-bottomrightleft" field="quantity" value="-"></span>-->
			<input id="optioninput-bottomright1value" type="hidden" name="advancedoptions-input" value=""/>
			<!--<span class="plus-iconbottomlastright2"><input type="button" class="fa fa-plus qtyplus-bottomrright" field='quantity' value="+"/><input type="hidden" class="input-sm8 optioninput-bottomright2" id="optioninput-bottomright2" min="0" max="8" type="number" name="advancedoptions-bottomlastrr" value="" placeholder="0"/><input type="button" class="fa fa-minus minus-bottomrright" field="quantity" value="-"></span>-->
			<input id="optioninput-bottomright2value" type="hidden" name="advancedoptions-input" value=""/>
			<div class="bottom-mostright">
				<div class="plus-bottomleft">
					<input type="text" class="input-sm7 optioninput-bottomright1 redcir-bottomright1" id="optioninput-bottomright1" name="advancedoptions-bottomlastrl" maxlength="2" value="" placeholder="+0"/>
					<div class="left-sign">
						<div class="fa fa-caret-up qtyplus-bottomrightleft topleft-arrow"></div>
						<div class="fa fa-caret-down minus-bottomrightleft bottomleft-arrow"></div>
					</div>
				</div>
				<div class="plus-bottomright">
					<input type="text" class="input-sm8 optioninput-bottomright2 redcir-bottomright2" id="optioninput-bottomright2" name="advancedoptions-bottomlastrr" maxlength="2" value="" placeholder="+0"/>
					<div class="right-sign">
						<div class="fa fa-caret-up qtyplus-bottomrright topleft-arrow"></div>
						<div class="fa fa-caret-down minus-bottomrright bottomleft-arrow"></div>
					</div>
				</div>
			</div>
		</div>
		<canvas class="myCanvasrightbottom" id="myCanvasrightbottom"></canvas>    
	</div>
		<br>
		<input class="resetline" id="reset" type="button" value="Clear">
		
		<div class="error_msgleft">
				<span class="error_textleft">Select Values Between 0 and 30
				* One value must be 0
				</span>
		</div>
		<div class="error_msgright">
				<span class="error_textright">Select Values Between 0 and 30
				* One value must be 0
				</span>
		</div> 
		<div class="error_msgbottom">
				<span class="error_textbottom">Select Values Between 0 and 8
				</span>
		</div> 
		
		<br>
	</div><!-- end hidden mobile -->
	<div class="hidden-lg hidden-md">This option is only available on desktop or in landscape on tablets</div>
	</div><!-- end panel -->
	

	
	<div class="row">
		<div class="col-xs-12">
			<div class="product-review">
			<div class="review-text">
				The <span class="man-size">Manufacture Sizes</span> of the glass are marginally smaller than the <span class="dower-size">Shower Size</span>. This is to allow for silicone joints, panel alignment and threshold detail at door.
			</div>
					
			<div class="review-images">
				<input id="reviewimage1left" type="hidden" name="reviewimage1left" data-src="<?php echo $mspc_reviewbackend_image_url1;?>" value=""/>
				<input id="reviewimage1right" type="hidden" name="reviewimage1right" data-src="<?php echo $mspc_reviewbackend_image_url2;?>" value=""/>
				<input id="reviewimage2left" type="hidden" name="reviewimage2left" data-src="<?php echo $mspc_reviewbackend_image_url3;?>" value=""/>
				<input id="reviewimage2right" type="hidden" name="reviewimage2right" data-src="<?php echo $mspc_reviewbackend_image_url4;?>" value=""/>
				
				<div id="reviewimage1"></div>
					<div class="advancedoptions-panel1">
						<div id="advancedoptions-reviewreturnpanel"></div>
						<div id="advancedoptions-reviewscreen-width"></div>
						<div id="advancedoptions-reviewscreen-depth"></div>
						<div id="advancedoptions-reviewdoorpanel"></div>
						<div id="advancedoptions-reviewhingepanel"></div>
					</div>
				
				<div id="reviewimage2"></div>
							
					<div class="advancedoptions-panel2">
						<div id="advancedoptions-reviewreturnpanel2"></div>
						<div id="advancedoptions-reviewdoorpanel2"></div>
						<div id="advancedoptions-reviewhingepanel2"></div>
						<div id="advancedoptions-review-screenheight"></div>
							<?php 
							$id = get_the_ID(); 
							
							/** Next to Bath Shower **/
							if($id == 4248){
							?>
							<div class="review_bathwidth">
								<input class="advancedoptions_bathendwidth" id="advancedoptions_bathendwidth" type="text" name="advancedoptions_bathendwidth" value=""/>
							</div>
							<div class="review_bathheight">
								<input class="advancedoptions_bathendheight" id="advancedoptions_bathendheight" type="text" name="advancedoptions_bathendheight" value=""/>
							</div> 
							
							
							<?php } ?>
					</div>
			
			</div><!-- end review iamges -->

			<div class="screen-dimensions-review">
				<div id="dimensiondigitsreview-message" style="color:red"></div> 
				<div class="door-dimensions">
				
					<?php 
					$id = get_the_ID(); 
					
					/** Angled Corner Shower **/
					if($id == 4280){
					?>
						<?php
						if($mspc_doorwidthhide == 1)
						{
						?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
							
						<?php }
						else {
							?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview doorwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Door Width (mm)" required /></div>
						<?php
						} 
						?>
						
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
						<?php
						if($mspc_panelwidthhide == 1)
						{	
						?>
							<div class="panel-depth reviewscreenname"><input id="paneldepthreview" class="img-paneldepth" type="hidden" value="" name="reviewscreenname" placeholder="*Panel (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_paneldepth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="panel-depth reviewscreenname"><input id="paneldepthreview" class="img-paneldepth paneldepthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Panel (mm)" required /></div>
						<?php
						} 
						?>
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_panelwidthhide == 1)
						{
						?>	
							<div class="hinge-panel reviewscreenname"><input id="hingepanelreview" class="img-hingepanel" type="text" value="" name="reviewscreenname" placeholder="*Hinge Panel (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_hingepanel;?>" required /></div>
						<?php }
						else {
						?>
							<div class="hinge-panel reviewscreenname"><input id="hingepanelreview" class="img-hingepanel hingepanelvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Hinge Panel (mm)" required /></div>
						<?php
						} 
						?>
					<?php } ?>
					
					<?php
					/** Wall to Wall **/
					if($id == 4255){
					?>
						<?php
						if($mspc_doorwidthhide == 1)
						{
						?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
							
						<?php }
						else {
							?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview doorwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Door Width (mm)" required /></div>
						<?php
						} 
						?>
						
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_screenwidthhide == 1)
						{
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
							
						<?php }
						else {
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview screenwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Width (mm)" required /></div>
						<?php
						} 
						?>
						
						<?php
						if($mspc_panelwidthhide == 1)
						{
						?>	
							<div class="hinge-panelwall reviewscreenname"><input id="hingepanelreview" class="img-hingepanel" type="text" value="" name="reviewscreenname" placeholder="*Hinge Panel (mm)" data-toggle="tooltip" title="<?php echo $mspc_tooltip_hingepanel;?>" required /></div>
						<?php }
						else {
						?>
							<div class="hinge-panelwall reviewscreenname"><input id="hingepanelreview" class="img-hingepanel hingepanelvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Hinge Panel (mm)" required /></div>
						<?php
						} 
						?>
					<?php } ?>
					
					<?php
					/** Over Bath Shower-Fixed **/
					if($id == 4271){
					?>
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_screenwidthhide == 1)
						{
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview screenwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Width (mm)" required /></div>
						<?php
						} 
						?>
					<?php } ?>
					
					<?php
					/** Over Bath Shower-Hinged **/
					if($id == 4262){
					?>
						<?php
						if($mspc_doorwidthhide == 1)
						{
						?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
							
						<?php }
						else {
							?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview doorwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Door Width (mm)" required /></div>
						<?php
						} 
						?>
						
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_screenwidthhide == 1)
						{
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview screenwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Width (mm)" required /></div>
						<?php
						} 
						?>
					<?php } ?>
					
					<?php
					/** Next To Bath Shower **/
					if($id == 4248){
					?>
						<?php
						if($mspc_screendepthhide == 1)
						{
						?>
							<div class="screen-depth sdepthreview reviewscreenname"><input id="screendepthreview" class="img-screendepthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Depth (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screendepth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="screen-depth sdepthreview reviewscreenname"><input id="screendepthreview" class="img-screendepthreview screendepthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Depth (mm)" required /></div>
						<?php
						} 
						?>
						
						<?php
						if($mspc_doorwidthhide == 1)
						{
						?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
						<?php }
						else {
							?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview doorwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Door Width (mm)" required /></div>
						<?php
						} 
						?>
						
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_screenwidthhide == 1)
						{
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview screenwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Width (mm)" required /></div>
						<?php
						} 
						?>
					<?php } ?>
					
					<?php
					/** Fixed Panel Shower **/
					if($id == 4241){
					?>
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_screenwidthhide == 1)
						{
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview screenwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Width (mm)" required /></div>
						<?php
						} 
						?>
					<?php } ?> 
					
					<?php
					/** Corner Shower **/
					if($id == 3743){
					?>
						<?php
						if($mspc_doorwidthhide == 1)
						{
						?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Door Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_doorwidth;?>" required /></div>
						<?php }
						else {
							?>
							<div class="door-width dwidthreview reviewscreenname"><input id="doorwidthreview" class="img-doorwidthreview doorwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Door Width (mm)" required /></div>
						<?php
						} 
						?>
						
						<div class="screen-height sheightreview reviewscreenname"><input id="screenheightreview" class="img-screenheightreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Height (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenheight;?>" required /></div>
						
						<?php
						if($mspc_screendepthhide == 1)
						{
						?>
							<div class="screen-depth sdepthreview reviewscreenname"><input id="screendepthreview" class="img-screendepthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Depth (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screendepth;?>" required /></div>
						<?php }
						else {
						?>
							<div class="screen-depth sdepthreview reviewscreenname"><input id="screendepthreview" class="img-screendepthreview screendepthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Depth (mm)" required /></div>
						<?php
						} 
						?>
					
						<div class="screen-image-single" id="review-size-imgline"></div>
						
						<?php
						if($mspc_screenwidthhide == 1)
						{
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview" type="text" value="" name="reviewscreenname" placeholder="*Screen Width (mm)" data-toggle="tooltip" title="<?php echo $mspc_tootip_screenwidth;?>" required /></div>
							
						<?php }
						else {
						?>
							<div class="screen-width swidthreview reviewscreenname"><input id="screenwidthreview" class="img-screenwidthreview screenwidthvalidreview" type="hidden" value="0" name="reviewscreenname" placeholder="*Screen Width (mm)" required /></div>
						<?php
						} 
						?>  
					<?php } ?> 
					
					<br></br>
					<div id="dimensionreview-message" style="color:red"></div>

				</div>
			</div>	
			
			</div><!-- end product review -->			
		</div><!-- end col -->
	</div><!-- end row -->


		<input type="button" name="update" class="action-button update-advancedoptions" value="update" />
		<input type="button" name="previous" class="previous action-button back glasstreatment-back" value="Back" />
		<!--<input type="button" name="next" class="next action-button continue advanced-options" value="Next" />-->
		<?php 
		if( $cart_item['product_id'] == get_the_ID() && !$exp) {
			echo '<button type="button" name="add-to-cart" value="'.get_the_ID().'" class="single_add_to_cart_button button action-button already_cart continue advanced-options product-id alt disabled">Already in cart</button>'; 
		}
		else if (!$exp){
			echo '<button type="submit" name="add-to-cart" value="'.get_the_ID().'" class="single_add_to_cart_button button action-button continue advanced-options advanced-optionsinput product-id alt">Add to cart</button>'; 
		} else {
			echo '<button type="button" class="btn action-button continue product-id" data-toggle="modal" data-target="#exampleModal" value="'.get_the_ID().'" id="contact-form-modal">Finish</button>'; 
		}
		?>
	</fieldset>
	
	<!--- Field Process Payment --->
	<fieldset>
		<h2 class="fs-title">Payment Details</h2>
		<h3 class="fs-subtitle">Make Payment</h3>

		<input type="button" name="previous" class="previous action-button back" value="Back" />
		<!--<input type="submit" name="submit" class="submit action-button continue" value="Submit" />-->
		
	</fieldset>
</div> 

<!--- Right Box --->
					<div class="sidebar" id="sticky"> 
						<div class="step-total">
								<div class="showersize-rightbox">
									<div class="showersize-text"></div>
								
									<div class="row">
										<div class="right-column-selections">
										<?php
										$id = get_the_ID(); 
										if($id == 4280){ 
										?>
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
											<input type="hidden" id="door_widthcheckout" name="door_widthcheckout" value="">
											<span id="door-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
											<input type="hidden" id="panel_widthcheckout" name="panel_widthcheckout" value="">
											<span id="panel-width"></span><br>
											<?php }
											else { 
											?>
											<?php } ?>
											
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
											<input type="hidden" id="hinge_panelcheckout" name="hinge_panelcheckout" value="">
											<span id="hinge-panel"></span><br>
											<?php }
											else {
											?>
											<?php } ?> 
										<?php } ?>
										
										<?php
										if($id == 4271){ 
										?>
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="screen_widthcheckout" name="screen_widthcheckout" value="">
												<span id="screen-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
										<?php } ?>
										
										<?php
										if($id == 4262){ 
										?>
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
											<input type="hidden" id="door_widthcheckout" name="door_widthcheckout" value="">
											<span id="door-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="screen_widthcheckout" name="screen_widthcheckout" value="">
												<span id="screen-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
										<?php } ?>
										
										<?php
										if($id == 4255){ 
										?>
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="screen_widthcheckout" name="screen_widthcheckout" value="">
												<span id="screen-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
											<input type="hidden" id="door_widthcheckout" name="door_widthcheckout" value="">
											<span id="door-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
											<input type="hidden" id="hinge_panelcheckout" name="hinge_panelcheckout" value="">
											<span id="hinge-panel"></span><br>
											<?php }
											else {
											?>
											<?php } ?> 
										<?php } ?>
										
										<?php
										if($id == 4248){ 
										?>
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
											<input type="hidden" id="door_widthcheckout" name="door_widthcheckout" value="">
											<span id="door-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="screen_widthcheckout" name="screen_widthcheckout" value="">
												<span id="screen-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<?php
											if($mspc_screendepthhide == 1)
											{
											?>
												<input type="hidden" id="screen_depthcheckout" name="screen_depthcheckout" value="">
												<span id="screen-depth"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
										<?php } ?>
										
										<?php
										if($id == 4241){ 
										?>
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="screen_widthcheckout" name="screen_widthcheckout" value="">
												<span id="screen-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
										<?php } ?>
										
										<?php
										if($id == 3743){ 
										?>
											<?php
											if($mspc_doorwidthhide == 1)  
											{
											?>
											<input type="hidden" id="door_widthcheckout" name="door_widthcheckout" value="">
											<span id="door-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<input type="hidden" id="screen_heightcheckout" name="screen_heightcheckout" value="">
											<span id="screen-height"></span><br>
											
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="screen_widthcheckout" name="screen_widthcheckout" value="">
												<span id="screen-width"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
											
											<?php
											if($mspc_screendepthhide == 1)
											{
											?>
												<input type="hidden" id="screen_depthcheckout" name="screen_depthcheckout" value="">
												<span id="screen-depth"></span><br>
											<?php }
											else {
											?>
											<?php } ?>
										<?php } ?>
												
												<input id="door-width-sq-metre" type="hidden" value="">
												<input id="screen-height-sq-metre" type="hidden" value="">
												<input id="screen-width-sq-metre" type="hidden" value="">
												<input id="screen-depth-sq-metre" type="hidden" value="">
												<input id="panel-sq-metre" type="hidden" value=""> 
												<input id="hinge-panel-sq-metre" type="hidden" value="">
												<input id="door-width-doorpanel" type="hidden" value="">
												<input id="door-width-returnpanel" type="hidden" value="">
												<input id="door-width-hingepanel" type="hidden" value="">
												<input id="total-sq-metre" class="sq-metre" type="hidden" value="">
										</div>
									</div>
								</div>
								
								<div class="manufacturesize-rightbox">
									<div class="manufacturesize-text"></div>
									
									<div class="row">
										<div class="right-column-selections">
										<?php
										$id = get_the_ID(); 
										if($id == 4280){ 
										?>	
											<div class="clear right-column-heading"><span id="panel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
												<input type="hidden" id="panel_width" name="panel_width" value="">
												<input type="hidden" id="panel_height" name="panel_height" value="">
												<input type="hidden" id="panel_checkout" name="panel_checkout" value="">
												<span id="door-width-p"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											<div class="clear right-column-heading"><span id="doorpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
												<input type="hidden" id="doorpanel_width" name="doorpanel_width" value="">
												<input type="hidden" id="doorpanel_height" name="doorpanel_height" value="">
												<input type="hidden" id="doorpanel_checkout" name="doorpanel_checkout" value="">
												<span id="door-width-dp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="hingepanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
												<input type="hidden" id="hingepanel_width" name="hingepanel_width" value="">
												<input type="hidden" id="hingepanel_height" name="hingepanel_height" value="">
												<input type="hidden" id="hingepanel_checkout" name="hingepanel_checkout" value="">
												<span id="door-width-hp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
										<?php } ?>
										
										<?php
										if($id == 4271){ 
										?>	
											<div class="clear right-column-heading"><span id="panel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_screenwidthhide == 1) 
											{
											?>
												<input type="hidden" id="panel_width" name="panel_width" value="">
												<input type="hidden" id="panel_height" name="panel_height" value="">
												<input type="hidden" id="panel_checkout" name="panel_checkout" value="">
												<span id="door-width-p"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
										<?php } ?>
										
										<?php
										if($id == 4262){ 
										?>	
											<div class="clear right-column-heading"><span id="doorpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
												<input type="hidden" id="doorpanel_width" name="doorpanel_width" value="">
												<input type="hidden" id="doorpanel_height" name="doorpanel_height" value="">
												<input type="hidden" id="doorpanel_checkout" name="doorpanel_checkout" value="">
												<span id="door-width-dp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="hingepanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="hingepanel_width" name="hingepanel_width" value="">
												<input type="hidden" id="hingepanel_height" name="hingepanel_height" value="">
												<input type="hidden" id="hingepanel_checkout" name="hingepanel_checkout" value="">
												<span id="door-width-hp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
										<?php } ?>
										
										<?php
										if($id == 4255){ 
										?>	
											<div class="clear right-column-heading"><span id="panel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
												<input type="hidden" id="panel_width" name="panel_width" value="">
												<input type="hidden" id="panel_height" name="panel_height" value="">
												<input type="hidden" id="panel_checkout" name="panel_checkout" value="">
												<span id="door-width-p"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											<div class="clear right-column-heading"><span id="doorpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
												<input type="hidden" id="doorpanel_width" name="doorpanel_width" value="">
												<input type="hidden" id="doorpanel_height" name="doorpanel_height" value="">
												<input type="hidden" id="doorpanel_checkout" name="doorpanel_checkout" value="">
												<span id="door-width-dp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="hingepanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_panelwidthhide == 1)
											{
											?>
												<input type="hidden" id="hingepanel_width" name="hingepanel_width" value="">
												<input type="hidden" id="hingepanel_height" name="hingepanel_height" value="">
												<input type="hidden" id="hingepanel_checkout" name="hingepanel_checkout" value="">
												<span id="door-width-hp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
										<?php } ?>
										
										<?php
										if($id == 4241){ 
										?>	
											<div class="clear right-column-heading"><span id="panel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="panel_width" name="panel_width" value="">
												<input type="hidden" id="panel_height" name="panel_height" value="">
												<input type="hidden" id="panel_checkout" name="panel_checkout" value="">
												<span id="door-width-p"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
										<?php } ?> 
										
										<?php
										if($id == 3743){ 
										?>	
											<div class="clear right-column-heading"><span id="returnpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_screendepthhide == 1)
											{
											?>
												<input type="hidden" id="returnpanel_width" name="returnpanel_width" value="">
												<input type="hidden" id="returnpanel_height" name="returnpanel_height" value="">
												<input type="hidden" id="returnpanel_checkout" name="returnpanel_checkout" value="">
												<span id="door-width-rp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="doorpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
												<input type="hidden" id="doorpanel_width" name="doorpanel_width" value="">
												<input type="hidden" id="doorpanel_height" name="doorpanel_height" value="">
												<input type="hidden" id="doorpanel_checkout" name="doorpanel_checkout" value="">
												<span id="door-width-dp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="hingepanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1 && $mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="hingepanel_width" name="hingepanel_width" value="">
												<input type="hidden" id="hingepanel_height" name="hingepanel_height" value="">
												<input type="hidden" id="hingepanel_checkout" name="hingepanel_checkout" value="">
												<span id="door-width-hp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div> 
										<?php } ?> 
										
										<?php
										if($id == 4248){ 
										?>	
											<div class="clear right-column-heading"><span id="returnpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_screendepthhide == 1)
											{
											?>
												<input type="hidden" id="returnpanel_width" name="returnpanel_width" value="">
												<input type="hidden" id="returnpanel_height" name="returnpanel_height" value="">
												<input type="hidden" id="returnpanel_checkout" name="returnpanel_checkout" value="">
												<span id="door-width-rp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="doorpanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1)
											{
											?>
												<input type="hidden" id="doorpanel_width" name="doorpanel_width" value="">
												<input type="hidden" id="doorpanel_height" name="doorpanel_height" value="">
												<input type="hidden" id="doorpanel_checkout" name="doorpanel_checkout" value="">
												<span id="door-width-dp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div>
											
											<div class="clear right-column-heading"><span id="hingepanel-text"></span></div> 
											<div class="right-column-output">
											<?php
											if($mspc_doorwidthhide == 1 && $mspc_screenwidthhide == 1)
											{
											?>
												<input type="hidden" id="hingepanel_width" name="hingepanel_width" value="">
												<input type="hidden" id="hingepanel_height" name="hingepanel_height" value="">
												<input type="hidden" id="hingepanel_checkout" name="hingepanel_checkout" value="">
												<span id="door-width-hp"></span>
											<?php }
											else {
											?>
											<?php
											} 
											?>
											</div> 
										<?php } ?>
										</div>
									</div>
								</div>
								
								<div class="selections-rightbox">
									<div class="selections-text"></div>
									
									<div class="row">
										<div class="right-column-selections">
											<div class="right-column-title col-sm-12"><span id="Orientation"></span></div> 
											<div class="right-column-title"><span id="box-ft-finishtext"></span><span id="box-ft-finishtitle"></span></div>
											<div class="right-column-title"><span id="box-ft-typetext"></span><span id="box-ft-typetitle"></span></div>
											<div class="right-column-title"><span id="box-glass-typetext"></span><span id="box-glass-typetitle"></span></div>
											<div class="right-column-title"><span id="box-glass-treatmenttext"></span><span id="box-glass-treatmenttitle"></span></div>
										</div>
									</div>	
								</div>

							
								<div class="row">
									<div class="right-column-selections">
								
										<div class="box-price">$</div> 
										<!-- Product Price Total- Hidden -->
										<input id="sizeimgp" class="qty" type="hidden" value="">
										<input id="fittingp" class="qty1" type="hidden" value="">
										<input id="fittingp1" class="qty1" type="hidden" value="">
										<input id="subtotal1" class="subprice" type="hidden">
										<input id="glassp" class="qty2" type="hidden" value="">
										<input id="glassp1" class="qty2" type="hidden" value="">
										<input id="subtotal2" class="subprice" type="hidden">
										<input id="customtotal" type="hidden" value="">
										<input id="totalprice_metre" type="hidden" value="">
										<input id="runingtotal" name="runingtotal" type="hidden" value="">
										<input id="glassprice1" type="hidden" value="">
										<input id="glassprice2" type="hidden" value="">
									
									</div>								
								</div>
								<?php if(!$exp) { ?>
								<div class="row">
									<div class="free-pickup">
										Free Pickup: Major Cities<br />
										<img src="/wp-content/uploads/2018/01/payment.png" />
									</div>
								</div>
								<?php } else { ?>
									<div class="row">
										<div class="">
											<h3 class="product-title">Installed Price </h3>
										</div>
									</div>
								<?php } ?>						
						</div>
						
						<div class="step-right-images">
							<div class="dimg-left" id="box-size-img"></div> 
							<div class="dimg-left" id="box-ft-finish"></div>
							<div class="dimg-left" id="box-ft-type"></div> 
							<div class="dimg-left" id="box-glass-type"></div> 
							<div class="dimg-left" id="box-glass-treatment"></div>
						</div>	
					</div>
<!--- Right box end --->

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="exampleModalLabel">Confirm your fixed pricing</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

		      	<div role="form" class="wpcf7" id="wpcf7-f4-p6632-o1" lang="en-US" dir="ltr">
				<div class="screen-reader-response"></div>
				<form action="/test-form-page/#wpcf7-f4-p6632-o1" method="post" class="wpcf7-form" novalidate="novalidate" siq_id="autopick_7298">
				</form></div>

 		        <!-- <div role="form" class="wpcf7" id="wpcf7-f4-p4248-o1" lang="en-US" dir="ltr">
					<div class="screen-reader-response"></div>

					<div style="display: none;">
						<input type="hidden" name="_wpcf7" value="4">
						<input type="hidden" name="_wpcf7_version" value="5.0.1">
						<input type="hidden" name="_wpcf7_locale" value="en_US">
						<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p4248-o1">
						<input type="hidden" name="_wpcf7_container_post" value="4248">
						<!-- SideBar totals -->
						<!-- <input type="hidden" name="door_width" value="" id="selector-door-width">
						<input type="hidden" name="screen_height" value="" id="selector-screen-height">
						<input type="hidden" name="screen_depth" value="" id="selector-screen-depth">
						<input type="hidden" name="screen_width" value="" id="selector-screen-width">
						<input type="hidden" name="hinge_panel" value="" id="selector-hinge-panel">
						<input type="hidden" name="panel_depth" value="" id="selector-panel-depth">
						<input type="hidden" name="handle" value="" id="selector-handle">
						<input type="hidden" name="glass" value="" id="selector-glass">
						<input type="hidden" name="glass_treatment" value="" id="selector-glass-treatment">
			
					</div>
					
					<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name*"></span><br>
					<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email*"></span><br>
					<span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Phone Number"></span><br>
					<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message *"></textarea></span></p>
					</div>
					<p><input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit" id="contact-form-submit"></p>
					<div class="wpcf7-response-output wpcf7-display-none"></div></div>
		      </div> -->
		      <?php echo do_shortcode('[contact-form-7 id="4" title="Contact Page"]') ?>
		    </div>
		  </div>
		</div>

	<?php
 }
}
add_action( 'woocommerce_before_add_to_cart_button', 'display_custom_data_product_page'  );