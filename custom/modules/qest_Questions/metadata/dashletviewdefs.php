<?php
$dashletData['qest_QuestionsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'type_c' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
);
$dashletData['qest_QuestionsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'searchfields' => 
  array (
    'date_entered' => 
    array (
      'default' => '',
    ),
    'date_modified' => 
    array (
      'default' => '',
    ),
    'assigned_user_id' => 
    array (
      'type' => 'assigned_user_name',
      'default' => 'Fadi Administrator',
    ),
    'width' => '10%',
    'default' => true,
  ),
  'columns' => 
  array (
    'name' => 
    array (
      'width' => '40',
      'label' => 'LBL_LIST_NAME',
      'link' => true,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_ENTERED',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_MODIFIED',
    ),
    'created_by' => 
    array (
      'width' => '8',
      'label' => 'LBL_CREATED',
    ),
    'assigned_user_name' => 
    array (
      'width' => '8',
      'label' => 'LBL_LIST_ASSIGNED_USER',
    ),
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
