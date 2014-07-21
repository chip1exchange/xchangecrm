<?php
// created: 2014-04-07 15:23:05
$dictionary["reqs_requirements_quote_quotations_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'reqs_requirements_quote_quotations_1' => 
    array (
      'lhs_module' => 'reqs_Requirements',
      'lhs_table' => 'reqs_requirements',
      'lhs_key' => 'id',
      'rhs_module' => 'quote_Quotations',
      'rhs_table' => 'quote_quotations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'reqs_requirements_quote_quotations_1_c',
      'join_key_lhs' => 'reqs_requirements_quote_quotations_1reqs_requirements_ida',
      'join_key_rhs' => 'reqs_requirements_quote_quotations_1quote_quotations_idb',
    ),
  ),
  'table' => 'reqs_requirements_quote_quotations_1_c',
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
      'name' => 'reqs_requirements_quote_quotations_1reqs_requirements_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'reqs_requirements_quote_quotations_1quote_quotations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'reqs_requirements_quote_quotations_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'reqs_requirements_quote_quotations_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'reqs_requirements_quote_quotations_1reqs_requirements_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'reqs_requirements_quote_quotations_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'reqs_requirements_quote_quotations_1quote_quotations_idb',
      ),
    ),
  ),
);