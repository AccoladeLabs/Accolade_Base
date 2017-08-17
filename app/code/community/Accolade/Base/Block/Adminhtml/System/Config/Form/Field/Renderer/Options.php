<?php

/**
 * @method array getColumn()
 * @method string getInputName()
 * @method string getColumnName()
 */
class Accolade_Base_Block_Adminhtml_System_Config_Form_Field_Renderer_Options extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {

	protected $_options;

	public function _construct(){
		parent::_construct();
	}

	public function setOptions(array $options){
		$this->_options = $options;
		return $this;
	}

	public function _toHtml(){
		$column     = $this->getColumn();
		$html       = sprintf('<select name="%s" data-selected="#{%s}" class="magefi %s" style="%s">',
			$this->getInputName(),
			$this->getColumnName(),
			isset($column['class'])? $column['class'] : 'input-text',
			isset($column['style'])? $column['style'] : ''
		);

		foreach($this->_options as $option){
			if(is_array($option['value'])){
				$html .= sprintf('<optgroup label="%s">', $option['label']);
				foreach($option['value'] as $optoption){
					$html .= sprintf('<option value="%s">%s</option>', $optoption['value'], $optoption['label']);
				}
				$html .= sprintf('</optgroup>');
			} else $html .= sprintf('<option value="%s">%s</option>', $option['value'], $option['label']);
		}
		$html .= '</select>';
		return $html;
	}

}
