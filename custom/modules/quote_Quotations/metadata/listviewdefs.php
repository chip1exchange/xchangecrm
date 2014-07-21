<?php
$module_name = 'quote_Quotations';
$OBJECT_NAME = 'QUOTE_QUOTATIONS';
$listViewDefs [$module_name] = 
array (
  'QUOTE_NUMBER_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_QUOTE_NUMBER',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_SALE_NAME',
    'link' => true,
    'default' => true,
  ),
  'QUOTE_STAGE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_QUOTE_STAGE',
    'width' => '10%',
  ),
  'CONTACT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ACCOUNT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'TOTAL_AMT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_TOTAL_AMT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'QUOTE_QUOTATIONS_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'BILLING_ADDRESS_CITY_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_STATE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_POSTALCODE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_COUNTRY_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'width' => '10%',
  ),
  'SHIPPING_ADDRESS_CITY_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'width' => '10%',
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALE_STAGE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STATE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'width' => '10%',
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT',
    'align' => 'right',
    'default' => false,
    'currency_format' => true,
  ),
  'SHIPPING_ADDRESS_POSTALCODE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'width' => '10%',
  ),
  'SHIPPING_ADDRESS_COUNTRY_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  ///////////////
  
                              'includes'=> array(
                                            array('file'=>'custom/modules/quote_Quotations/quote_Quotations.js'),
                                         ),                                            
                               

  
  ///////////
  
  
);
?>
