<?php
// created: 2014-04-07 15:23:39
$dictionary["lines_Line_Items"]["fields"]["reqs_requirements_lines_line_items_1"] = array (
  'name' => 'reqs_requirements_lines_line_items_1',
  'type' => 'link',
  'relationship' => 'reqs_requirements_lines_line_items_1',
  'source' => 'non-db',
  'module' => 'reqs_Requirements',
  'bean_name' => 'reqs_Requirements',
  'vname' => 'LBL_REQS_REQUIREMENTS_LINES_LINE_ITEMS_1_FROM_REQS_REQUIREMENTS_TITLE',
  'id_name' => 'reqs_requirements_lines_line_items_1reqs_requirements_ida',
);
$dictionary["lines_Line_Items"]["fields"]["reqs_requirements_lines_line_items_1_name"] = array (
  'name' => 'reqs_requirements_lines_line_items_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REQS_REQUIREMENTS_LINES_LINE_ITEMS_1_FROM_REQS_REQUIREMENTS_TITLE',
  'save' => true,
  'id_name' => 'reqs_requirements_lines_line_items_1reqs_requirements_ida',
  'link' => 'reqs_requirements_lines_line_items_1',
  'table' => 'reqs_requirements',
  'module' => 'reqs_Requirements',
  'rname' => 'name',
);
$dictionary["lines_Line_Items"]["fields"]["reqs_requirements_lines_line_items_1reqs_requirements_ida"] = array (
  'name' => 'reqs_requirements_lines_line_items_1reqs_requirements_ida',
  'type' => 'link',
  'relationship' => 'reqs_requirements_lines_line_items_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REQS_REQUIREMENTS_LINES_LINE_ITEMS_1_FROM_LINES_LINE_ITEMS_TITLE',
);
