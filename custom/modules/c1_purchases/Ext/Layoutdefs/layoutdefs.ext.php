<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-07-17 05:11:31
$layout_defs["c1_purchases"]["subpanel_setup"]['c1_purchases_c1_lineitem'] = array (
  'order' => 100,
  'module' => 'c1_lineitem',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_C1_PURCHASES_C1_LINEITEM_FROM_C1_LINEITEM_TITLE',
  'get_subpanel_data' => 'c1_purchases_c1_lineitem',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-07-17 05:11:31
$layout_defs["c1_purchases"]["subpanel_setup"]['c1_purchases_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_C1_PURCHASES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'c1_purchases_documents',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>