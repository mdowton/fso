$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

/*** All Steps validation ***/
/** screen orientation selection validation **/
$(".door-img").click(function(){
		if($('input[name="size-hing"]').is(":checked")) {
		  //alert("Please select the Product Design");
		}
		else{
			$("#orientation-message").text("Please select your shower screen orientation");
			e.preventDefault();
		}
});
/** screen orientation input field validation **/
$(".screenname").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
		$("#dimensiondigits-message").text("Please enter numbers only");
		//alert("Digits Only")
        return false;
    }
});
/** screen orientation review input field validation **/
$(".reviewscreenname").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
		$("#dimensiondigitsreview-message").text("Please enter numbers only");
		//alert("Digits Only")
        return false;
    } 
});
/** Review image input field validation **/
$(".review_bathwidth").keypress(function (e) {
	var bathendwidth  = $('#advancedoptions_bathendwidth').val();
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
		$("#dimensiondigitsreview-message").text("Please enter numbers only");
		//alert("Digits Only")
        return false;
     }
});
/** Review image input field validation **/
$(".review_bathheight").keypress(function (e) {
	var bathendheight  = $('#advancedoptions_bathendheight').val();
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
		$("#dimensiondigitsreview-message").text("Please enter numbers only");
		//alert("Digits Only")
        return false;
     }
});

$(".shower-size").click(function(){
	/*** Corner Shower  ***/
	if($(".product-id").val() == 3743) { 
	  var doorwidth    = $.trim($('#doorwidth').val());
	  var screenheight = $.trim($('#screenheight').val());
	  var screenwidth  = $.trim($('#screenwidth').val());
	  var screendepth  = $.trim($('#screendepth').val());
	  var hingepanelminus =  parseInt(screenwidth - doorwidth - 20);
	  
		if ($('#doorwidthvalid').val() === 0) {
		}
		else{
			if( doorwidth === "")
			{ 
			  //display error message
			  $("#dimension-message").text("Please enter Door Width");
			  e.preventDefault();			 
			}
			else{
			   if ($('#doorwidth').val() < 550)
				   {
					//display error message
					$("#dimension-message").text("Please enter a value greater than or equal to 550mm for Door Width");
					e.preventDefault();
				   }
			   else if ($('#doorwidth').val() > 660)
				   {
					//display error message
					$("#dimension-message").text("Please enter a value smaller than or equal to 660mm for Door Width");
					e.preventDefault();
					}
				else{
						//$( "#dimension-message" ).remove();
					}
			}
			
		}
		if ($('#screenheightvalid').val() === 0) {
		}
		else{
			if( screenheight === "") 
			{
				$("#dimension-message").text("Please enter Screen Height");
				e.preventDefault();
			}
			else
				{
				 if ($('#screenheight').val() < 1800) {
					//display error message
					 $("#dimension-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
					 e.preventDefault();
				}
				else if ($('#screenheight').val() > 2100) {
					//display error message
					 $("#dimension-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
					 e.preventDefault();
				}
				else{
					//$( "#screenheighterror-message" ).remove();
				}
			   
			}
		}
		if ($('#screenwidthvalid').val() === 0) {
		}
		else{
			 if (screenwidth === "") { 
				//display error message
				$("#dimension-message").text("Please enter Screen Width");
				e.preventDefault();	
			 }
			 else{
					if ($('#screenwidth').val() < 720) { 
						//display error message
						 $("#dimension-message").text("Please enter a value greater than or equal to 720mm for Screen Width");
						 e.preventDefault();
					}
					else if ($('#screenwidth').val() > 1780) {
						//display error message
						 $("#dimension-message").text("Please enter a value less than or equal to 1780mm for Screen Width");
						 e.preventDefault();
					}
					else{
						//$( "#screenwidtherror-message" ).remove();
					}
			 }
		}
		if ($('#screendepthvalid').val() === 0) {
		}
		else{
			 if (screendepth === "") { 
						 //display error message
						 $("#dimension-message").text("Please enter Screen Depth measurement");
						 e.preventDefault();
			 }
			 else{
					if ($('#screendepth').val() < 650) {
						//display error message
						 $("#dimension-message").text("Screen Depth minimum value is 650mm");
						 e.preventDefault();
					}
					else if ($('#screendepth').val() > 1120) {
						//display error message
						 $("#dimension-message").text("Please enter a value less than or equal to 1120mm for Screen Depth");
						 e.preventDefault();
					}
					else{
						//$( "#dimension-message" ).remove();
					}
			 }
		}
		if (hingepanelminus < 170){
			$("#dimension-message").text("The Hinge Panel needs to be a minimum of 170mm in width. Please adjust your door or screen width.");
			e.preventDefault();
		}
		else{
			$( "#dimension-message" ).text("");
		}

	 }
	 	/*** Angled Corner Shower   ***/
	if($(".product-id").val() == 4280) { 
	  var screenheight = $.trim($('#screenheight').val());
	  var paneldepth   = $.trim($('#paneldepth').val());
	  var doorwidth    = $.trim($('#doorwidth').val());
	  var hingepanel   = $.trim($('#hingepanel').val());
	  
		  if ($('#screenheightvalid').val() === 0) {
		  }
		  else{
				  if( screenheight === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Height");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#screenheight').val() < 1800)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
							e.preventDefault();
						   }
					   else if ($('#screenheight').val() > 2100)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
							e.preventDefault();
							}
					   else{
								//$( "#dimension-message" ).remove();
						   }
				  }
		  }
		  /* if ($('#paneldepthvalid').val() === 0) {
		  }
		  else{
					if( paneldepth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Panel");
					  e.preventDefault();			 
					 }
					else{
						   if ($('#paneldepth').val() < 200)
							   {
								//display error message
								$("#dimension-message").text("Please Enter Value Greater Than 200 In Panel");
								e.preventDefault();
							   }
						   else if ($('#paneldepth').val() > 600)
							   {
								//display error message
								$("#dimension-message").text("Please Enter Value Smaller Than Or Equal To 600 In Panel");
								e.preventDefault();
								}
							else{
									//$( "#dimension-message" ).remove();
								}
					 }
		   } */
		   if ($('#doorwidthvalid').val() === 0) {
		   }
		   else{
					if( doorwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Door Width ");
					  e.preventDefault();			 
					}
					else{
					   if ($('#doorwidth').val() < 550)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 550mm for Door Width");
							e.preventDefault();
						   }
					   else if ($('#doorwidth').val() > 660)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 660mm for Door Width");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
					 }
			}
			if ($('#hingepanelvalid').val() === 0) {
			}
			else{
					if( hingepanel === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Hinge Panel ");
					  e.preventDefault();			 
					}
					else{
					   if ($('#hingepanel').val() < 200)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 200mm for Hinge Panel");
							e.preventDefault();
						   }
					   else if ($('#hingepanel').val() > 600)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 600 for Hinge Panel");
							e.preventDefault();
						   }
					   else{
								//$( "#dimension-message" ).remove();
						   }
					}
			}
	    }
	  	    /*** Over Bath Shower - Fixed  ***/
	  		if($(".product-id").val() == 4271){
			var screenheight = $.trim($('#screenheight').val());
			var screenwidth   = $.trim($('#screenwidth').val());
			
				if ($('#screenheightvalid').val() === 0) {
				}
				else{
					if( screenheight === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Height");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenheight').val() < 1200)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 1200mm for Screen Height");
							e.preventDefault();
						   }
					   else if ($('#screenheight').val() > 1720)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 1720mm for Screen Height");
							e.preventDefault();
							}
					   else{
								//$( "#dimension-message" ).remove();
						   }
					 }
				}
				if ($('#screenwidthvalid').val() === 0) {
				}
				else{
					if( screenwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#screenwidth').val() < 300)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 300mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidth').val() > 1120)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 1120mm for Screen Width");
							e.preventDefault();
							}
					   else{
								//$( "#dimension-message" ).remove();
						   }
					 }
				}
			}
		  	/*** Over Bath Shower - Hinged  ***/
	  		if($(".product-id").val() == 4262){
			  var doorwidth   = $.trim($('#doorwidth').val());
			  var screenheight = $.trim($('#screenheight').val());
			  var screenwidth   = $.trim($('#screenwidth').val());
			 
			 if ($('#doorwidthvalid').val() === 0) {
			 }
		     else{
				  if( doorwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Door Width");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#doorwidth').val() < 350)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 350mm for Door Width");
							e.preventDefault();
						   }
					   else if ($('#doorwidth').val() > 800)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 800mm for Door Width");
							e.preventDefault();
							}
					   else{
								//$( "#dimension-message" ).remove();
						   }
					 }
			  }
			  if ($('#screenheightvalid').val() === 0) {
			  }
		      else{
				  if( screenheight === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Height");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#screenheight').val() < 1200)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 1200mm for Screen Height");
							e.preventDefault();
						   }
					   else if ($('#screenheight').val() > 1720)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 1720mm for Screen Height");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
				  }
			  }
			  if ($('#screenwidthvalid').val() === 0) {
			  }
		      else{
					if( screenwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
				    else{
						   if ($('#screenwidth').val() < 507)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value greater than or equal to 507mm for Screen Width");
								e.preventDefault();
							   }
						   else if ($('#screenwidth').val() > 1920)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value less than or equal to 1920mm for Screen Width");
								e.preventDefault();
								}
						   else{
									//$( "#dimension-message" ).remove();
							   }
					 }
			  }
			}
			/*** Wall to Wall Shower  ***/
	  		if($(".product-id").val() == 4255){
			  var doorwidth   = $.trim($('#doorwidth').val());
			  var hingepanel   = $.trim($('#hingepanel').val());
			  var screenheight = $.trim($('#screenheight').val());
			  var screenwidth   = $.trim($('#screenwidth').val());
			 
			  if ($('#doorwidthvalid').val() === 0) {
			  }
		      else{
				  if( doorwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Door Width");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#doorwidth').val() < 550)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 550mm for Door Width");
							e.preventDefault();
						   }
					   else if ($('#doorwidth').val() > 660)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 660mm for Door Width");
							e.preventDefault();
							}
					   else{
								//$( "#dimension-message" ).remove();
						   }
				  }
			   }
			   if ($('#hingepanelvalid').val() === 0) {
			   }
		       else{
					 if( hingepanel === "")
					 { 
					  //display error message
					  $("#dimension-message").text("Please Enter Hinge Panel");
					  e.preventDefault();			 
					 }
					 else{
					   if ($('#hingepanel').val() < 150)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 150mm for Hinge Panel ");
							e.preventDefault();
						   }
					   else if ($('#hingepanel').val() > 1120)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 1120mm for Hinge panel");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
					 }
			   }
			   if ($('#screenheightvalid').val() === 0) {
			   }
		       else{
					  if( screenheight === "")
						{ 
						  //display error message
						  $("#dimension-message").text("Please Enter Screen Height");
						  e.preventDefault();			 
						}
					  else{
						   if ($('#screenheight').val() < 1800)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
								e.preventDefault();
							   }
						   else if ($('#screenheight').val() > 2100)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
								e.preventDefault();
								}
						   else{
									//$( "#dimension-message" ).remove();
							   }
					   }
			   }
			   if ($('#screenwidthvalid').val() === 0) {
			   }
		       else{
					if( screenwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenwidth').val() < 864)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 864mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidth').val() > 2900)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 2900mm for Screen Width");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
					 }
			  }
			}
			/*** Next to Bath Shower  ***/
	  		if($(".product-id").val() == 4248){
			  var screendepth   = $.trim($('#screendepth').val());
			  var doorwidth   = $.trim($('#doorwidth').val());
			  var screenheight = $.trim($('#screenheight').val());
			  var screenwidth   = $.trim($('#screenwidth').val());
			  var hingepanelminus =  parseInt(screenwidth - doorwidth - 20);
			 
			   if ($('#screendepthvalid').val() === 0) {
			   }
		       else{
					  if( screendepth === "")
						{ 
						  //display error message
						  $("#dimension-message").text("Please Enter Screen Depth");
						  e.preventDefault();			 
						 }
					  else{
						   if ($('#screendepth').val() < 650)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value greater than or equal to 650mm for Screen Depth");
								e.preventDefault();
							   }
						   else if ($('#screendepth').val() > 1120)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value less than or equal to 1120mm for Screen Depth");
								e.preventDefault();
								}
						   else{
									//$( "#dimension-message" ).remove();
							   }
					   }
			   }
			   if ($('#doorwidthvalid').val() === 0) {
			   }
		       else{
					if( doorwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Door Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#doorwidth').val() < 550)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 550mm for Door Width ");
							e.preventDefault();
						   }
					   else if ($('#doorwidth').val() > 660)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 660mm for Door Width");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
					 }
			   }
			   if ($('#screenheightvalid').val() === 0) {
			   }
		       else{
					  if( screenheight === "")
						{ 
						  //display error message
						  $("#dimension-message").text("Please Enter Screen Height");
						  e.preventDefault();			 
						 }
					  else{
						   if ($('#screenheight').val() < 1800)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
								e.preventDefault();
							   }
						   else if ($('#screenheight').val() > 2100)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
								e.preventDefault();
								}
								else{
									//$( "#dimension-message" ).remove();
								}
					   }
			   }
			   if ($('#screenwidthvalid').val() === 0) {
			   }
		       else{
					if( screenwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenwidth').val() < 720)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 720mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidth').val() > 1780)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 1780mm for Screen Width");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
					 }
			  }
			  if (hingepanelminus < 150){
					$("#dimension-message").text("The Hinge Panel needs to be a minimum of 150mm in width manufactured size. Please adjust your door or screen width.");
					e.preventDefault();
			  }
			  else{
					$( "#dimension-message" ).text("");
			  }
		 	}
		    /*** Fixed Panel Shower  ***/
	  		if($(".product-id").val() == 4241){
			var screenheight = $.trim($('#screenheight').val());
			var screenwidth   = $.trim($('#screenwidth').val());
			
				if ($('#screenheightvalid').val() === 0) {
				}
				else{
					  if( screenheight === "")
						{ 
						  //display error message
						  $("#dimension-message").text("Please Enter Screen Height");
						  e.preventDefault();			 
						 }
					  else{
						   if ($('#screenheight').val() < 1800)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
								e.preventDefault();
							   }
						   else if ($('#screenheight').val() > 2100)
							   {
								//display error message
								$("#dimension-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
								e.preventDefault();
								}
								else{
									//$( "#dimension-message" ).remove();
								}
					   }
				}
				if ($('#screenwidthvalid').val() === 0) {
				}
				else{
					if( screenwidth === "")
					{ 
					  //display error message
					  $("#dimension-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenwidth').val() < 300)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value greater than or equal to 300mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidth').val() > 1120)
						   {
							//display error message
							$("#dimension-message").text("Please enter a value less than or equal to 1120mm for Screen Width");
							e.preventDefault();
							}
							else{
								//$( "#dimension-message" ).remove();
							}
					 }
				}
			}
});

$(".update-advancedoptions").click(function(){
	/*** Corner Shower  ***/
	if($(".product-id").val() == 3743) { 
	  var doorwidthreview    = $.trim($('#doorwidthreview').val());
	  var screenheightreview = $.trim($('#screenheightreview').val());
	  var screenwidthreview  = $.trim($('#screenwidthreview').val());
	  var screendepthreview  = $.trim($('#screendepthreview').val());
	  var hingepanelminus =  parseInt(screenwidthreview - doorwidthreview - 20);
	  
		if ($('#doorwidthvalidreview').val() === 0) {
		}
		else{
			if( doorwidthreview === "")
			{ 
			  //display error message
			  $("#dimensionreview-message").text("Please Enter Door Width");
			  e.preventDefault();			 
			}
			else{
			   if ($('#doorwidthreview').val() < 550)
				   {
					//display error message
					$("#dimensionreview-message").text("Please enter a value greater than or equal to 550mm for Door Width");
					e.preventDefault();
				   }
			   else if ($('#doorwidthreview').val() > 660)
				   {
					//display error message
					$("#dimensionreview-message").text("Please enter a value less than or equal to 660mm for Door Width");
					e.preventDefault();
					}
				else{
						$("#dimensionreview-message").text("Update Successful");
					}
			}
			
		}
		if ($('#screenheightvalidreview').val() === 0) {
		}
		else{
			if( screenheightreview === "") 
			{
				$("#dimensionreview-message").text("Please enter Screen Height");
				e.preventDefault();
			}
			else
				{
				 if ($('#screenheightreview').val() < 1800) {
					//display error message
					 $("#dimensionreview-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
					 e.preventDefault();
				}
				else if ($('#screenheightreview').val() > 2100) {
					//display error message
					 $("#dimensionreview-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
					 e.preventDefault();
				}
				else{
					$("#dimensionreview-message").text("Update Successful");
				}
			   
			}
		}
		if ($('#screenwidthvalidreview').val() === 0) {
		}
		else{
			 if (screenwidthreview === "") { 
				//display error message
				$("#dimensionreview-message").text("Please enter Screen Width");
				e.preventDefault();	
			 }
			 else{
					if ($('#screenwidthreview').val() < 720) {
						//display error message
						 $("#dimensionreview-message").text("Please enter a value greater than or equal to 720mm for Screen Width");
						 e.preventDefault();
					}
					else if ($('#screenwidthreview').val() > 1780) {
						//display error message
						 $("#dimensionreview-message").text("Please enter a value less than or equal to 1780mm for Screen Width");
						 e.preventDefault();
					}
					else{
						$("#dimensionreview-message").text("Update Successful");
					}
			 }
		}
		if ($('#screendepthvalidreview').val() === 0) {
		}
		else{
			 if (screendepthreview === "") { 
						 //display error message
						 $("#dimension-message").text("Please Enter Value In Screen Depth");
						 e.preventDefault();
			 }
			 else{
					if ($('#screendepthreview').val() < 650) {
						//display error message
						 $("#dimensionreview-message").text("Please enter a value greater than or equal to 650mm for Screen Depth");
						 e.preventDefault();
					}
					else if ($('#screendepthreview').val() > 1120) {
						//display error message
						 $("#dimensionreview-message").text("Please enter a value less than or equal to 1120mm for Screen Depth");
						 e.preventDefault();
					}
					else{
						$("#dimensionreview-message").text("Update Successful");
					}
			 }
		}
		if (hingepanelminus < 170){
			$("#dimensionreview-message").text("The Hinge Panel needs to be a minimum of 170mm in width. Please adjust your door or screen width.");
			e.preventDefault();
		}
		else{
			$( "#dimensionreview-message" ).text("Update Successful");
		}

	 }
	 	/*** Angled Corner Shower   ***/
	if($(".product-id").val() == 4280) { 
	  var screenheightreview = $.trim($('#screenheightreview').val());
	  var paneldepthreview   = $.trim($('#paneldepthreview').val());
	  var doorwidthreview    = $.trim($('#doorwidthreview').val());
	  var hingepanelreview   = $.trim($('#hingepanelreview').val());
	  
		  if ($('#screenheightvalidreview').val() === 0) {
		  }
		  else{
				  if( screenheightreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Height");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#screenheightreview').val() < 1800)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
							e.preventDefault();
						   }
					   else if ($('#screenheightreview').val() > 2100)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
							e.preventDefault();
							}
					   else{
								$("#dimensionreview-message").text("Update Successful");
						   }
				  }
		  }
		  /* if ($('#paneldepthvalidreview').val() === 0) {
		  }
		  else{
					if( paneldepthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Panel");
					  e.preventDefault();			 
					 }
					else{
						   if ($('#paneldepthreview').val() < 200)
							   {
								//display error message
								$("#dimensionreview-message").text("Please Enter Value Greater Than 200 In Panel");
								e.preventDefault();
							   }
						   else if ($('#paneldepthreview').val() > 600)
							   {
								//display error message
								$("#dimensionreview-message").text("Please Enter Value Smaller Than Or Equal To 600 In Panel");
								e.preventDefault();
								}
							else{
									$("#dimensionreview-message").text("Update Successful");
								}
					 }
		   } */
		   if ($('#doorwidthvalidreview').val() === 0) {
		   }
		   else{
					if( doorwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Door Width ");
					  e.preventDefault();			 
					}
					else{
					   if ($('#doorwidthreview').val() < 550)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 550mm for Door Width");
							e.preventDefault();
						   }
					   else if ($('#doorwidthreview').val() > 660)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 660mm for Door Width");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
					 }
			}
			if ($('#hingepanelvalidreview').val() === 0) {
			}
			else{
					if( hingepanelreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Hinge Panel ");
					  e.preventDefault();			 
					}
					else{
					   if ($('#hingepanelreview').val() < 200)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 200mm for Hinge Panel");
							e.preventDefault();
						   }
					   else if ($('#hingepanelreview').val() > 600)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 600mm for Hinge Panel");
							e.preventDefault();
						   }
					   else{
								$("#dimensionreview-message").text("Update Successful");
						   }
					}
			}
	    }
	  	    /*** Over Bath Shower - Fixed  ***/
	  		if($(".product-id").val() == 4271){
			var screenheightreview = $.trim($('#screenheightreview').val());
			var screenwidthreview   = $.trim($('#screenwidthreview').val());
			
				if ($('#screenheightvalidreview').val() === 0) {
				}
				else{
					if( screenheightreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Height");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenheightreview').val() < 1200)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 1200mm for Screen Height");
							e.preventDefault();
						   }
					   else if ($('#screenheightreview').val() > 1720)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 1720mm for Screen Height");
							e.preventDefault();
							}
					   else{
								$("#dimensionreview-message").text("Update Successful");
						   }
					 }
				}
				if ($('#screenwidthvalidreview').val() === 0) {
				}
				else{
					if( screenwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#screenwidthreview').val() < 300)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 300mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidthreview').val() > 1120)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 1120mm for Screen Width");
							e.preventDefault();
							}
					   else{
								$("#dimensionreview-message").text("Update Successful");
						   }
					 }
				}
			}
		  	/*** Over Bath Shower - Hinged  ***/
	  		if($(".product-id").val() == 4262){
			  var doorwidthreview   = $.trim($('#doorwidthreview').val());
			  var screenheightreview = $.trim($('#screenheightreview').val());
			  var screenwidthreview   = $.trim($('#screenwidthreview').val());
			 
			 if ($('#doorwidthvalidreview').val() === 0) {
			 }
		     else{
				  if( doorwidthreview === "") 
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Door Width");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#doorwidthreview').val() < 350)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 350mm for Door Width");
							e.preventDefault();
						   }
					   else if ($('#doorwidthreview').val() > 800)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 800mm for Door Width");
							e.preventDefault();
							}
					   else{
								$("#dimensionreview-message").text("Update Successful");
						   } 
					 }
			  }
			  if ($('#screenheightvalidreview').val() === 0) {
			  }
		      else{
				  if( screenheightreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Height");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#screenheightreview').val() < 1200)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 1200mm for Screen Height");
							e.preventDefault();
						   }
					   else if ($('#screenheightreview').val() > 1720)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 1720mm for Screen Height");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
				  }
			  }
			  if ($('#screenwidthvalidreview').val() === 0) {
			  }
		      else{
					if( screenwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
				    else{
						   if ($('#screenwidthreview').val() < 507)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value greater than or equal to 507mm for Screen Width");
								e.preventDefault();
							   }
						   else if ($('#screenwidthreview').val() > 1920)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value less than or equal to 1920mm for Screen Width");
								e.preventDefault();
								}
						   else{
									$("#dimensionreview-message").text("Update Successful");
							   }
					 }
			  }
			}
			/*** Wall to Wall Shower  ***/
	  		if($(".product-id").val() == 4255){
			  var doorwidthreview   = $.trim($('#doorwidthreview').val());
			  var hingepanelreview   = $.trim($('#hingepanelreview').val());
			  var screenheightreview = $.trim($('#screenheightreview').val());
			  var screenwidthreview   = $.trim($('#screenwidthreview').val());
			 
			  if ($('#doorwidthvalidreview').val() === 0) {
			  }
		      else{
				  if( doorwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Door Width");
					  e.preventDefault();			 
					 }
				  else{
					   if ($('#doorwidthreview').val() < 550)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 550mm for Door Width");
							e.preventDefault();
						   }
					   else if ($('#doorwidthreview').val() > 660)
						   {
							//display error message
							$("#dimensionreview-message").text("Please Enter Value Smaller Than Or Equal To 660 In Door Width");
							e.preventDefault();
							}
					   else{
								$("#dimensionreview-message").text("Update Successful");
						   }
				  }
			   }
			   if ($('#hingepanelvalidreview').val() === 0) {
			   }
		       else{
					 if( hingepanelreview === "")
					 { 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Hinge Panel");
					  e.preventDefault();			 
					 }
					 else{
					   if ($('#hingepanelreview').val() < 150)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 150mm for Hinge Panel ");
							e.preventDefault();
						   }
					   else if ($('#hingepanelreview').val() > 1120)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 1120mm for Hinge panel");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
					 }
			   }
			   if ($('#screenheightvalidreview').val() === 0) {
			   }
		       else{
					  if( screenheightreview === "")
						{ 
						  //display error message
						  $("#dimensionreview-message").text("Please Enter Screen Height");
						  e.preventDefault();			 
						}
					  else{
						   if ($('#screenheightreview').val() < 1800)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
								e.preventDefault();
							   }
						   else if ($('#screenheightreview').val() > 2100)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
								e.preventDefault();
								}
						   else{
									$("#dimensionreview-message").text("Update Successful");
							   }
					   }
			   }
			   if ($('#screenwidthvalidreview').val() === 0) {
			   }
		       else{
					if( screenwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenwidthreview').val() < 864)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 864mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidthreview').val() > 2900)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 2900mm for Screen Width");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
					 }
			  }
			}
			/*** Next to Bath Shower  ***/
	  		if($(".product-id").val() == 4248){
			  var screendepthreview   = $.trim($('#screendepthreview').val());
			  var doorwidthreview   = $.trim($('#doorwidthreview').val());
			  var screenheightreview = $.trim($('#screenheightreview').val());
			  var screenwidthreview   = $.trim($('#screenwidthreview').val());
			 
			   if ($('#screendepthvalidreview').val() === 0) {
			   }
		       else{
					  if( screendepthreview === "")
						{ 
						  //display error message
						  $("#dimensionreview-message").text("Please Enter Screen Depth");
						  e.preventDefault();			 
						 }
					  else{
						   if ($('#screendepthreview').val() < 650)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value greater than or equal to 650mm for Screen Depth");
								e.preventDefault();
							   }
						   else if ($('#screendepthreview').val() > 1120)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value less than or equal to 1120mm for Screen Depth");
								e.preventDefault();
								}
						   else{
									$("#dimensionreview-message").text("Update Successful");
							   }
					   }
			   }
			   if ($('#doorwidthvalidreview').val() === 0) {
			   }
		       else{
					if( doorwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Door Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#doorwidthreview').val() < 550)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 550mm for Door Width ");
							e.preventDefault();
						   }
					   else if ($('#doorwidthreview').val() > 660)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 660mm for Door Width");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
					 }
			   }
			   if ($('#screenheightvalidreview').val() === 0) {
			   }
		       else{
					  if( screenheightreview === "")
						{ 
						  //display error message
						  $("#dimensionreview-message").text("Please Enter Screen Height");
						  e.preventDefault();			 
						 }
					  else{
						   if ($('#screenheightreview').val() < 1800)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
								e.preventDefault();
							   }
						   else if ($('#screenheightreview').val() > 2100)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
								e.preventDefault();
								}
								else{
									$("#dimensionreview-message").text("Update Successful");
								}
					   }
			   }
			   if ($('#screenwidthvalidreview').val() === 0) {
			   }
		       else{
					if( screenwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenwidthreview').val() < 700)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 700mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidthreview').val() > 1780)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 1780mm for Screen Width");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
					 }
			  }
			  if (hingepanelminus < 170){
				$("#dimension-message").text("The Hinge Panel needs to be a minimum of 170mm in width. Please adjust your door or screen width.");
					e.preventDefault();
			  }
			  else{
				$( "#dimension-message" ).text("Update Successful");
			  }
		 	}
		    /*** Fixed Panel Shower  ***/
	  		if($(".product-id").val() == 4241){
			var screenheightreview = $.trim($('#screenheightreview').val());
			var screenwidthreview   = $.trim($('#screenwidthreview').val());
			
				if ($('#screenheightvalidreview').val() === 0) {
				}
				else{
					  if( screenheightreview === "")
						{ 
						  //display error message
						  $("#dimensionreview-message").text("Please Enter Screen Height");
						  e.preventDefault();			 
						 }
					  else{
						   if ($('#screenheightreview').val() < 1800)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value greater than or equal to 1800mm for Screen Height");
								e.preventDefault();
							   }
						   else if ($('#screenheightreview').val() > 2100)
							   {
								//display error message
								$("#dimensionreview-message").text("Please enter a value less than or equal to 2100mm for Screen Height");
								e.preventDefault();
								}
								else{
								$("#dimensionreview-message").text("Update Successful");
								}
					   }
				}
				if ($('#screenwidthvalidreview').val() === 0) {
				}
				else{
					if( screenwidthreview === "")
					{ 
					  //display error message
					  $("#dimensionreview-message").text("Please Enter Screen Width");
					  e.preventDefault();			 
					 }
					else{
					   if ($('#screenwidthreview').val() < 300)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value greater than or equal to 300mm for Screen Width");
							e.preventDefault();
						   }
					   else if ($('#screenwidthreview').val() > 1120)
						   {
							//display error message
							$("#dimensionreview-message").text("Please enter a value less than or equal to 1120mm for Screen Width");
							e.preventDefault();
							}
							else{
								$("#dimensionreview-message").text("Update Successful");
							}
					 }
				}
			}
});
/** hardware finish selection validation **/
$(".ft-finish").click(function(){
		if($('input[name="fitting"]').is(":checked")) {
		  //alert("Please select the Product Design");
		}
		else{
			$("#hardwarefinish-message").text("Please click on your Hardware Selection");
			e.preventDefault();
		}
});
/** handle type selection validation **/
$(".ft-type").click(function(){
		if($('input[name="prefitting"]').is(":checked")) {
		  //alert("Please select the Product Design");
		}
		else{
			$("#handletype-message").text("Please click on your Handle Selection");
			e.preventDefault();
		}
});
/** glass type selection validation **/
$(".glass-type").click(function(){
		if($('input[name="glass"]').is(":checked")) {
		  //alert("Please select the Product Design");
		}
		else{
			$("#glasstype-message").text("Please click on your Glass Selection");
			e.preventDefault();
		}
});
/** glass treatment selection validation **/
$(".glass-treatment").click(function(){
		if($('input[name="preglass"]').is(":checked")) {
		  //alert("Please select the Product Design");
		}
		else{
			$("#glasstreatment-message").text("Please click on your Glass Treatment Selection");
			e.preventDefault();
		}
});

$(".advanced-optionsinput").click(function(e){
			if($(".product-id").val() == 4248){
				var returnpanelwidth  = parseInt($('#returnpanel_width').val());
				var bathendwidthval  = $('#advancedoptions_bathendwidth').val();
				var bathendwidth_cal = parseInt(returnpanelwidth - bathendwidthval);
				var bathendwidth  = $('#advancedoptions_bathendwidth').val();
				
				if( bathendwidth === ""){ 
					 //display error message
					$("#dimensiondigitsreview-message").text("Please enter Bathend Width");
					//alert("Digits Only")
					e.preventDefault();
				}
				else if(bathendwidth_cal < 100){
					 $("#dimensiondigitsreview-message").text("Please enter a value greater than or equal to 100mm for Bathend Width");
					 //alert("greater than 300");
					 e.preventDefault();
				}
				else if(bathendwidth_cal > 700){
					 $("#dimensiondigitsreview-message").text("Please enter a value less than or equal to 700mm for Bathend Width");
					//alert("less than 700");
					e.preventDefault();
				}
				else{}
			}
			else{}
});

/** Advanced Options All Input Fields Validation **/
$(".advanced-options").click(function(e){
				var inputsm1   = $.trim($('.input-sm1').val());
				var inputsm2   = $.trim($('.input-sm2').val());
				var inputsm3   = $.trim($('.input-sm3').val());
				var inputsm4   = $.trim($('.input-sm4').val());
				var inputsm5   = $.trim($('.input-sm5').val());
				var inputsm6   = $.trim($('.input-sm6').val());
				var inputsm7   = $.trim($('.input-sm7').val());
				var inputsm8   = $.trim($('.input-sm8').val());
				
				if($(".product-id").val() == 4248){
					var bathendheight  = $('#advancedoptions_bathendheight').val();
					if( bathendheight === ""){
						 //display error message
						$("#dimensiondigitsreview-message").text("Please enter Bathend Height");
						//alert("Digits Only")
						e.preventDefault();
					}
					else if(bathendheight < 300){
						 $("#dimensiondigitsreview-message").text("Please enter a value greater than or equal to 300mm for Bathend Height");
						 //alert("greater than 300");
						 e.preventDefault();
					}
					else if(bathendheight > 700){
						 $("#dimensiondigitsreview-message").text("Please enter a value less than or equal to 700mm for Bathend Height");
						//alert("less than 700");
						e.preventDefault();
					}
					else{}
				}
				else{}
				
	 
				if(inputsm1 > 31) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section "); 
					 //$('.input-sm1').val(30);
					 e.preventDefault(); 
				}
				else if(inputsm1 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section "); 
					 //$('.input-sm1').val(30);
					 e.preventDefault(); 
				}
				if(inputsm2 > 31) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section ");
					 //$('.input-sm2').val(30);
					 e.preventDefault(); 
				}
				else if(inputsm2 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section ");
					 //$('.input-sm2').val(30);
					 e.preventDefault(); 
				}
				if(inputsm3 > 31) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section "); 
					 //$('.input-sm3').val(30);
					 e.preventDefault(); 
				}
				else if(inputsm3 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section ");
					 //$('.input-sm3').val(30);
					 e.preventDefault(); 
				}
				if(inputsm4 > 31) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section ");
					 //$('.input-sm4').val(30);
					 e.preventDefault(); 
				}
				else if(inputsm4 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-30 in advanced option section "); 
					 //$('.input-sm4').val(30);
					 e.preventDefault();
				}
				if(inputsm5 > 8) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section "); 
					 $('.input-sm5').val(8);
					 e.preventDefault(); 
				}
				else if(inputsm5 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section ");
					 $('.input-sm5').val(8);
					 e.preventDefault(); 
				}
				if(inputsm6 > 8) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section "); 
					 $('.input-sm6').val(8);
					 e.preventDefault(); 
				}
				else if(inputsm6 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section "); 
					 $('.input-sm6').val(8);
					 e.preventDefault(); 
				}
				if(inputsm7 > 8) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section "); 
					 $('.input-sm7').val(8);
					 e.preventDefault(); 
				}
				else if(inputsm7 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section "); 
					 $('.input-sm7').val(8);
					 e.preventDefault(); 
				}
				if(inputsm8 > 8) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section ");
					 $('.input-sm8').val(8);
					 e.preventDefault(); 
				}
				else if(inputsm8 < 0) {
					 $("#advancedoptions-floor-message").text("Please Enter Value between 0-8 in advanced option section ");
					 $('.input-sm8').val(8);
					 e.preventDefault(); 
				}
				else{
					//alert("Please select the Product Design");
					//e.preventDefault();
				}
		}); 
				
/** next button script **/
$(".next").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
});
/** previous button script **/
$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

	
// activate if window is wider than...
var stickyWindowWidth = 974;
            var offset = $(".sidebar").offset();
            var topPadding = 15;
            $(window).scroll(function() {
			 if ($(window).width() > stickyWindowWidth) {
                if ($(window).scrollTop() > offset.top) {
                    $(".sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $(".sidebar").stop().animate({
                        marginTop: 0
                    });
                };
			   };
            });


});
