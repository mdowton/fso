	jQuery(document).ready(function($) {
	var mediaUploader = null;
	
	/** ScreenLeft image upload **/
	$('#mspc-add-screenimage1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-screenimage-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	/** ScreenLeft image with line upload **/
	$('#mspc-add-screenimageline1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-screenimageline-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** ScreenRight image upload **/
	$('#mspc-add-screenimage2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-screenimage-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	/** ScreenRight image with line upload **/
	$('#mspc-add-screenimageline2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-screenimageline-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware1 image upload **/
	$('#mspc-add-hardware-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing1 image upload **/
	$('#mspc-add-drawing-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware2 image upload **/
	$('#mspc-add-hardware-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing2 image upload **/
	$('#mspc-add-drawing-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware3 image upload **/
	$('#mspc-add-hardware-image3').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url3').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing3 image upload **/
	$('#mspc-add-drawing-image3').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url3').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware4 image upload **/
	$('#mspc-add-hardware-image4').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url4').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing4 image upload **/
	$('#mspc-add-drawing-image4').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url4').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware5 image upload **/
	$('#mspc-add-hardware-image5').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url5').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing5 image upload **/
	$('#mspc-add-drawing-image5').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url5').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware6 image upload **/
	$('#mspc-add-hardware-image6').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url6').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing6 image upload **/
	$('#mspc-add-drawing-image6').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url6').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware7 image upload **/
	$('#mspc-add-hardware-image7').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url7').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing7 image upload **/
	$('#mspc-add-drawing-image7').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url7').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware8 image upload **/
	$('#mspc-add-hardware-image8').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url8').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing8 image upload **/
	$('#mspc-add-drawing-image8').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url8').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware9 image upload **/
	$('#mspc-add-hardware-image9').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url9').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing9 image upload **/
	$('#mspc-add-drawing-image9').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url9').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware10 image upload **/
	$('#mspc-add-hardware-image10').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url10').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing10 image upload **/
	$('#mspc-add-drawing-image10').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url10').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware11 image upload **/
	$('#mspc-add-hardware-image11').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url11').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing11 image upload **/
	$('#mspc-add-drawing-image11').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url11').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Hardware12 image upload **/
	$('#mspc-add-hardware-image12').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-hardware-image-url12').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Drawing12 image upload **/
	$('#mspc-add-drawing-image12').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-drawing-image-url12').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Glass image upload1 **/
	$('#mspc-add-glass-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-glass-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Glass image upload2 **/
	$('#mspc-add-glass-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-glass-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Glass image upload3 **/
	$('#mspc-add-glass-image3').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-glass-image-url3').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Glass image upload4 **/
	$('#mspc-add-glass-image4').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-glass-image-url4').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Glass image upload5 **/
	$('#mspc-add-glass-image5').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-glass-image-url5').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Advanced Options image upload **/
	$('#mspc-add-advancedoptions-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-advancedoptions-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-advancedoptions-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-advancedoptions-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Review Backend image upload **/
	$('#mspc-add-reviewbackend-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-reviewbackend-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-reviewbackend-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-reviewbackend-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-reviewbackend-image3').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-reviewbackend-image-url3').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-reviewbackend-image4').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-reviewbackend-image-url4').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Technical Drawing image upload **/
	$('#mspc-add-technicaldrawing-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-technicaldrawing-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-technicaldrawing-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-technicaldrawing-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	$('#mspc-add-advancedtechnicaldrawing-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-advancedtechnicaldrawing-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-advancedtechnicaldrawing-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-advancedtechnicaldrawing-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	/** Pdf Labels image upload **/
	$('#mspc-add-pdfdrawing-image1').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url1').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image2').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url2').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image3').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url3').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image4').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url4').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image5').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url5').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image6').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url6').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image7').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url7').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image8').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url8').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image9').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url9').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image10').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url10').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image11').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url11').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	$('#mspc-add-pdfdrawing-image12').click(function(evt) {

		mediaUploader = wp.media({
            multiple: false
        });

		mediaUploader.on('select', function() {

			$('#mspc-pdfdrawing-image-url12').val(mediaUploader.state().get('selection').toJSON()[0].url);

			mediaUploader = null;
        });

        mediaUploader.open();

		evt.preventDefault();

	});
	
	
	var $modalWrapper = $('#fpd-modal-edit-options'),
		$paramsInput = $('#mspc-fpd-params'),
		$thumbnailInput = $('#mspc-fpd-thumbnail');

	$('#mspc-set-fpd-params').click(function(evt) {

		$modalWrapper.parent().css('display', 'block');
		fpdSetDesignFormFields($paramsInput, $thumbnailInput);

		evt.preventDefault();

	});

	//save and close modal
	$modalWrapper.on('click', '.fpd-save-admin-modal', function(evt) {

		$thumbnailInput.val($('#fpd-set-design-thumbnail').data('thumbnail'));
		$paramsInput.val($modalWrapper.find('form').serialize().replace(/[^&]+=&/g, '').replace(/&[^&]+=$/g, ''));

		closeModal($modalWrapper);

		evt.preventDefault();

	})
	.on('click', '.fpd-close-modal', function(evt) {

		closeModal($modalWrapper);

		evt.preventDefault();

	});
				$( 'input#_gift_card' ).change( function() {
				var is_gift_card = $( 'input#_gift_card:checked' ).size();
                console.log( is_gift_card );
				$( '.show_if_gift_card' ).hide();
				$( '.hide_if_gift_card' ).hide();

				if ( is_gift_card ) {
					$( '.hide_if_gift_card' ).hide();
				}
				if ( is_gift_card ) {
					$( '.show_if_gift_card' ).show();
				}
			});
			$( 'input#_gift_card' ).trigger( 'change' );						
			
			/* var count=1;
			$(".add-more").click(function(){ 
				//var html = $(".copy").html();
				var html="<div class='control-group input-group' style='margin-top:10px'><p class='form-field'><label for='mspc-module'>Fitting</label><input name='_mspc_fitting_image_url"+count+"' id='mspc-fitting-image-url"+count+"' type='text' value=''><a href='#' class='button' id='mspc-add-fitting-image"+count+"'>Add from media library</a><button class='btn btn-danger button remove"+count+"' type='button'><i class='glyphicon glyphicon-remove'></i> Remove</button></p><p class='form-field _fitting_title_field '><label for='_fitting_title'>Fitting Title</label><span class='woocommerce-help-tip'></span><input type='text' class='short' name='_fitting_title"+count+"' id='_fitting_title"+count+"' value='' placeholder=''></p><p class='form-field _glass_price_field '><label for='_fitting_price'>Fitting Price</label><span class='woocommerce-help-tip'></span><input type='number' class='short' style='' name='_fitting_price"+count+"' id='_fitting_price"+count+"' value='' placeholder=''></p></div>";
				$(".after-add-more").after(html);
				count++;
			});			
			
			$("#giftcard_options").on("click",".remove"+count+"",function(){ 		
				$(this).parents(".control-group").remove();		
			});					
			
			$(".add-more-again").click(function(){ 
				//var html = $(".copy-again").html();	
				var html="<div class='control-group-again input-group' style='margin-top:10px'><p class='form-field'><label for='mspc-module'>Glass</label><input name='_mspc_glass_image_url"+count+"' id='mspc-glass-image-url"+count+"' type='text' value=''><a href='#' class='button' id='mspc-add-glass-image"+count+"'>Add from media library</a><button class='btn btn-danger button remove-again"+count+"' type='button'><i class='glyphicon glyphicon-remove'></i> Remove</button></p><p class='form-field _glass_title_field '><label for='_glass_title'>Glass Title</label><span class='woocommerce-help-tip'></span><input type='text' class='short' name='_glass_title"+count+"' id='_glass_title"+count+"' value='' placeholder=''></p><p class='form-field _fitting_price_field '><label for='_glass_price'>Glass Price</label><span class='woocommerce-help-tip'></span><input type='number' class='short' style='' name='_glass_price"+count+"' id='_glass_price"+count+"' value='' placeholder=''></p></div>";
				$(".after-add-more-again").after(html);
				count++;
			});		
			
			$("#giftcard_options").on("click",".remove-again"+count+"",function(){ 		
				$(this).parents(".control-group-again").remove();			
			}); */
			


});


	