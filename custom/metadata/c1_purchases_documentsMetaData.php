<?php
// created: 2014-07-17 05:11:31
$dictionary["c1_purchases_documents"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'c1_purchases_documents' => 
    array (
      'lhs_module' => 'c1_purchases',
      'lhs_table' => 'c1_purchases',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c1_purchases_documents_c',
      'join_key_lhs' => 'c1_purchases_documentsc1_purchases_ida',
      'join_key_rhs' => 'c1_purchases_documentsdocuments_idb',
    ),
  ),
  'table' => 'c1_purchases_documents_c',
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
      'name' => 'c1_purchases_documentsc1_purchases_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c1_purchases_documentsdocuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c1_purchases_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c1_purchases_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c1_purchases_documentsc1_purchases_ida',
        1 => 'c1_purchases_documentsdocuments_idb',
      ),
    ),
  ),
);