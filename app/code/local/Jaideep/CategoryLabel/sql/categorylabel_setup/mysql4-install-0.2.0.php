<?php
///*
$this->startSetup();
$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'custom_category_label', array(
    'group'         => 'Custom Information',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Custom Category Label',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL
));

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'custom_category_label_color', array(
    'group'         => 'Custom Information',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Label Background Color',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL
));

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'custom_category_label_priority', array(
    // 'group'         => 'General Information',
    'group'         => 'Custom Information',
    'input'         => 'select',
    'type'          => 'text',
    'label'         => 'Priority of Custom Category Label',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,

    'option'        => array (
                              'value' => array(
                              	'optionone' => array(0=>'1'),
                              	'optiontwo' => array(0=>'2'),
                              	'optionthree' => array(0=>'3'),
                              	'optionfour' => array(0=>'4'),
                              	'optionfive' => array(0=>'5')
                              )
                       )
)); 
$this->endSetup();

//*/
/*
To Drop the Custom Tables, Execute the following after clearing cache.
*/
/*
$installer = $this;
$installer->removeAttribute('catalog_category', 'custom_category_label');
$installer->removeAttribute('catalog_category', 'custom_category_label_priority');
$installer->removeAttribute('catalog_category', 'bottom_description');
$installer->removeAttribute('catalog_category', 'custom_label');
$installer->removeAttribute('catalog_category', 'custom_category_label_color');
$installer->endSetup();
*/
?>
