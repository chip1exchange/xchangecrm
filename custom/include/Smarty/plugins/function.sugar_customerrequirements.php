<?php
function smarty_function_sugar_customerrequirements($params, &$smarty)
{

		$var = "";
		$testvar = "test value";
		$db = DBManagerFactory::getInstance();       
		 $list = array();
		 
		$industry = $_POST['Industry'];
		$result = $db->query("SELECT * FROM parts_parts WHERE name = '" . $params['myPart']."'");       
		$row = $db->fetchRow($result);
		
		$a_opportunity = new parts_Parts();
		$a_opportunity->retrieve($row['id']);
		$items = $a_opportunity->get_linked_beans('parts_parts_lines_line_items_1','lines_Line_Items');
		
		$myRows = 1;
		foreach($items as $item) {
			$var .= "
			  <tr height=\"20\" class=".(($myRows % 2==0)?"evenListRowS1":"oddListRowS1").">
				 <td width=\"1%\" class=\"nowrap\">
						<input type=\"checkbox\" disabled=\"disabled\" class=\"checkbox\" value=\"rowData.ID\">
				</td>
			
				<td width=\"2%\" nowrap>
				<a title=\"editLinkString\" id=\"edit-rowData.ID\"
			href=\"index.php?module=linkModule&offset=offset&stamp=pageData.stamp&return_module=linkModule&action=action&record=rowData.ID\"
				></a>
				</td>
			
				<td scope=\"row\"  valign=\"top\">
					 <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
					  <tr>
						<td scope=\"row\" style=\"border: 1px solid #d0d0d2;\">".$row['name'] ."</td>
					  </tr>
					  <tr>
						<td style=\"border: 1px solid #d0d0d2;\"># of Reqs</td>
					  </tr>
					</table>
				</td>
				<td scope=\"row\"  valign=\"top\">
					 <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
					  <tr>
						<td scope=\"row\" style=\"border: 1px solid #d0d0d2;\">QOH-QA=QAS</td>
					  </tr>
					  <tr>
						<td style=\"border: 1px solid #d0d0d2;\">SA: Days/Weeks</td>
					  </tr>
					</table>
				</td>
				<td scope=\"row\"  valign=\"top\">
					 <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
					  <tr>
						<td scope=\"row\" style=\"border: 1px solid #d0d0d2;\">PN/IPN</td>
					  </tr>
					  <tr>
						<td style=\"border: 1px solid #d0d0d2;\">ICP(EPF), ECP(EPF)</td>
					  </tr>
					</table>
				</td>
				<td scope=\"row\"  valign=\"top\">
					 <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
					  <tr>
						<td scope=\"row\" style=\"border: 1px solid #d0d0d2;\">Company</td>
					  </tr>
					  <tr>
						<td style=\"border: 1px solid #d0d0d2;\">ROHS</td>
					  </tr>
					</table>
				</td>
				<td scope=\"row\"  valign=\"top\">
					 <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
					  <tr>
						<td scope=\"row\" style=\"border: 1px solid #d0d0d2;\">DC</td>
					  </tr>
					  <tr>
						<td style=\"border: 1px solid #d0d0d2;\">Packaging</td>
					  </tr>
					</table>
				</td>
				<td scope=\"row\"  valign=\"top\">Source Company</td>
				
				<td align=\"right\">pageData.additionalDetails.id</td>
			  </tr>
			";
			$myRows++;
	}	
	//foreach
			
$tbl=<<<EOQ
<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
  <tr height='20'>
	<td width='1%' class="td_alt">&nbsp;</td>
    <td class='td_alt' width='1%' style="padding: 0px;">&nbsp;</td>
    
	<th scope='col' width='20%'>
        <div style='white-space: normal;'width='100%' align='center'>
            Name
            &nbsp;&nbsp;
        </div>
    </th>

    <th scope='col' width='10%'>
        <div style='white-space: normal;'width='100%' align='center'>
            QTY
            &nbsp;&nbsp;
        </div>
    </th>

    <th scope='col' width='15%'>
        <div style='white-space: normal;'width='100%' align='center'>
            PN
            &nbsp;&nbsp;
        </div>
    </th>
    
    <th scope='col' width='10%'>
        <div style='white-space: normal;'width='100%' align='center'>
            MFG
            &nbsp;&nbsp;
        </div>
    </th>
    
    <th scope='col' width='10%'>
        <div style='white-space: normal;'width='100%' align='center'>
            DC
            &nbsp;&nbsp;
        </div>
    </th>
    
    <th scope='col' width='10%'>
        <div style='white-space: normal;'width='100%' align='center'>
            Source
            &nbsp;&nbsp;
        </div>
    </th>
    
    
    <td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>

	
  </tr>

$var

</table>
EOQ;
return $tbl;
//return var_dump($items);
//return $name;


	
}
?>