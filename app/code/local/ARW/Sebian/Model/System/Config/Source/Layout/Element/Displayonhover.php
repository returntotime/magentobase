<?php
?>
<?php
class ARW_Sebian_Model_System_Config_Source_Layout_Element_Displayonhover
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'0', 'label'=>Mage::helper('adminhtml')->__('Don\'t Display')),
            array('value'=>'1', 'label'=>Mage::helper('adminhtml')->__('Display On Hover')),
            array('value'=>'2', 'label'=>Mage::helper('adminhtml')->__('Display'))
        );
    }

}