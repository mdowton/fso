<?php
class Topz_Validation_no_html extends Topz_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since Topz_Options 1.0
	*/
	function __construct($field, $value, $current){
		
		parent::__construct();
		$this->field = $field;
		$this->field['msg'] = (isset($this->field['msg']))?$this->field['msg']:esc_html__('You must not enter any HTML in this field, all HTML tags have been removed.', 'topz');
		$this->value = $value;
		$this->current = $current;
		$this->validate();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and validates them
	 *
	 * @since Topz_Options 1.0
	*/
	function validate(){
		
		$newvalue = strip_tags($this->value);
		
		if($this->value != $newvalue){
			$this->warning = $this->field;
		}
		
		$this->value = $newvalue;
				
	}//function
	
}//class
?>