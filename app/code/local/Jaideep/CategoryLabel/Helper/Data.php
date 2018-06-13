<?php
class Jaideep_CategoryLabel_Helper_Data extends Mage_Core_Helper_Abstract
{
	public $categoryModel;
	public function __construct(){
		$this->categoryModel = Mage::getModel('catalog/category');
	}
	public function getInfo(){
		return "Developer: Jaideep";
	}

	public function getLabel($categories=array()){
		// Mage::log("In Process");
        $customAttributes	=   array();
        $customAttributeSet	=   array();
        try {
			foreach($categories as $key => $categoryId){
				$productCategory = $this->categoryModel->load($categoryId);
				$customAttributes[$categoryId]["priority"] = $productCategory->getCustomCategoryLabelPriority();
				$customAttributes[$categoryId]["label"] = $productCategory->getCustomCategoryLabel();
				$customAttributeSet[$productCategory->getCustomCategoryLabelPriority()] = $productCategory->getCustomCategoryLabel();
			}
			$labelPriorities = array_column($customAttributes, 'priority');
			rsort($labelPriorities);
			return $customAttributeSet[$labelPriorities[0]];
        } catch (Exception $e) {
        	return "";        	
        }
	}
}
?>