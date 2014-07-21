<?php 
 //WARNING: The contents of this file are auto-generated



/*$dictionary['lines_Line_Items']['fields']['manufacturer_name_c'] = array (
    'name' => 'manufacturer_name_c',
    'id_name' => 'parts_parts_lines_line_items_1parts_parts_ida',
    'type' => 'relate',
    'rname' => 'manufacturer_c',
    'vname' => 'LBL_MANUFACTURER',
    'link' => 'parts_parts_lines_line_items_1',
    'module' => 'parts_Parts',
    'studio' => 'visible',
);
*/



// created: 2014-06-11 09:56:31
$dictionary["lines_Line_Items"]["fields"]["opportunities_lines_line_items_1"] = array (
  'name' => 'opportunities_lines_line_items_1',
  'type' => 'link',
  'relationship' => 'opportunities_lines_line_items_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_LINES_LINE_ITEMS_1_FROM_OPPORTUNITIES_TITLE',
);


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


 // created: 2014-05-12 11:32:03
$dictionary['lines_Line_Items']['fields']['cost_price_c']['labelValue']='Cost Price';

 

 // created: 2014-05-12 11:32:04

 

 // created: 2014-06-13 12:11:05
$dictionary['lines_Line_Items']['fields']['part_line_manufacturer_name_c']['labelValue']='Manufacturer';

 

 // created: 2014-05-12 11:32:02
$dictionary['lines_Line_Items']['fields']['quantity_c']['options']='numeric_range_search_dom';
$dictionary['lines_Line_Items']['fields']['quantity_c']['labelValue']='Quantity';
$dictionary['lines_Line_Items']['fields']['quantity_c']['enable_range_search']='1';

 

 // created: 2014-05-12 11:32:03
$dictionary['lines_Line_Items']['fields']['tax_amount_c']['labelValue']='Tax Amount';

 

 // created: 2014-05-12 11:32:05
$dictionary['lines_Line_Items']['fields']['tax_c']['labelValue']='Tax';

 

 // created: 2014-05-12 11:32:06
$dictionary['lines_Line_Items']['fields']['total_price_c']['labelValue']='Total Price';

 

 // created: 2014-05-12 11:32:04
$dictionary['lines_Line_Items']['fields']['unit_price_c']['labelValue']='Unit Price';

 
?>