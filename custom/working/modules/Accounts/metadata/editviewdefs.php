<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'call_office_c',
            'label' => 'LBL_CALL_OFFICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => '',
        ),
        6 => 
        array (
          0 => 'account_type',
          1 => 'industry',
        ),
        7 => 
        array (
          0 => 'annual_revenue',
          1 => 'employees',
        ),
        8 => 
        array (
          0 => 'sic_code',
          1 => 'ticker_symbol',
        ),
        9 => 
        array (
          0 => 'parent_name',
          1 => 'ownership',
        ),
        10 => 
        array (
          0 => 'campaign_name',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_assigned_salesperson_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_ASSIGNED_SALESPERSON',
          ),
          1 => 
          array (
            'name' => 'selling_approval_c',
            'studio' => 'visible',
            'label' => 'LBL_SELLING_APPROVAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'selling_terms_c',
            'studio' => 'visible',
            'label' => 'LBL_SELLING_TERMS',
          ),
          1 => 
          array (
            'name' => 'selling_currency_c',
            'label' => 'LBL_SELLING_CURRENCY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'account_credit_limit_c',
            'label' => 'LBL_ACCOUNT_CREDIT_LIMIT',
          ),
          1 => 
          array (
            'name' => 'account_tax_number_c',
            'label' => 'LBL_ACCOUNT_TAX_NUMBER',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_buyer_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGNED_BUYER',
          ),
          1 => 
          array (
            'name' => 'buying_approval_c',
            'studio' => 'visible',
            'label' => 'LBL_BUYING_APPROVAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'buying_terms_c',
            'studio' => 'visible',
            'label' => 'LBL_BUYING_TERMS',
          ),
          1 => 
          array (
            'name' => 'buying_currency_c',
            'label' => 'LBL_BUYING_CURRENCY',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'shipping_method_c',
            'studio' => 'visible',
            'label' => 'LBL_SHIPPING_METHOD',
          ),
          1 => 
          array (
            'name' => 'shipping_account_number_c',
            'label' => 'LBL_SHIPPING_ACCOUNT_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'potential_customer_c',
            'studio' => 'visible',
            'label' => 'LBL_POTENTIAL_CUSTOMER',
          ),
          1 => 
          array (
            'name' => 'rating_customer_c',
            'studio' => 'visible',
            'label' => 'LBL_RATING_CUSTOMER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'default_contact_customer_c',
            'studio' => 'visible',
            'label' => 'LBL_DEFAULT_CONTACT_CUSTOMER',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comments_customer_c',
            'label' => 'LBL_COMMENTS_CUSTOMER',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'potential_supplier_c',
            'studio' => 'visible',
            'label' => 'LBL_POTENTIAL_SUPPLIER',
          ),
          1 => 
          array (
            'name' => 'rating_supplier_c',
            'studio' => 'visible',
            'label' => 'LBL_RATING_SUPPLIER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'default_contact_supplier_c',
            'studio' => 'visible',
            'label' => 'LBL_DEFAULT_CONTACT_SUPPLIER',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comments_supplier_c',
            'label' => 'LBL_COMMENTS_SUPPLIER',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
