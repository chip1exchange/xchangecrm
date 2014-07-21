<?php
class OpportunitiesController extends SugarController {

    function action_SubPanelViewer() {
        require_once 'include/SubPanel/SubPanelViewer.php';
        if ( $module == 'Opportunities')
        {
			
			$total_price = 0;
			$list = array();
			$quote = new Opportunity();
			$quote->retrieve($record);
			$items = $quote->get_linked_beans('opportunities_lines_line_items_1','lines_Line_Items');
			foreach($items as $item) {
				$total_price = $total_price + $item->total_price_c;
			} 
			
			$this->updateTotal($record, $module, $total_price);
		
			//$myList = $total_price; 
			

$js=<<<EOQ
<script>
window.location.reload();
</script>
EOQ;
echo $js;
 
  
        
        }
    }
    
    
    function updateTotal($record, $module, $total_price)
    {
        $focus = new Opportunity();
        $focus->retrieve($record);
        $focus->total_amt_c = $total_price;
        $focus->save();
    }
    
}

?>