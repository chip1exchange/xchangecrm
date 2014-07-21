<?php
// created: 2014-06-05 12:19:23
$dictionary["lines_Line_Items"]["fields"]["quote_quotations_lines_line_items_1"] = array (
  'name' => 'quote_quotations_lines_line_items_1',
  'type' => 'link',
  'relationship' => 'quote_quotations_lines_line_items_1',
  'source' => 'non-db',
  'module' => 'quote_Quotations',
  'bean_name' => 'quote_Quotations',
  'vname' => 'LBL_QUOTE_QUOTATIONS_LINES_LINE_ITEMS_1_FROM_QUOTE_QUOTATIONS_TITLE',
  'id_name' => 'quote_quotations_lines_line_items_1quote_quotations_ida',
);
$dictionary["lines_Line_Items"]["fields"]["quote_quotations_lines_line_items_1_name"] = array (
  'name' => 'quote_quotations_lines_line_items_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTE_QUOTATIONS_LINES_LINE_ITEMS_1_FROM_QUOTE_QUOTATIONS_TITLE',
  'save' => true,
  'id_name' => 'quote_quotations_lines_line_items_1quote_quotations_ida',
  'link' => 'quote_quotations_lines_line_items_1',
  'table' => 'quote_quotations',
  'module' => 'quote_Quotations',
  'rname' => 'name',
);
$dictionary["lines_Line_Items"]["fields"]["quote_quotations_lines_line_items_1quote_quotations_ida"] = array (
  'name' => 'quote_quotations_lines_line_items_1quote_quotations_ida',
  'type' => 'link',
  'relationship' => 'quote_quotations_lines_line_items_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QUOTE_QUOTATIONS_LINES_LINE_ITEMS_1_FROM_LINES_LINE_ITEMS_TITLE',
);
