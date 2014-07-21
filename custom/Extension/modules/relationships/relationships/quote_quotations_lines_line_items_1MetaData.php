<?php
// created: 2014-06-05 12:19:23
$dictionary["quote_quotations_lines_line_items_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'quote_quotations_lines_line_items_1' => 
    array (
      'lhs_module' => 'quote_Quotations',
      'lhs_table' => 'quote_quotations',
      'lhs_key' => 'id',
      'rhs_module' => 'lines_Line_Items',
      'rhs_table' => 'lines_line_items',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'quote_quotations_lines_line_items_1_c',
      'join_key_lhs' => 'quote_quotations_lines_line_items_1quote_quotations_ida',
      'join_key_rhs' => 'quote_quotations_lines_line_items_1lines_line_items_idb',
    ),
  ),
  'table' => 'quote_quotations_lines_line_items_1_c',
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
      'name' => 'quote_quotations_lines_line_items_1quote_quotations_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'quote_quotations_lines_line_items_1lines_line_items_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'quote_quotations_lines_line_items_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'quote_quotations_lines_line_items_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'quote_quotations_lines_line_items_1quote_quotations_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'quote_quotations_lines_line_items_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'quote_quotations_lines_line_items_1lines_line_items_idb',
      ),
    ),
  ),
);