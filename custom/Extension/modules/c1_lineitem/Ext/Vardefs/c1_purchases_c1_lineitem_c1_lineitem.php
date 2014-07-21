<?php
// created: 2014-07-17 05:11:31
$dictionary["c1_lineitem"]["fields"]["c1_purchases_c1_lineitem"] = array (
  'name' => 'c1_purchases_c1_lineitem',
  'type' => 'link',
  'relationship' => 'c1_purchases_c1_lineitem',
  'source' => 'non-db',
  'module' => 'c1_purchases',
  'bean_name' => 'c1_purchases',
  'vname' => 'LBL_C1_PURCHASES_C1_LINEITEM_FROM_C1_PURCHASES_TITLE',
  'id_name' => 'c1_purchases_c1_lineitemc1_purchases_ida',
);
$dictionary["c1_lineitem"]["fields"]["c1_purchases_c1_lineitem_name"] = array (
  'name' => 'c1_purchases_c1_lineitem_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C1_PURCHASES_C1_LINEITEM_FROM_C1_PURCHASES_TITLE',
  'save' => true,
  'id_name' => 'c1_purchases_c1_lineitemc1_purchases_ida',
  'link' => 'c1_purchases_c1_lineitem',
  'table' => 'c1_purchases',
  'module' => 'c1_purchases',
  'rname' => 'name',
);
$dictionary["c1_lineitem"]["fields"]["c1_purchases_c1_lineitemc1_purchases_ida"] = array (
  'name' => 'c1_purchases_c1_lineitemc1_purchases_ida',
  'type' => 'link',
  'relationship' => 'c1_purchases_c1_lineitem',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_C1_PURCHASES_C1_LINEITEM_FROM_C1_LINEITEM_TITLE',
);
