<?php
// created: 2014-04-07 15:20:55
$dictionary["reqs_Requirements"]["fields"]["accounts_reqs_requirements_1"] = array (
  'name' => 'accounts_reqs_requirements_1',
  'type' => 'link',
  'relationship' => 'accounts_reqs_requirements_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_REQS_REQUIREMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_reqs_requirements_1accounts_ida',
);
$dictionary["reqs_Requirements"]["fields"]["accounts_reqs_requirements_1_name"] = array (
  'name' => 'accounts_reqs_requirements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_REQS_REQUIREMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_reqs_requirements_1accounts_ida',
  'link' => 'accounts_reqs_requirements_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["reqs_Requirements"]["fields"]["accounts_reqs_requirements_1accounts_ida"] = array (
  'name' => 'accounts_reqs_requirements_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_reqs_requirements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_REQS_REQUIREMENTS_1_FROM_REQS_REQUIREMENTS_TITLE',
);
