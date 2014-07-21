<?php
$viewdefs ['Accounts'] = 
array (
  'QuickCreate' => 
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
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
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
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
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
          ),
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
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
          0 => 
          array (
            'name' => 'account_type',
          ),
          1 => 
          array (
            'name' => 'industry',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'employees',
            'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
            'label' => 'LBL_EMPLOYEES',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sic_code',
            'comment' => 'SIC code of the account',
            'label' => 'LBL_SIC_CODE',
          ),
          1 => 
          array (
            'name' => 'ticker_symbol',
            'comment' => 'The stock trading (ticker) symbol for the company',
            'label' => 'LBL_TICKER_SYMBOL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
          1 => 
          array (
            'name' => 'ownership',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'comment' => 'The first campaign name for Account (Meta-data only)',
            'label' => 'LBL_CAMPAIGN',
          ),
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
            'comment' => 'The street address used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
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
            'comment' => 'The street address used for for shipping purposes',
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
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
