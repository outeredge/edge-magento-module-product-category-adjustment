<?php
class Outeredge_EdgeMagentoModuleProductCategoryAdjustment_Model_Catalog_Resource_Product::_saveCategories extends Mage_Catalog_Model_Resource_Product::_saveCategories
{
$data[] = array(
    'category_id' => (int)$categoryId,
    'product_id'  => (int)$object->getId(),
    'position'    => 0
);
}