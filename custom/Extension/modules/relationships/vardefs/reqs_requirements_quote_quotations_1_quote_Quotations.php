<?php
// created: 2014-04-07 15:23:05
$dictionary["quote_Quotations"]["fields"]["reqs_requirements_quote_quotations_1"] = array (
  'name' => 'reqs_requirements_quote_quotations_1',
  'type' => 'link',
  'relationship' => 'reqs_requirements_quote_quotations_1',
  'source' => 'non-db',
  'module' => 'reqs_Requirements',
  'bean_name' => 'reqs_Requirements',
  'vname' => 'LBL_REQS_REQUIREMENTS_QUOTE_QUOTATIONS_1_FROM_REQS_REQUIREMENTS_TITLE',
  'id_name' => 'reqs_requirements_quote_quotations_1reqs_requirements_ida',
);
$dictionary["quote_Quotations"]["fields"]["reqs_requirements_quote_quotations_1_name"] = array (
  'name' => 'reqs_requirements_quote_quotations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REQS_REQUIREMENTS_QUOTE_QUOTATIONS_1_FROM_REQS_REQUIREMENTS_TITLE',
  'save' => true,
  'id_name' => 'reqs_requirements_quote_quotations_1reqs_requirements_ida',
  'link' => 'reqs_requirements_quote_quotations_1',
  'table' => 'reqs_requirements',
  'module' => 'reqs_Requirements',
  'rname' => 'name',
);
$dictionary["quote_Quotations"]["fields"]["reqs_requirements_quote_quotations_1reqs_requirements_ida"] = array (
  'name' => 'reqs_requirements_quote_quotations_1reqs_requirements_ida',
  'type' => 'link',
  'relationship' => 'reqs_requirements_quote_quotations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REQS_REQUIREMENTS_QUOTE_QUOTATIONS_1_FROM_QUOTE_QUOTATIONS_TITLE',
);
