<?php
// created: 2014-04-07 15:22:10
$dictionary["contacts_reqs_requirements_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_reqs_requirements_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'reqs_Requirements',
      'rhs_table' => 'reqs_requirements',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_reqs_requirements_1_c',
      'join_key_lhs' => 'contacts_reqs_requirements_1contacts_ida',
      'join_key_rhs' => 'contacts_reqs_requirements_1reqs_requirements_idb',
    ),
  ),
  'table' => 'contacts_reqs_requirements_1_c',
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
      'name' => 'contacts_reqs_requirements_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_reqs_requirements_1reqs_requirements_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_reqs_requirements_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_reqs_requirements_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_reqs_requirements_1contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_reqs_requirements_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_reqs_requirements_1reqs_requirements_idb',
      ),
    ),
  ),
);