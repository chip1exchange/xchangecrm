<?php
// created: 2014-04-07 15:22:10
$dictionary["reqs_Requirements"]["fields"]["contacts_reqs_requirements_1"] = array (
  'name' => 'contacts_reqs_requirements_1',
  'type' => 'link',
  'relationship' => 'contacts_reqs_requirements_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_REQS_REQUIREMENTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_reqs_requirements_1contacts_ida',
);
$dictionary["reqs_Requirements"]["fields"]["contacts_reqs_requirements_1_name"] = array (
  'name' => 'contacts_reqs_requirements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_REQS_REQUIREMENTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_reqs_requirements_1contacts_ida',
  'link' => 'contacts_reqs_requirements_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["reqs_Requirements"]["fields"]["contacts_reqs_requirements_1contacts_ida"] = array (
  'name' => 'contacts_reqs_requirements_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_reqs_requirements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_REQS_REQUIREMENTS_1_FROM_REQS_REQUIREMENTS_TITLE',
);
