<?php

class Quote_line_items{
	function add_code(&$bean, $event, $arguments){
             
		    $opportunity_id = $bean->opportunity_id_c; 
			$quote_id = $bean->id;        

            require_once('modules/Opportunities/Opportunity.php');
            $a_opportunity = new Opportunity();
			$a_opportunity->retrieve($opportunity_id);
			$items = $a_opportunity->get_linked_beans('opportunities_lines_line_items_1','lines_Line_Items');
			
			
            require_once('modules/quote_Quotations/quote_Quotations.php');
            $a_quote = new quote_Quotations();
			$a_quote->retrieve($quote_id);
			$a_quote->load_relationship('quote_quotations_lines_line_items_1');


			
			foreach($items as $item) {
				$oContact = BeanFactory::getBean('quote_Quotations', $quote_id); 
				$oContact->load_relationship('quote_quotations_lines_line_items_1'); 
				$oContact->quote_quotations_lines_line_items_1->add($item->id);	
				
			} 			

				

	}
}

?>