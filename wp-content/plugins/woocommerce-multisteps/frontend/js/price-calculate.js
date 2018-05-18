$(function() {	
var doorw, sd, sh, sw, anglepanel, anglehinge, price_per, wh, seal, dome, pkg, adc, comp;
		/*** Calculation for price ***/
		$(".shower-size,.update-advancedoptions").on("click", function(){
			 doorw = parseInt($('#door-width-sq-metre').val());
			 sd = parseInt($("#screen-depth-sq-metre").val());
			 sh = parseInt($("#screen-height-sq-metre").val());
			 sw = parseInt($("#screen-width-sq-metre").val());
			 anglepanel = parseInt($("#panel-sq-metre").val());
			 anglehinge = parseInt($("#hinge-panel-sq-metre").val());
			 price_per = $("#screenprice").val();
			 wh = parseInt($("#screenholes").val());
			 seal = parseInt($("#screenseals").val());
			 dome = parseInt($("#screendome").val());
			 pkg = parseInt($("#screenpackage").val()); 
			 adc = parseInt($("#screencost").val());
			 comp = parseInt($("#screenprofit").val());
			
/* 			alert("door width"+doorw);
			alert("screen depth"+sd);
			alert("screen height"+sh);
			alert("screen width"+sw);
			alert("anglepanel"+anglepanel);
			alert("anglehinge"+anglehinge);
			alert(price_per);
			alert(wh);
			alert(seal);
			alert(dome);
			alert(pkg);
			alert(adc);
			alert(comp); */
			
			if ($(".product-id").val() == 4255) {
				var returnp = 0;
				var angle_panel = 0;
				/** Total linear metre price **/
				var hingep = parseInt(sw - doorw - 20);
				//var returnp = parseInt(sd - 4);
				var doorpanel = parseFloat(doorw + sh);
				var hingepanel = parseFloat(hingep + sh);
				var returnpanel = parseFloat(returnp + sh);
				var doorpanelmulti = parseFloat(doorpanel * 2);
				var hingepanelmulti = parseFloat(hingepanel * 2);
				var returnpanelmulti = parseFloat(returnpanel * 2);
				var doorpaneldivide = doorpanelmulti/1000;
				var hingepaneldivide = hingepanelmulti/1000;
				var returnpaneldivide = returnpanelmulti/1000;
				var sum_linearmetre = parseFloat(doorpaneldivide + hingepaneldivide + returnpaneldivide);
				var total_linearmetre = parseFloat(sum_linearmetre * 5.51);
				/** Total square metere for angled corner shower **/
				//var angle_panel = parseFloat((anglepanel - 6)/1000 * (sh - 4)/1000);
				var angle_doorpanel= parseFloat((doorw - 4)/1000 * (sh - 13)/1000);
				var angle_hingepanel = parseFloat((anglehinge - 6)/1000 * (sh - 4)/1000);
				
				/** Total square metere for wall to wall shower **/
				var wall_returnpanel = parseFloat((sw - doorw - anglehinge - 14)/1000 * (sh - 4)/1000);
				var wall_doorpanel = parseFloat(doorw/1000 * (sh - 13)/1000);
				var wall_hingepanel = parseFloat(anglehinge/1000 * (sh - 4)/1000);
				
				/** Total square metere for fixed panel shower **/
				var fixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
				
				/** Total square metere for over bath shower fixed **/
				var overbathfixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			}
			else if ($(".product-id").val() == 4280) {
				var returnp = 0;
				var hingep = 0;
				var sd = 0;
				var sw = 0;
							/** Total linear metre price **/
				var hingep = parseInt(sw - doorw - 20);
				//var returnp = parseInt(sd - 4);
				var doorpanel = parseFloat(doorw + sh);
				var hingepanel = parseFloat(hingep + sh);
				var returnpanel = parseFloat(returnp + sh);
				var doorpanelmulti = parseFloat(doorpanel * 2);
				var hingepanelmulti = parseFloat(hingepanel * 2);
				var returnpanelmulti = parseFloat(returnpanel * 2);
				var doorpaneldivide = doorpanelmulti/1000;
				var hingepaneldivide = hingepanelmulti/1000;
				var returnpaneldivide = returnpanelmulti/1000;
				var sum_linearmetre = parseFloat(doorpaneldivide + hingepaneldivide + returnpaneldivide);
				var total_linearmetre = parseFloat(sum_linearmetre * 5.51);
				/** Total square metere for angled corner shower **/
				var angle_panel = parseFloat((anglepanel - 6)/1000 * (sh - 4)/1000);
				var angle_doorpanel= parseFloat((doorw - 4)/1000 * (sh - 13)/1000);
				var angle_hingepanel = parseFloat((anglehinge - 6)/1000 * (sh - 4)/1000);
				
				/** Total square metere for wall to wall shower **/
				var wall_returnpanel = parseFloat((sw - doorw - anglehinge - 14)/1000 * (sh - 4)/1000);
				var wall_doorpanel = parseFloat(doorw/1000 * (sh - 13)/1000);
				var wall_hingepanel = parseFloat(anglehinge/1000 * (sh - 4)/1000);
				
				/** Total square metere for fixed panel shower **/
				var fixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
				
				/** Total square metere for over bath shower fixed **/
				var overbathfixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
				
			}
			else if ($(".product-id").val() == 4271) {
				var sd = 0;
				var doorw = 0;
				var returnp = 0;
				var hingep = 0;
				var angle_panel = 0;
				var angle_hingepanel = 0;
				var wall_returnpanel = 0;
				var wall_hingepanel = 0;
				var angle_doorpanel= 0;
				var wall_doorpanel = 0;
							/** Total linear metre price **/
			var hingep = parseInt(sw - doorw - 20);
			//var returnp = parseInt(sd - 4);
			var doorpanel = parseFloat(doorw + sh);
			var hingepanel = parseFloat(hingep + sh);
			var returnpanel = parseFloat(returnp + sh);
			var doorpanelmulti = parseFloat(doorpanel * 2);
			var hingepanelmulti = parseFloat(hingepanel * 2);
			var returnpanelmulti = parseFloat(returnpanel * 2);
			var doorpaneldivide = doorpanelmulti/1000;
			var hingepaneldivide = hingepanelmulti/1000;
			var returnpaneldivide = returnpanelmulti/1000;
			var sum_linearmetre = parseFloat(doorpaneldivide + hingepaneldivide + returnpaneldivide);
			var total_linearmetre = parseFloat(sum_linearmetre * 5.51);
			/** Total square metere for angled corner shower **/
			//var angle_panel = parseFloat((anglepanel - 6)/1000 * (sh - 4)/1000);
			//var angle_doorpanel= parseFloat((doorw - 4)/1000 * (sh - 13)/1000);
			//var angle_hingepanel = parseFloat((anglehinge - 6)/1000 * (sh - 4)/1000);
			
			/** Total square metere for wall to wall shower **/
			//var wall_returnpanel = parseFloat((sw - doorw - anglehinge - 14)/1000 * (sh - 4)/1000);
			//var wall_doorpanel = parseFloat(doorw/1000 * (sh - 13)/1000);
			//var wall_hingepanel = parseFloat(anglehinge/1000 * (sh - 4)/1000);
			
			/** Total square metere for fixed panel shower **/
			var fixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			
			/** Total square metere for over bath shower fixed **/
			var overbathfixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
				
			
			}
			else if ($(".product-id").val() == 4262) {
				var sd = 0;
				var returnp = 0;
				var anglehinge = 0;
				var angle_panel = 0;
				var angle_hingepanel = 0;
				//var wall_returnpanel = 0;
				var wall_hingepanel = 0;
				//var angle_doorpanel= 0;
							/** Total linear metre price **/
			var hingep = parseInt(sw - doorw - 20);
			//var returnp = parseInt(sd - 4);
			var doorpanel = parseFloat(doorw + sh);
			var hingepanel = parseFloat(hingep + sh);
			var returnpanel = parseFloat(returnp + sh);
			var doorpanelmulti = parseFloat(doorpanel * 2);
			var hingepanelmulti = parseFloat(hingepanel * 2);
			var returnpanelmulti = parseFloat(returnpanel * 2);
			var doorpaneldivide = doorpanelmulti/1000;
			var hingepaneldivide = hingepanelmulti/1000;
			var returnpaneldivide = returnpanelmulti/1000;
			var sum_linearmetre = parseFloat(doorpaneldivide + hingepaneldivide + returnpaneldivide);
			var total_linearmetre = parseFloat(sum_linearmetre * 5.51);
			/** Total square metere for angled corner shower **/
			//var angle_panel = parseFloat((anglepanel - 6)/1000 * (sh - 4)/1000);
			var angle_doorpanel= parseFloat((doorw - 4)/1000 * (sh - 13)/1000);
			//var angle_hingepanel = parseFloat((anglehinge - 6)/1000 * (sh - 4)/1000);
			
			/** Total square metere for wall to wall shower **/
			var wall_returnpanel = parseFloat((sw - doorw - anglehinge - 14)/1000 * (sh - 4)/1000);
			var wall_doorpanel = parseFloat(doorw/1000 * (sh - 13)/1000);
			//var wall_hingepanel = parseFloat(anglehinge/1000 * (sh - 4)/1000);
			
			/** Total square metere for fixed panel shower **/
			var fixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			
			/** Total square metere for over bath shower fixed **/
			var overbathfixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			
			}
			else if ($(".product-id").val() == 4241) {
			var doorw = 0;	
			var sd = 0;
			var anglehinge = 0;
            var anglepanel = 0;			
			/** Total linear metre price **/
			var hingep = parseInt(sw - doorw - 20);
			var returnp = parseInt(sd - 4);
			var doorpanel = parseFloat(doorw + sh);
			var hingepanel = parseFloat(hingep + sh);
			var returnpanel = parseFloat(returnp + sh);
			var doorpanelmulti = parseFloat(doorpanel * 2);
			var hingepanelmulti = parseFloat(hingepanel * 2);
			var returnpanelmulti = parseFloat(returnpanel * 2);
			var doorpaneldivide = doorpanelmulti/1000;
			var hingepaneldivide = hingepanelmulti/1000;
			var returnpaneldivide = returnpanelmulti/1000;
			var sum_linearmetre = parseFloat(doorpaneldivide + hingepaneldivide + returnpaneldivide);
			var total_linearmetre = parseFloat(sum_linearmetre * 5.51);
			/** Total square metere for angled corner shower **/
			var angle_panel = parseFloat((anglepanel - 6)/1000 * (sh - 4)/1000);
			var angle_doorpanel= parseFloat((doorw - 4)/1000 * (sh - 13)/1000);
			var angle_hingepanel = parseFloat((anglehinge - 6)/1000 * (sh - 4)/1000);
			
			/** Total square metere for wall to wall shower **/
			var wall_returnpanel = parseFloat((sw - doorw - anglehinge - 14)/1000 * (sh - 4)/1000);
			var wall_doorpanel = parseFloat(doorw/1000 * (sh - 13)/1000);
			var wall_hingepanel = parseFloat(anglehinge/1000 * (sh - 4)/1000);
			
			/** Total square metere for fixed panel shower **/
			var fixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			
			/** Total square metere for over bath shower fixed **/
			var overbathfixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			
			}
            else	
			{				
			/** Total linear metre price **/
			var hingep = parseInt(sw - doorw - 20);
			var returnp = parseInt(sd - 4);
			var doorpanel = parseFloat(doorw + sh);
			var hingepanel = parseFloat(hingep + sh);
			var returnpanel = parseFloat(returnp + sh);
			var doorpanelmulti = parseFloat(doorpanel * 2);
			var hingepanelmulti = parseFloat(hingepanel * 2);
			var returnpanelmulti = parseFloat(returnpanel * 2);
			var doorpaneldivide = doorpanelmulti/1000;
			var hingepaneldivide = hingepanelmulti/1000;
			var returnpaneldivide = returnpanelmulti/1000;
			var sum_linearmetre = parseFloat(doorpaneldivide + hingepaneldivide + returnpaneldivide);
			var total_linearmetre = parseFloat(sum_linearmetre * 5.51);
			/** Total square metere for angled corner shower **/
			var angle_panel = parseFloat((anglepanel - 6)/1000 * (sh - 4)/1000);
			var angle_doorpanel= parseFloat((doorw - 4)/1000 * (sh - 13)/1000);
			var angle_hingepanel = parseFloat((anglehinge - 6)/1000 * (sh - 4)/1000);
			
			/** Total square metere for wall to wall shower **/
			var wall_returnpanel = parseFloat((sw - doorw - anglehinge - 14)/1000 * (sh - 4)/1000);
			var wall_doorpanel = parseFloat(doorw/1000 * (sh - 13)/1000);
			var wall_hingepanel = parseFloat(anglehinge/1000 * (sh - 4)/1000);
			
			/** Total square metere for fixed panel shower **/
			var fixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			
			/** Total square metere for over bath shower fixed **/
			var overbathfixed_panel = parseFloat((sh - 4)/1000 * (sw - 4)/1000);
			}
			/** Total square metre for Other products **/
			var screen_depth = sd/1000;
			var screen_height = sh/1000;
			var screen_width = sw/1000;
			var mul1 = parseFloat(screen_depth*screen_height);
			var mul2 = parseFloat(screen_width*screen_height);
			
			if ($(".product-id").val() == 4280) {
				var cal = parseFloat(angle_panel + angle_doorpanel + angle_hingepanel);
				var base_mul = parseFloat(cal*price_per);
				var screen_sum = parseFloat(wh+seal+dome+pkg+adc+comp);
				var total_sum = parseInt(screen_sum+base_mul);
				var final_total = parseInt(total_sum+total_linearmetre); 
 
				if(final_total){
					$('.box-price').html('<b>$' + (final_total) + '</b>');
					$('#runingtotal').val('' + (final_total) + '');
					$('#totalprice_metre').val('' + (cal) + '');
				}
			}
			else if ($(".product-id").val() == 4255) {
				var cal = parseFloat(wall_returnpanel + wall_doorpanel + wall_hingepanel); 
				var base_mul = parseFloat(cal*price_per);
				var screen_sum = parseFloat(wh+seal+dome+pkg+adc+comp);
				var total_sum = parseInt(screen_sum+base_mul);
				var final_total = parseInt(total_sum+total_linearmetre)
				if(final_total){
					$('.box-price').html('<b>$' + (final_total) + '</b>');
					$('#runingtotal').val('' + (final_total) + '');
					$('#totalprice_metre').val('' + (cal) + '');
				}
			}
			else if ($(".product-id").val() == 4241) {
				var cal = parseFloat(fixed_panel); 
				var base_mul = parseFloat(cal*price_per);
				var screen_sum = parseFloat(wh+seal+dome+pkg+adc+comp);
				var total_sum = parseInt(screen_sum+base_mul);
				var final_total = parseInt(total_sum+total_linearmetre)
				if(final_total){
					$('.box-price').html('<b>$' + (final_total) + '</b>');
					$('#runingtotal').val('' + (final_total) + '');
					$('#totalprice_metre').val('' + (cal) + '');
				}
			}
			else if ($(".product-id").val() == 4271) {
				var cal = parseFloat(overbathfixed_panel); 
				var base_mul = parseFloat(cal*price_per);
				var screen_sum = parseFloat(wh+seal+dome+pkg+adc+comp);
				var total_sum = parseInt(screen_sum+base_mul);
				var final_total = parseInt(total_sum+total_linearmetre)
				if(final_total){
					$('.box-price').html('<b>$' + (final_total) + '</b>');
					$('#runingtotal').val('' + (final_total) + '');
					$('#totalprice_metre').val('' + (cal) + '');
				}
			}
			else{
				var cal =  parseFloat(mul1 + mul2);
				var base_mul = parseFloat(cal*price_per);
				var screen_sum = parseFloat(wh+seal+dome+pkg+adc+comp);
				var total_sum = parseInt(screen_sum+base_mul);
				var final_total = parseInt(total_sum+total_linearmetre)
				if(final_total){
					$('.box-price').html('<b>$' + (final_total) + '</b>');
					$('#runingtotal').val('' + (final_total) + '');
					$('#totalprice_metre').val('' + (cal) + '');
				}
			}        
		});
		
		
		/** Adding a hardware finish price into running toltal **/
		if(($('#handlehidden').val()) == 1){
			$(".ft-finish,.update-advancedoptions").on("click", function(){
				var hardwarefinish = parseInt($("input[name='fitting']:checked").data('value'));
				var runing_sum = parseInt($("#runingtotal").val());
				var cal =  hardwarefinish + runing_sum;
				if(cal){
					$('.box-price').html('<b>$' + (cal) + '</b>');
					$('#runingtotal').val('' + (cal) + '');
				}       
			});
		}
		else{
			$(".ft-finish,.update-advancedoptions").on("click", function(){
				var glasstype1 = parseFloat($("#glasstype-squaremetre1").data('value'));
				var glasstype2 = parseFloat($("#glasstype-squaremetre2").data('value'));
				var total_metre = parseFloat($("#totalprice_metre").val());
				var glass_multi1 = parseFloat(total_metre*glasstype1);
				var glass_multiint1 = parseInt(total_metre*glasstype1);
				var glass_multiint2 = parseInt(total_metre*glasstype2);
				var glass_multi2 = parseFloat(total_metre*glasstype2);
				var hardwarefinish = parseInt($("input[name='fitting']:checked").data('value'));
				var runing_sum = parseInt($("#runingtotal").val());
				var cal =  hardwarefinish + runing_sum;
				if(cal){
					$('.box-price').html('<b>$' + (cal) + '</b>');
					$('#runingtotal').val('' + (cal) + '');
				}
				if(glass_multi1){
					$('.gt-squaremetreprice1').html('<b>' + (glass_multiint1) + '</b>');
					$('#glassprice1').val('' + (glass_multi1) + '');
				}  
				if(glass_multi2){
					$('.gt-squaremetreprice2').html('<b>' + (glass_multiint2) + '</b>');
					$('#glassprice2').val('' + (glass_multi2) + '');
				}  
			});
		}
		
		/** Removing a hardware finish price into running toltal **/
		$(".ft-typeback").on("click", function(){
			var hardwarefinish = parseInt($("input[name='fitting']:checked").data('value'));
			var runing_sum = parseInt($("#runingtotal").val());
			var cal = runing_sum - hardwarefinish;
			if(cal){
				$('.box-price').html('<b>$' + (cal) + '</b>');
				$('#runingtotal').val('' + (cal) + '');
			}       
		});

		/** Adding a handle type price into running toltal **/
		if(($('#handlehidden').val()) == 1){
			$(".ft-type,.update-advancedoptions").on("click", function(){
				var hardwarefinish = parseInt($("input[name='prefitting']:checked").data('value'));
				var runing_sum = parseInt($("#runingtotal").val());
				var cal =  runing_sum + hardwarefinish;
				if(cal){
					$('.box-price').html('<b>$' + (cal) + '</b>');
					$('#runingtotal').val('' + (cal) + '');
				}       
			});
		}
		else{
			$(".ft-type,.update-advancedoptions").on("click", function(){
				var hardwarefinish = parseInt($("input[name='prefitting']:checked").data('value'));
				var runing_sum = parseInt($("#runingtotal").val());
				var cal =  runing_sum + hardwarefinish;
				if(cal){
					$('.box-price').html('<b>$' + (cal) + '</b>');
					$('#runingtotal').val('' + (cal) + '');
				}       
			});
		}
		
		/** Removing a handle type price into running toltal **/
		if(($('#handlehidden').val()) == 1){
			$(".glass-typeback").on("click", function(){
				var hardwarefinish = parseInt($("input[name='prefitting']:checked").data('value'));
				var runing_sum = parseInt($("#runingtotal").val());
				var cal = runing_sum - hardwarefinish;
				if(cal){
					$('.box-price').html('<b>$' + (cal) + '</b>');
					$('#runingtotal').val('' + (cal) + '');
				}         
			});
		}
		else{
			$(".glass-typeback").on("click", function(){
				var hardwarefinish = parseInt($("input[name='fitting']:checked").data('value'));
				var runing_sum = parseInt($("#runingtotal").val());
				var cal = runing_sum - hardwarefinish;
				if(cal){
					$('.box-price').html('<b>$' + (cal) + '</b>');
					$('#runingtotal').val('' + (cal) + '');
				}        
			});
		}

		/** Glass type Square metre price calculation add **/
		$(".gt-glassprice,.update-advancedoptions").on("click", function(){
			var glasstype1 = parseFloat($("#glasstype-squaremetre1").data('value'));
			var glasstype2 = parseFloat($("#glasstype-squaremetre2").data('value'));
			var total_metre = parseFloat($("#totalprice_metre").val());
			var glass_multi1 = parseFloat(total_metre*glasstype1);
			var glass_multiint1 = parseInt(total_metre*glasstype1);
			var glass_multiint2 = parseInt(total_metre*glasstype2);
			var glass_multi2 = parseFloat(total_metre*glasstype2);
			if(glass_multi1){
				$('.gt-squaremetreprice1').html('<b>' + (glass_multiint1) + '</b>');
				$('#glassprice1').val('' + (glass_multi1) + '');
			}  
			if(glass_multi2){
				$('.gt-squaremetreprice2').html('<b>' + (glass_multiint2) + '</b>');
				$('#glassprice2').val('' + (glass_multi2) + '');
			}  
		});
		/** Glass type Square metre price calculation remove **/
		$(".glass-typeback").on("click", function(){
			var glassmtprice = parseInt($("#glassprice1").val());
			var glassmtprice1 = parseInt($("#glassprice2").val());
			var glass_mtsqprice = glassmtprice - glassmtprice;
			var glass_mtsqprice1 = glassmtprice1 - glassmtprice1;
				$('#glassprice1').val('' + (glass_mtsqprice) + '');
				$('#glassprice2').val('' + (glass_mtsqprice1) + '');
		});
		/** Adding a Glass type price into running toltal **/
		$(".glass-type,.update-advancedoptions").on("click", function(){
			var glasstype = parseInt($("#glassprice1").val());
			var glasstype1 = parseInt($("#glassprice2").val());
			var runing_sum = parseInt($("#runingtotal").val());
			var glasstp = runing_sum + glasstype;
			var glasstp1 = runing_sum + glasstype1;
			if($('input[id="glasstype-squaremetre1"]').is(":checked")) {
				$('.box-price').html('<b>$' + (parseInt(glasstp)) + '</b>');
				$('#runingtotal').val('' + (glasstp) + '');
			} 
			else if($('input[id="glasstype-squaremetre2"]').is(":checked")){
				$('.box-price').html('<b>$' + (parseInt(glasstp1)) + '</b>');
				$('#runingtotal').val('' + (glasstp1) + '');
			} 
			
		});
		/** Removing a Glass type price into running toltal **/
		$(".glasstreat-back").on("click", function(){
			var glasstype = parseInt($("#glassprice1").val());
			var glasstype1 = parseInt($("#glassprice2").val());
			var runing_sum = parseInt($("#runingtotal").val());

			var glasstpr = runing_sum - glasstype;
			var glasstpr1 = runing_sum - glasstype1;
			
			if($('input[id="glasstype-squaremetre1"]').is(":checked")) {
				$('.box-price').html('<b>$' + (parseInt(glasstpr)) + '</b>');
				$('#runingtotal').val('' + (glasstpr) + '');
			} 
			else if($('input[id="glasstype-squaremetre2"]').is(":checked")){
				$('.box-price').html('<b>$' + (parseInt(glasstpr1)) + '</b>');
				$('#runingtotal').val('' + (glasstpr1) + '');
			} 	
		});
		
		/** Adding a glass treatment price into running toltal **/
		$(".glass-treatment,.update-advancedoptions").on("click", function(){
			var glasstreatment = parseFloat($("input[name='preglass']:checked").data('value'));
			var runing_sum = parseFloat($("#runingtotal").val());
			var cal =  runing_sum + glasstreatment;
			if(cal){
				$('.box-price').html('<b>$' + (cal) + '</b>');
				$('#runingtotal').val('' + (cal) + '');
			}      
		});
		/** Removing a glass treatment price into running toltal **/
		$(".glasstreatment-back").on("click", function(){
			var glasstreatment = parseFloat($("input[name='preglass']:checked").data('value'));
			var runing_sum = parseFloat($("#runingtotal").val());
			var cal = runing_sum - glasstreatment;
			if(cal){
				$('.box-price').html('<b>$' + (cal) + '</b>');
				$('#runingtotal').val('' + (cal) + '');
			}        
		});
});