<?php

class Multi_Requirements{
	function multiRequirements(&$bean, $event, $arguments){
		
		$str = $bean->requirement_text_c;

    $arrayRow = array();
    $arrayColumn = array();
    $values = array();
	$arrayParts = array();
	$arrayLineItems = array();
	$total_price = 0;
	
	$arrayRow = preg_split("/[\r\n,]+/", $str, -1, PREG_SPLIT_NO_EMPTY);
	//$arrayRow = array_filter( $arrayRow, 'strlen' );

	$r = 0;
	foreach($arrayRow as $aRow){
		$c = 0;
		$values = preg_split("/[\s,]+/", $aRow);
		foreach($values as $aColumn){
			$arrayColumn[$r][$c]=$aColumn;
			$c++;
		}
		$r++;
	}
	
	
	foreach($arrayColumn as $myRows){
		foreach($myRows as $myCol){
			//echo $myCol . " ";
		}
		//echo "<br>";
	}

      
			$tot_rows = count($arrayRow);
			for($i=0; $i<$tot_rows;$i++){
				//echo $arrayColumn[$i][0] . "<br>";
				$c1x_part = BeanFactory::newBean('parts_Parts');
				$c1x_part->retrieve_by_string_fields(array('name' => $arrayColumn[$i][0] ));
				//echo $focus->id;
				//echo $focus->fetched_row['id'];
				if (empty($c1x_part->fetched_row['id']))
				{
					//echo "not found";
					$c1x_part->name = $arrayColumn[$i][0];
					$c1x_part->description = "Created while making requirement";
					$c1x_part->save();
					$arrayParts[] = $c1x_part->id;					
				} else {
					$arrayParts[] = $c1x_part->id;	
				}
			}

			$i=0;
			foreach($arrayParts as $aPart){
				$c1x_lineitem = BeanFactory::newBean('lines_Line_Items'); 
				$c1x_lineitem->name = $arrayColumn[$i][0]."-".$arrayColumn[$i][1];
				$c1x_lineitem->quantity_c = $arrayColumn[$i][1];
				$c1x_lineitem->total_price_c = $arrayColumn[$i][2];
				$c1x_lineitem->save();
				
				$c1x_lineitem->load_relationship('parts_parts_lines_line_items_1'); 
				$c1x_lineitem->parts_parts_lines_line_items_1->add($aPart);	
				$i++;
			}

			$bean->requirement_text_c="";
			
			$items = $bean->get_linked_beans('opportunities_lines_line_items_1','lines_Line_Items');
			foreach($items as $item) {
				$total_price = $total_price + $item->total_price_c;
			} 			
			
			$bean->total_amt_c = $total_price;
			
			$bean->save();

	}
	
	function C1X_New_Bean(){
		
	}
	
	function C1X_New_LineItem($arrayParts){
		
	}
	
}

?>