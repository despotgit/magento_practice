<?php

class Thinkopen_WidgetProductBanner_Block_Homebanner extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface 
{
    protected function _toHtml() 
    {
        $html = '';
        $selectedProductId = $this->getData('homebanner_options');
        
        if (empty($selectedProductId)) {
            return $html;
        }

        $productId = (int) $selectedProductId;
        
        $productModel = Mage::getModel('catalog/product')->load($productId);
        $rulePrice = Mage::getModel('catalogrule/rule')->calcProductPriceRule($productModel,$productModel->getPrice());
        $productDataArray = $productModel->getData();
        $productDataArray['price_promotion']= $rulePrice;
        return Mage::getSingleton('core/layout')->createBlock('core/template')->setTemplate('thinkopen/widgetproductbanner.phtml')->setData('model', $productDataArray)->toHtml();
    }

}

