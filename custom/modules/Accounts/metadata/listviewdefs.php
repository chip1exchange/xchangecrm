<?php
$listViewDefs ['Accounts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => true,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => true,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'POTENTIAL_CUSTOMER_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_POTENTIAL_CUSTOMER',
    'width' => '10%',
  ),
  'RATING_CUSTOMER_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RATING_CUSTOMER',
    'width' => '10%',
  ),
  'DEFAULT_CONTACT_CUSTOMER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DEFAULT_CONTACT_CUSTOMER',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'COMMENTS_CUSTOMER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMMENTS_CUSTOMER',
    'width' => '10%',
  ),
  'POTENTIAL_SUPPLIER_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_POTENTIAL_SUPPLIER',
    'width' => '10%',
  ),
  'RATING_SUPPLIER_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RATING_SUPPLIER',
    'width' => '10%',
  ),
  'DEFAULT_CONTACT_SUPPLIER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DEFAULT_CONTACT_SUPPLIER',
    'id' => 'CONTACT_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'COMMENTS_SUPPLIER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMMENTS_SUPPLIER',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'ASSIGNED_BUYER_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_BUYER',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'ACCOUNT_ASSIGNED_SALESPERSON_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT_ASSIGNED_SALESPERSON',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'TICKER_SYMBOL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TICKER_SYMBOL',
    'default' => false,
  ),
);
?>
