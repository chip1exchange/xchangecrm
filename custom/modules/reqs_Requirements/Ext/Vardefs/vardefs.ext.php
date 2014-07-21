<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-04-07 15:20:55
$dictionary["reqs_Requirements"]["fields"]["accounts_reqs_requirements_1"] = array (
  'name' => 'accounts_reqs_requirements_1',
  'type' => 'link',
  'relationship' => 'accounts_reqs_requirements_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_REQS_REQUIREMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_reqs_requirements_1accounts_ida',
);
$dictionary["reqs_Requirements"]["fields"]["accounts_reqs_requirements_1_name"] = array (
  'name' => 'accounts_reqs_requirements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_REQS_REQUIREMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_reqs_requirements_1accounts_ida',
  'link' => 'accounts_reqs_requirements_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["reqs_Requirements"]["fields"]["accounts_reqs_requirements_1accounts_ida"] = array (
  'name' => 'accounts_reqs_requirements_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_reqs_requirements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_REQS_REQUIREMENTS_1_FROM_REQS_REQUIREMENTS_TITLE',
);


// created: 2014-04-07 15:22:10
$dictionary["reqs_Requirements"]["fields"]["contacts_reqs_requirements_1"] = array (
  'name' => 'contacts_reqs_requirements_1',
  'type' => 'link',
  'relationship' => 'contacts_reqs_requirements_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_REQS_REQUIREMENTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_reqs_requirements_1contacts_ida',
);
$dictionary["reqs_Requirements"]["fields"]["contacts_reqs_requirements_1_name"] = array (
  'name' => 'contacts_reqs_requirements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_REQS_REQUIREMENTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_reqs_requirements_1contacts_ida',
  'link' => 'contacts_reqs_requirements_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["reqs_Requirements"]["fields"]["contacts_reqs_requirements_1contacts_ida"] = array (
  'name' => 'contacts_reqs_requirements_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_reqs_requirements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_REQS_REQUIREMENTS_1_FROM_REQS_REQUIREMENTS_TITLE',
);


// created: 2014-04-07 15:23:39
$dictionary["reqs_Requirements"]["fields"]["reqs_requirements_lines_line_items_1"] = array (
  'name' => 'reqs_requirements_lines_line_items_1',
  'type' => 'link',
  'relationship' => 'reqs_requirements_lines_line_items_1',
  'source' => 'non-db',
  'module' => 'lines_Line_Items',
  'bean_name' => 'lines_Line_Items',
  'side' => 'right',
  'vname' => 'LBL_REQS_REQUIREMENTS_LINES_LINE_ITEMS_1_FROM_LINES_LINE_ITEMS_TITLE',
);


// created: 2014-04-07 15:23:05
$dictionary["reqs_Requirements"]["fields"]["reqs_requirements_quote_quotations_1"] = array (
  'name' => 'reqs_requirements_quote_quotations_1',
  'type' => 'link',
  'relationship' => 'reqs_requirements_quote_quotations_1',
  'source' => 'non-db',
  'module' => 'quote_Quotations',
  'bean_name' => 'quote_Quotations',
  'side' => 'right',
  'vname' => 'LBL_REQS_REQUIREMENTS_QUOTE_QUOTATIONS_1_FROM_QUOTE_QUOTATIONS_TITLE',
);

?>