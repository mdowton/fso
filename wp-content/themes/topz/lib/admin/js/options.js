jQuery(document).ready(function(){
	
	
	if(jQuery('#last_tab').val() == ''){

		jQuery('.topz-opts-group-tab:first').slideDown('fast');
		jQuery('#topz-opts-group-menu li:first').addClass('active');
	
	}else{
		
		tabid = jQuery('#last_tab').val();
		jQuery('#'+tabid+'_section_group').slideDown('fast');
		jQuery('#'+tabid+'_section_group_li').addClass('active');
		
	}
	
	
	jQuery('input[name="'+topz_opts.opt_name+'[defaults]"]').click(function(){
		if(!confirm(topz_opts.reset_confirm)){
			return false;
		}
	});
	
	jQuery('.topz-opts-group-tab-link-a').click(function(){
		relid = jQuery(this).attr('data-rel');
		
		jQuery('#last_tab').val(relid);
		
		jQuery('.topz-opts-group-tab').each(function(){
			if(jQuery(this).attr('id') == relid+'_section_group'){
				jQuery(this).show();
			}else{
				jQuery(this).hide();
			}
			
		});
		
		jQuery('.topz-opts-group-tab-link-li').each(function(){
				if(jQuery(this).attr('id') != relid+'_section_group_li' && jQuery(this).hasClass('active')){
					jQuery(this).removeClass('active');
				}
				if(jQuery(this).attr('id') == relid+'_section_group_li'){
					jQuery(this).addClass('active');
				}
		});
	});
	
	
	
	
	if(jQuery('#topz-opts-save').is(':visible')){
		jQuery('#topz-opts-save').delay(4000).slideUp('slow');
	}
	
	if(jQuery('#topz-opts-imported').is(':visible')){
		jQuery('#topz-opts-imported').delay(4000).slideUp('slow');
	}	
	
	jQuery('input, textarea, select').change(function(){
		jQuery('#topz-opts-save-warn').slideDown('slow');
	});
	
	
	jQuery('#topz-opts-import-code-button').click(function(){
		if(jQuery('#topz-opts-import-link-wrapper').is(':visible')){
			jQuery('#topz-opts-import-link-wrapper').fadeOut('fast');
			jQuery('#import-link-value').val('');
		}
		jQuery('#topz-opts-import-code-wrapper').fadeIn('slow');
	});
	
	jQuery('#topz-opts-import-link-button').click(function(){
		if(jQuery('#topz-opts-import-code-wrapper').is(':visible')){
			jQuery('#topz-opts-import-code-wrapper').fadeOut('fast');
			jQuery('#import-code-value').val('');
		}
		jQuery('#topz-opts-import-link-wrapper').fadeIn('slow');
	});
	
	
	
	
	jQuery('#topz-opts-export-code-copy').click(function(){
		if(jQuery('#topz-opts-export-link-value').is(':visible')){jQuery('#topz-opts-export-link-value').fadeOut('slow');}
		jQuery('#topz-opts-export-code').toggle('fade');
	});
	
	jQuery('#topz-opts-export-link').click(function(){
		if(jQuery('#topz-opts-export-code').is(':visible')){jQuery('#topz-opts-export-code').fadeOut('slow');}
		jQuery('#topz-opts-export-link-value').toggle('fade');
	});
	
	

	
	
	
});