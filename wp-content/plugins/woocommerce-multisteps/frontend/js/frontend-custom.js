$(function() {	
		var selectors = {
			doorWidth: $('#doorwidth'),
			screenHeight: $('#screenheight'),
			screenDepth: $('#screendepth'),
			screenWidth: $('#screenwidth'),
			hingePanel: $('#hingepanel'),
			panelDepth: $('#paneldepth'),
			hardwareSelection: $("input[name='fitting']:checked"),
			handleSelection: $("input[name='prefitting']:checked"),
			glassSelection: $("input[name='glass']:checked"),
			glassTreatmentSelection: $("input[name='preglass']:checked"),
			contactFormSubmit: $('#contact-form-submit'),
			installedPrice: $('#runingtotal')
		}

		var formSelectors = {
			doorWidth: $("#selector-door-width"),
			screenHeight: $("#selector-screen-height"),
			screenDepth: $("#selector-screen-depth"),
			screenWidth: $("#selector-screen-width"),
			hingePanel: $("#selector-hinge-panel"),
			panelDepth: $("#selector-panel-depth"),
			hardwareSelection: $("#selector-hardware"),
			handleSelection: $("#selector-handle"),
			glassSelection: $("#selector-glass"),
			glassTreatmentSelection: $("#selector-glass-treatment"),

		}

		
		$('#contact-form-modal').on('click', function(){
			var text = 'Selections';

			if($(selectors.doorWidth).val()){
				text += '\nDoor width: ' + $(selectors.doorWidth).val();
			}

			if($(selectors.screenHeight).val()){
				text += '\nScreen height: ' + $(selectors.screenHeight).val();
			}

			if($(selectors.screenDepth).val()){
				text += '\nScreen Depth: ' + $(selectors.screenDepth).val();
			}

			if($(selectors.screenWidth).val()){
				text += '\nScreen Width: ' + $(selectors.screenWidth).val();
			}
			
			if($(selectors.hingePanel).val()){
				text += '\nHinge Panel: ' + $(selectors.hingePanel).val();
			}

			if($(selectors.panelDepth).val()){
				text += '\nPanel Depth: ' + $(selectors.panelDepth).val();
			}			
			
			text += '\nHardware: ' + $("input[name='fitting']:checked").val();
			text += '\nHandle: ' + $("input[name='prefitting']:checked").val();
			text += '\nGlass: ' + $("input[name='glass']:checked").val();
			text += '\nGlass Treatment: ' + $("input[name='preglass']:checked").val();
			text += '\nInstalled Price: ' + '$' + $(selectors.installedPrice).val();

			$('#shower-selection').val(text);

			//$(formSelectors.doorWidth).val($(selectors.doorWidth).val());
			//$(formSelectors.screenHeight).val($(selectors.screenHeight).val());
			//$(formSelectors.screenDepth).val($(selectors.screenDepth).val());
			//$(formSelectors.screenWidth).val($(selectors.screenWidth).val());
			//$(formSelectors.hingePanel).val($(selectors.hingePanel).val());
			//$(formSelectors.panelDepth).val($(selectors.panelDepth).val());

			//$(formSelectors.hardwareSelection).val($(selectors.hardwareSelection).val());
			//$(formSelectors.handleSelection).val($(selectors.handleSelection).val());
			//$(formSelectors.glassSelection).val($(selectors.glassSelection).val());
			//$(formSelectors.glassTreatmentSelection).val($(selectors.glassTreatmentSelection).val());
		})




		/*** Fitting fieldset extra div show/hide ***/
		 $("input[name='fitting']:radio").change(function () {
			var fitting = $(this).attr('id');
			 switch (fitting) {
				case "chrome-select":
					$("#chrome").show();
					$("#satin-chrome").hide();
					 $('#matt-black').hide();
					break;
				case "satinchrome-select":
					$("#satin-chrome").show();
					 $("#chrome").hide();
					  $('#matt-black').hide();
					break;
				case "mattblack-select":
					$('#matt-black').show();
					 $("#chrome").hide();
					 $("#satin-chrome").hide();
					break;

			}  
		});
		$(".ft-finish").click(function(){
			var radioValue = $("input[name='fitting']:checked").data('title');
			var fitting = $("input[name='fitting']:checked").attr('id');
			//alert(fitting);
			 switch (fitting) {
				case "chrome-select":
					$("#chrome").show();
					$("#satin-chrome").hide();
					 $('#matt-black').hide();
					break;
				case "satinchrome-select":
					$("#satin-chrome").show();
					 $("#chrome").hide();
					  $('#matt-black').hide();
					break;
				case "mattblack-select":
					$('#matt-black').show();
					 $("#chrome").hide();
					 $("#satin-chrome").hide();
					break;

			} 
			if(radioValue){
				$('#box-ft-finishtext').html('Hardware:&nbsp;&nbsp;');
                $('#box-ft-finishtitle').html(radioValue);
            }
        });

		/** Right Image Box Display **/
		$(".door-img").click(function(){
			$('.step-right-images').css({
					display: 'block'
			});
		});
		/** Size Image display in review & box **/
		$("input[type='radio']").on('change', function (){
			$('.selections-text').html('<h3 class="selections-title">Selections</h3>');
			$('#Orientation').html('' + $("input[name='size-hing']:checked").data('title') + '<br /><br />');
			$('#hingehidden').val('' + $("input[name='size-hing']:checked").data('title') + '');
			$('#drawhiddenwith').val('' + $("input[name='size-hing']:checked").data('drawingwith') + '');
			$('#drawhiddenwithout').val('' + $("input[name='size-hing']:checked").data('drawingwithout') + '');
			$('#technicalimg_leftright').val('' + $("input[name='size-hing']:checked").data('class') + '');
		});
		$(".door-img").click(function(){
			var radioValue = $("input[name='size-hing']:checked").data('srcline');
			if(radioValue){
				//alert("Your are a - " + radioValue);
                $('#box-size-img').html('<img src="' + (radioValue) + '"/>');
				$('#doorimage-single').html('<img src="' + (radioValue) + '"/>');
            }
        });
		 
		$(".shower-size").click(function(){
			$('#door-width-sq-metre').val('' + $('#doorwidth').val() + '');
			$('#screen-height-sq-metre').val('' + $('#screenheight').val() + '');
			$('#screen-depth-sq-metre').val('' + $('#screendepth').val() + '');
			$('#screen-width-sq-metre').val('' + $('#screenwidth').val() + '');
			$('#panel-sq-metre').val('' + $('#hingepanel').val() + ''); 
			$('#hinge-panel-sq-metre').val('' + $('#hingepanel').val() + '');
			
			$('#doorwidthreview').val('' + $('#doorwidth').val() + '');
			$('#screenheightreview').val('' + $('#screenheight').val() + '');
			$('#screenwidthreview').val('' + $('#screenwidth').val() + '');
			$('#screendepthreview').val('' + $('#screendepth').val() + ''); 
			$('#hingepanelreview').val('' + $('#hingepanel').val() + '');
			$('#paneldepthreview').val('' + $('#hingepanel').val() + ''); 
			
			$('#door-width-sq-metre').val('' + $('#doorwidthreview').val() + '');
			$('#screen-height-sq-metre').val('' + $('#screenheightreview').val() + '');
			$('#screen-width-sq-metre').val('' + $('#screenwidthreview').val() + '');
			$('#screen-depth-sq-metre').val('' + $('#screendepthreview').val() + '');
			$('#panel-sq-metre').val('' + $('#paneldepthreview').val() + '');
			$('#hinge-panel-sq-metre').val('' + $('#hingepanelreview').val() + '');
			
			$('#doorwidth').val('' + $('#doorwidthreview').val() + '');
			$('#screenheight').val('' + $('#screenheightreview').val() + '');
			$('#screenwidth').val('' + $('#screenwidthreview').val() + '');
			$('#screendepth').val('' + $('#screendepthreview').val() + '');
			$('#paneldepth').val('' + $('#paneldepthreview').val() + '');
			$('#hingepanel').val('' + $('#hingepanelreview').val() + '');
		});
		
		/**Right box Screen Height,Depth,Width**/
		$(".shower-size").click(function(){
			$('#door-width-sq-metre').val('' + $('#doorwidth').val() + '');
			$('#screen-height-sq-metre').val('' + $('#screenheight').val() + '');
			$('#screen-depth-sq-metre').val('' + $('#screendepth').val() + '');
			$('#screen-width-sq-metre').val('' + $('#screenwidth').val() + '');
			$('#panel-sq-metre').val('' + $('#paneldepth').val() + ''); 
			$('#hinge-panel-sq-metre').val('' + $('#hingepanel').val() + '');
			
			$('#doorwidthreview').val('' + $('#doorwidth').val() + '');
			$('#screenheightreview').val('' + $('#screenheight').val() + '');
			$('#screenwidthreview').val('' + $('#screenwidth').val() + '');
			$('#screendepthreview').val('' + $('#screendepth').val() + ''); 
			$('#hingepanelreview').val('' + $('#hingepanel').val() + '');
			$('#paneldepthreview').val('' + $('#paneldepth').val() + '');
			
			if ($(".product-id").val() == 4280) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidth').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#panel-width').html('<div class="s-size">Panel:</div><div class="s-size-o">' + $('#paneldepth').val() + ' mm</div>');
				$('#hinge-panel').html('<div class="s-size">Hinge Panel:</div><div class="s-size-o">' + $('#hingepanel').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidth').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');  
				$('#panel_widthcheckout').val('' + $('#paneldepth').val() + ' mm');
				$('#hinge_panelcheckout').val('' + $('#hingepanel').val() + ' mm');  
			}
			else if ($(".product-id").val() == 4271) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidth').val() + ' mm</div>');
				/** Right box value display **/
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidth').val() + ' mm');
			}
			else if ($(".product-id").val() == 4262) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidth').val() + ' mm</div>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidth').val() + ' mm</div>');
				/** Right box value display **/
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');
				$('#screen_widthcheckout').val('' + $('#screenwidth').val() + ' mm');
				$('#door_widthcheckout').val('' + $('#doorwidth').val() + ' mm');
			}
			else if ($(".product-id").val() == 4255) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidth').val() + ' mm</div>');
				$('#hinge-panel').html('<div class="s-size">Hinge Panel:</div><div class="s-size-o">' + $('#hingepanel').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidth').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidth').val() + ' mm');
				$('#hinge_panelcheckout').val('' + $('#hingepanel').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidth').val() + ' mm');
			}
			else if ($(".product-id").val() == 4248) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidth').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidth').val() + ' mm</div>');
				$('#screen-depth').html('<div class="s-size">Depth:</div><div class="s-size-o">' + $('#screendepth').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidth').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidth').val() + ' mm');
				$('#screen_depthcheckout').val('' + $('#screendepth').val() + ' mm');
			}
			else if ($(".product-id").val() == 4241) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidth').val() + ' mm</div>');
				/** Right box value display **/
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidth').val() + ' mm');
			}
			else if ($(".product-id").val() == 3743) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidth').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheight').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidth').val() + ' mm</div>');
				$('#screen-depth').html('<div class="s-size">Depth:</div><div class="s-size-o">' + $('#screendepth').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidth').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheight').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidth').val() + ' mm');
				$('#screen_depthcheckout').val('' + $('#screendepth').val() + ' mm');
			} 
			else{} 
			
		});
		
		/*** Update button values updated Screen Height,Depth,Width and Door Width***/
		$(".update-advancedoptions").click(function(){		
			$('#door-width-sq-metre').val('' + $('#doorwidthreview').val() + '');
			$('#screen-height-sq-metre').val('' + $('#screenheightreview').val() + '');
			$('#screen-width-sq-metre').val('' + $('#screenwidthreview').val() + '');
			$('#screen-depth-sq-metre').val('' + $('#screendepthreview').val() + '');
			$('#panel-sq-metre').val('' + $('#hingepanelreview').val() + '');
			$('#hinge-panel-sq-metre').val('' + $('#hingepanelreview').val() + '');
			
			$('#doorwidth').val('' + $('#doorwidthreview').val() + '');
			$('#screenheight').val('' + $('#screenheightreview').val() + '');
			$('#screenwidth').val('' + $('#screenwidthreview').val() + '');
			$('#screendepth').val('' + $('#screendepthreview').val() + '');
			$('#paneldepth').val('' + $('#hingepanelreview').val() + '');
			$('#hingepanel').val('' + $('#hingepanelreview').val() + '');
			
			if ($(".product-id").val() == 4280) {
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidthreview').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#panel-width').html('<div class="s-size">Panel:</div><div class="s-size-o">' + $('#hingepanelreview').val() + ' mm</div>');
				$('#hinge-panel').html('<div class="s-size">Hinge Panel:</div><div class="s-size-o">' + $('#hingepanelreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidthreview').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');  
				$('#panel_widthcheckout').val('' + $('#hingepanelreview').val() + ' mm');
				$('#hinge_panelcheckout').val('' + $('#hingepanelreview').val() + ' mm'); 
			}
			else if ($(".product-id").val() == 4271) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenheightreview').val() + ' mm');
			}
			else if ($(".product-id").val() == 4262) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidthreview').val() + ' mm</div>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidthreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');
				$('#screen_widthcheckout').val('' + $('#screenwidthreview').val() + ' mm');
				$('#door_widthcheckout').val('' + $('#doorwidthreview').val() + ' mm');
			}
			else if ($(".product-id").val() == 4255) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidthreview').val() + ' mm</div>');
				$('#hinge-panel').html('<div class="s-size">Hinge Panel:</div><div class="s-size-o">' + $('#hingepanelreview').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidthreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidthreview').val() + ' mm');
				$('#hinge_panelcheckout').val('' + $('#hingepanelreview').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidthreview').val() + ' mm');
			}
			else if ($(".product-id").val() == 4248) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidthreview').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidthreview').val() + ' mm</div>');
				$('#screen-depth').html('<div class="s-size">Depth:</div><div class="s-size-o">' + $('#screendepthreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidthreview').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidthreview').val() + ' mm');
				$('#screen_depthcheckout').val('' + $('#screendepthreview').val() + ' mm');
			}
			else if ($(".product-id").val() == 4241) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidthreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidthreview').val() + ' mm');
			}
			else if ($(".product-id").val() == 3743) { 
				$('.showersize-text').html('<h3 class="product-title">Shower Size</h3>');
				$('#door-width').html('<div class="s-size">Door:</div><div class="s-size-o">' + $('#doorwidthreview').val() + ' mm</div>');
				$('#screen-height').html('<div class="s-size">Height:</div><div class="s-size-o">' + $('#screenheightreview').val() + ' mm</div>');
				$('#screen-width').html('<div class="s-size">Width:</div><div class="s-size-o">' + $('#screenwidthreview').val() + ' mm</div>');
				$('#screen-depth').html('<div class="s-size">Depth:</div><div class="s-size-o">' + $('#screendepthreview').val() + ' mm</div>');
				/** Right box value display **/
				$('#door_widthcheckout').val('' + $('#doorwidthreview').val() + ' mm');
				$('#screen_heightcheckout').val('' + $('#screenheightreview').val() + ' mm');  
				$('#screen_widthcheckout').val('' + $('#screenwidthreview').val() + ' mm');
				$('#screen_depthcheckout').val('' + $('#screendepthreview').val() + ' mm'); 
			}
			else{}
			
		});

		/** Manufacture Size panels display **/
		$(".shower-size,.update-advancedoptions").click(function(){
			var doorwidth = $('#doorwidth').val();
			var screenheight = $('#screenheight').val();
			var screenwidth = $('#screenwidth').val();
			var screendepth = $('#screendepth').val();
			var paneldepth = $('#paneldepth').val();
			var hingepanel = $('#hingepanel').val();
			var doorwidthmetre = $('#door-width-sq-metre').val();
			var screenheightmetre = $('#screen-height-sq-metre').val();
			var screendepthmetre = $('#screen-depth-sq-metre').val();
			var screenwidthmetre = $('#screen-width-sq-metre').val();
			var paneldepthmetre = $('#panel-sq-metre').val();
			var hingepanelmetre = $('#hinge-panel-sq-metre').val();
			

			if ($(".product-id").val() == 4280) { 
				/** Right box Door-panel **/
				if( doorwidth && screenheight ) {
					var doordwidthminus =  parseInt(doorwidthmetre - 4);
					var screenheightminus =  parseInt(screenheightmetre - 13);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#doorpanel-text').html('Door Panel:');
					$('#door-width-dp').html('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-doorpanel').html('<span id="advancedoptions-doorpanelinner">' + (doordwidthminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewdoorpanel').html('<span id="advancedoptions-reviewdoorpanelinner">' + (doorwidth) + ' </span>');
					/** Review image3 **/
					$('#advancedoptions-reviewdoorpanel2').html('<span id="advancedoptions-reviewdoorpanelinner2">' + (screenheightminus) + ' </span>');
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#doorpanel_checkout').val('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#doorpanel_width').val('' + (doordwidthminus) + '');
					$('#doorpanel_height').val('' + (screenheightminus) + '');
				}
				else{}
				/** Right box Hinge-panel **/
				if( hingepanel && screenheight ) {
					var hingepanelminus =  parseInt(hingepanelmetre - 6);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#hingepanel-text').html('Hinge Panel:');
					$('#door-width-hp').html('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-hingepanel').html('<span id="advancedoptions-hingepanelinner">' + (hingepanelminus) + '</span>');
					/** Review image2 **/
					$('#advancedoptions-reviewhingepanel').html('<span id="advancedoptions-reviewhingepanelinner">' + (hingepanel) + '</span>');
					/** Review image3 **/
					$('#advancedoptions-reviewhingepanel2').html('<span id="advancedoptions-reviewhingepanelinner2">' + (screenheightminus) + '</span>');
					/** Right box value display **/
					$('#hingepanel_checkout').val('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#hingepanel_width').val('' + (hingepanelminus) + '');
					$('#hingepanel_height').val('' + (screenheightminus) + '');
				}
				else{}
				/** Right box panel **/
				if( paneldepth && screenheight ) {
					var paneldepthminus =  parseInt(paneldepthmetre - 6);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#panel-text').html('Return Panel:');
					$('#door-width-p').html('' + (paneldepthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-returnpanel1').html('<span id="advancedoptions-returnpanel1inner">' + (paneldepthminus) + ' </span>');
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screenheightminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewreturnpanel').html('<span id="advancedoptions-reviewreturnpanelinner">' + (paneldepth) + ' </span>'); 
					/** Review image3 **/
					$('#advancedoptions-reviewreturnpanel2').html('<span id="advancedoptions-reviewreturnpanelinner2">' + (screenheightminus) + '</span>');
					/** Right box value display **/
					$('#panel_checkout').val('' + (paneldepthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#panel_width').val('' + (paneldepthminus) + '');
					$('#panel_height').val('' + (screenheightminus) + '');
				}
				else{}
			}
			else if ($(".product-id").val() == 4271) {  
				/** Right box panel **/
				if( screenwidth && screenheight ) {  
					var screenwidthminus =  parseInt(screenwidthmetre - 4);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#panel-text').html('Panel:');
					$('#door-width-p').html('' + (screenwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-returnpanel1').html('<span id="advancedoptions-returnpanel1inner">' + (screenwidthminus) + ' </span>');
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screenheightminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewreturnpanel').html('<span id="advancedoptions-reviewreturnpanelinner">' + (screenwidthminus) + ' </span>');
					$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (screenwidth) + '</span>');
					/** Review image3 **/
					$('#advancedoptions-reviewreturnpanel2').html('<span id="advancedoptions-reviewreturnpanelinner2">' + (screenheightminus) + ' </span>'); 
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#panel_checkout').val('' + (screenwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#panel_width').val('' + (screenwidthminus) + '');
					$('#panel_height').val('' + (screenheightminus) + '');
				}
				else{}
			}
			else if ($(".product-id").val() == 4262) {  
				/** Right box Door-panel **/
				if( doorwidth && screenheight ) {
					var doordwidthminus =  parseInt(doorwidthmetre - 0);
					var screenheightminus =  parseInt(screenheightmetre - 8);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#doorpanel-text').html('Door Panel:');
					$('#door-width-dp').html('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-doorpanel').html('<span id="advancedoptions-doorpanelinner">' + (doordwidthminus) + ' </span>'); 
					/** Review image2 **/
					$('#advancedoptions-reviewdoorpanel').html('<span id="advancedoptions-reviewdoorpanelinner">' + (doordwidthminus) + ' </span>');
					/** Review image3 **/
					$('#advancedoptions-reviewdoorpanel2').html('<span id="advancedoptions-reviewdoorpanelinner2">' + (screenheightminus) + ' </span>');
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#doorpanel_checkout').val('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#doorpanel_width').val('' + (doordwidthminus) + '');
					$('#doorpanel_height').val('' + (screenheightminus) + '');
				}
				else{}
				/** Right box Hinge-panel **/
				if( screenwidth && doorwidth ) {
					var hingepanelminus =  parseInt(screenwidthmetre - doorwidthmetre - 7);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#hingepanel-text').html('Hinge Panel:');
					$('#door-width-hp').html('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-hingepanel').html('<span id="advancedoptions-hingepanelinner">' + (hingepanelminus) + '</span>');
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screenheightminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewhingepanel').html('<span id="advancedoptions-reviewhingepanelinner">' + (hingepanelminus) + '</span>');
					$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (screenwidth) + '</span>');
					 /** Review image3 **/
					$('#advancedoptions-reviewhingepanel2').html('<span id="advancedoptions-reviewhingepanelinner2">' + (screenheightminus) + '</span>'); 
					/** Right box value display **/
					$('#hingepanel_checkout').val('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#hingepanel_width').val('' + (hingepanelminus) + '');
					$('#hingepanel_height').val('' + (screenheightminus) + '');
				}
				else{}
			}
			else if ($(".product-id").val() == 4255) { 
				/** Right box Door-panel **/
				if( doorwidth && screenheight ) {
					var doordwidthminus =  parseInt(doorwidthmetre);
					var screenheightminus =  parseInt(screenheightmetre - 13);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#doorpanel-text').html('Door Panel:');
					$('#door-width-dp').html('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-doorpanel').html('<span id="advancedoptions-doorpanelinner">' + (doorwidth) + ' </span>'); 
					/** Review image2 **/
					$('#advancedoptions-reviewdoorpanel').html('<span id="advancedoptions-reviewdoorpanelinner">' + (doorwidth) + ' </span>');
					/** Review image3 **/
					$('#advancedoptions-reviewdoorpanel2').html('<span id="advancedoptions-reviewdoorpanelinner2">' + (screenheightminus) + ' </span>');
					/** Right box value display **/
					$('#doorpanel_checkout').val('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#doorpanel_width').val('' + (doordwidthminus) + '');
					$('#doorpanel_height').val('' + (screenheightminus) + '');
				}
				else{}
				/** Right box Hinge-panel **/
				if( hingepanel && screenheight ) {
					var hingepanelminus =  parseInt(hingepanelmetre);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#hingepanel-text').html('Hinge Panel:');
					$('#door-width-hp').html('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-hingepanel').html('<span id="advancedoptions-hingepanelinner">' + (hingepanelminus) + '</span>');
					/** Review image2 **/
					$('#advancedoptions-reviewhingepanel').html('<span id="advancedoptions-reviewhingepanelinner">' + (hingepanelminus) + '</span>');
					 /** Review image3 **/
					$('#advancedoptions-reviewhingepanel2').html('<span id="advancedoptions-reviewhingepanelinner2">' + (screenheightminus) + '</span>');
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#hingepanel_checkout').val('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#hingepanel_width').val('' + (hingepanelminus) + '');
					$('#hingepanel_height').val('' + (screenheightminus) + '');
				}
				else{}
				/** Right box panel **/
				if( screenwidth && screenheight ) {
					var hingepanelminus =  parseInt(screenwidthmetre - doorwidthmetre - hingepanelmetre - 14);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#panel-text').html('Panel:');
					$('#door-width-p').html('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screenheightminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewreturnpanel').html('<span id="advancedoptions-reviewreturnpanelinner">' + (hingepanelminus) + ' </span>');
					$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (screenwidth) + '</span>');
					/** Review image3 **/
					$('#advancedoptions-reviewreturnpanel2').html('<span id="advancedoptions-reviewreturnpanelinner2">' + (screenheightminus) + '</span>');
					/** Right box value display **/
					$('#panel_checkout').val('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#panel_width').val('' + (hingepanelminus) + '');
					$('#panel_height').val('' + (screenheightminus) + '');
				} 
				else{}
			}
			else if ($(".product-id").val() == 4241) {  
				/** Right box panel **/
				if( screenwidth && screenheight ) {
					var screenwidthminus =  parseInt(screenwidthmetre - 4);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#panel-text').html('Panel:');
					$('#door-width-p').html('' + (screenwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-returnpanel1').html('<span id="advancedoptions-returnpanel1inner">' + (screenwidthminus) + ' </span>');
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screenheightminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewreturnpanel').html('<span id="advancedoptions-reviewreturnpanelinner">' + (screenwidthminus) + ' </span>');
					$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (screenwidth) + '</span>');
					/** Review image3 **/
					$('#advancedoptions-reviewreturnpanel2').html('<span id="advancedoptions-reviewreturnpanelinner2">' + (screenheightminus) + ' </span>');
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#panel_checkout').val('' + (screenwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#panel_width').val('' + (screenwidthminus) + '');
					$('#panel_height').val('' + (screenheightminus) + '');
				}   
				else{}
			}
			else if ($(".product-id").val() == 3743) {  
				/** Right box Door Panel **/
				if( doorwidth && screenheight ) {
					var doordwidthminus =  parseInt(doorwidthmetre);
					var screenheightminus =  parseInt(screenheightmetre - 13);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#doorpanel-text').html('Door Panel:');
					$('#door-width-dp').html('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-doorpanel').html('<span id="advancedoptions-doorpanelinner">' + (doorwidth) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewdoorpanel').html('<span id="advancedoptions-reviewdoorpanelinner">' + (doorwidth) + ' </span>');
					/** Review image3 **/
					$('#advancedoptions-reviewdoorpanel2').html('<span id="advancedoptions-reviewdoorpanelinner2">' + (screenheightminus) + ' </span>');
					/** Right box value display **/
					$('#doorpanel_checkout').val('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#doorpanel_width').val('' + (doordwidthminus) + '');
					$('#doorpanel_height').val('' + (screenheightminus) + '');
				} 
				else{}
				/** Right box Hinge-panel **/
				if( doorwidth && screenwidth ) {
					var hingepanelminus =  parseInt(screenwidthmetre - doorwidthmetre - 20);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#hingepanel-text').html('Hinge Panel:');
					$('#door-width-hp').html('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-hingepanel').html('<span id="advancedoptions-hingepanelinner">' + (hingepanelminus) + '</span>');
					/** Review image2 **/
					$('#advancedoptions-reviewhingepanel').html('<span id="advancedoptions-reviewhingepanelinner">' + (hingepanelminus) + '</span>');
				    /** Review image3 **/
					$('#advancedoptions-reviewhingepanel2').html('<span id="advancedoptions-reviewhingepanelinner2">' + (screenheightminus) + '</span>');
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#hingepanel_checkout').val('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#hingepanel_width').val('' + (hingepanelminus) + '');
					$('#hingepanel_height').val('' + (screenheightminus) + '');	
				}
				else{}
				/** Right box Return Panel **/
				if( screendepth && screenheight ) { 
					var screendepthminus =  parseInt(screendepthmetre - 4);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#returnpanel-text').html('Return Panel:');
					$('#door-width-rp').html('' + (screendepthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-returnpanel1').html('<span id="advancedoptions-returnpanel1inner">' + (screendepthminus) + ' </span>');
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screenheightminus) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewreturnpanel').html('<span id="advancedoptions-reviewreturnpanelinner">' + (screendepthminus) + ' </span>');
					$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (screenwidth) + '</span>');
					$('#advancedoptions-reviewscreen-depth').html('<span id="advancedoptions-reviewscreen-depthinner">' + (screendepth) + '</span>');
					/** Review image3 **/
					$('#advancedoptions-reviewreturnpanel2').html('<span id="advancedoptions-reviewreturnpanelinner2">' + (screenheightminus) + '</span>');
					/** Right box value display **/
					$('#returnpanel_checkout').val('' + (screendepthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#returnpanel_width').val('' + (screendepthminus) + '');
					$('#returnpanel_height').val('' + (screenheightminus) + '');
				} 
				else{}
			} 
			else if ($(".product-id").val() == 4248) {  
				/** Right box Door Panel **/
				if( doorwidth && screenheight ) {
					var doordwidthminus =  parseInt(doorwidthmetre);
					var screenheightminus =  parseInt(screenheightmetre - 13);
					$('.manufacturesize-text').html('<h3 class="manu-title">Manufacture Size</h3>');
					$('#doorpanel-text').html('Door Panel:');
					$('#door-width-dp').html('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-doorpanel').html('<span id="advancedoptions-doorpanelinner">' + (doorwidth) + ' </span>');
					/** Review image2 **/
					$('#advancedoptions-reviewdoorpanel').html('<span id="advancedoptions-reviewdoorpanelinner">' + (doorwidth) + ' </span>');
					/** Review image3 **/
					$('#advancedoptions-reviewdoorpanel2').html('<span id="advancedoptions-reviewdoorpanelinner2">' + (screenheightminus) + ' </span>');
					/** Right box value display **/
					$('#doorpanel_checkout').val('' + (doordwidthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#doorpanel_width').val('' + (doordwidthminus) + '');
					$('#doorpanel_height').val('' + (screenheightminus) + '');
				} 
				else{}
				/** Right box Hinge-panel **/
				if( doorwidth && screenwidth ) {
					var hingepanelminus =  parseInt(screenwidthmetre - doorwidthmetre - 20);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#hingepanel-text').html('Hinge Panel:');
					$('#door-width-hp').html('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					$('#advancedoptions-hingepanel').html('<span id="advancedoptions-hingepanelinner">' + (hingepanelminus) + '</span>');
					/** Review image2 **/
					$('#advancedoptions-reviewhingepanel').html('<span id="advancedoptions-reviewhingepanelinner">' + (hingepanelminus) + '</span>');
				    /** Review image3 **/
					$('#advancedoptions-reviewhingepanel2').html('<span id="advancedoptions-reviewhingepanelinner2">' + (screenheightminus) + '</span>');
					$('#advancedoptions-review-screenheight').html('<span id="advancedoptions-review-screenheight">' + (screenheight) + '</span>');
					/** Right box value display **/
					$('#hingepanel_checkout').val('' + (hingepanelminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#hingepanel_width').val('' + (hingepanelminus) + '');
					$('#hingepanel_height').val('' + (screenheightminus) + '');
				}
				else{}
				/** Right box Return Panel **/
				if( screendepth && screenheight ) {
					var screendepthminus =  parseInt(screendepthmetre - 4);
					var screenheightminus =  parseInt(screenheightmetre - 4);
					$('#returnpanel-text').html('Return Panel:');
					$('#door-width-rp').html('' + (screendepthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					/** Review image1 **/
					//$('#advancedoptions-returnpanel1').html('<span id="advancedoptions-returnpanel1inner">' + (screendepthminus) + ' </span>'); 
					$('#advancedoptions-returnpanel2').html('<span id="advancedoptions-returnpanel2inner">' + (screendepthminus) + ' </span>');
					
					/** Review image2 **/
					$('#advancedoptions-reviewreturnpanel').html('<span id="advancedoptions-reviewreturnpanelinner">' + (screendepthminus) + ' </span>');
					$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (screenwidth) + '</span>');
					 /*
					 $('#advancedoptions-reviewscreen-depth').html('<span id="advancedoptions-reviewscreen-depthinner">' + (screendepth) + '</span>'); */ 
					/** Review image3 **/
					$('#advancedoptions-reviewreturnpanel2').html('<span id="advancedoptions-reviewreturnpanelinner2">' + (screenheightminus) + '</span>');
					/** Right box value display **/
					$('#returnpanel_checkout').val('' + (screendepthminus) + "&nbsp;X&nbsp;" + (screenheightminus) + ' mm');
					$('#returnpanel_width').val('' + (screendepthminus) + '');
					$('#returnpanel_height').val('' + (screenheightminus) + '');
				} 
				else{}
			}  
			else{}
			
		});
		

		$('#advancedoptions_bathwidth').blur(function(){
			$('#advancedoptions_bathwidthhidden').val('' + $('#advancedoptions_bathwidth').val() + '');
			var bathwidth = $('#advancedoptions_bathwidthhidden').val();
			$('#advancedoptions-reviewscreen-width').html('<span id="advancedoptions-reviewscreen-widthinner">' + (bathwidth) + '</span>');
		});
		$('#advancedoptions_bathheight').blur(function(){
			$('#advancedoptions_bathheighthidden').val('' + $('#advancedoptions_bathheight').val() + '');
			var bathheight = $('#advancedoptions_bathheighthidden').val();
			$('#advancedoptions-reviewscreen-depth').html('<span id="advancedoptions-reviewscreen-depthinner">' + (bathheight) + '</span>');
		});


		$(".advanced-options").click(function(){
			var topleft = $(".optioninput-top1").val();
			var topright = $(".optioninput-top2").val();
			var bottomleft = $(".optioninput-bottom1").val();
			var bottomright = $(".optioninput-bottom2").val();
			var bottomleft1 = $(".optioninput-bottomleft1").val();
			var bottomleft2 = $(".optioninput-bottomleft2").val();
			var bottomright1 = $(".optioninput-bottomright1").val();
			var bottomright2 = $(".optioninput-bottomright2").val();
			
			if ($(".product-id").val() == 4248) { 
			
				if (topleft > 0 || topright > 0 || bottomleft > 0 || bottomright > 0 || bottomleft1 > 0 || bottomleft2 > 0 || bottomright1 > 0 || bottomright2 > 0) { 
					$('#technicalimg_with_out').val('with');
				}
				else{
					$('#technicalimg_with_out').val('without');
				}
				
			}
			else{
				
				if (topleft > 0 || topright > 0 || bottomleft > 0 || bottomright > 0 || bottomleft1 > 0 || bottomleft2 > 0 || bottomright1 > 0 || bottomright2 > 0) { 
					$('#technicalimg_with_out').val('with');
				}
				else{
					$('#technicalimg_with_out').val('without');
				}
				
			}
		});

		/**Custom Price value**/
		/* $("input[type='radio']").on('change', function (){
			$('#sizeimgp').val('' + $("input[name='size-hing']:checked").data('value') + '');
		});
		$(".continue").click(function(){
			$('#fittingp').val( '' + $("input[name='fitting']:checked").data('value') + '' );
			$('#fittingp1').val('' + $("input[name='prefitting']:checked").data('value') + '');
			$('#glassp').val('' + $("input[name='glass']:checked").data('value') + '');
			$('#glassp1').val('' + $("input[name='preglass']:checked").data('value') + '');
        }); */
		
		/**Custom Price Box Calculation**/
		/* $(".continue").click(function(){
			var sum = 0;
			$(".qty1").each(function(){
				sum += +$(this).val();
			});
			$("#subtotal1").val(sum);
		});
		$(".continue").click(function(){
			var sum = 0;
			$(".qty2").each(function(){
				sum += +$(this).val();
			});
			$("#subtotal2").val(sum);
		});
		$(".totalprice").click(function(){
			var sum = 0;
			$(".subprice").each(function(){
				sum += +$(this).val();
			});
			$("#customtotal").val(sum);
		}); 

		$(".door-img").click(function(){
			$('.box-price').html('<b>$' + $('#sizeimgp').val() + '</b>');
		});
		$(".ft-type").click(function(){
			$('.box-price').html('<b>$' + $('#subtotal1').val() + '</b>');
		});
		$(".totalprice").click(function(){
			$('.box-price').html('<b>$' + $('#customtotal').val() + '</b>');
		});*/


		/**Review Size image**/
		$(".door-img").click(function(){
			var radioValue = $("input[name='size-hing']:checked").data('srcline');
			if(radioValue){
				//alert("Your are a - " + radioValue);
                $('#review-size-img').html('<img src="' + (radioValue) + '"/>');
                $('#review-size-imgline').html('<img src="' + (radioValue) + '"/>');
            }
        });

		$(".door-img").click(function(){
			$('#reviewscreen-img-title').html('' + $("input[name='size-hing']:checked").data('title') + '');
		});
		
		/*** Review images display depend on screen orientation ***/
		$(".reviewleftrightimage").click(function(){
			var reviewimage1leftimg = $("#reviewimage1left").data('src');
			var reviewimage1rightimg = $("#reviewimage1right").data('src');
			var reviewimage2leftimg = $("#reviewimage2left").data('src');
			var reviewimage2rightimg = $("#reviewimage2right").data('src');
			if($('input[id="left-hinge"]').is(":checked")){
                $('#reviewimage1').html('<img src="' + (reviewimage1leftimg) + '"/>');
                $('#reviewimage2').html('<img src="' + (reviewimage2leftimg) + '"/>');
            }
			else if($('input[id="right-hinge"]').is(":checked")){
				$('#reviewimage1').html('<img src="' + (reviewimage1rightimg) + '"/>');
                $('#reviewimage2').html('<img src="' + (reviewimage2rightimg) + '"/>');
			}
        });
		/*** Review Advancedoptions images display depend on screen orientation ***/
		$(".reviewadvancedleftrightimage").click(function(){
			var advancedoptionimageleftimg = $("#advancedoptions-imagevalueleft").data('src');
			var advancedoptionimagerightimg = $("#advancedoptions-imagevalueright").data('src');
			if($('input[id="left-hinge"]').is(":checked")){
                $('#advancedoptionsimage').html('<img src="' + (advancedoptionimageleftimg) + '" alt=""  />');
            }
			else if($('input[id="right-hinge"]').is(":checked")){
				$('#advancedoptionsimage').html('<img src="' + (advancedoptionimagerightimg) + '" alt=""  />');
			}
        });
		
		/**Review Glass Treatment**/
		$(".glass-treatment").click(function(){
			var radioValue = $("input[name='preglass']:checked").data('src');
			if(radioValue){
                $('#review-glass-treatment').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".review-step").click(function(){
			var radioValue = $("input[name='preglass']:checked").data('title');
			if(radioValue){
                $('#reviewglass-treatment').html(radioValue);
				$('#glasstreatmenthidden').val(radioValue);
            }
        });
        $(".review-step").click(function(){
			$('#reviewglass-treatmentprice').html('add $' + $('#glassp1').val() + '');
		});
		
		/**Review Glass Type**/
		$(".glass-type").click(function(){
			var radioValue = $("input[name='glass']:checked").data('src');
			if(radioValue){
                $('#review-glass-type').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".review-step").click(function(){
			var radioValue = $("input[name='glass']:checked").data('title');
			if(radioValue){
                $('#reviewglass-type').html(radioValue);
				$('#glasstypehidden').val(radioValue);
            }	
        });
		$(".review-step").click(function(){
		
			if($('input[id="glasstype-squaremetre1"]').is(":checked")) {
				$('#reviewglass-typeprice').html('add $' + $('#glassprice1').val() + '');
			} 
			else if($('input[id="glasstype-squaremetre2"]').is(":checked")){
			    $('#reviewglass-typeprice').html('add $' + $('#glassprice2').val() + '');
			} 
		});
		
		/**Review Fitting Type**/
		$(".ft-type").click(function(){
			var radioValue = $("input[name='prefitting']:checked").data('src');
			if(radioValue){
                $('#review-ft-type').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".review-step").click(function(){
			var radioValue = $("input[name='prefitting']:checked").data('title');
			if(radioValue){
                $('#reviewfitting-type').html(radioValue);
				$('#fittinghandlehidden').val(radioValue);
				
            }
        });
		$(".review-step").click(function(){
			$('#reviewfitting-typeprice').html('add $' + $('#fittingp1').val() + '');
		});
		
		/**Review Fitting Finish**/
		$(".ft-finish").click(function(){
			var radioValue = $("input[name='fitting']:checked").data('src');
			if(radioValue){
                $('#review-ft-finish').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".review-step").click(function(){
			var radioValue = $("input[name='fitting']:checked").data('title');
			if(radioValue){
                $('#reviewfitting-finish').html(radioValue);
				$('#fittingfinishhidden').val(radioValue);
            }
        });
		$(".review-step").click(function(){
			$('#reviewfitting-finishprice').html('add $' + $('#fittingp').val() + '');
		});
		
		/**Review Screen Height,Depth,Width**/
		$(".review-step").click(function(){
			$('#reviewfitting-finishprice').html('add $' + $('#fittingp').val() + '');
			$('#review-height').html('<b>H:</b> ' + $('#screenheight').val() + ' mm');
			$('#review-width').html('<b>W:</b>' + $('#screenwidth').val() + ' mm');
			$('#review-depth').html('<b>D:</b> ' + $('#screendepth').val() + ' mm');
		});

		/** Review Advanced option entered value display **/
		$(".advanced-options").click(function(){
			var radioValue = $('#advancedoptions-imagevalue').data('src');
			if(radioValue){
                $('#review-advanced-options').html('<img src="' + (radioValue) + '"/>');
            }
        });
		/* $(".advanced-options").click(function(){
			$('#reviewglass-topleft').html('<b>' + $('#optioninput-top1value').val() + 'mm<b>');
			$('#reviewglass-topright').html('<b>' + $('#optioninput-top2value').val() + 'mm<b>');
			$('#reviewglass-bottomleft').html('<b>' + $('#optioninput-bottom1value').val() + 'mm<b>');
			$('#reviewglass-bottomright').html('<b>' + $('#optioninput-bottom2value').val() + 'mm<b>');
			$('#reviewglass-bottomleft1').html('<b>' + $('#optioninput-bottomleft1value').val() + 'mm<b>');
			$('#reviewglass-bottomright1').html('<b>' + $('#optioninput-bottomleft2value').val() + 'mm<b>');
			$('#reviewglass-bottomleft2').html('<b>' + $('#optioninput-bottomright1value').val() + 'mm<b>');
			$('#reviewglass-bottomright2').html('<b>' + $('#optioninput-bottomright2value').val() + 'mm<b>');
		}); */

		/**Right box Fitting Finish**/
		$(".ft-finish").click(function(){
			var radioValue = $("input[name='fitting']:checked").data('src');
			if(radioValue){
                $('#box-ft-finish').html('<img src="' + (radioValue) + '"/>');
            }
        });
		
		/**Right box Fitting Type**/
		$(".ft-type").click(function(){
			var radioValue = $("input[name='prefitting']:checked").data('src');
			if(radioValue){
                $('#box-ft-type').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".ft-type").click(function(){
			var radioValue = $("input[name='prefitting']:checked").data('title');
			if(radioValue){
				$('#box-ft-typetext').html('Handle:&nbsp;&nbsp;');
                $('#box-ft-typetitle').html(radioValue);
            }
        });
		
		/**Right box Glass Type**/
		$(".glass-type").click(function(){
			var radioValue = $("input[name='glass']:checked").data('src');
			if(radioValue){
                $('#box-glass-type').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".glass-type").click(function(){
			var radioValue = $("input[name='glass']:checked").data('title');
			if(radioValue){
				$('#box-glass-typetext').html('Glass:&nbsp;&nbsp;');
                $('#box-glass-typetitle').html(radioValue);
            }
        });
		/**Right box Glass Treatment**/
		$(".glass-treatment").click(function(){
			var radioValue = $("input[name='preglass']:checked").data('src');
			if(radioValue){
                $('#box-glass-treatment').html('<img src="' + (radioValue) + '"/>');
            }
        });
		$(".glass-treatment").click(function(){
			var radioValue = $("input[name='preglass']:checked").data('title');
			if(radioValue){
				$('#box-glass-treatmenttext').html('Glass Treatment:&nbsp;&nbsp;');
                $('#box-glass-treatmenttitle').html(radioValue);
            }
        });

		/** Add class in selected screen dimension image **/
		$(".door-img").click(function () {
            if ($("input[id='left-hinge']:checked").is(":checked")) {
                $(".door-dimensions").addClass("left-hinge");
				$(".advancedoptions-panel1").addClass("left-hingereview");
				$(".advancedoptions-panel2").addClass("left-hingereview");
				
				$(".advancedoptions-returnpanel").addClass("left-hingereviewadvanced");
				$(".advancedoptions-doorpanel").addClass("left-hingereviewadvanced");
				$(".advancedoptions-hingepanel").addClass("left-hingereviewadvanced");
				
				$(".myCanvasleft").addClass("leftline");
				$(".myCanvasright").addClass("leftline");
				$(".myCanvasleftbottom").addClass("leftline");
				$(".myCanvasrightbottom").addClass("leftline");
				$(".doorline").addClass("leftline");
				
				$(".top-mostleft").addClass("leftline");
				$(".top-mostright").addClass("leftline");
				$(".bottom-mostleft").addClass("leftline");
				$(".bottom-mostright").addClass("leftline");
				
				$(".mobilebottomleft").addClass("leftline");
				$(".mobilebottomright").addClass("leftline");
				
				$(".error_msgleft").addClass("leftline");
				$(".error_textleft").addClass("leftline");
				$(".error_msgright").addClass("leftline");
				$(".error_textright").addClass("leftline");
				$(".error_msgbottom").addClass("leftline");
				$(".error_textbottom").addClass("leftline");
				
				$(".resetline").addClass("leftline");
				
			}
			else{
				$(".door-dimensions").removeClass("left-hinge");
				$(".advancedoptions-panel1").removeClass("left-hingereview");
				$(".advancedoptions-panel2").removeClass("left-hingereview");
				
				$(".advancedoptions-returnpanel").removeClass("left-hingereviewadvanced");
				$(".advancedoptions-doorpanel").removeClass("left-hingereviewadvanced");
				$(".advancedoptions-hingepanel").removeClass("left-hingereviewadvanced");
				
				$(".myCanvasleft").removeClass("leftline");
				$(".myCanvasright").removeClass("leftline");
				$(".myCanvasleftbottom").removeClass("leftline");
				$(".myCanvasrightbottom").removeClass("leftline");
				$(".doorline").removeClass("leftline");
				
				$(".top-mostleft").removeClass("leftline");
				$(".top-mostright").removeClass("leftline");
				$(".bottom-mostleft").removeClass("leftline");
				$(".bottom-mostright").removeClass("leftline");
				
				$(".mobilebottomleft").removeClass("leftline");
				$(".mobilebottomright").removeClass("leftline");
				
				$(".error_msgleft").removeClass("leftline");
				$(".error_textleft").removeClass("leftline");
				$(".error_msgright").removeClass("leftline");
				$(".error_textright").removeClass("leftline");
				$(".error_msgbottom").removeClass("leftline");
				$(".error_textbottom").removeClass("leftline");
				
				$(".resetline").removeClass("leftline");
				
			}
			if ($("input[id='right-hinge']:checked").is(":checked")) {
                $(".door-dimensions").addClass("right-hinge");
				$(".advancedoptions-panel1").addClass("right-hingereview");
				$(".advancedoptions-panel2").addClass("right-hingereview");
				
				$(".advancedoptions-returnpanel").addClass("right-hingereviewadvanced");
				$(".advancedoptions-doorpanel").addClass("right-hingereviewadvanced");
				$(".advancedoptions-hingepanel").addClass("right-hingereviewadvanced");
				
				$(".myCanvasleft").addClass("rightline");
				$(".myCanvasright").addClass("rightline");
				$(".myCanvasleftbottom").addClass("rightline");
				$(".myCanvasrightbottom").addClass("rightline");
				$(".doorline").addClass("rightline");
				
				$(".top-mostleft").addClass("rightline");
				$(".top-mostright").addClass("rightline");
				$(".bottom-mostleft").addClass("rightline");
				$(".bottom-mostright").addClass("rightline");
				
				$(".mobilebottomright").addClass("rightline");
				$(".mobilebottomleft").addClass("rightline");
				
				$(".error_msgleft").addClass("rightline");
				$(".error_textleft").addClass("rightline");
				$(".error_msgright").addClass("rightline");
				$(".error_textright").addClass("rightline");
				$(".error_msgbottom").addClass("rightline");
				$(".error_textbottom").addClass("rightline");
				
				$(".resetline").addClass("rightline");
				
            }
			else{
				$(".door-dimensions").removeClass("right-hinge");
				$(".advancedoptions-panel1").removeClass("right-hingereview");
				$(".advancedoptions-panel2").removeClass("right-hingereview");
				
				$(".advancedoptions-returnpanel").removeClass("right-hingereviewadvanced");
				$(".advancedoptions-doorpanel").removeClass("right-hingereviewadvanced");
				$(".advancedoptions-hingepanel").removeClass("right-hingereviewadvanced");
				
				$(".myCanvasleft").removeClass("rightline");
				$(".myCanvasright").removeClass("rightline");
				$(".myCanvasleftbottom").removeClass("rightline");
				$(".myCanvasrightbottom").removeClass("rightline");
				$(".doorline").removeClass("rightline");
				
				$(".top-mostleft").removeClass("rightline");
				$(".top-mostright").removeClass("rightline");
				$(".bottom-mostleft").removeClass("rightline");
				$(".bottom-mostright").removeClass("rightline");
				
				$(".mobilebottomright").removeClass("rightline");
				$(".mobilebottomleft").removeClass("rightline");
				
				$(".error_msgleft").removeClass("rightline");
				$(".error_textleft").removeClass("rightline");
				$(".error_msgright").removeClass("rightline");
				$(".error_textright").removeClass("rightline");
				$(".error_msgbottom").removeClass("rightline");
				$(".error_textbottom").removeClass("rightline");
				
				$(".resetline").removeClass("rightline");
				
			}
        });

		/*** Store Advanced option entered value ***/
		/**Advanced Options Top Fields **/
		/* $(".advanced-options").click(function(){
			$('#optioninput-top1value').val('' + $('.optioninput-top1').val() + '');
			$('#optioninput-top2value').val('' + $('.optioninput-top2').val() + '');
			$('#optioninput-bottom1value').val('' + $('.optioninput-bottom1').val() + '');
			$('#optioninput-bottom2value').val('' + $('.optioninput-bottom2').val() + '');
			$('#optioninput-bottomleft1value').val('' + $('.optioninput-bottomleft1').val() + '');
			$('#optioninput-bottomleft2value').val('' + $('.optioninput-bottomleft2').val() + '');
			$('#optioninput-bottomright1value').val('' + $('.optioninput-bottomright1').val() + '');
			$('#optioninput-bottomright2value').val('' + $('.optioninput-bottomright2').val() + '');
		}); */
		
		
		/*** Advanced option accordian ***/
		var acc = document.getElementsByClassName("accordion");
		$(".error_msgleft").hide();
		$(".error_msgright").hide();
		var i;
		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight){
			  panel.style.maxHeight = null;
			  $(".error_msgleft").hide();
			  $(".error_msgright").hide();
			  //alert("close");
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			  $(".error_msgleft").show();
			  $(".error_msgright").show();
			  //alert("open");
			} 
		  });
		} 
		
		/*** Terms and Condition Checkbox hide/show on checkout page ***/
		$("#measure1").click(function () {
            if ($(this).is(":checked")) {
                $(".measure1").show();
				$(".measure2").hide();
            }
			else{
				$(".measure1").show();
				$(".measure2").show();
			}
        });
		$("#measure2").click(function () {
            if ($(this).is(":checked")) {
                $(".measure2").show();
				$(".measure1").hide();
            }
			else{
				$(".measure1").show();
				$(".measure2").show();
			}
        }); 
		$("#engage1").click(function () {
            if ($(this).is(":checked")) {
                $(".engage1").show();
				$(".engage2").hide();
            }
			else{
				$(".engage1").show();
				$(".engage2").show();
			}
        });
		$("#engage2").click(function () {
            if ($(this).is(":checked")) {
                $(".engage2").show();
				$(".engage1").hide();
            }
			else{
				$(".engage1").show();
				$(".engage2").show();
			}
        });
		
});