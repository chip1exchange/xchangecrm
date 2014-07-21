<?php
$module_name = 'lines_Line_Items';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'parts_parts_lines_line_items_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PARTS_PARTS_LINES_LINE_ITEMS_1_FROM_PARTS_PARTS_TITLE',
        'id' => 'PARTS_PARTS_LINES_LINE_ITEMS_1PARTS_PARTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'parts_parts_lines_line_items_1_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
      0 => 'name',
      1 => 
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
