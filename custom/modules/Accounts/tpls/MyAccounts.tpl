                {php}
	function array_inarray(&$arr, $col, $dir = SORT_ASC) {
    	//return $arr;
		$sort_col = array();
		foreach ($arr as $key=> $row) {
			$sort_col[$key] = $row[$col];
		}
	
		array_multisort($sort_col, $dir, $arr);
	} 
    function testtest($a){echo "done";} 
     
function sugar_accounts2($label, $module)
{
$module = $module;
$label = $label;
$accounts2 = <<<EOD
<th scope="col" width="12%">
    <div style="white-space: normal;" width="100%" align="left">
        <a href='javascript:sListView.order_checks("ASC",$module,"Accounts2_ACCOUNT_ORDER_BY")' class="listViewThLinkS1">
            $label	&nbsp;&nbsp;
            {if $pageData.ordering.sortOrder == 'ASC'}
                {capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
                {capture assign="alt_sort"}{sugar_translate label='LBL_ALT_SORT_DESC'}{/capture}
                {sugar_getimage name=$imageName attr='align="absmiddle" border="0" ' alt="$alt_sort"}
            {else}
                {capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
                {capture assign="alt_sort"}{sugar_translate label='LBL_ALT_SORT_ASC'}{/capture}
                {sugar_getimage name=$imageName attr='align="absmiddle" border="0" ' alt="$alt_sort"}
            {/if}
        </a>
    </div>
</th>
EOD;
return $accounts2;							
}
 		
 
$myLbl = array("LBL_LIST_ACCOUNT_NAME", "LBL_TYPE", "LBL_BILLING_ADDRESS_COUNTRY", "LBL_LIST_CITY", "LBL_LIST_PHONE", "LBL_EMAIL_ADDRESS", "LBL_POTENTIAL_CUSTOMER", "LBL_RATING_CUSTOMER", "LBL_DEFAULT_CONTACT_CUSTOMER", "LBL_COMMENTS_CUSTOMER", "LBL_POTENTIAL_SUPPLIER", "LBL_RATING_SUPPLIER", "LBL_DEFAULT_CONTACT_SUPPLIER", "LBL_COMMENTS_SUPPLIER");
$this->assign("myLbl", $myLbl);

$myLabels = array("Name", "Type", "Billing Country", "Billing City", "Phone", "Email Address", "Potential", "Rating" ,"Default Contact", "Comments", "Potential", "Rating", "Default Contact", "Comments");
$this->assign("myLabels", $myLabels);

$myModule = array("name", "account_type", "billing_address_country",  "billing_address_city",  "phone_office",  "email1", "potential_customer_c", "rating_customer_c", "default_contact_customer_c", "comments_customer_c", "potential_supplier_c", "rating_supplier_c", "default_contact_supplier_c", "comments_supplier_c" );
$this->assign("myModule", $myModule);

//$myRung = array("efeec2", "dfeaec", "f7fba1",  "eeedc1",  "8ac3d7", "fde3c8" );
                
                {/php}
                
<style type="text/css">
{literal}
.flag {
	width: 16px;
	height: 11px;
	background:url(themes/Sugar5/images/flags.png) no-repeat
}

.flag.flag-ad {background-position: -16px 0}
.flag.flag-ae {background-position: -32px 0}
.flag.flag-af {background-position: -48px 0}
.flag.flag-ag {background-position: -64px 0}
.flag.flag-ai {background-position: -80px 0}
.flag.flag-al {background-position: -96px 0}
.flag.flag-am {background-position: -112px 0}
.flag.flag-an {background-position: -128px 0}
.flag.flag-ao {background-position: -144px 0}
.flag.flag-ar {background-position: -160px 0}
.flag.flag-as {background-position: -176px 0}
.flag.flag-at {background-position: -192px 0}
.flag.flag-au {background-position: -208px 0}
.flag.flag-aw {background-position: -224px 0}
.flag.flag-az {background-position: -240px 0}
.flag.flag-ba {background-position: 0 -11px}
.flag.flag-bb {background-position: -16px -11px}
.flag.flag-bd {background-position: -32px -11px}
.flag.flag-be {background-position: -48px -11px}
.flag.flag-bf {background-position: -64px -11px}
.flag.flag-bg {background-position: -80px -11px}
.flag.flag-bh {background-position: -96px -11px}
.flag.flag-bi {background-position: -112px -11px}
.flag.flag-bj {background-position: -128px -11px}
.flag.flag-bm {background-position: -144px -11px}
.flag.flag-bn {background-position: -160px -11px}
.flag.flag-bo {background-position: -176px -11px}
.flag.flag-br {background-position: -192px -11px}
.flag.flag-bs {background-position: -208px -11px}
.flag.flag-bt {background-position: -224px -11px}
.flag.flag-bv {background-position: -240px -11px}
.flag.flag-bw {background-position: 0 -22px}
.flag.flag-by {background-position: -16px -22px}
.flag.flag-bz {background-position: -32px -22px}
.flag.flag-ca {background-position: -48px -22px}
.flag.flag-cd {background-position: -64px -22px}
.flag.flag-cf {background-position: -80px -22px}
.flag.flag-cg {background-position: -96px -22px}
.flag.flag-ch {background-position: -112px -22px}
.flag.flag-ci {background-position: -128px -22px}
.flag.flag-ck {background-position: -144px -22px}
.flag.flag-cl {background-position: -160px -22px}
.flag.flag-cm {background-position: -176px -22px}
.flag.flag-cn {background-position: -192px -22px}
.flag.flag-co {background-position: -208px -22px}
.flag.flag-cr {background-position: -224px -22px}
.flag.flag-cu {background-position: -240px -22px}
.flag.flag-cv {background-position: 0 -33px}
.flag.flag-cy {background-position: -16px -33px}
.flag.flag-cz {background-position: -32px -33px}
.flag.flag-de {background-position: -48px -33px}
.flag.flag-dj {background-position: -64px -33px}
.flag.flag-dk {background-position: -80px -33px}
.flag.flag-dm {background-position: -96px -33px}
.flag.flag-do {background-position: -112px -33px}
.flag.flag-dz {background-position: -128px -33px}
.flag.flag-ec {background-position: -144px -33px}
.flag.flag-ee {background-position: -160px -33px}
.flag.flag-eg {background-position: -176px -33px}
.flag.flag-eh {background-position: -192px -33px}
.flag.flag-er {background-position: -208px -33px}
.flag.flag-es {background-position: -224px -33px}
.flag.flag-et {background-position: -240px -33px}
.flag.flag-fi {background-position: 0 -44px}
.flag.flag-fj {background-position: -16px -44px}
.flag.flag-fk {background-position: -32px -44px}
.flag.flag-fm {background-position: -48px -44px}
.flag.flag-fo {background-position: -64px -44px}
.flag.flag-fr {background-position: -80px -44px}
.flag.flag-ga {background-position: -96px -44px}
.flag.flag-gb {background-position: -112px -44px}
.flag.flag-gd {background-position: -128px -44px}
.flag.flag-ge {background-position: -144px -44px}
.flag.flag-gf {background-position: -160px -44px}
.flag.flag-gg {background-position: -176px -44px}
.flag.flag-gh {background-position: -192px -44px}
.flag.flag-gi {background-position: -208px -44px}
.flag.flag-gl {background-position: -224px -44px}
.flag.flag-gm {background-position: -240px -44px}
.flag.flag-gn {background-position: 0 -55px}
.flag.flag-gp {background-position: -16px -55px}
.flag.flag-gq {background-position: -32px -55px}
.flag.flag-gr {background-position: -48px -55px}
.flag.flag-gs {background-position: -64px -55px}
.flag.flag-gt {background-position: -80px -55px}
.flag.flag-gu {background-position: -96px -55px}
.flag.flag-gw {background-position: -112px -55px}
.flag.flag-gy {background-position: -128px -55px}
.flag.flag-hk {background-position: -144px -55px}
.flag.flag-hm {background-position: -160px -55px}
.flag.flag-hn {background-position: -176px -55px}
.flag.flag-hr {background-position: -192px -55px}
.flag.flag-ht {background-position: -208px -55px}
.flag.flag-hu {background-position: -224px -55px}
.flag.flag-id {background-position: -240px -55px}
.flag.flag-ie {background-position: 0 -66px}
.flag.flag-il {background-position: -16px -66px}
.flag.flag-in {background-position: -32px -66px}
.flag.flag-iq {background-position: -48px -66px}
.flag.flag-ir {background-position: -64px -66px}
.flag.flag-is {background-position: -80px -66px}
.flag.flag-it {background-position: -96px -66px}
.flag.flag-je {background-position: -112px -66px}
.flag.flag-jm {background-position: -128px -66px}
.flag.flag-jo {background-position: -144px -66px}
.flag.flag-jp {background-position: -160px -66px}
.flag.flag-ke {background-position: -176px -66px}
.flag.flag-kg {background-position: -192px -66px}
.flag.flag-kh {background-position: -208px -66px}
.flag.flag-ki {background-position: -224px -66px}
.flag.flag-km {background-position: -240px -66px}
.flag.flag-kn {background-position: 0 -77px}
.flag.flag-kp {background-position: -16px -77px}
.flag.flag-kr {background-position: -32px -77px}
.flag.flag-kw {background-position: -48px -77px}
.flag.flag-ky {background-position: -64px -77px}
.flag.flag-kz {background-position: -80px -77px}
.flag.flag-la {background-position: -96px -77px}
.flag.flag-lb {background-position: -112px -77px}
.flag.flag-lc {background-position: -128px -77px}
.flag.flag-li {background-position: -144px -77px}
.flag.flag-lk {background-position: -160px -77px}
.flag.flag-lr {background-position: -176px -77px}
.flag.flag-ls {background-position: -192px -77px}
.flag.flag-lt {background-position: -208px -77px}
.flag.flag-lu {background-position: -224px -77px}
.flag.flag-lv {background-position: -240px -77px}
.flag.flag-ly {background-position: 0 -88px}
.flag.flag-ma {background-position: -16px -88px}
.flag.flag-mc {background-position: -32px -88px}
.flag.flag-md {background-position: -48px -88px}
.flag.flag-me {background-position: -64px -88px}
.flag.flag-mg {background-position: -80px -88px}
.flag.flag-mh {background-position: -96px -88px}
.flag.flag-mk {background-position: -112px -88px}
.flag.flag-ml {background-position: -128px -88px}
.flag.flag-mm {background-position: -144px -88px}
.flag.flag-mn {background-position: -160px -88px}
.flag.flag-mo {background-position: -176px -88px}
.flag.flag-mp {background-position: -192px -88px}
.flag.flag-mq {background-position: -208px -88px}
.flag.flag-mr {background-position: -224px -88px}
.flag.flag-ms {background-position: -240px -88px}
.flag.flag-mt {background-position: 0 -99px}
.flag.flag-mu {background-position: -16px -99px}
.flag.flag-mv {background-position: -32px -99px}
.flag.flag-mw {background-position: -48px -99px}
.flag.flag-mx {background-position: -64px -99px}
.flag.flag-my {background-position: -80px -99px}
.flag.flag-mz {background-position: -96px -99px}
.flag.flag-na {background-position: -112px -99px}
.flag.flag-nc {background-position: -128px -99px}
.flag.flag-ne {background-position: -144px -99px}
.flag.flag-nf {background-position: -160px -99px}
.flag.flag-ng {background-position: -176px -99px}
.flag.flag-ni {background-position: -192px -99px}
.flag.flag-nl {background-position: -208px -99px}
.flag.flag-no {background-position: -224px -99px}
.flag.flag-np {background-position: -240px -99px}
.flag.flag-nr {background-position: 0 -110px}
.flag.flag-nu {background-position: -16px -110px}
.flag.flag-nz {background-position: -32px -110px}
.flag.flag-om {background-position: -48px -110px}
.flag.flag-pa {background-position: -64px -110px}
.flag.flag-pe {background-position: -80px -110px}
.flag.flag-pf {background-position: -96px -110px}
.flag.flag-pg {background-position: -112px -110px}
.flag.flag-ph {background-position: -128px -110px}
.flag.flag-pk {background-position: -144px -110px}
.flag.flag-pl {background-position: -160px -110px}
.flag.flag-pm {background-position: -176px -110px}
.flag.flag-pn {background-position: -192px -110px}
.flag.flag-pr {background-position: -208px -110px}
.flag.flag-ps {background-position: -224px -110px}
.flag.flag-pt {background-position: -240px -110px}
.flag.flag-pw {background-position: 0 -121px}
.flag.flag-py {background-position: -16px -121px}
.flag.flag-qa {background-position: -32px -121px}
.flag.flag-re {background-position: -48px -121px}
.flag.flag-ro {background-position: -64px -121px}
.flag.flag-rs {background-position: -80px -121px}
.flag.flag-ru {background-position: -96px -121px}
.flag.flag-rw {background-position: -112px -121px}
.flag.flag-sa {background-position: -128px -121px}
.flag.flag-sb {background-position: -144px -121px}
.flag.flag-sc {background-position: -160px -121px}
.flag.flag-sd {background-position: -176px -121px}
.flag.flag-se {background-position: -192px -121px}
.flag.flag-sg {background-position: -208px -121px}
.flag.flag-sh {background-position: -224px -121px}
.flag.flag-si {background-position: -240px -121px}
.flag.flag-sk {background-position: 0 -132px}
.flag.flag-sm {background-position: -16px -132px}
.flag.flag-sn {background-position: -32px -132px}
.flag.flag-so {background-position: -48px -132px}
.flag.flag-sr {background-position: -64px -132px}
.flag.flag-st {background-position: -80px -132px}
.flag.flag-sv {background-position: -96px -132px}
.flag.flag-sy {background-position: -112px -132px}
.flag.flag-sz {background-position: -128px -132px}
.flag.flag-tc {background-position: -144px -132px}
.flag.flag-td {background-position: -160px -132px}
.flag.flag-tf {background-position: -176px -132px}
.flag.flag-tg {background-position: -192px -132px}
.flag.flag-th {background-position: -208px -132px}
.flag.flag-tj {background-position: -224px -132px}
.flag.flag-tk {background-position: -240px -132px}
.flag.flag-tl {background-position: 0 -143px}
.flag.flag-tm {background-position: -16px -143px}
.flag.flag-tn {background-position: -32px -143px}
.flag.flag-to {background-position: -48px -143px}
.flag.flag-tr {background-position: -64px -143px}
.flag.flag-tt {background-position: -80px -143px}
.flag.flag-tv {background-position: -96px -143px}
.flag.flag-tw {background-position: -112px -143px}
.flag.flag-tz {background-position: -128px -143px}
.flag.flag-ua {background-position: -144px -143px}
.flag.flag-ug {background-position: -160px -143px}
.flag.flag-um {background-position: -176px -143px}
.flag.flag-us {background-position: -192px -143px}
.flag.flag-uy {background-position: -208px -143px}
.flag.flag-uz {background-position: -224px -143px}
.flag.flag-va {background-position: -240px -143px}
.flag.flag-vc {background-position: 0 -154px}
.flag.flag-ve {background-position: -16px -154px}
.flag.flag-vg {background-position: -32px -154px}
.flag.flag-vi {background-position: -48px -154px}
.flag.flag-vn {background-position: -64px -154px}
.flag.flag-vu {background-position: -80px -154px}
.flag.flag-wf {background-position: -96px -154px}
.flag.flag-ws {background-position: -112px -154px}
.flag.flag-ye {background-position: -128px -154px}
.flag.flag-yt {background-position: -144px -154px}
.flag.flag-za {background-position: -160px -154px}
.flag.flag-zm {background-position: -176px -154px}
.flag.flag-zw {background-position: -192px -154px}

{/literal}
</style>

<script type="text/javascript">
{literal}
	$(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	  		$(node).sugarActionMenu();
	  	});

        $('.selectActionsDisabled').children().each(function(index) {
            $(this).attr('onclick','').unbind('click');
        });
        
        var selectedTopValue = $("#selectCountTop").attr("value");
        if(typeof(selectedTopValue) != "undefined" && selectedTopValue != "0"){
        	sugarListView.prototype.toggleSelected();
        }
	});
{/literal}	
</script>
{assign var="currentModule" value = $pageData.bean.moduleDir}
{assign var="singularModule" value = $moduleListSingular.$currentModule}
{assign var="moduleName" value = $moduleList.$currentModule}
{assign var="hideTable" value=false}

{if count($data) == 0}
	{assign var="hideTable" value=true}
	<div class="list view listViewEmpty">
    {if $displayEmptyDataMesssages}
        {if strlen($query) == 0}
                {capture assign="createLink"}<a href="?module={$pageData.bean.moduleDir}&action=EditView&return_module={$pageData.bean.moduleDir}&return_action=DetailView">{$APP.LBL_CREATE_BUTTON_LABEL}</a>{/capture}
                {capture assign="importLink"}<a href="?module=Import&action=Step1&import_module={$pageData.bean.moduleDir}&return_module={$pageData.bean.moduleDir}&return_action=index">{$APP.LBL_IMPORT}</a>{/capture}
                {capture assign="helpLink"}<a target="_blank" href='?module=Administration&action=SupportPortal&view=documentation&version={$sugar_info.sugar_version}&edition={$sugar_info.sugar_flavor}&lang=&help_module={$currentModule}&help_action=&key='>{$APP.LBL_CLICK_HERE}</a>{/capture}
                <p class="msg">
                    {$APP.MSG_EMPTY_LIST_VIEW_NO_RESULTS|replace:"<item2>":$createLink|replace:"<item3>":$importLink}
                </p>
                <p class="submsg">
                    {$APP.MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG|replace:"<item1>":$moduleName|replace:"<item4>":$helpLink}
                </p>
        {elseif $query == "-advanced_search"}
            <p class="msg">
                {$APP.MSG_LIST_VIEW_NO_RESULTS_BASIC}
            </p>
        {else}
            <p class="msg">
                {capture assign="quotedQuery"}"{$query}"{/capture}
                {$APP.MSG_LIST_VIEW_NO_RESULTS|replace:"<item1>":$quotedQuery}
            </p>
            <p class = "submsg">
                <a href="?module={$pageData.bean.moduleDir}&action=EditView&return_module={$pageData.bean.moduleDir}&return_action=DetailView">
                    {$APP.MSG_LIST_VIEW_NO_RESULTS_SUBMSG|replace:"<item1>":$quotedQuery|replace:"<item2>":$singularModule}
                </a>

            </p>
        {/if}
    {else}
        <p class="msg">
            {$APP.LBL_NO_DATA}
        </p>
	{/if}
	</div>
{/if}
{$multiSelectData}
{if $hideTable == false}
	<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'  style="border-collapse: collapse;">
    {assign var="link_select_id" value="selectLinkTop"}
    {assign var="link_action_id" value="actionLinkTop"}
    {assign var="actionsLink" value=$actionsLinkTop}
    {assign var="selectLink" value=$selectLinkTop}
    {assign var="action_menu_location" value="top"}
	{include file='include/ListView/ListViewPagination.tpl'}
    <tr style="text-align:center; background:#4d90fe; height:35px;">
        <td style="text-align:center;" colspan="5"  >&nbsp;</td>
        <td style="text-align:center; color:#fff;border-left:1px solid rgba(216,213,213,1.00);  font-weight:bold;"  colspan="5"  >Customer</td>
        <td style="text-align:center; color:#fff;border-left:1px solid rgba(216,213,213,1.00); font-weight:bold;"  colspan="7"  >Supplier</td>
    </tr>
	<tr height='30'>
			{if $prerow}
				<td width='1%' class="td_alt">&nbsp;
					
				</td>
			{/if}
			{if !empty($quickViewLinks)}
			<td class='td_alt' width='1%' style="padding: 0px;">&nbsp;</td>
			{/if}
           
			{counter start=0 name="colCounter" print=false assign="colCounter"}
			{foreach from=$displayColumns key=colHeader item=params}
				{if  $colCounter==0 || $colCounter==1 || $colCounter>5}
                {if  $colCounter==1}
                <th scope="col" >
                    <div style="white-space: normal;" width="100%" align="left">
                    	Contact
                    </div>
                </th>
                {/if}
                {if  $colCounter==9}
                <th scope="col" >
                    <div style="white-space: normal;" width="100%" align="left">
                    	Last Transaction
                    </div>
                </th>
                {/if}
                {if  $colCounter==13}
                <th scope="col" >
                    <div style="white-space: normal;" width="100%" align="left">
                    	Last Transaction
                    </div>
                </th>
                {/if}
                <th scope="col" >
                    <div style="white-space: normal;" width="100%" align="left">
                    	{if $colCounter=='0' || $colCounter=='1' }
                            <a href='javascript:sListView.order_checks("ASC","{$myModule[$colCounter]}","Accounts2_ACCOUNT_ORDER_BY")' class="listViewThLinkS1">
                                
                                {$myLabels[$colCounter]}	&nbsp;&nbsp;
                                {assign var="shortLbl" value=$myModule[$colCounter]}
                            {if  $myModule[$colCounter] == $pageData.ordering.orderBy}
                                {if $pageData.ordering.sortOrder == 'ASC'}
                                    {capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
                                    {capture assign="alt_sort"}{sugar_translate label='LBL_ALT_SORT_DESC'}{/capture}
                                    {sugar_getimage name=$imageName attr='align="absmiddle" border="0" ' alt="$alt_sort"}
                                {else}
                                    {capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
                                    {capture assign="alt_sort"}{sugar_translate label='LBL_ALT_SORT_ASC'}{/capture}
                                    {sugar_getimage name=$imageName attr='align="absmiddle" border="0" ' alt="$alt_sort"}
                                {/if}
                            {else}
                                {capture assign="imageName"}arrow.{$arrowExt}{/capture}
                                {capture assign="alt_sort"}{sugar_translate label='LBL_ALT_SORT'}{/capture}
                                {sugar_getimage name=$imageName attr='align="absmiddle" border="0" ' alt="$alt_sort"}
                            {/if}
                            </a>
                       {else}
                       	{$myLabels[$colCounter]}
                       {/if}
                    </div>
                </th>
				{/if}
                
				{counter name="colCounter"}
			{/foreach}
			<td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
		</tr>
			
		{counter start=$pageData.offsets.current print=false assign="offset" name="offset"}	
		{foreach name=rowIteration from=$data key=id item=rowData}
		    {counter name="offset" print=false}
	        {assign var='scope_row' value=true}
	
			{if $smarty.foreach.rowIteration.iteration is odd}
				{assign var='_rowColor' value=$rowColor[0]}
			{else}
				{assign var='_rowColor' value=$rowColor[1]}
			{/if}

			<tr height='20' class='{$_rowColor}S1' style="border-top: 1px solid #c5c3c3; background:#{sugar_xutility  
            prams=$rowData.ACCOUNT_TYPE module=$pageData.bean.moduleDir}">
				{if $prerow}
				<td width='1%' class='nowrap'>
				 {if !$is_admin && is_admin_for_user && $rowData.IS_ADMIN==1}
						<input type='checkbox' disabled="disabled" class='checkbox' value='{$rowData.ID}'>
				 {else}
	                    <input title="{sugar_translate label='LBL_SELECT_THIS_ROW_TITLE'}" onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='{$rowData.ID}'>
				 {/if}
				</td>
				{/if}
				{if !empty($quickViewLinks)}
	            {capture assign=linkModule}{if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$pageData.bean.moduleDir}{/if}{/capture}
	            {capture assign=action}{if $act}{$act}{else}EditView{/if}{/capture}
				<td width='2%' nowrap>
	                {if $pageData.rowAccess[$id].edit}
	                <a title='{$editLinkString}' id="edit-{$rowData.ID}"
	href="index.php?module={$linkModule}&offset={$offset}&stamp={$pageData.stamp}&return_module={$linkModule}&action={$action}&record={$rowData.ID}"
	                >
	                    {capture name='tmp1' assign='alt_edit'}{sugar_translate label="LNK_EDIT"}{/capture}
	                    {sugar_getimage name="edit_inline.gif" attr='border="0" ' alt="$alt_edit"}</a>
	                {/if}
	            </td>

				{/if}
				{counter start=0 name="colCounter" print=false assign="colCounter"}
				{foreach from=$displayColumns key=col item=params}
                {if $colCounter==7 || $colCounter==12}
                {assign var='myAlign' value=center}
                {else}
                {assign var='myAlign' value=left}
                {/if}
				    {strip}
					<td {if $scope_row} scope='row' {/if} align='{$params.align|default:$myAlign}' valign="top" class="{if ($params.type == 'teamset')}nowrap{/if}{if preg_match('/PHONE/', $col)} phone{/if}" {if $colCounter==3 || $colCounter==8 }  style="border-left: 1px solid #000;" {else if false} style="border-left: 1px solid #c5c3c3;" {/if}>
						{if $col == 'NAME' || $params.bold}<b>{/if}
					    {if $params.link && !$params.customCode && $colCounter!=8 && $colCounter!=12}
	{capture assign=linkModule}{if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$params.module|default:$pageData.bean.moduleDir}{/if}{/capture}
	{capture assign=action}{if $act}{$act}{else}DetailView{/if}{/capture}
	{capture assign=record}{$rowData[$params.id]|default:$rowData.ID}{/capture}
	{capture assign=url}index.php?module={$linkModule}&offset={$offset}&stamp={$pageData.stamp}&return_module={$linkModule}&action={$action}&record={$record}{/capture}
	                        <{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN} href="{sugar_ajax_url url=$url}">
						{/if}
						{if $params.customCode} 
                            <a href="mailto:{$rowData.EMAIL}"><img src="themes/Sugar5/images/Emails_favico.png" border="0" ></a>
						{else}
                        
                                {if  $colCounter==0} 
                                    {$rowData.NAME}
                                {/if}
                                {if  $colCounter==1} 
                                    <img src="themes/Sugar5/images/blank.gif" class="flag flag-us"  style="padding-top:2px;" />
                                    &nbsp;
                                    <a href="mailto:{$rowData.EMAIL1}"><img src="themes/Sugar5/images/Emails_favico.png" border="0" title="{$rowData.EMAIL1}"></a>
                                    &nbsp;
                                    <img src="themes/Sugar5/images/phone.png" title="{$rowData.PHONE_OFFICE}" height="17">
                                {/if}
                                {if  $colCounter==2} 
                                    {$rowData.ACCOUNT_TYPE}
                                {/if}
                                {if  $colCounter==3} 
                                    {$rowData.POTENTIAL_CUSTOMER_C}
                                {/if}
                                {if  $colCounter==4} 
                              <span style="display: block; width: 65px; height: 13px; background: url(themes/Sugar5/images/star-rating-sprite.png) 0 0;">
    							<span style="display: block; width: {$rowData.RATING_CUSTOMER_C*100/5}%; height: 13px; background: url(themes/Sugar5/images/star-rating-sprite.png) 0 -13px;"></span>
  	           				  </span>
                                {/if}
                                {if  $colCounter==5} 
                                    &nbsp;
                                {/if}
                                {if  $colCounter==6} 
                                    {sugar_accounts2 myID=$rowData.ID module=$pageData.bean.moduleDir}
                                {/if}
                                {if  $colCounter==7} 
                                   <img src="themes/Sugar5/images/comments.png" height="15" title="{$rowData.COMMENTS_CUSTOMER_C}">
                                {/if}
                                {if  $colCounter==8} 
                                   {$rowData.POTENTIAL_SUPPLIER_C}
                                {/if}
                                {if  $colCounter==9} 
                              <span style="display: block; width: 65px; height: 13px; background: url(themes/Sugar5/images/star-rating-sprite.png) 0 0;">
    							<span style="display: block; width: {$rowData.RATING_SUPPLIER_C*100/5}%; height: 13px; background: url(themes/Sugar5/images/star-rating-sprite.png) 0 -13px;"></span>
  	           				  </span>
                                {/if}
                                {if  $colCounter==10} 
                                    &nbsp;
                                {/if}
                                {if  $colCounter==11} 
                                    {sugar_accounts2 myID=$rowData.ID module=$pageData.bean.moduleDir}
                                {/if}
                                {if  $colCounter==12} 
                                   <img src="themes/Sugar5/images/comments.png" height="15" title="{$rowData.COMMENTS_SUPPLIER_C}">
                                {/if}
                               
                            
						{/if}
						{if empty($rowData.$col) && empty($params.customCode)}&nbsp;{/if}
						{if $params.link && !$params.customCode}
							</{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN}>
	                    {/if}
	                    {if $col == 'NAME' || $params.bold}</b>{/if}
					</td>
					{/strip}
	                {assign var='scope_row' value=false}
					{counter name="colCounter"}
				{/foreach}
				<td align='right'>{$pageData.additionalDetails.$id}</td>
		    	</tr>
		{foreachelse}
		<tr height='20' class='{$rowColor[0]}S1'>
		    <td colspan="{$colCount}">
		        <em>{$APP.LBL_NO_DATA}</em>
		    </td>
		</tr> 
		{/foreach}
    {assign var="link_select_id" value="selectLinkBottom"}
    {assign var="link_action_id" value="actionLinkBottom"}
    {assign var="selectLink" value=$selectLinkBottom}
    {assign var="actionsLink" value=$actionsLinkBottom}
    {assign var="action_menu_location" value="bottom"}
    {include file='include/ListView/ListViewPagination.tpl'}
	</table>
{/if}
{if $contextMenus}
<script type="text/javascript">
{$contextMenuScript}
{literal}
function lvg_nav(m,id,act,offset,t){
    if(t.href.search(/#/) < 0){return;}
    else{
        if(act=='pte'){
            act='ProjectTemplatesEditView';
        }
        else if(act=='d'){
            act='DetailView';
        }else if( act =='ReportsWizard'){
            act = 'ReportsWizard';
        }else{
            act='EditView';
        }
    {/literal}
        url = 'index.php?module='+m+'&offset=' + offset + '&stamp={$pageData.stamp}&return_module='+m+'&action='+act+'&record='+id;
        t.href=url;
    {literal}
    }
}{/literal}
{literal}
    function lvg_dtails(id){{/literal}
        return SUGAR.util.getAdditionalDetails( '{$pageData.bean.moduleDir|default:$params.module}',id, 'adspan_'+id);{literal}}{/literal}
</script>
{/if}
<script type="text/javascript">
{literal}
//sListView.order_checks("ASC",'account_type','Accounts2_ACCOUNT_ORDER_BY');
{/literal}
</script>
