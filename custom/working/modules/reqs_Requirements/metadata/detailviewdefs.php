<?php
$module_name = 'reqs_Requirements';
$_object_name = 'reqs_requirements';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'amount',
        ),
        1 => 
        array (
          0 => 'date_closed',
          1 => 'sales_stage',
        ),
        2 => 
        array (
          0 => 'reqs_requirements_type',
          1 => 'next_step',
        ),
        3 => 
        array (
          0 => 'lead_source',
          1 => 'date_entered',
        ),
        4 => 
        array (
          0 => 'probability',
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => 'date_modified',
        ),
        6 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_reqs_requirements_1_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'contacts_reqs_requirements_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
