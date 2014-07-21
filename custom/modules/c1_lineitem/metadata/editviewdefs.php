<?php
$module_name = 'c1_lineitem';
$_object_name = 'c1_lineitem';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
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
          0 => 'currency_id',
          1 => 'amount',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_code',
            'label' => 'LBL_DATE_CODE',
          ),
          1 => 
          array (
            'name' => 'package',
            'studio' => 'visible',
            'label' => 'LBL_PACKAGE',
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
            'name' => 'shortage',
            'studio' => 'visible',
            'label' => 'LBL_SHORTAGE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mfg',
            'studio' => 'visible',
            'label' => 'LBL_MFG',
          ),
          1 => 
          array (
            'name' => 'usage_c1',
            'studio' => 'visible',
            'label' => 'LBL_USAGE_C1',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'cus_part_num',
            'label' => 'LBL_CUS_PART_NUM',
          ),
        ),
        7 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'c1_purchases_c1_lineitem_name',
            'label' => 'LBL_C1_PURCHASES_C1_LINEITEM_FROM_C1_PURCHASES_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
