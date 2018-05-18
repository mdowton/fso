/*
 *
 * Topz_Options_radio_img function
 * Changes the radio select option, and changes class on images
 *
 */
function topz_radio_img_select(relid, labelclass){
	jQuery(this).prev('input[type="radio"]').prop('checked');

	jQuery('.topz-radio-img-'+labelclass).removeClass('topz-radio-img-selected');	
	
	jQuery('label[for="'+relid+'"]').addClass('topz-radio-img-selected');
}//function