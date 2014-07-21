<?php
// created: 2014-04-22 10:46:43
$dictionary["opportunities_quote_quotations_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_quote_quotations_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'quote_Quotations',
      'rhs_table' => 'quote_quotations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_quote_quotations_1_c',
      'join_key_lhs' => 'opportunities_quote_quotations_1opportunities_ida',
      'join_key_rhs' => 'opportunities_quote_quotations_1quote_quotations_idb',
    ),
  ),
  'table' => 'opportunities_quote_quotations_1_c',
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
      'name' => 'opportunities_quote_quotations_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_quote_quotations_1quote_quotations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_quote_quotations_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_quote_quotations_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_quote_quotations_1opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_quote_quotations_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_quote_quotations_1quote_quotations_idb',
      ),
    ),
  ),
);