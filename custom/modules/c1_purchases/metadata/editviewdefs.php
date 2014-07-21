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
	     'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/c1_purchases/purchase.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_SALE_INFORMATION' => 
        array (
          'newTab' => true,
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
          1 => 
          array (
            'name' => 'accounts_c1_purchases_1_name',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNTS_C1_PURCHASES_1_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'currency_id',
          1 => 'amount',
        ),
        2 => 
        array (
          0 => 'sales_stage',
          1 => 
          array (
            'name' => 'contacts_c1_purchases_1_name',
            'studio' => 'visible',
            'label' => 'LBL_CONTACTS_C1_PURCHASES_1_NAME',
			'displayParams' => array(
			'initial_filter' => "&account_name=\" + document.getElementById(\"accounts_c1_purchases_1_name\").value + \"",
			),
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
	       'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'po_num',
            'label' => 'LBL_PO_NUM',
          ),
          1 => 
          array (
            'name' => 'po_doc_name',
            'label' => 'LBL_PO_DOC_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pi_num',
            'label' => 'LBL_PI_NUM',
          ),
          1 => 
          array (
            'name' => 'pi_doc_name',
            'label' => 'LBL_PI_DOC_NAME',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'system_reference',
            'label' => 'LBL_SYSTEM_REFERENCE',
          ),
          1 => 
          array (
            'name' => 'debit_account',
            'label' => 'LBL_DEBIT_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'payment_detail',
            'label' => 'LBL_PAYMENT_DETAIL',
          ),
          1 => 
          array (
            'name' => 'tt_doc_name',
            'label' => 'LBL_TT_DOC_NAME',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'awb_num',
            'label' => 'LBL_AWB_NUM',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'warehouse_num',
            'label' => 'LBL_WAREHOUSE_NUM',
          ),
        ),
      ), 
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
