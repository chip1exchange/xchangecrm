<?php
function smarty_function_sugar_test($params, &$smarty)
{
	
$tbl=<<<EOQ
<table width="400" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col">cal 1</th>
    <th scope="col">cal 2</th>
    <th scope="col">cal 3</th>
    <th scope="col">cal  4</th>
    <th scope="col">cal  5</th>
  </tr>
  <tr>
    <td>1&nbsp;</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
  </tr>
</table>
EOQ;
return $tbl;


}
?>