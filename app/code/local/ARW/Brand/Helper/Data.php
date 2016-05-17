<?php

/* * ****************************************************
 * Package   : Brand
 * Author    : ArexWorks
 * Copyright : (c) 2015
 * ***************************************************** */
?>
<?php

class ARW_Brand_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function loadjQuery()
    {
        return Mage::getStoreConfig('brand/widget/load_jquery');
    }

    public function loadSlider()
    {
        return Mage::getStoreConfig('brand/widget/load_slider');
    }

    public function addToTopmenu()
    {
        return Mage::getStoreConfig('brand/general/add_to_topmenu');
    }

    public function titleLink()
    {
        return Mage::getStoreConfig('brand/general/title_link');
    }

    public function urlKey()
    {
        return Mage::getStoreConfig('brand/page/url_key');
    }

    public function title()
    {
        return Mage::getStoreConfig('brand/page/title');
    }

    public function pageTemplateList()
    {
        return Mage::getStoreConfig('brand/page/template_list');
    }

    public function pageTemplateView()
    {
        return Mage::getStoreConfig('brand/page/template_view');
    }

    public function iconWidth()
    {
        return Mage::getStoreConfig('brand/page/icon_width');
    }

    public function iconHeight()
    {
        return Mage::getStoreConfig('brand/page/icon_height');
    }

    public function imageWidth()
    {
        return Mage::getStoreConfig('brand/page/image_width');
    }

    public function imageHeight()
    {
        return Mage::getStoreConfig('brand/page/image_height');
    }

    public function layeredNavigationView()
    {
        return Mage::getStoreConfig('brand/page/layered_navigation_view');
    }

    public function metaKeywords()
    {
        return Mage::getStoreConfig('brand/page/meta_keywords');
    }

    public function metaDescription()
    {
        return Mage::getStoreConfig('brand/page/meta_description');
    }

    public function description()
    {
        return Mage::getStoreConfig('brand/page/description');
    }

    public function showBreadcrumbs()
    {
        return Mage::getStoreConfig('brand/page/show_breadcrumbs');
    }

    public function getAttributeOptionValue($argAttribute, $argValue)
    {
        $attributeModel = Mage::getModel('eav/entity_attribute');
        $attributeOptionsModel = Mage::getModel('eav/entity_attribute_source_table');
        $attributeCode = $attributeModel->getIdByCode('catalog_product', $argAttribute);
        $attribute = $attributeModel->load($attributeCode);
        $attributeOptionsModel->setAttribute($attribute);
        $options = $attributeOptionsModel->getAllOptions(false);
        foreach ($options as $option) {
            if ($option['label'] == $argValue) {
                return $option['value'];
            }
        }
        return false;
    }

    public function addAttributeOption($argAttribute, $argValue)
    {
        $attributeModel = Mage::getModel('eav/entity_attribute');
        $attributeOptionsModel = Mage::getModel('eav/entity_attribute_source_table');
        $attributeCode = $attributeModel->getIdByCode('catalog_product', $argAttribute);
        $attribute = $attributeModel->load($attributeCode);
        $attributeOptionsModel->setAttribute($attribute)->getAllOptions(false);
        $value['option'] = array($argValue, $argValue);
        $result = array('value' => $value);
        $attribute->setData('option', $result);
        $attribute->save();
    }

}
