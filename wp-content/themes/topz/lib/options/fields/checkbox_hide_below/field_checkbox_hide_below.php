<?php
class Topz_Options_checkbox_hide_below extends Topz_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since Topz_Options 1.0.1
	*/
	function __construct($field = array(), $value ='', $parent){
		
		parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
		$this->field = $field;
		$this->value = $value;
		
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and outputs the HTML for the field in the settings
	 *
	 * @since Topz_Options 1.0.1
	*/
	function render(){
		
		$class = (isset($this->field['class'])) ? esc_attr( $this->field['class'] ):'';
		
		echo ($this->field['desc'] != '')?' <label>':'';
		
		echo '<input type="checkbox" id="'.esc_attr( $this->field['id'] ).'" name="'.$this->args['opt_name'].'['.$this->field['id'].']" value="1" class="'.$class.' topz-opts-checkbox-hide-below" '.checked($this->value, '1', false).' />';
		
		echo (isset($this->field['desc']) && !empty($this->field['desc']))?' '.esc_html( $this->field['desc'] ).'</label>':'';
		
	}//function
	
	
	/**
	 * Enqueue Function.
	 *
	 * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
	 *
	 * @since Topz_Options 1.0.1
	*/
	function enqueue(){
		
		wp_enqueue_script(
			'topz-opts-checkbox-hide-below-js', 
			TOPZ_OPTIONS_URL.'fields/checkbox_hide_below/field_checkbox_hide_below.js', 
			array('jquery'),
			time(),
			true
		);
		
	}//function
	
}//class
?>