<?php
class quote_QuotationsController extends SugarController {

    function action_SubPanelViewer() {

        require_once 'include/SubPanel/SubPanelViewer.php';
        //$GLOBALS['log']->fatal(print_r($_REQUEST,TRUE));
        
        if ( $module == 'quote_Quotations')
        {

			$total_price = 0;
			$list = array();
			$quote = new quote_Quotations();
			$quote->retrieve($record);
			$items = $quote->get_linked_beans('quote_quotations_lines_line_items_1','lines_Line_Items');
			foreach($items as $item) {
				$total_price = $total_price + $item->total_price_c;
			} 
			
			$this->updateTotal($record, $module, $total_price);
		
			//$list = array("e", "s", "a");
			//$myList = implode("|" ,$list); 
			//$myList = "a,a,a,k";     
			$myList = $total_price; 

/*  
$js=<<<EOQ
<script>
mylist = "$myList";
alert(mylist);
</script>
EOQ;
echo $js;
*/

$js=<<<EOQ
<script>
window.location.reload();
</script>
EOQ;
echo $js;
  
  
        
        }
    }
    
    
///////////////////
function updateTotal($record, $module, $total_price)
{
global $db;
global $currentModule;
global $current_user;
global $sugar_config;
/*
$query="Update quote_quotations_cstm set total_amt_c= '".$total_price."' Where id_c= '".$record."'";
$result = $db->query($query);
if (!$result) {
$GLOBALS['log']->error("Invalid query: ".$query);
die('Query Failed');
}//if




$this->view = 'list';
return true;


    $updateQote = BeanFactory::retrieveBean($module, $record); 
        $updateQote->custom_fields->retrieve();
    $updateQote->total_amt_c = $total_price;
    $updateQote->save();          
*/

$focus = new quote_Quotations();
$focus->retrieve($record);
$focus->total_amt_c = $total_price;
$focus->save();

}// end function

/////////////////////    
    
}

?>