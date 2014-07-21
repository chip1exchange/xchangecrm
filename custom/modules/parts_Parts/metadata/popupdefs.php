<?php
$popupMeta = array (
    'moduleMain' => 'parts_Parts',
    'varName' => 'parts_Parts',
    'orderBy' => 'parts_parts.name',
    'whereClauses' => array (
  'name' => 'parts_parts.name',
  'part_number_c' => 'parts_parts_cstm.part_number_c',
  'manufacturer_c' => 'parts_parts_cstm.manufacturer_c',
  'packaging_c' => 'parts_parts_cstm.packaging_c',
  'obsolete_c' => 'parts_parts_cstm.obsolete_c',
  'shortage_c' => 'parts_parts_cstm.shortage_c',
  'cost_save_c' => 'parts_parts_cstm.cost_save_c',
  'assigned_user_id' => 'parts_parts.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'part_number_c',
  5 => 'manufacturer_c',
  6 => 'packaging_c',
  7 => 'obsolete_c',
  8 => 'shortage_c',
  9 => 'cost_save_c',
  10 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'part_number_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PART_NUMBER',
    'width' => '10%',
    'name' => 'part_number_c',
  ),
  'manufacturer_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MANUFACTURER',
    'width' => '10%',
    'name' => 'manufacturer_c',
  ),
  'packaging_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PACKAGING',
    'width' => '10%',
    'name' => 'packaging_c',
  ),
  'obsolete_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_OBSOLETE',
    'width' => '10%',
    'name' => 'obsolete_c',
  ),
  'shortage_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SHORTAGE',
    'width' => '10%',
    'name' => 'shortage_c',
  ),
  'cost_save_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_COST_SAVE',
    'width' => '10%',
    'name' => 'cost_save_c',
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
    'width' => '10%',
  ),
),
);
