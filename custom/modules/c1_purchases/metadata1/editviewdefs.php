<?php
$module_name = 'c1_purchases';
$_object_name = 'c1_purchases';
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
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'currency_id',
        ),
        1 => 
        array (
          0 => 'c1_purchases_type',
          1 => 'amount',
        ),
        2 => 
        array (
          0 => 'lead_source',
          1 => 'date_closed',
        ),
        3 => 
        array (
          0 => 'sales_stage',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'next_step',
        ),
        5 => 
        array (
          0 => 'probability',
        ),
        6 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_c1_purchases_1_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'contacts_c1_purchases_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
