<?php
$module_name = 'lines_Line_Items';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'quantity_c',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cost_price_c',
            'label' => 'LBL_COST_PRICE',
          ),
          1 => 
          array (
            'name' => 'unit_price_c',
            'label' => 'LBL_UNIT_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tax_c',
            'studio' => 'visible',
            'label' => 'LBL_TAX',
          ),
          1 => 
          array (
            'name' => 'tax_amount_c',
            'label' => 'LBL_TAX_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'parts_parts_lines_line_items_1_name',
            'label' => 'LBL_PARTS_PARTS_LINES_LINE_ITEMS_1_FROM_PARTS_PARTS_TITLE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_price_c',
            'label' => 'LBL_TOTAL_PRICE',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
      ),
    ),
  ),
);
?>
