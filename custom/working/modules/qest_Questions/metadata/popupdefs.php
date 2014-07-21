<?php
$popupMeta = array (
    'moduleMain' => 'qest_Questions',
    'varName' => 'qest_Questions',
    'orderBy' => 'qest_questions.name',
    'whereClauses' => array (
  'name' => 'qest_questions.name',
  'type_c' => 'qest_questions_cstm.type_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'type_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type_c',
  ),
),
);
