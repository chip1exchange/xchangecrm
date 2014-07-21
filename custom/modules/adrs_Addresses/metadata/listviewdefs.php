<?php
$module_name = 'adrs_Addresses';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_ADRS_ADDRESSES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_ADRS_ADDRESSES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_ADRS_ADDRESSES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS_TYPE',
    'width' => '10%',
  ),
  'ADDRESS_COUNTRY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_COUNTRY',
    'width' => '10%',
  ),
  'ADDRESS_CITY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
  ),
);
?>
