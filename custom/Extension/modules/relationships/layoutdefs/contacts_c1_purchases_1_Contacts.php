<?php
 // created: 2014-07-17 05:16:41
$layout_defs["Contacts"]["subpanel_setup"]['contacts_c1_purchases_1'] = array (
  'order' => 100,
  'module' => 'c1_purchases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_C1_PURCHASES_1_FROM_C1_PURCHASES_TITLE',
  'get_subpanel_data' => 'contacts_c1_purchases_1',
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
