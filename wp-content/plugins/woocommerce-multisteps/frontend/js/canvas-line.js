$(function() {
		
		/** Line default Display **/
		$('.review-step').click(function(e){
				    /** Dorline Bar **/
				    var c = document.getElementById("myCanvasdoorline");
				    var ctx = c.getContext("2d");
				    ctx.beginPath();
				    ctx.moveTo(0, 0);
				    ctx.lineTo(100, 0);
				    ctx.lineWidth = 10;
				    ctx.stroke();
				    /** Left Side Line Bar **/
					var c = document.getElementById("myCanvasleft");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(50.6, 0);
					ctx.lineTo(50, 260);
					ctx.lineWidth = 6;
					ctx.stroke();
					$('input[id="optioninput-top1"]').val(0);
					$('input[id="optioninput-bottom1"]').val(0);
					/** Right Side Line Bar **/
					var c = document.getElementById("myCanvasright");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(10, 0);
					ctx.lineTo(10, 300);
					ctx.lineWidth = 6; 
					ctx.stroke();
					$('input[id="optioninput-top2"]').val(0);
					$('input[id="optioninput-bottom2"]').val(0);
					
					/*** Bottom Line Bar ***/
					/** Corner Shower **/
					if ($(".product-id").val() == 3743) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					}
					
					/** Fixed Panel Shower **/
					if ($(".product-id").val() == 4241) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0); 
						}
					}

					/** Over Bath Shower-Fixed **/
					if ($(".product-id").val() == 4271) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);    
						}
					}
					
					/** Over Bath Shower-Hinged **/
					if ($(".product-id").val() == 4262) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);    
						}
					}
					
					/** Next To Bath Shower **/
					if ($(".product-id").val() == 4248) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					}
					
					/** Wall To Wall Shower **/
					if ($(".product-id").val() == 4255) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 2);
							ctx.lineTo(100, 2);
							ctx.lineWidth = 4;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					}
					
					/** Angled Corner Shower **/
					if ($(".product-id").val() == 4280) { 
						if ($("input[id='right-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);
						}
						if ($("input[id='left-hinge']:checked").is(":checked")) {
							/** Bottom Left Side Line Bar **/
							var c = document.getElementById("myCanvasleftbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomleft1"]').val(0);
							$('input[id="optioninput-bottomleft2"]').val(0);
							
							/** Bottom Right Side Line Bar **/
							var c = document.getElementById("myCanvasrightbottom");
							var ctx = c.getContext("2d");
							ctx.beginPath();
							ctx.moveTo(0, 4);
							ctx.lineTo(100, 4);
							ctx.lineWidth = 10;
							ctx.clearRect(0, 0,  c.width, c.height); 
							ctx.stroke();
							$('input[id="optioninput-bottomright1"]').val(0);
							$('input[id="optioninput-bottomright2"]').val(0);  
						}
					}
			
		});
		
		/** Advanced options value and line increase on plus **/
		/** Top Left **/
		$('.optioninput-top1').blur(function (e) {
			// Stop acting like a button
			e.preventDefault();
			// Get its current value
			var currentVal = $(".optioninput-top1").val();
			//alert(currentVal);
			// If is not undefined
			if (!isNaN(currentVal) && currentVal > 0) {
				// Increment
				//alert('Increment');
				//$('input[id="optioninput-top1"]').val(currentVal + 10);
				   var angleplus = $('#optioninput-top1').val();
				   angleplus = 50.6-angleplus;
				   var c = document.getElementById("myCanvasleft");
				   var ctx = c.getContext("2d");
				   ctx.beginPath();
				   ctx.moveTo(40.6, 0);
				   ctx.lineTo(50, 260);
				   ctx.lineWidth = 6;
				   ctx.clearRect(0, 0,  c.width, c.height); 
				   ctx.stroke();
				   //$('.redcir-topleft').val('' + $('#optioninput-top1').val() + '');
			} 
			else if (!isNaN(currentVal) && currentVal == 0) {
			   // Dcrement
			   //alert('Dcrement');
					//$('input[id="optioninput-top1"]').val(currentVal - 10);
					   var angleplus = $('#optioninput-top1').val();
					   angleplus = 50.6-angleplus;
					   var c = document.getElementById("myCanvasleft");
					   var ctx = c.getContext("2d");
					   ctx.beginPath();
					   ctx.moveTo(50.6, 0);
				       ctx.lineTo(50, 260);
					   ctx.lineWidth = 6;
					   ctx.clearRect(0, 0,  c.width, c.height); 
					   ctx.stroke();
					   //$('.redcir-topleft').val('' + $('#optioninput-top1').val() + '');
			}
			else {
				// Otherwise put a 0 there
				$('input[id="optioninput-top1"]').val(0);
			}
		});
		/** On Blur **/
		$('.redcir-topleft').blur(function (e) {
			var limittop1 = $('.optioninput-top1').val();
				if((limittop1 > 0) && (limittop1 < 31))
				{
					$('.optioninput-bottom1').attr('disabled', 'disabled');
					$('.optioninput-bottom1').attr('value', 0);
					$('#optioninput-top1value').val('' + $('.optioninput-top1').val() + ''); 
					$('#optioninput-bottom1value').attr('value', 0);
				}
				else {
					$('.optioninput-bottom1').removeAttr('disabled');
				}
		}); 
		
		/** Bottom Left **/
		$('.optioninput-bottom1').blur(function (e) {
			// Stop acting like a button
			e.preventDefault();
			// Get its current value
			var currentVal = $(".optioninput-bottom1").val();
			// If is not undefined
			if (!isNaN(currentVal) && currentVal > 0) {
				// Increment
				//$('input[id="optioninput-bottom1"]').val(currentVal + 10);
				   var angleplus = $('#optioninput-bottom1').val();
				   angleplus = 55.8-angleplus;
				   var c = document.getElementById("myCanvasleft");
				   var ctx = c.getContext("2d");
				   ctx.beginPath();
				   ctx.moveTo(60,0);
				   ctx.lineTo(45.8,300);
				   ctx.lineWidth = 6;
				   ctx.clearRect(0, 0,  c.width, c.height); 
				   ctx.stroke();
				   //$('.redcir-middleleft').val('' + $('#optioninput-bottom1').val() + '');
			} 
			else if (!isNaN(currentVal) && currentVal == 0) {
			   // Increment
					//$('input[id="optioninput-bottom1"]').val(currentVal - 10);
					   var angleplus = $('#optioninput-bottom1').val();
					   angleplus = 55.8-angleplus;
					   var c = document.getElementById("myCanvasleft");
					   var ctx = c.getContext("2d");
					   ctx.beginPath();
					   /* ctx.moveTo(angleplus, 0);
				       ctx.lineTo(0, 300); */
					   ctx.moveTo(60,0);
					   ctx.lineTo(55.8,300);
					   ctx.lineWidth = 6;
					   ctx.clearRect(0, 0,  c.width, c.height); 
					   ctx.stroke();
					   //$('.redcir-middleleft').val('' + $('#optioninput-bottom1').val() + '');
			}
			else {
				// Otherwise put a 0 there
				$('input[id="optioninput-bottom1"]').val(0);
			}
		});
		/** On Blur **/
		$('.redcir-middleleft').blur(function (e) {
				var limitbottom1 = $('.optioninput-bottom1').val();
				if((limitbottom1 > 0) && (limitbottom1 < 31))
				{
					$('.optioninput-top1').attr('disabled', 'disabled');
					$('.optioninput-top1').attr('value', 0);
					$('#optioninput-top1value').attr('value', 0);
					$('#optioninput-bottom1value').val('' + $('.optioninput-bottom1').val() + '');
				}
				else {
					$('.optioninput-top1').removeAttr('disabled');
				}
		});
		
		
		/** Top Right **/
		$('.optioninput-top2').blur(function (e) {
			// Stop acting like a button
			e.preventDefault();
			// Get its current value
			var currentVal = $(".optioninput-top2").val();
			//alert(currentVal);
			// If is not undefined
			if (!isNaN(currentVal) && currentVal > 0) {
				// Increment
				//alert('Increment');
				//$('input[id="optioninput-top2"]').val(currentVal + 10);
				   var angleplus = $('#optioninput-top2').val();
				   var c = document.getElementById("myCanvasright");
				   var ctx = c.getContext("2d");
				   ctx.beginPath();
				   ctx.moveTo(20, 0);
				   ctx.lineTo(10, 300);
				   ctx.lineWidth = 6;
				   ctx.clearRect(0, 0,  c.width, c.height); 
				   ctx.stroke();
				   //$('.redcir-topright').val('' + $('#optioninput-top2').val() + '');
			} 
			else if (!isNaN(currentVal) && currentVal == 0) {
			   // Dcrement
			   //alert('Dcrement');
					//$('input[id="optioninput-top2"]').val(currentVal - 10);
					   var angleplus = $('#optioninput-top2').val();
					   var c = document.getElementById("myCanvasright");
					   var ctx = c.getContext("2d");
					   ctx.beginPath();
					   ctx.moveTo(10, 0);
				       ctx.lineTo(10, 300);
					   ctx.lineWidth = 6;
					   ctx.clearRect(0, 0,  c.width, c.height); 
					   ctx.stroke();
					   //$('.redcir-topright').val('' + $('#optioninput-top2').val() + '');
			}
			else {
				// Otherwise put a 0 there
				$('input[id="optioninput-top2"]').val(0);
			}
		});
		/** On Blur **/
		$('.redcir-topright').blur(function (e) {
			var limittop2 = $('.optioninput-top2').val();
				if((limittop2 > 0) && (limittop2 < 31))
				{
					$('.optioninput-bottom2').attr('disabled', 'disabled');
					$('.optioninput-bottom2').attr('value', 0);
					$('#optioninput-top2value').val('' + $('.optioninput-top2').val() + ''); 
					$('#optioninput-bottom2value').attr('value', 0);
				}
				else {
					$('.optioninput-bottom2').removeAttr('disabled');
				}
		}); 
		
		/** Bottom Right **/
		$('.optioninput-bottom2').blur(function (e) {
			// Stop acting like a button
			e.preventDefault();
			// Get its current value
			var currentVal = $(".optioninput-bottom2").val();
			// If is not undefined
			if (!isNaN(currentVal) && currentVal > 0) {
				// Increment
				//$('input[id="optioninput-bottom2"]').val(currentVal + 10);
				   var angleplus = $('#optioninput-bottom2').val();
				   var c = document.getElementById("myCanvasright");
				   var ctx = c.getContext("2d");
				   ctx.beginPath();
				   ctx.moveTo(10,0);
				   ctx.lineTo(20,300);
				   ctx.lineWidth = 6;
				   ctx.clearRect(0, 0,  c.width, c.height); 
				   ctx.stroke();
				   //$('.redcir-middleright').val('' + $('#optioninput-bottom2').val() + '');
			} 
			else if (!isNaN(currentVal) && currentVal == 0) {
			   // Increment
					//$('input[id="optioninput-bottom2"]').val(currentVal - 10);
					   var angleplus = $('#optioninput-bottom2').val();
					   var c = document.getElementById("myCanvasright");
					   var ctx = c.getContext("2d");
					   ctx.beginPath();
					   ctx.moveTo(10,0);
				       ctx.lineTo(10,300);
					   ctx.lineWidth = 6;
					   ctx.clearRect(0, 0,  c.width, c.height); 
					   ctx.stroke();
					   //$('.redcir-middleright').val('' + $('#optioninput-bottom2').val() + '');
			}
			else {
				// Otherwise put a 0 there
				$('input[id="optioninput-bottom2"]').val(0);
			}
		});
		/** On Blur **/
		$('.redcir-middleright').blur(function (e) {
				var limitbottom2 = $('.optioninput-bottom2').val();
				if((limitbottom2 > 0) && (limitbottom2 < 31))
				{
					$('.optioninput-top2').attr('disabled', 'disabled');
					$('.optioninput-top2').attr('value', 0);
					$('#optioninput-top2value').attr('value', 0);
					$('#optioninput-bottom2value').val('' + $('.optioninput-bottom2').val() + '');
				}
				else {
					$('.optioninput-top2').removeAttr('disabled');
				}
		});
		
		/*** Last Bottoms Circle Fields ***/
		$(".reviewleftrightimage").click(function () {
			/** Corner Shower **/
			if ($(".product-id").val() == 3743) {
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						 var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						 var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   //alert("bottom1 is greater than bottom2");
								   if (angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 1);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   } 
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   //alert("bottom1 is lesser than bottom2");
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if (angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 1);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
								   //alert("bottomleft1 is smaller than bottomleft2");
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						 var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						 var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						 //alert(bottomleft1);
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft2').val();
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   
							   if(bottomleft2 > bottomleft1){
								   //alert("bottom2 is greater than bottom1");
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if (angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 1);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   //alert("bottom2 is lesser than bottom1");
								   if (angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 1);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   } 
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
								   //alert("bottomleft2 is smaller than bottomleft1");
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
									   ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   //alert("bottom1 is greater than bottom2");
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   //alert("bottom1 is lesser than bottom2");
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								   } 
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright2').val();
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   
							   if(bottomright2 > bottomright1){
								   //alert("bottom2 is greater than bottom1");
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								   } 
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   //alert("bottom2 is lesser than bottom1");
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
								   //var angleplusstart = parseInt(angleplus1 + 4);
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
								   //var angleplusstart = parseInt(angleplus1 + 2);
								   var c = document.getElementById("myCanvasrightbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 2);
								   ctx.lineTo(100, 2);
								   }
								   if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else{
				}
			}
			
			/** Fixed Panel Shower **/
			if ($(".product-id").val() == 4241) {
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
								   //var angleplusstart = parseInt(angleplus1 + 2);
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 2);
								   ctx.lineTo(100, 2);
								   }
								   if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
				}
				else{
				}
			}
			
			/** Next to Bath Shower **/
			if ($(".product-id").val() == 4248) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0); 
						}
					});
				}
				else{
				}
			}
			
			/** wall to wall Shower **/
			if ($(".product-id").val() == 4255) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + ''); 
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>'); 
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke(); 
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							    else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							    else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else{
				}
			}
			
			/** Over Bath Shower Hinged **/
			if ($(".product-id").val() == 4262) {
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else{
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else{
				}
			}
			
			/** Over Bath Shower Fixed **/
			if ($(".product-id").val() == 4271) {
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 2);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
								   }
								   else{
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 2);
								   }
								   ctx.lineWidth = 4;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								       var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 2);
									   ctx.lineTo(100, 2);
									   ctx.lineWidth = 4;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
				}
				else{
				}
			}
			
			/** Angled Corner Shower **/
			if ($(".product-id").val() == 4280) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					//alert("right");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val()); 
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>'); 
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }   
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else if ($("input[id='left-hinge']:checked").is(":checked")) {
					//alert("left");
					/** Bottom Last Left1 **/
					$('.optioninput-bottomleft1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomleft1').val();
							   var angleplus1 = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft1 > bottomleft2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if(bottomleft1 < bottomleft2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						}
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft1"]').val(0);
						}
					});
					/** Bottom Last Right1 **/
					$('.optioninput-bottomleft2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomleft1 = parseInt($('#optioninput-bottomleft1').val());
						var bottomleft2 = parseInt($('#optioninput-bottomleft2').val());
						
						var currentVal = parseInt($(".optioninput-bottomleft2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomleft2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomleft1').val();
							   var angleplus = $('#optioninput-bottomleft2').val();
							   
							   if(bottomleft2 > bottomleft1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 20);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft2').val('' + $('#optioninput-bottomleft2').val() + '');
							   }
							   else if(bottomleft2 < bottomleft1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasleftbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 20);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomleft1').val('' + $('#optioninput-bottomleft1').val() + '');
							   }
							   else if((bottomleft1 == 8) && (bottomleft2 == 8)){
								   var c = document.getElementById("myCanvasleftbottom");
								   var ctx = c.getContext("2d");
								   ctx.beginPath();
								   ctx.moveTo(0, 4);
								   ctx.lineTo(100, 4);
								   ctx.lineWidth = 10;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomleft2"]').val(0);
						}
					});
					
					/** Bottom Last Left2 **/
					$('.optioninput-bottomright1').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright1").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright1"]').val(currentVal + 1);
							   var angleplus = $('#optioninput-bottomright1').val();
							   var angleplus1 = $('#optioninput-bottomright2').val();
							   
							   if(bottomright1 > bottomright2){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 7;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');
							   }
							   else if(bottomright1 < bottomright2){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 7;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright1"]').val(0);
						}
					});
					/** Bottom Last Right2 **/
					$('.optioninput-bottomright2').blur(function (e){
						// Stop acting like a button
						e.preventDefault();
						// Get its current value
						var bottomright1 = parseInt($('#optioninput-bottomright1').val());
						var bottomright2 = parseInt($('#optioninput-bottomright2').val());
						
						var currentVal = parseInt($(".optioninput-bottomright2").val());
						// If is not undefined
						if (!isNaN(currentVal)) {
							// Increment
							//$('input[id="optioninput-bottomright2"]').val(currentVal + 1);
							   var angleplus1 = $('#optioninput-bottomright1').val();
							   var angleplus = $('#optioninput-bottomright2').val();
							   
							   if(bottomright2 > bottomright1){
								   if(angleplus == 0){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus == 1){
									   //var angleplusstart = parseInt(angleplus + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 12);
								   }
								   ctx.lineWidth = 7;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright2').html('<b>+' + $('#optioninput-bottomright2').val() + '<b>');
							   }
							   else if(bottomright2 < bottomright1){
								   if(angleplus1 == 0){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else if(angleplus1 == 1){
									   //var angleplusstart = parseInt(angleplus1 + 4);
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
								   }
								   else {
									   var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 12);
									   ctx.lineTo(100, 4);
								   }
								   ctx.lineWidth = 7;
								   ctx.clearRect(0, 0,  c.width, c.height); 
								   ctx.stroke();
								   $('.redcir-bottomright1').html('<b>+' + $('#optioninput-bottomright1').val() + '<b>');  
							   } 
							   else if((bottomright1 == 8) && (bottomright2 == 8)){
								       var c = document.getElementById("myCanvasrightbottom");
									   var ctx = c.getContext("2d");
									   ctx.beginPath();
									   ctx.moveTo(0, 4);
									   ctx.lineTo(100, 4);
									   ctx.lineWidth = 10;
								       ctx.clearRect(0, 0,  c.width, c.height); 
								       ctx.stroke();
							   }
							   else{}
						} 
						else {
							// Otherwise put a 0 there
							$('input[id="optioninput-bottomright2"]').val(0);
						}
					});
				}
				else{
				}
			}
			
		});
		
		
		/*** advanced option line reset button ***/
		$(".resetline").click(function () {
			/** Left Side Line Bar **/
			var c = document.getElementById("myCanvasleft");
			var ctx = c.getContext("2d");
			ctx.beginPath();
			ctx.moveTo(50.6, 0);
			ctx.lineTo(50, 260);
			ctx.lineWidth = 6;
			ctx.clearRect(0, 0,  c.width, c.height); 
			ctx.stroke();
			$('input[id="optioninput-top1"]').val(0);
			$('input[id="optioninput-bottom1"]').val(0);
			$('.optioninput-bottom1').removeAttr('disabled');
			$('.optioninput-top1').removeAttr('disabled');
			
			/** Right Side Line Bar **/
			var c = document.getElementById("myCanvasright");
			var ctx = c.getContext("2d");
			ctx.beginPath();
			ctx.moveTo(10, 0);
			ctx.lineTo(10, 300);
			ctx.lineWidth = 6; 
			ctx.clearRect(0, 0,  c.width, c.height); 
			ctx.stroke();
			$('input[id="optioninput-top2"]').val(0);
			$('input[id="optioninput-bottom2"]').val(0);
			$('.optioninput-bottom2').removeAttr('disabled');
			$('.optioninput-top2').removeAttr('disabled');
			
			/** Corner Shower **/
			if ($(".product-id").val() == 3743) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
			}
			
			/** Fixed Panel Shower **/
			if ($(".product-id").val() == 4241) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0); 
				}
			}

			/** Over Bath Shower-Fixed **/
			if ($(".product-id").val() == 4271) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);    
				}
			}
			
			/** Over Bath Shower-Hinged **/
			if ($(".product-id").val() == 4262) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);    
				}
			}
			
			/** Next To Bath Shower **/
			if ($(".product-id").val() == 4248) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
			}
			
			/** Wall To Wall Shower **/
			if ($(".product-id").val() == 4255) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 2);
					ctx.lineTo(100, 2);
					ctx.lineWidth = 4;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
			}
			
			/** Angled Corner Shower **/
			if ($(".product-id").val() == 4280) { 
				if ($("input[id='right-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);
				}
				if ($("input[id='left-hinge']:checked").is(":checked")) {
					/** Bottom Left Side Line Bar **/
					var c = document.getElementById("myCanvasleftbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomleft1"]').val(0);
					$('input[id="optioninput-bottomleft2"]').val(0);
					
					/** Bottom Right Side Line Bar **/
					var c = document.getElementById("myCanvasrightbottom");
					var ctx = c.getContext("2d");
					ctx.beginPath();
					ctx.moveTo(0, 4);
					ctx.lineTo(100, 4);
					ctx.lineWidth = 10;
					ctx.clearRect(0, 0,  c.width, c.height); 
					ctx.stroke();
					$('input[id="optioninput-bottomright1"]').val(0);
					$('input[id="optioninput-bottomright2"]').val(0);  
				}
			}
			
        });
		
});