<?php
// created: 2014-04-22 10:46:43
$dictionary["quote_Quotations"]["fields"]["opportunities_quote_quotations_1"] = array (
  'name' => 'opportunities_quote_quotations_1',
  'type' => 'link',
  'relationship' => 'opportunities_quote_quotations_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_QUOTE_QUOTATIONS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_quote_quotations_1opportunities_ida',
);
$dictionary["quote_Quotations"]["fields"]["opportunities_quote_quotations_1_name"] = array (
  'name' => 'opportunities_quote_quotations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_QUOTE_QUOTATIONS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_quote_quotations_1opportunities_ida',
  'link' => 'opportunities_quote_quotations_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["quote_Quotations"]["fields"]["opportunities_quote_quotations_1opportunities_ida"] = array (
  'name' => 'opportunities_quote_quotations_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_quote_quotations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_QUOTE_QUOTATIONS_1_FROM_QUOTE_QUOTATIONS_TITLE',
);
