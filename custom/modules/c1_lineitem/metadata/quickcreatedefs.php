<?php
$module_name = 'c1_lineitem';
$_object_name = 'c1_lineitem';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_SALE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 'name',
		  1 => 'c1_purchases_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'qty',
            'label' => 'LBL_QTY',
          ),
          1 => 'c1_lineitem_type',
        ),
        2 => 
        array (
          0 => 'amount',
          1 => 
          array (
            'name' => 'date_code',
            'label' => 'LBL_DATE_CODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'package',
            'studio' => 'visible',
            'label' => 'LBL_PACKAGE',
          ),
          1 => 
          array (
            'name' => 'shortage',
            'studio' => 'visible',
            'label' => 'LBL_SHORTAGE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'required_date',
            'label' => 'LBL_REQUIRED_DATE',
          ),
          1 => 
          array (
            'name' => 'mfg',
            'studio' => 'visible',
            'label' => 'LBL_MFG',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cus_part_num',
            'label' => 'LBL_CUS_PART_NUM',
          ),
        ),
        6 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'usage_c1',
            'studio' => 'visible',
            'label' => 'LBL_USAGE_C1',
          ),
        ),
      ),
    ),
  ),
);
?>
