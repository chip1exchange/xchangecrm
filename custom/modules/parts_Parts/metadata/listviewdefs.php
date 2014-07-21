<?php
$module_name = 'parts_Parts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PART_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PART_NUMBER',
    'width' => '10%',
  ),
  'MANUFACTURER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MANUFACTURER',
    'width' => '10%',
  ),
  'PACKAGING_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PACKAGING',
    'width' => '10%',
  ),
  'DATE_CODE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DATE_CODE',
    'width' => '10%',
  ),
  'PRICE_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'COST_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_COST',
    'currency_format' => true,
    'width' => '10%',
  ),
  'ROHS_3_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_3',
    'width' => '10%',
  ),
  'ROHS_7_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_7',
    'width' => '10%',
  ),
  'ROHS_5_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_5',
    'width' => '10%',
  ),
  'ROHS_1_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_1',
    'width' => '10%',
  ),
  'PB_FREE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PB_FREE',
    'width' => '10%',
  ),
  'COST_SAVE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_COST_SAVE',
    'width' => '10%',
  ),
  'OBSOLETE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_OBSOLETE',
    'width' => '10%',
  ),
  'SHORTAGE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SHORTAGE',
    'width' => '10%',
  ),
  'HAZARDOUS_CODE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_HAZARDOUS_CODE',
    'width' => '10%',
  ),
  'PRODUCT_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_TYPE',
    'width' => '10%',
  ),
  'CONTACT_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PACKAGE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PACKAGE',
    'width' => '10%',
  ),
  'PRODUCT_CATEGORY_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_CATEGORY',
    'width' => '10%',
  ),
  'URL_C' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_URL',
    'width' => '10%',
  ),
);
?>
