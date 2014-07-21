<?php
$module_name = 'parts_Parts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'part_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PART_NUMBER',
        'width' => '10%',
        'name' => 'part_number_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'part_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PART_NUMBER',
        'width' => '10%',
        'name' => 'part_number_c',
      ),
      'hazardous_code_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_HAZARDOUS_CODE',
        'width' => '10%',
        'name' => 'hazardous_code_c',
      ),
      'manufacturer_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MANUFACTURER',
        'width' => '10%',
        'name' => 'manufacturer_c',
      ),
      'date_code_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DATE_CODE',
        'width' => '10%',
        'name' => 'date_code_c',
      ),
      'packaging_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PACKAGING',
        'width' => '10%',
        'name' => 'packaging_c',
      ),
      'package_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PACKAGE',
        'width' => '10%',
        'name' => 'package_c',
      ),
      'product_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT_TYPE',
        'width' => '10%',
        'name' => 'product_type_c',
      ),
      'product_category_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT_CATEGORY',
        'width' => '10%',
        'name' => 'product_category_c',
      ),
      'shortage_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SHORTAGE',
        'width' => '10%',
        'name' => 'shortage_c',
      ),
      'cost_save_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_COST_SAVE',
        'width' => '10%',
        'name' => 'cost_save_c',
      ),
      'obsolete_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_OBSOLETE',
        'width' => '10%',
        'name' => 'obsolete_c',
      ),
      'pb_free_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_PB_FREE',
        'width' => '10%',
        'name' => 'pb_free_c',
      ),
      'rohs_1_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ROHS_1',
        'width' => '10%',
        'name' => 'rohs_1_c',
      ),
      'rohs_3_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ROHS_3',
        'width' => '10%',
        'name' => 'rohs_3_c',
      ),
      'rohs_5_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ROHS_5',
        'width' => '10%',
        'name' => 'rohs_5_c',
      ),
      'rohs_7_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ROHS_7',
        'width' => '10%',
        'name' => 'rohs_7_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
