<?php
    $hook_array = Array(); 
    $hook_array['after_save'] = Array(); 
    $hook_array['after_save'][] = Array(
        1,
        'Quote_line_items',
        'custom/modules/quote_Quotations/logic_hooks/Quote_line_items.php',
        'Quote_line_items',
        'add_code'
    );
?>