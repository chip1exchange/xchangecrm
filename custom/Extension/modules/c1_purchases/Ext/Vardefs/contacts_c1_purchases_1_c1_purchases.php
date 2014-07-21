<?php
// created: 2014-07-17 05:16:41
$dictionary["c1_purchases"]["fields"]["contacts_c1_purchases_1"] = array (
  'name' => 'contacts_c1_purchases_1',
  'type' => 'link',
  'relationship' => 'contacts_c1_purchases_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_C1_PURCHASES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_c1_purchases_1contacts_ida',
);
$dictionary["c1_purchases"]["fields"]["contacts_c1_purchases_1_name"] = array (
  'name' => 'contacts_c1_purchases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_C1_PURCHASES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_c1_purchases_1contacts_ida',
  'link' => 'contacts_c1_purchases_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["c1_purchases"]["fields"]["contacts_c1_purchases_1contacts_ida"] = array (
  'name' => 'contacts_c1_purchases_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_c1_purchases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_C1_PURCHASES_1_FROM_C1_PURCHASES_TITLE',
);
