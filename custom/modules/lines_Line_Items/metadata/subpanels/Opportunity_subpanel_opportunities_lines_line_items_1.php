<?php
// created: 2014-06-11 11:10:39
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'quantity_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'total_price_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_TOTAL_PRICE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'lines_Line_Items',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'lines_Line_Items',
    'width' => '5%',
    'default' => true,
  ),
);