<?php

/**
 * Contents of the gift card options product tab.
 */
function giftcard_options_product_tab_content() {

	global $post;

	// Note the 'id' attribute needs to match the 'target' parameter set above
	?>
	<div id='giftcard_options' class='panel woocommerce_options_panel'><?php

		?>	
		<div class='options_group'>
			<?php 
				/** Screen Left Backend get data**/
				$mspc_screenimage_url1 = get_post_meta( $post->ID, '_mspc_screenimage_url1', true );
				$mspc_screenimageline_url1 = get_post_meta( $post->ID, '_mspc_screenimageline_url1', true );
			    $mspc_screen_name1 = get_post_meta( $post->ID, '_mspc_screen_name1', true );
				$mspc_price_metre1 = get_post_meta( $post->ID, '_mspc_price_metre1', true );
				
				$mspc_price_holes1 = get_post_meta( $post->ID, '_mspc_price_holes1', true );
				$mspc_price_door_seals1 = get_post_meta( $post->ID, '_mspc_price_door_seals1', true );
				$mspc_price_floor_dome1 = get_post_meta( $post->ID, '_mspc_price_floor_dome1', true );
				$mspc_price_packaging1 = get_post_meta( $post->ID, '_mspc_price_packaging1', true );
				$mspc_price_additional_costs1 = get_post_meta( $post->ID, '_mspc_price_additional_costs1', true );
				$mspc_price_profit_component1 = get_post_meta( $post->ID, '_mspc_price_profit_component1', true );
				
				/** Screen right Backend get data**/
				$mspc_screenimage_url2 = get_post_meta( $post->ID, '_mspc_screenimage_url2', true );
				$mspc_screenimageline_url2 = get_post_meta( $post->ID, '_mspc_screenimageline_url2', true );
				$mspc_screen_name2 = get_post_meta( $post->ID, '_mspc_screen_name2', true );
				$mspc_price_metre2 = get_post_meta( $post->ID, '_mspc_price_metre2', true );
				
				$mspc_price_holes2 = get_post_meta( $post->ID, '_mspc_price_holes2', true );
				$mspc_price_door_seals2 = get_post_meta( $post->ID, '_mspc_price_door_seals2', true );
				$mspc_price_floor_dome2 = get_post_meta( $post->ID, '_mspc_price_floor_dome2', true );
				$mspc_price_packaging2 = get_post_meta( $post->ID, '_mspc_price_packaging2', true );
				$mspc_price_additional_costs2 = get_post_meta( $post->ID, '_mspc_price_additional_costs2', true );
				$mspc_price_profit_component2 = get_post_meta( $post->ID, '_mspc_price_profit_component2', true );

				
				/** Hardware and Drawing Backend get data**/
				$mspc_hardware_image_url1 = get_post_meta( $post->ID, '_mspc_hardware_image_url1', true );
				$mspc_drawing_image_url1 = get_post_meta( $post->ID, '_mspc_drawing_image_url1', true );
				$mspc_hardware_image_url2 = get_post_meta( $post->ID, '_mspc_hardware_image_url2', true );
				$mspc_drawing_image_url2 = get_post_meta( $post->ID, '_mspc_drawing_image_url2', true );
				$mspc_hardware_image_url3 = get_post_meta( $post->ID, '_mspc_hardware_image_url3', true );
				$mspc_drawing_image_url3 = get_post_meta( $post->ID, '_mspc_drawing_image_url3', true );
				$mspc_hardware_image_url4 = get_post_meta( $post->ID, '_mspc_hardware_image_url4', true );
				$mspc_drawing_image_url4 = get_post_meta( $post->ID, '_mspc_drawing_image_url4', true );
				$mspc_hardware_image_url5 = get_post_meta( $post->ID, '_mspc_hardware_image_url5', true );
				$mspc_drawing_image_url5 = get_post_meta( $post->ID, '_mspc_drawing_image_url5', true );
				$mspc_hardware_image_url6 = get_post_meta( $post->ID, '_mspc_hardware_image_url6', true );
				$mspc_drawing_image_url6 = get_post_meta( $post->ID, '_mspc_drawing_image_url6', true );
				$mspc_hardware_image_url7 = get_post_meta( $post->ID, '_mspc_hardware_image_url7', true );
				$mspc_drawing_image_url7 = get_post_meta( $post->ID, '_mspc_drawing_image_url7', true );
				$mspc_hardware_image_url8 = get_post_meta( $post->ID, '_mspc_hardware_image_url8', true );
				$mspc_drawing_image_url8 = get_post_meta( $post->ID, '_mspc_drawing_image_url8', true );
				$mspc_hardware_image_url9 = get_post_meta( $post->ID, '_mspc_hardware_image_url9', true );
				$mspc_drawing_image_url9 = get_post_meta( $post->ID, '_mspc_drawing_image_url9', true );
				$mspc_hardware_image_url10 = get_post_meta( $post->ID, '_mspc_hardware_image_url10', true );
				$mspc_drawing_image_url10 = get_post_meta( $post->ID, '_mspc_drawing_image_url10', true );
				$mspc_hardware_image_url11 = get_post_meta( $post->ID, '_mspc_hardware_image_url11', true );
				$mspc_drawing_image_url11 = get_post_meta( $post->ID, '_mspc_drawing_image_url11', true );
				$mspc_hardware_image_url12 = get_post_meta( $post->ID, '_mspc_hardware_image_url12', true );
				$mspc_drawing_image_url12 = get_post_meta( $post->ID, '_mspc_drawing_image_url12', true );
				
				/** Glass Backend get data**/
				$mspc_glass_image_url1 = get_post_meta( $post->ID, '_mspc_glass_image_url1', true );
				$mspc_glass_image_url2= get_post_meta( $post->ID, '_mspc_glass_image_url2', true );
				$mspc_glass_image_url3 = get_post_meta( $post->ID, '_mspc_glass_image_url3', true );
				$mspc_glass_image_url4 = get_post_meta( $post->ID, '_mspc_glass_image_url4', true );
				$mspc_glass_image_url5 = get_post_meta( $post->ID, '_mspc_glass_image_url5', true );
				
				/** Advanced Options get data **/
				$mspc_advancedoptions_image_url1 = get_post_meta( $post->ID, '_mspc_advancedoptions_image_url1', true );
				$mspc_advancedoptions_image_url2 = get_post_meta( $post->ID, '_mspc_advancedoptions_image_url2', true );
				
				/** Review Backend get data **/
				$mspc_reviewbackend_image_url1 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url1', true );
				$mspc_reviewbackend_image_url2 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url2', true );
				$mspc_reviewbackend_image_url3 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url3', true );
				$mspc_reviewbackend_image_url4 = get_post_meta( $post->ID, '_mspc_reviewbackend_image_url4', true );
				
				/** Advanced Options get data **/
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
				
				/** Tooltip Message get data**/
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

			?>
			<div id="screen-checkbox">
				<h3>Hide/Show Screen Orientation Fields On Frontend</h3>
				<div>
				<p class="form-field">
					<label for="mspc-module"><?php _e( 'Door Width', 'radykal' ); ?></label>
					<input type="checkbox" name="_mspc_doorwidthhide" id="doorwidthhide" value="1" <?php echo ($mspc_doorwidthhide ==1 ? 'checked' : '');?>>
				</p>
				<p class="form-field">
					<label for="mspc-module"><?php _e( 'Screen Depth', 'radykal' ); ?></label>
					<input type="checkbox" name="_mspc_screendepthhide" id="screendepthhide" value="1" <?php echo ($mspc_screendepthhide ==1 ? 'checked' : '');?>>
				</p>
				<p class="form-field">
					<label for="mspc-module"><?php _e( 'Screen Width', 'radykal' ); ?></label>
					<input type="checkbox" name="_mspc_screenwidthhide" id="screenwidthhide" value="1" <?php echo ($mspc_screenwidthhide ==1 ? 'checked' : '');?>>
				</p>
				<p class="form-field">
					<label for="mspc-module"><?php _e( 'Handle Selection', 'radykal' ); ?></label>
					<input type="checkbox" name="_mspc_handleselectionhide" id="handleselectionhide" value="1" <?php echo ($mspc_handleselectionhide ==1 ? 'checked' : '');?>>
				</p>
				<?php 
				$product_id = $_GET['post'];
				if($product_id == 4280){  
				?>
				<p class="form-field">
					<label for="mspc-module"><?php _e( 'Panel Width', 'radykal' ); ?></label>
					<input type="checkbox" name="_mspc_panelwidthhide" id="panelwidthhide" value="1" <?php echo ($mspc_panelwidthhide ==1 ? 'checked' : '');?>>
				</p>
				<?php } ?>
				
				<?php 
				$product_id = $_GET['post'];
				if($product_id == 4255){  
				?>
				<p class="form-field">
					<label for="mspc-module"><?php _e( 'Panel Width', 'radykal' ); ?></label>
					<input type="checkbox" name="_mspc_panelwidthhide" id="panelwidthhide" value="1" <?php echo ($mspc_panelwidthhide ==1 ? 'checked' : '');?>>
				</p>
				<?php } ?>
				</div>
			</div>
			<br></br>

			<div id="accordionscreen">
			
				<h3>Screen Left</h3>
				<div>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Screen Name', 'radykal' ); ?></label>
						<input name="_mspc_screen_name1" id="mspc-screen-name1" type="text" value="<?php echo $mspc_screen_name1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Image Without Line', 'radykal' ); ?></label>
						<input name="_mspc_screenimage_url1" id="mspc-screenimage-url1" type="text" value="<?php echo $mspc_screenimage_url1;?>">
						 <a href="#" class="button" id="mspc-add-screenimage1">Add from media library</a>
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Image With Line', 'radykal' ); ?></label>
						<input name="_mspc_screenimageline_url1" id="mspc-screenimageline-url1" type="text" value="<?php echo $mspc_screenimageline_url1;?>">
						 <a href="#" class="button" id="mspc-add-screenimageline1">Add from media library</a>
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Price per square metre', 'radykal' ); ?></label>
						 <input name="_mspc_price_metre1" id="mspc-price-metre1" type="text" value="<?php echo $mspc_price_metre1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Holes', 'radykal' ); ?></label>
						 <input name="_mspc_price_holes1" id="mspc-price-holes1" type="text" value="<?php echo $mspc_price_holes1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Hardware', 'radykal' ); ?></label>
						 <input name="_mspc_price_door_seals1" id="mspc-price-door-seals1" type="text" value="<?php echo $mspc_price_door_seals1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Polish(LM)', 'radykal' ); ?></label>
						 <input name="_mspc_price_floor_dome1" id="mspc-price-floor-dome1" type="text" value="<?php echo $mspc_price_floor_dome1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Packaging', 'radykal' ); ?></label>
						 <input name="_mspc_price_packaging1" id="mspc-price-packaging1" type="text" value="<?php echo $mspc_price_packaging1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Additional Costs', 'radykal' ); ?></label>
						 <input name="_mspc_price_additional_costs1" id="mspc-price-additional-costs1" type="text" value="<?php echo $mspc_price_additional_costs1;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Profit Component', 'radykal' ); ?></label>
						 <input name="_mspc_price_profit_component1" id="mspc-price-profit-component1" type="text" value="<?php echo $mspc_price_profit_component1;?>">
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Glass Treatment', 'radykal' ); ?></label>
							<input name="_mspc_glass_image_url4" id="mspc-glass-image-url4" type="text" value="<?php echo $mspc_glass_image_url4;?>">
							<a href="#" class="button" id="mspc-add-glass-image4">Add from media library</a>
							
							<?php
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_title4',
								'label'				=> __( 'Glass Treatment Title', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass title', 'woocommerce' ),
								'type' 				=> 'text',
							) );
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_price4',
								'label'				=> __( 'Glass Treatment Price', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass Price', 'woocommerce' ),
								'type' 				=> 'number',
							) );
							
							$glass_title4 = get_post_meta( $post->ID, '_glass_title4', true );
							$glass_price4 = get_post_meta( $post->ID, '_glass_price4', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Glass Treatment', 'radykal' ); ?></label>
							<input name="_mspc_glass_image_url5" id="mspc-glass-image-url5" type="text" value="<?php echo $mspc_glass_image_url5;?>">
							<a href="#" class="button" id="mspc-add-glass-image5">Add from media library</a>
							
							<?php
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_title5',
								'label'				=> __( 'Glass Treatment Title', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass title', 'woocommerce' ),
								'type' 				=> 'text',
							) );
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_price5',
								'label'				=> __( 'Glass Treatment Price', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass Price', 'woocommerce' ),
								'type' 				=> 'number',
							) );
							
							$glass_title5 = get_post_meta( $post->ID, '_glass_title5', true );
							$glass_price5 = get_post_meta( $post->ID, '_glass_price5', true );
							?>
					</p>
				</div>
				<h3>Screen Right</h3>
				<div>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Screen Name', 'radykal' ); ?></label>
						<input name="_mspc_screen_name2" id="mspc-screen-name2" type="text" value="<?php echo $mspc_screen_name2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Image Without Line', 'radykal' ); ?></label>
						<input name="_mspc_screenimage_url2" id="mspc-screenimage-url2" type="text" value="<?php echo $mspc_screenimage_url2;?>">
						 <a href="#" class="button" id="mspc-add-screenimage2">Add from media library</a>
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Image With Line', 'radykal' ); ?></label>
						<input name="_mspc_screenimageline_url2" id="mspc-screenimageline-url2" type="text" value="<?php echo $mspc_screenimageline_url2;?>">
						 <a href="#" class="button" id="mspc-add-screenimageline2">Add from media library</a>
					</p>
					<?/**<p class="form-field">
						<label for="mspc-module"><?php _e( 'Price per square metre', 'radykal' ); ?></label>
						 <input name="_mspc_price_metre2" id="mspc-price-metre2" type="text" value="<?php echo $mspc_price_metre2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Holes', 'radykal' ); ?></label>
						 <input name="_mspc_price_holes2" id="mspc-price-holes2" type="text" value="<?php echo $mspc_price_holes2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Door Seals', 'radykal' ); ?></label>
						 <input name="_mspc_price_door_seals2" id="mspc-price-door-seals2" type="text" value="<?php echo $mspc_price_door_seals2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Floor Dome', 'radykal' ); ?></label>
						 <input name="_mspc_price_floor_dome2" id="mspc-price-floor-dome2" type="text" value="<?php echo $mspc_price_floor_dome2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Packaging', 'radykal' ); ?></label>
						 <input name="_mspc_price_packaging2" id="mspc-price-packaging2" type="text" value="<?php echo $mspc_price_packaging2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Additional Costs', 'radykal' ); ?></label>
						 <input name="_mspc_price_additional_costs2" id="mspc-price-additional-costs2" type="text" value="<?php echo $mspc_price_additional_costs2;?>">
					</p>
					<p class="form-field">
						<label for="mspc-module"><?php _e( 'Profit Component', 'radykal' ); ?></label>
						 <input name="_mspc_price_profit_component2" id="mspc-price-profit-component2" type="text" value="<?php echo $mspc_price_profit_component2;?>">
					</p>**/?>
				</div>
				
			</div>
			<br></br>
			
			<div id="accordionhardware">
			   
				<h3>Hardware (Chrome)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url1" id="mspc-hardware-image-url1" type="text" value="<?php echo $mspc_hardware_image_url1;?>">
							<a href="#" class="button" id="mspc-add-hardware-image1">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title1',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price1',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title1 = get_post_meta( $post->ID, '_hardware_title1', true );
								$hardware_price1 = get_post_meta( $post->ID, '_hardware_price1', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url1" id="mspc-drawing-image-url1" type="text" value="<?php echo $mspc_drawing_image_url1;?>">
							<a href="#" class="button" id="mspc-add-drawing-image1">Add from media library</a>
					</p>
				</div>
				
	
				<h3>Hardware (Satin Chrome)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url2" id="mspc-hardware-image-url2" type="text" value="<?php echo $mspc_hardware_image_url2;?>">
							<a href="#" class="button" id="mspc-add-hardware-image2">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title2',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price2',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title2 = get_post_meta( $post->ID, '_hardware_title2', true );
								$hardware_price2 = get_post_meta( $post->ID, '_hardware_price2', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url2" id="mspc-drawing-image-url2" type="text" value="<?php echo $mspc_drawing_image_url2;?>">
							<a href="#" class="button" id="mspc-add-drawing-image2">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Matt Black)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url3" id="mspc-hardware-image-url3" type="text" value="<?php echo $mspc_hardware_image_url3;?>">
							<a href="#" class="button" id="mspc-add-hardware-image3">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title3',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price3',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title3 = get_post_meta( $post->ID, '_hardware_title3', true );
								$hardware_price3 = get_post_meta( $post->ID, '_hardware_price3', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url3" id="mspc-drawing-image-url3" type="text" value="<?php echo $mspc_drawing_image_url3;?>">
							<a href="#" class="button" id="mspc-add-drawing-image3">Add from media library</a>
					</p>
				</div>
				
				<!-- Chrome Handle Type Inner Hardware -->
				<h3>Hardware (Chrome Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url4" id="mspc-hardware-image-url4" type="text" value="<?php echo $mspc_hardware_image_url4;?>">
							<a href="#" class="button" id="mspc-add-hardware-image4">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title4',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price4',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title4 = get_post_meta( $post->ID, '_hardware_title4', true );
								$hardware_price4 = get_post_meta( $post->ID, '_hardware_price4', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url4" id="mspc-drawing-image-url4" type="text" value="<?php echo $mspc_drawing_image_url4;?>">
							<a href="#" class="button" id="mspc-add-drawing-image4">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Chrome Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url5" id="mspc-hardware-image-url5" type="text" value="<?php echo $mspc_hardware_image_url5;?>">
							<a href="#" class="button" id="mspc-add-hardware-image5">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title5',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price5',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title5 = get_post_meta( $post->ID, '_hardware_title5', true );
								$hardware_price5 = get_post_meta( $post->ID, '_hardware_price5', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url5" id="mspc-drawing-image-url5" type="text" value="<?php echo $mspc_drawing_image_url5;?>">
							<a href="#" class="button" id="mspc-add-drawing-image5">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Chrome Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url6" id="mspc-hardware-image-url6" type="text" value="<?php echo $mspc_hardware_image_url6;?>">
							<a href="#" class="button" id="mspc-add-hardware-image6">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title6',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price6',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title6 = get_post_meta( $post->ID, '_hardware_title6', true );
								$hardware_price6 = get_post_meta( $post->ID, '_hardware_price6', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url6" id="mspc-drawing-image-url6" type="text" value="<?php echo $mspc_drawing_image_url6;?>">
							<a href="#" class="button" id="mspc-add-drawing-image6">Add from media library</a>
					</p>
				</div>
				
				<!-- Satin Chrome Handle Type Inner Hardware -->
				<h3>Hardware (Satin Chrome Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url7" id="mspc-hardware-image-url7" type="text" value="<?php echo $mspc_hardware_image_url7;?>">
							<a href="#" class="button" id="mspc-add-hardware-image7">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title7',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price7',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title7 = get_post_meta( $post->ID, '_hardware_title7', true );
								$hardware_price7 = get_post_meta( $post->ID, '_hardware_price7', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url7" id="mspc-drawing-image-url7" type="text" value="<?php echo $mspc_drawing_image_url7;?>">
							<a href="#" class="button" id="mspc-add-drawing-image7">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Satin Chrome Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url8" id="mspc-hardware-image-url8" type="text" value="<?php echo $mspc_hardware_image_url8;?>">
							<a href="#" class="button" id="mspc-add-hardware-image8">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title8',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price8',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title8 = get_post_meta( $post->ID, '_hardware_title8', true );
								$hardware_price8 = get_post_meta( $post->ID, '_hardware_price8', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url8" id="mspc-drawing-image-url8" type="text" value="<?php echo $mspc_drawing_image_url8;?>">
							<a href="#" class="button" id="mspc-add-drawing-image8">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Satin Chrome Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url9" id="mspc-hardware-image-url9" type="text" value="<?php echo $mspc_hardware_image_url9;?>">
							<a href="#" class="button" id="mspc-add-hardware-image9">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title9',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price9',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title9 = get_post_meta( $post->ID, '_hardware_title9', true );
								$hardware_price9 = get_post_meta( $post->ID, '_hardware_price9', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url9" id="mspc-drawing-image-url9" type="text" value="<?php echo $mspc_drawing_image_url9;?>">
							<a href="#" class="button" id="mspc-add-drawing-image9">Add from media library</a>
					</p>
				</div>
				
				<!-- Matt Black Handle Type Inner Hardware -->
				<h3>Hardware (Matt Black Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url10" id="mspc-hardware-image-url10" type="text" value="<?php echo $mspc_hardware_image_url10;?>">
							<a href="#" class="button" id="mspc-add-hardware-image10">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title10',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price10',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title10 = get_post_meta( $post->ID, '_hardware_title10', true );
								$hardware_price10 = get_post_meta( $post->ID, '_hardware_price10', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url10" id="mspc-drawing-image-url10" type="text" value="<?php echo $mspc_drawing_image_url10;?>">
							<a href="#" class="button" id="mspc-add-drawing-image10">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Matt Black Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url11" id="mspc-hardware-image-url11" type="text" value="<?php echo $mspc_hardware_image_url11;?>">
							<a href="#" class="button" id="mspc-add-hardware-image11">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title11',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price11',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title11 = get_post_meta( $post->ID, '_hardware_title11', true );
								$hardware_price11 = get_post_meta( $post->ID, '_hardware_price11', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url11" id="mspc-drawing-image-url11" type="text" value="<?php echo $mspc_drawing_image_url11;?>">
							<a href="#" class="button" id="mspc-add-drawing-image11">Add from media library</a>
					</p>
				</div>
				
				<h3>Hardware (Matt Black Handle Type)</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Image', 'radykal' ); ?></label>
							<input name="_mspc_hardware_image_url12" id="mspc-hardware-image-url12" type="text" value="<?php echo $mspc_hardware_image_url12;?>">
							<a href="#" class="button" id="mspc-add-hardware-image12">Add from media library</a>
							
							<?php
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_title12',
									'label'				=> __( 'Hardware Title', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware title', 'woocommerce' ),
									'type' 				=> 'text',
								) );
								woocommerce_wp_text_input( array(
									'id'				=> '_hardware_price12',
									'label'				=> __( 'Hardware Price', 'woocommerce' ),
									'desc_tip'			=> 'true',
									'description'		=> __( 'Enter the Hardware Price', 'woocommerce' ),
									'type' 				=> 'number',
								) );
								
								$hardware_title12 = get_post_meta( $post->ID, '_hardware_title12', true );
								$hardware_price12 = get_post_meta( $post->ID, '_hardware_price12', true );
							?>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hardware Drawing Image', 'radykal' ); ?></label>
							<input name="_mspc_drawing_image_url12" id="mspc-drawing-image-url12" type="text" value="<?php echo $mspc_drawing_image_url12;?>">
							<a href="#" class="button" id="mspc-add-drawing-image12">Add from media library</a>
					</p>
				</div>
				
			</div>
			<br></br>
			
			<div id="accordionglass">
			
				<h3>Glass 1</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Glass', 'radykal' ); ?></label>
							<input name="_mspc_glass_image_url1" id="mspc-glass-image-url1" type="text" value="<?php echo $mspc_glass_image_url1;?>">
							<a href="#" class="button" id="mspc-add-glass-image1">Add from media library</a>
							
							<?php
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_title1',
								'label'				=> __( 'Glass Title1', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass title', 'woocommerce' ),
								'type' 				=> 'text',
							) );
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_price1',
								'label'				=> __( 'Glass Price1', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass Price', 'woocommerce' ),
								'type' 				=> 'number',
							) );
							
							$glass_title1 = get_post_meta( $post->ID, '_glass_title1', true );
							$glass_price1 = get_post_meta( $post->ID, '_glass_price1', true );
							?>
					</p>
				</div>
				
				<h3>Glass 2</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Glass', 'radykal' ); ?></label>
							<input name="_mspc_glass_image_url2" id="mspc-glass-image-url2" type="text" value="<?php echo $mspc_glass_image_url2;?>">
							<a href="#" class="button" id="mspc-add-glass-image2">Add from media library</a>
							
							<?php
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_title2',
								'label'				=> __( 'Glass Title2', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass title', 'woocommerce' ),
								'type' 				=> 'text',
							) );
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_price2',
								'label'				=> __( 'Glass Price2', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass Price', 'woocommerce' ),
								'type' 				=> 'number',
							) );
							
							$glass_title2 = get_post_meta( $post->ID, '_glass_title2', true );
							$glass_price2 = get_post_meta( $post->ID, '_glass_price2', true );
							?>
					</p>
				</div>
				
				<h3>Glass 3</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Glass', 'radykal' ); ?></label>
							<input name="_mspc_glass_image_url3" id="mspc-glass-image-url3" type="text" value="<?php echo $mspc_glass_image_url3;?>">
							<a href="#" class="button" id="mspc-add-glass-image3">Add from media library</a>
							
							<?php
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_title3',
								'label'				=> __( 'Glass Title3', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass title', 'woocommerce' ),
								'type' 				=> 'text',
							) );
							woocommerce_wp_text_input( array(
								'id'				=> '_glass_price3',
								'label'				=> __( 'Glass Price3', 'woocommerce' ),
								'desc_tip'			=> 'true',
								'description'		=> __( 'Enter the Glass Price', 'woocommerce' ),
								'type' 				=> 'number',
							) );
							
							$glass_title3 = get_post_meta( $post->ID, '_glass_title3', true );
							$glass_price3 = get_post_meta( $post->ID, '_glass_price3', true );
							?>
					</p>
				</div>
				
			</div>
			<br></br>
			<div id="advancedoptions">
			
				<h3>Advanced Options</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Advanced Option Image Left', 'radykal' ); ?></label>
							<input name="_mspc_advancedoptions_image_url1" id="mspc-advancedoptions-image-url1" type="text" value="<?php echo $mspc_advancedoptions_image_url1;?>">
							<a href="#" class="button" id="mspc-add-advancedoptions-image1">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Advanced Option Image Right', 'radykal' ); ?></label>
							<input name="_mspc_advancedoptions_image_url2" id="mspc-advancedoptions-image-url2" type="text" value="<?php echo $mspc_advancedoptions_image_url2;?>">
							<a href="#" class="button" id="mspc-add-advancedoptions-image2">Add from media library</a>
					</p>
				</div>
			</div>
			<br></br>
			<div id="reviewbackend">
			
				<h3>Review Image Upload</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Review Image1 Left', 'radykal' ); ?></label>
							<input name="_mspc_reviewbackend_image_url1" id="mspc-reviewbackend-image-url1" type="text" value="<?php echo $mspc_reviewbackend_image_url1;?>">
							<a href="#" class="button" id="mspc-add-reviewbackend-image1">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Review Image1 Right', 'radykal' ); ?></label>
							<input name="_mspc_reviewbackend_image_url2" id="mspc-reviewbackend-image-url2" type="text" value="<?php echo $mspc_reviewbackend_image_url2;?>">
							<a href="#" class="button" id="mspc-add-reviewbackend-image2">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Review Image2 Left', 'radykal' ); ?></label>
							<input name="_mspc_reviewbackend_image_url3" id="mspc-reviewbackend-image-url3" type="text" value="<?php echo $mspc_reviewbackend_image_url3;?>">
							<a href="#" class="button" id="mspc-add-reviewbackend-image3">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Review Image2 Right', 'radykal' ); ?></label>
							<input name="_mspc_reviewbackend_image_url4" id="mspc-reviewbackend-image-url4" type="text" value="<?php echo $mspc_reviewbackend_image_url4;?>">
							<a href="#" class="button" id="mspc-add-reviewbackend-image4">Add from media library</a>
					</p>
				</div>
			</div>
			<br></br>
			<div id="technicaldrawing">
			
				<h3>Technical Drawings</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Image Left', 'radykal' ); ?></label>
							<input name="_mspc_technicaldrawing_image_url1" id="mspc-technicaldrawing-image-url1" type="text" value="<?php echo $mspc_technicaldrawing_image_url1;?>">
							<a href="#" class="button" id="mspc-add-technicaldrawing-image1">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Image Right', 'radykal' ); ?></label>
							<input name="_mspc_technicaldrawing_image_url2" id="mspc-technicaldrawing-image-url2" type="text" value="<?php echo $mspc_technicaldrawing_image_url2;?>">
							<a href="#" class="button" id="mspc-add-technicaldrawing-image2">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Image Left Advanced', 'radykal' ); ?></label>
							<input name="_mspc_advancedtechnicaldrawing_image_url1" id="mspc-advancedtechnicaldrawing-image-url1" type="text" value="<?php echo $mspc_advancedtechnicaldrawing_image_url1;?>">
							<a href="#" class="button" id="mspc-add-advancedtechnicaldrawing-image1">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Image Right Advanced', 'radykal' ); ?></label>
							<input name="_mspc_advancedtechnicaldrawing_image_url2" id="mspc-advancedtechnicaldrawing-image-url2" type="text" value="<?php echo $mspc_advancedtechnicaldrawing_image_url2;?>">
							<a href="#" class="button" id="mspc-add-advancedtechnicaldrawing-image2">Add from media library</a>
					</p>
				</div>
			</div>
			<br></br>
			<!--- Tooltip Message box --->
			<div id="tooltipmessage">
			
				<h3>Tooltip Messages</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Door Width', 'radykal' ); ?></label>
							<input name="_mspc_tootip_doorwidth" id="mspc-tooltip-doorwidth" type="text" value="<?php echo $mspc_tootip_doorwidth;?>">
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Screen Height', 'radykal' ); ?></label>
							<input name="_mspc_tootip_screenheight" id="mspc-tooltip-screenheight" type="text" value="<?php echo $mspc_tootip_screenheight;?>">
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Screen Width', 'radykal' ); ?></label>
							<input name="_mspc_tootip_screenwidth" id="mspc-tooltip-screenwidth" type="text" value="<?php echo $mspc_tootip_screenwidth;?>">
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Screen Depth', 'radykal' ); ?></label>
							<input name="_mspc_tootip_screendepth" id="mspc-tooltip-screendepth" type="text" value="<?php echo $mspc_tootip_screendepth;?>">
					</p>
					
					<?php 
					$product_id = $_GET['post'];
					if($product_id == 4280){  
					?>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Panel', 'radykal' ); ?></label>
							<input name="_mspc_tootip_paneldepth" id="mspc-tooltip-paneldepth" type="text" value="<?php echo $mspc_tootip_paneldepth;?>">
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hinge Panel', 'radykal' ); ?></label>
							<input name="_mspc_tootip_hingepanel" id="mspc-tooltip-hingepanel" type="text" value="<?php echo $mspc_tootip_hingepanel;?>"> 
					</p>
					<?php } ?>
					
					<?php 
					$product_id = $_GET['post'];
					if($product_id == 4255){  
					?>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hinge Panel', 'radykal' ); ?></label>
							<input name="_mspc_tooltip_hingepanel" id="mspc-tooltip-hingepanel" type="text" value="<?php echo $mspc_tooltip_hingepanel;?>"> 
					</p>
					<?php } ?>
				</div>
			</div>
			<br></br>
			
			<!-- pdf labels - new insert 27/02/2018 images to be displayed on pdf orders -->
			<div id="pdflabels">
			
				<h3>PDF Labels</h3>
				<div>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Return Panel - Left', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url1" id="mspc-pdfdrawing-image-url1" type="text" value="<?php echo $mspc_pdfdrawing_image_url1;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image1">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hinge Panel - Left', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url2" id="mspc-pdfdrawing-image-url2" type="text" value="<?php echo $mspc_pdfdrawing_image_url2;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image2">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Door Panel - Left', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url3" id="mspc-pdfdrawing-image-url3" type="text" value="<?php echo $mspc_pdfdrawing_image_url3;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image3">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Return Panel - Right', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url4" id="mspc-pdfdrawing-image-url4" type="text" value="<?php echo $mspc_pdfdrawing_image_url4;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image4">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hinge Panel - Right', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url5" id="mspc-pdfdrawing-image-url5" type="text" value="<?php echo $mspc_pdfdrawing_image_url5;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image5">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Door Panel - Right', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url6" id="mspc-pdfdrawing-image-url6" type="text" value="<?php echo $mspc_pdfdrawing_image_url6;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image6">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Return Panel - Left - OOS', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url7" id="mspc-pdfdrawing-image-url7" type="text" value="<?php echo $mspc_pdfdrawing_image_url7;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image7">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hinge Panel - Left - OOS', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url8" id="mspc-pdfdrawing-image-url8" type="text" value="<?php echo $mspc_pdfdrawing_image_url8;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image8">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Door Panel - Left - OOS', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url9" id="mspc-pdfdrawing-image-url9" type="text" value="<?php echo $mspc_pdfdrawing_image_url9;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image9">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Return Panel - Right - OOS', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url10" id="mspc-pdfdrawing-image-url10" type="text" value="<?php echo $mspc_pdfdrawing_image_url10;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image10">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Hinge Panel - Right - OOS', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url11" id="mspc-pdfdrawing-image-url11" type="text" value="<?php echo $mspc_pdfdrawing_image_url11;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image11">Add from media library</a>
					</p>
					<p class="form-field">
							<label for="mspc-module"><?php _e( 'Door Panel - Right - OOS', 'radykal' ); ?></label>
							<input name="_mspc_pdfdrawing_image_url12" id="mspc-pdfdrawing-image-url12" type="text" value="<?php echo $mspc_pdfdrawing_image_url12;?>">
							<a href="#" class="button" id="mspc-add-pdfdrawing-image12">Add from media library</a>
					</p>

				</div>
			</div>
			<br></br>
		</div>

	</div>
	
	<!-- Backend Custom fields accordian -->
	<script src="https://www.framelessshowersonline.com.au/wp-content/plugins/woocommerce-multisteps/admin/js/jquery-1.12.4.js"></script>
	<script src="https://www.framelessshowersonline.com.au/wp-content/plugins/woocommerce-multisteps/admin/js/jquery-ui.js"></script>
	<script>
	  $( function() {
		$( "#screen-checkbox" ).accordion({ autoHeight: true});
		$("#screen-checkbox").accordion({ collapsible: true });
		
		$( "#accordionscreen" ).accordion({ autoHeight: true});
		$("#accordionscreen").accordion({ collapsible: true });
		  
		$( "#accordionhardware" ).accordion({ autoHeight: true});
		$("#accordionhardware").accordion({ collapsible: true });
		
		$( "#accordionglass" ).accordion({ autoHeight: true});
		$("#accordionglass").accordion({ collapsible: true });
		
		$( "#advancedoptions" ).accordion({ autoHeight: true});
		$("#advancedoptions").accordion({ collapsible: true });
		
		$( "#reviewbackend" ).accordion({ autoHeight: true});
		$("#reviewbackend").accordion({ collapsible: true });
		
		$( "#technicaldrawing" ).accordion({ autoHeight: true});
		$("#technicaldrawing").accordion({ collapsible: true });
		
		$( "#tooltipmessage" ).accordion({ autoHeight: true});
		$("#tooltipmessage").accordion({ collapsible: true });
		
		$( "#pdflabels" ).accordion({ autoHeight: true});
		$("#pdflabels").accordion({ collapsible: true });
	  } );
	</script>
	<?php

}
add_action( 'woocommerce_product_data_panels', 'giftcard_options_product_tab_content' );