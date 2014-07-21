<?php
    $hook_array = Array(); 
    $hook_array['after_save'] = Array(); 
    $hook_array['after_save'][] = Array(
        1,
        'MultiRequirements',
        'custom/modules/Opportunities/logic_hooks/Multi_Requirements.php',
        'Multi_Requirements',
        'multiRequirements'
    );
?>