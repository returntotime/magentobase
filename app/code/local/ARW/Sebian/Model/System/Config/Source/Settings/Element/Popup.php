<?php
class ARW_Sebian_Model_System_Config_Source_Settings_Element_Popup
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'hide', 'label' => Mage::helper('adminhtml')->__('Hide')),
            array('value' => 'home', 'label' => Mage::helper('adminhtml')->__('Only show in homepage')),
            array('value' => 'all', 'label' => Mage::helper('adminhtml')->__('Show in all page'))
        );
    }
}