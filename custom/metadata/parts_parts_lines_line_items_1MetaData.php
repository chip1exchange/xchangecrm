<?php
// created: 2014-04-21 09:52:20
$dictionary["parts_parts_lines_line_items_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'parts_parts_lines_line_items_1' => 
    array (
      'lhs_module' => 'parts_Parts',
      'lhs_table' => 'parts_parts',
      'lhs_key' => 'id',
      'rhs_module' => 'lines_Line_Items',
      'rhs_table' => 'lines_line_items',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'parts_parts_lines_line_items_1_c',
      'join_key_lhs' => 'parts_parts_lines_line_items_1parts_parts_ida',
      'join_key_rhs' => 'parts_parts_lines_line_items_1lines_line_items_idb',
    ),
  ),
  'table' => 'parts_parts_lines_line_items_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'parts_parts_lines_line_items_1parts_parts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'parts_parts_lines_line_items_1lines_line_items_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'parts_parts_lines_line_items_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'parts_parts_lines_line_items_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parts_parts_lines_line_items_1parts_parts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'parts_parts_lines_line_items_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'parts_parts_lines_line_items_1lines_line_items_idb',
      ),
    ),
  ),
);