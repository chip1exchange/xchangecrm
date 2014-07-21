<?php
// created: 2014-04-21 09:52:20
$dictionary["lines_Line_Items"]["fields"]["parts_parts_lines_line_items_1"] = array (
  'name' => 'parts_parts_lines_line_items_1',
  'type' => 'link',
  'relationship' => 'parts_parts_lines_line_items_1',
  'source' => 'non-db',
  'module' => 'parts_Parts',
  'bean_name' => 'parts_Parts',
  'vname' => 'LBL_PARTS_PARTS_LINES_LINE_ITEMS_1_FROM_PARTS_PARTS_TITLE',
  'id_name' => 'parts_parts_lines_line_items_1parts_parts_ida',
);
$dictionary["lines_Line_Items"]["fields"]["parts_parts_lines_line_items_1_name"] = array (
  'name' => 'parts_parts_lines_line_items_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PARTS_PARTS_LINES_LINE_ITEMS_1_FROM_PARTS_PARTS_TITLE',
  'save' => true,
  'id_name' => 'parts_parts_lines_line_items_1parts_parts_ida',
  'link' => 'parts_parts_lines_line_items_1',
  'table' => 'parts_parts',
  'module' => 'parts_Parts',
  'rname' => 'name',
);
$dictionary["lines_Line_Items"]["fields"]["parts_parts_lines_line_items_1parts_parts_ida"] = array (
  'name' => 'parts_parts_lines_line_items_1parts_parts_ida',
  'type' => 'link',
  'relationship' => 'parts_parts_lines_line_items_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PARTS_PARTS_LINES_LINE_ITEMS_1_FROM_LINES_LINE_ITEMS_TITLE',
);
