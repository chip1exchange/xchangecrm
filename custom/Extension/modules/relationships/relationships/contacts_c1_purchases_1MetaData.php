<?php
// created: 2014-07-17 05:16:41
$dictionary["contacts_c1_purchases_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_c1_purchases_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'c1_purchases',
      'rhs_table' => 'c1_purchases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_c1_purchases_1_c',
      'join_key_lhs' => 'contacts_c1_purchases_1contacts_ida',
      'join_key_rhs' => 'contacts_c1_purchases_1c1_purchases_idb',
    ),
  ),
  'table' => 'contacts_c1_purchases_1_c',
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
      'name' => 'contacts_c1_purchases_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_c1_purchases_1c1_purchases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_c1_purchases_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_c1_purchases_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_c1_purchases_1contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_c1_purchases_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_c1_purchases_1c1_purchases_idb',
      ),
    ),
  ),
);