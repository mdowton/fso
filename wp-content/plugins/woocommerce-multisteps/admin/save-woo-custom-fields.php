<?php

/**
 * Save the custom fields.
 */
function save_giftcard_option_fields( $post_id ) {

	/** Screen left backend data update **/
	if ( isset( $_POST['_mspc_screen_name1'] ) ) :
		update_post_meta( $post_id, '_mspc_screen_name1',$_POST['_mspc_screen_name1'] );
	endif;
	if ( isset( $_POST['_mspc_screen_name2'] ) ) :
		update_post_meta( $post_id, '_mspc_screen_name2',$_POST['_mspc_screen_name2'] );
	endif;
	if ( isset( $_POST['_mspc_screenimage_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_screenimage_url1',$_POST['_mspc_screenimage_url1'] );
	endif;
	if ( isset( $_POST['_mspc_screenimageline_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_screenimageline_url1',$_POST['_mspc_screenimageline_url1'] );
	endif;
	
	if ( isset( $_POST['_mspc_price_holes1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_holes1',$_POST['_mspc_price_holes1'] );
	endif;
	if ( isset( $_POST['_mspc_price_door_seals1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_door_seals1',$_POST['_mspc_price_door_seals1'] );
	endif;
	if ( isset( $_POST['_mspc_price_floor_dome1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_floor_dome1',$_POST['_mspc_price_floor_dome1'] );
	endif;
	if ( isset( $_POST['_mspc_price_packaging1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_packaging1',$_POST['_mspc_price_packaging1'] );
	endif;
	if ( isset( $_POST['_mspc_price_additional_costs1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_additional_costs1',$_POST['_mspc_price_additional_costs1'] );
	endif;
	if ( isset( $_POST['_mspc_price_profit_component1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_profit_component1',$_POST['_mspc_price_profit_component1'] );
	endif;
	
	
	
	/** Screen right backend data update **/
	if ( isset( $_POST['_mspc_price_metre1'] ) ) :
		update_post_meta( $post_id, '_mspc_price_metre1',$_POST['_mspc_price_metre1'] );
	endif;
	if ( isset( $_POST['_mspc_price_metre2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_metre2',$_POST['_mspc_price_metre2'] );
	endif;
	if ( isset( $_POST['_mspc_screenimage_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_screenimage_url2',$_POST['_mspc_screenimage_url2'] );
	endif;
	if ( isset( $_POST['_mspc_screenimageline_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_screenimageline_url2',$_POST['_mspc_screenimageline_url2'] );
	endif;
	
	if ( isset( $_POST['_mspc_price_holes2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_holes2',$_POST['_mspc_price_holes2'] );
	endif;
	if ( isset( $_POST['_mspc_price_door_seals2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_door_seals2',$_POST['_mspc_price_door_seals2'] );
	endif;
	if ( isset( $_POST['_mspc_price_floor_dome2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_floor_dome2',$_POST['_mspc_price_floor_dome2'] );
	endif;
	if ( isset( $_POST['_mspc_price_packaging2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_packaging2',$_POST['_mspc_price_packaging2'] );
	endif;
	if ( isset( $_POST['_mspc_price_additional_costs2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_additional_costs2',$_POST['_mspc_price_additional_costs2'] );
	endif;
	if ( isset( $_POST['_mspc_price_profit_component2'] ) ) :
		update_post_meta( $post_id, '_mspc_price_profit_component2',$_POST['_mspc_price_profit_component2'] );
	endif;
	
	
	/** Hardware and Drawing1 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url1',$_POST['_mspc_hardware_image_url1'] );
	endif;
	if ( isset( $_POST['_hardware_title1'] ) ) :
		update_post_meta( $post_id, '_hardware_title1',$_POST['_hardware_title1'] );
	endif;
	if ( isset( $_POST['_hardware_price1'] ) ) :
		update_post_meta( $post_id, '_hardware_price1',$_POST['_hardware_price1'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url1',$_POST['_mspc_drawing_image_url1'] );
	endif;
	
	/** Hardware and Drawing2 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url2',$_POST['_mspc_hardware_image_url2'] );
	endif;
	if ( isset( $_POST['_hardware_title2'] ) ) :
		update_post_meta( $post_id, '_hardware_title2',$_POST['_hardware_title2'] );
	endif;
	if ( isset( $_POST['_hardware_price2'] ) ) :
		update_post_meta( $post_id, '_hardware_price2',$_POST['_hardware_price2'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url2',$_POST['_mspc_drawing_image_url2'] );
	endif;
	
	/** Hardware and Drawing3 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url3'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url3',$_POST['_mspc_hardware_image_url3'] );
	endif;
	if ( isset( $_POST['_hardware_title3'] ) ) :
		update_post_meta( $post_id, '_hardware_title3',$_POST['_hardware_title3'] );
	endif;
	if ( isset( $_POST['_hardware_price3'] ) ) :
		update_post_meta( $post_id, '_hardware_price3',$_POST['_hardware_price3'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url3'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url3',$_POST['_mspc_drawing_image_url3'] );
	endif;
	
	/** Hardware and Drawing4 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url4'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url4',$_POST['_mspc_hardware_image_url4'] );
	endif;
	if ( isset( $_POST['_hardware_title4'] ) ) :
		update_post_meta( $post_id, '_hardware_title4',$_POST['_hardware_title4'] );
	endif;
	if ( isset( $_POST['_hardware_price4'] ) ) :
		update_post_meta( $post_id, '_hardware_price4',$_POST['_hardware_price4'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url4'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url4',$_POST['_mspc_drawing_image_url4'] );
	endif;
	
	/** Hardware and Drawing5 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url5'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url5',$_POST['_mspc_hardware_image_url5'] );
	endif;
	if ( isset( $_POST['_hardware_title5'] ) ) :
		update_post_meta( $post_id, '_hardware_title5',$_POST['_hardware_title5'] );
	endif;
	if ( isset( $_POST['_hardware_price5'] ) ) :
		update_post_meta( $post_id, '_hardware_price5',$_POST['_hardware_price5'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url5'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url5',$_POST['_mspc_drawing_image_url5'] );
	endif;
	
	/** Hardware and Drawing6 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url6'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url6',$_POST['_mspc_hardware_image_url6'] );
	endif;
	if ( isset( $_POST['_hardware_title6'] ) ) :
		update_post_meta( $post_id, '_hardware_title6',$_POST['_hardware_title6'] );
	endif;
	if ( isset( $_POST['_hardware_price6'] ) ) :
		update_post_meta( $post_id, '_hardware_price6',$_POST['_hardware_price6'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url6'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url6',$_POST['_mspc_drawing_image_url6'] );
	endif;
	
	/** Hardware and Drawing7 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url7'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url7',$_POST['_mspc_hardware_image_url7'] );
	endif;
	if ( isset( $_POST['_hardware_title7'] ) ) :
		update_post_meta( $post_id, '_hardware_title7',$_POST['_hardware_title7'] );
	endif;
	if ( isset( $_POST['_hardware_price7'] ) ) :
		update_post_meta( $post_id, '_hardware_price7',$_POST['_hardware_price7'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url7'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url7',$_POST['_mspc_drawing_image_url7'] );
	endif;
	
	/** Hardware and Drawing8 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url8'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url8',$_POST['_mspc_hardware_image_url8'] );
	endif;
	if ( isset( $_POST['_hardware_title8'] ) ) :
		update_post_meta( $post_id, '_hardware_title8',$_POST['_hardware_title8'] );
	endif;
	if ( isset( $_POST['_hardware_price8'] ) ) :
		update_post_meta( $post_id, '_hardware_price8',$_POST['_hardware_price8'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url8'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url8',$_POST['_mspc_drawing_image_url8'] );
	endif;
	
	/** Hardware and Drawing9 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url9'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url9',$_POST['_mspc_hardware_image_url9'] );
	endif;
	if ( isset( $_POST['_hardware_title9'] ) ) :
		update_post_meta( $post_id, '_hardware_title9',$_POST['_hardware_title9'] );
	endif;
	if ( isset( $_POST['_hardware_price9'] ) ) :
		update_post_meta( $post_id, '_hardware_price9',$_POST['_hardware_price9'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url9'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url9',$_POST['_mspc_drawing_image_url9'] );
	endif;
	
	/** Hardware and Drawing10 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url10'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url10',$_POST['_mspc_hardware_image_url10'] );
	endif;
	if ( isset( $_POST['_hardware_title10'] ) ) :
		update_post_meta( $post_id, '_hardware_title10',$_POST['_hardware_title10'] );
	endif;
	if ( isset( $_POST['_hardware_price10'] ) ) :
		update_post_meta( $post_id, '_hardware_price10',$_POST['_hardware_price10'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url10'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url10',$_POST['_mspc_drawing_image_url10'] );
	endif;
	
	/** Hardware and Drawing11 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url11'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url11',$_POST['_mspc_hardware_image_url11'] );
	endif;
	if ( isset( $_POST['_hardware_title11'] ) ) :
		update_post_meta( $post_id, '_hardware_title11',$_POST['_hardware_title11'] );
	endif;
	if ( isset( $_POST['_hardware_price11'] ) ) :
		update_post_meta( $post_id, '_hardware_price11',$_POST['_hardware_price11'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url11'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url11',$_POST['_mspc_drawing_image_url11'] );
	endif;
	
	/** Hardware and Drawing12 data update **/
	if ( isset( $_POST['_mspc_hardware_image_url12'] ) ) :
		update_post_meta( $post_id, '_mspc_hardware_image_url12',$_POST['_mspc_hardware_image_url12'] );
	endif;
	if ( isset( $_POST['_hardware_title12'] ) ) :
		update_post_meta( $post_id, '_hardware_title12',$_POST['_hardware_title12'] );
	endif;
	if ( isset( $_POST['_hardware_price12'] ) ) :
		update_post_meta( $post_id, '_hardware_price12',$_POST['_hardware_price12'] );
	endif;
	if ( isset( $_POST['_mspc_drawing_image_url12'] ) ) :
		update_post_meta( $post_id, '_mspc_drawing_image_url12',$_POST['_mspc_drawing_image_url12'] );
	endif;

	/** Glass backend data update **/
	/* Glass1 */
	if ( isset( $_POST['_mspc_glass_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_glass_image_url1',$_POST['_mspc_glass_image_url1'] );
	endif;
	if ( isset( $_POST['_glass_title1'] ) ) :
		update_post_meta( $post_id, '_glass_title1',$_POST['_glass_title1'] );
	endif;
	if ( isset( $_POST['_glass_price1'] ) ) :
		update_post_meta( $post_id, '_glass_price1',$_POST['_glass_price1'] );
	endif;
	
	/* Glass2 */
	if ( isset( $_POST['_mspc_glass_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_glass_image_url2',$_POST['_mspc_glass_image_url2'] );
	endif;
	if ( isset( $_POST['_glass_title2'] ) ) :
		update_post_meta( $post_id, '_glass_title2',$_POST['_glass_title2'] );
	endif;
	if ( isset( $_POST['_glass_price2'] ) ) :
		update_post_meta( $post_id, '_glass_price2',$_POST['_glass_price2'] );
	endif;
	
	/* Glass3 */
	if ( isset( $_POST['_mspc_glass_image_url3'] ) ) :
		update_post_meta( $post_id, '_mspc_glass_image_url3',$_POST['_mspc_glass_image_url3'] );
	endif;
	if ( isset( $_POST['_glass_title3'] ) ) :
		update_post_meta( $post_id, '_glass_title3',$_POST['_glass_title3'] );
	endif;
	if ( isset( $_POST['_glass_price3'] ) ) :
		update_post_meta( $post_id, '_glass_price3',$_POST['_glass_price3'] );
	endif;
	
	/* Glass4 */
	if ( isset( $_POST['_mspc_glass_image_url4'] ) ) :
		update_post_meta( $post_id, '_mspc_glass_image_url4',$_POST['_mspc_glass_image_url4'] );
	endif;
	if ( isset( $_POST['_glass_title4'] ) ) :
		update_post_meta( $post_id, '_glass_title4',$_POST['_glass_title4'] );
	endif;
	if ( isset( $_POST['_glass_price4'] ) ) :
		update_post_meta( $post_id, '_glass_price4',$_POST['_glass_price4'] );
	endif;
	
	/* Glass5 */
	if ( isset( $_POST['_mspc_glass_image_url5'] ) ) :
		update_post_meta( $post_id, '_mspc_glass_image_url5',$_POST['_mspc_glass_image_url5'] );
	endif;
	if ( isset( $_POST['_glass_title5'] ) ) :
		update_post_meta( $post_id, '_glass_title5',$_POST['_glass_title5'] );
	endif;
	if ( isset( $_POST['_glass_price5'] ) ) :
		update_post_meta( $post_id, '_glass_price5',$_POST['_glass_price5'] );
	endif;
	
	/** Advanced Options backend data update **/
	if ( isset( $_POST['_mspc_advancedoptions_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_advancedoptions_image_url1',$_POST['_mspc_advancedoptions_image_url1'] );
	endif;
	if ( isset( $_POST['_mspc_advancedoptions_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_advancedoptions_image_url2',$_POST['_mspc_advancedoptions_image_url2'] );
	endif;
	
	/** Review backend data update **/
	if ( isset( $_POST['_mspc_reviewbackend_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_reviewbackend_image_url1',$_POST['_mspc_reviewbackend_image_url1'] );
	endif;
	if ( isset( $_POST['_mspc_reviewbackend_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_reviewbackend_image_url2',$_POST['_mspc_reviewbackend_image_url2'] );
	endif;
	if ( isset( $_POST['_mspc_reviewbackend_image_url3'] ) ) :
		update_post_meta( $post_id, '_mspc_reviewbackend_image_url3',$_POST['_mspc_reviewbackend_image_url3'] );
	endif;
	if ( isset( $_POST['_mspc_reviewbackend_image_url4'] ) ) :
		update_post_meta( $post_id, '_mspc_reviewbackend_image_url4',$_POST['_mspc_reviewbackend_image_url4'] );
	endif;
	
	/** Technical Drawings backend data update **/
	if ( isset( $_POST['_mspc_technicaldrawing_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_technicaldrawing_image_url1',$_POST['_mspc_technicaldrawing_image_url1'] );
	endif;
	if ( isset( $_POST['_mspc_technicaldrawing_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_technicaldrawing_image_url2',$_POST['_mspc_technicaldrawing_image_url2'] );
	endif;
	if ( isset( $_POST['_mspc_advancedtechnicaldrawing_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_advancedtechnicaldrawing_image_url1',$_POST['_mspc_advancedtechnicaldrawing_image_url1'] );
	endif;
	if ( isset( $_POST['_mspc_advancedtechnicaldrawing_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_advancedtechnicaldrawing_image_url2',$_POST['_mspc_advancedtechnicaldrawing_image_url2'] );
	endif;
	
	/** Screen Orientation Checkbox backend data update **/
	if ( isset( $_POST['_mspc_doorwidthhide'] ) ) :
		update_post_meta( $post_id, '_mspc_doorwidthhide',1 );
	else :
		update_post_meta( $post_id, '_mspc_doorwidthhide',0 );
	endif;
	if ( isset( $_POST['_mspc_screendepthhide'] ) ) :
		update_post_meta( $post_id, '_mspc_screendepthhide',1 );
	else :
		update_post_meta( $post_id, '_mspc_screendepthhide',0 );
	endif;
	if ( isset( $_POST['_mspc_screenwidthhide'] ) ) :
		update_post_meta( $post_id, '_mspc_screenwidthhide',1 );
	else :
		update_post_meta( $post_id, '_mspc_screenwidthhide',0 );
	endif;
	
	
	/** Tooltip Message backend data update **/
	if ( isset( $_POST['_mspc_tootip_doorwidth'] ) ) :
		update_post_meta( $post_id, '_mspc_tootip_doorwidth',$_POST['_mspc_tootip_doorwidth'] );
	endif;
	if ( isset( $_POST['_mspc_tootip_screenheight'] ) ) :
		update_post_meta( $post_id, '_mspc_tootip_screenheight',$_POST['_mspc_tootip_screenheight'] );
	endif;
	if ( isset( $_POST['_mspc_tootip_screenwidth'] ) ) :
		update_post_meta( $post_id, '_mspc_tootip_screenwidth',$_POST['_mspc_tootip_screenwidth'] );
	endif;
	if ( isset( $_POST['_mspc_tootip_screendepth'] ) ) :
		update_post_meta( $post_id, '_mspc_tootip_screendepth',$_POST['_mspc_tootip_screendepth'] );
	endif;
	if ( isset( $_POST['_mspc_tootip_paneldepth'] ) ) :
		update_post_meta( $post_id, '_mspc_tootip_paneldepth',$_POST['_mspc_tootip_paneldepth'] );
	endif;
	if ( isset( $_POST['_mspc_tootip_hingepanel'] ) ) :
		update_post_meta( $post_id, '_mspc_tootip_hingepanel',$_POST['_mspc_tootip_hingepanel'] );
	endif;
	if ( isset( $_POST['_mspc_tooltip_hingepanel'] ) ) :
		update_post_meta( $post_id, '_mspc_tooltip_hingepanel',$_POST['_mspc_tooltip_hingepanel'] );
	endif;	
	
	
	/** Handle Selection Checkbox backend data update **/
	if ( isset( $_POST['_mspc_handleselectionhide'] ) ) :
		update_post_meta( $post_id, '_mspc_handleselectionhide',1 );
	else :
		update_post_meta( $post_id, '_mspc_handleselectionhide',0 );
	endif;
	
	/** Panel Width Checkbox backend data update **/
	if ( isset( $_POST['_mspc_panelwidthhide'] ) ) :
		update_post_meta( $post_id, '_mspc_panelwidthhide',1 );
	else :
		update_post_meta( $post_id, '_mspc_panelwidthhide',0 );
	endif;
	
	/** Pdf Labels image upload backend data update **/
	if ( isset( $_POST['_mspc_pdfdrawing_image_url1'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url1',$_POST['_mspc_pdfdrawing_image_url1'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url2'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url2',$_POST['_mspc_pdfdrawing_image_url2'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url3'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url3',$_POST['_mspc_pdfdrawing_image_url3'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url4'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url4',$_POST['_mspc_pdfdrawing_image_url4'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url5'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url5',$_POST['_mspc_pdfdrawing_image_url5'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url6'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url6',$_POST['_mspc_pdfdrawing_image_url6'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url7'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url7',$_POST['_mspc_pdfdrawing_image_url7'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url8'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url8',$_POST['_mspc_pdfdrawing_image_url8'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url9'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url9',$_POST['_mspc_pdfdrawing_image_url9'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url10'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url10',$_POST['_mspc_pdfdrawing_image_url10'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url11'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url11',$_POST['_mspc_pdfdrawing_image_url11'] );
	endif;
	if ( isset( $_POST['_mspc_pdfdrawing_image_url12'] ) ) :
		update_post_meta( $post_id, '_mspc_pdfdrawing_image_url12',$_POST['_mspc_pdfdrawing_image_url12'] );
	endif;
	
	
	
	
	if ( isset( $_POST['_price'] ) ) :
		update_post_meta( $post_id, '_price',$_POST['_price'] );
	endif;
	
	$is_gift_card = isset( $_POST['_gift_card'] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_gift_card', $is_gift_card );



}
add_action( 'woocommerce_process_product_meta_simple', 'save_giftcard_option_fields'  );
add_action( 'woocommerce_process_product_meta_variable', 'save_giftcard_option_fields'  );