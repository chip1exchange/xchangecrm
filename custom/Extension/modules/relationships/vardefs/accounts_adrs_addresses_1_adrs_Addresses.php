<?php
// created: 2014-04-07 17:43:08
$dictionary["adrs_Addresses"]["fields"]["accounts_adrs_addresses_1"] = array (
  'name' => 'accounts_adrs_addresses_1',
  'type' => 'link',
  'relationship' => 'accounts_adrs_addresses_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ADRS_ADDRESSES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_adrs_addresses_1accounts_ida',
);
$dictionary["adrs_Addresses"]["fields"]["accounts_adrs_addresses_1_name"] = array (
  'name' => 'accounts_adrs_addresses_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ADRS_ADDRESSES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_adrs_addresses_1accounts_ida',
  'link' => 'accounts_adrs_addresses_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["adrs_Addresses"]["fields"]["accounts_adrs_addresses_1accounts_ida"] = array (
  'name' => 'accounts_adrs_addresses_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_adrs_addresses_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ADRS_ADDRESSES_1_FROM_ADRS_ADDRESSES_TITLE',
);
