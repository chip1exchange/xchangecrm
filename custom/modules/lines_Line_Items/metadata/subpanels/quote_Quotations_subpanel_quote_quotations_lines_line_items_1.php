<?php
// created: 2014-06-06 11:15:14
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'opportunities_lines_line_items_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_OPPORTUNITIES_LINES_LINE_ITEMS_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_LINES_LINE_ITEMS_1OPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'opportunities_lines_line_items_1opportunities_ida',
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