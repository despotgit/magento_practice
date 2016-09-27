<?php

class Thinkopen_WidgetProductBanner_Model_Options extends Mage_Core_Model_Abstract
{
    public function toOptionArray()
    {
        $productModel = Mage::getModel('catalog/product');
        $productCollection = $productModel->getCollection();
        
        $dataArray = array();
        foreach ($productCollection as $productData) {
            
            $productModel->load($productData->getId());
            $dataArray[] = array('value' => $productModel->getId(), 'label' => $productModel->getName());
        }
        
        return $dataArray;
    }
}

