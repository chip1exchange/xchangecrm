<?php
$module_name = 'quote_Quotations';
$_object_name = 'quote_quotations';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'opportunity_c',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'quote_number_c',
            'label' => 'LBL_QUOTE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'quote_stage_c',
            'studio' => 'visible',
            'label' => 'LBL_QUOTE_STAGE',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'invoice_status_c',
            'studio' => 'visible',
            'label' => 'LBL_INVOICE_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'payment_terms_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_TERMS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'approval_status_c',
            'studio' => 'visible',
            'label' => 'LBL_APPROVAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'sales_stage',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contact_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_c',
            'label' => 'LBL_BILLING_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'shipping_address_c',
            'label' => 'LBL_SHIPPING_ADDRESS',
          ),
        ),
      ),
    ),
  ),
);
?>
