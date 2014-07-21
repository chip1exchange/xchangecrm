<?php
$dashletData['parts_PartsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Fadi Administrator',
  ),
);
$dashletData['parts_PartsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'part_number_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PART_NUMBER',
    'width' => '10%',
  ),
  'manufacturer_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MANUFACTURER',
    'width' => '10%',
  ),
  'packaging_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PACKAGING',
    'width' => '10%',
  ),
  'price_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_code_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DATE_CODE',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'currency_id' => 
  array (
    'type' => 'currency_id',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'package_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PACKAGE',
    'width' => '10%',
  ),
  'cost_save_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_COST_SAVE',
    'width' => '10%',
  ),
  'rohs_7_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_7',
    'width' => '10%',
  ),
  'rohs_5_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_5',
    'width' => '10%',
  ),
  'rohs_3_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_3',
    'width' => '10%',
  ),
  'rohs_1_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ROHS_1',
    'width' => '10%',
  ),
  'pb_free_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PB_FREE',
    'width' => '10%',
  ),
  'shortage_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SHORTAGE',
    'width' => '10%',
  ),
  'obsolete_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_OBSOLETE',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'hazardous_code_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_HAZARDOUS_CODE',
    'width' => '10%',
  ),
  'contact_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'product_category_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_CATEGORY',
    'width' => '10%',
  ),
  'product_type_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_TYPE',
    'width' => '10%',
  ),
  'cost_c' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_COST',
    'currency_format' => true,
    'width' => '10%',
  ),
);
