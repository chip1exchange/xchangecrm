<?php
// created: 2014-07-17 05:11:31
$dictionary["c1_purchases_c1_lineitem"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'c1_purchases_c1_lineitem' => 
    array (
      'lhs_module' => 'c1_purchases',
      'lhs_table' => 'c1_purchases',
      'lhs_key' => 'id',
      'rhs_module' => 'c1_lineitem',
      'rhs_table' => 'c1_lineitem',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c1_purchases_c1_lineitem_c',
      'join_key_lhs' => 'c1_purchases_c1_lineitemc1_purchases_ida',
      'join_key_rhs' => 'c1_purchases_c1_lineitemc1_lineitem_idb',
    ),
  ),
  'table' => 'c1_purchases_c1_lineitem_c',
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
      'name' => 'c1_purchases_c1_lineitemc1_purchases_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c1_purchases_c1_lineitemc1_lineitem_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c1_purchases_c1_lineitemspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c1_purchases_c1_lineitem_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c1_purchases_c1_lineitemc1_purchases_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'c1_purchases_c1_lineitem_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c1_purchases_c1_lineitemc1_lineitem_idb',
      ),
    ),
  ),
);