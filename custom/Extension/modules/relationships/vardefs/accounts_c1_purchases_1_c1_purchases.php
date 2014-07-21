<?php
// created: 2014-07-17 05:15:19
$dictionary["c1_purchases"]["fields"]["accounts_c1_purchases_1"] = array (
  'name' => 'accounts_c1_purchases_1',
  'type' => 'link',
  'relationship' => 'accounts_c1_purchases_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_C1_PURCHASES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_c1_purchases_1accounts_ida',
);
$dictionary["c1_purchases"]["fields"]["accounts_c1_purchases_1_name"] = array (
  'name' => 'accounts_c1_purchases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_C1_PURCHASES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_c1_purchases_1accounts_ida',
  'link' => 'accounts_c1_purchases_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["c1_purchases"]["fields"]["accounts_c1_purchases_1accounts_ida"] = array (
  'name' => 'accounts_c1_purchases_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_c1_purchases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_C1_PURCHASES_1_FROM_C1_PURCHASES_TITLE',
);
