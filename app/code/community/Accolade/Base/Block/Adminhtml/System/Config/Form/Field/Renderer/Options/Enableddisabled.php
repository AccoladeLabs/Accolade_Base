<?php

/**
 * @method array getColumn()
 * @method string getInputName()
 * @method string getColumnName()
 */
class Accolade_Base_Block_Adminhtml_System_Config_Form_Field_Renderer_Options_Enableddisabled
	extends Accolade_Base_Block_Adminhtml_System_Config_Form_Field_Renderer_Options {

	protected $_options;

	public function _construct(){
		parent::_construct();
		$this->_options = array(
			array(
				'value' => 0,
				'label' => $this->__('Disabled')
			),
			array(
				'value' => 1,
				'label' => $this->__('Enabled')
			)
		);
	}

}