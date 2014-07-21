<?php 

require_once('modules/Accounts/views/view.list.php');
class CustomAccountsViewList extends AccountsViewList {
 
function __constructor(){
parent::ViewList();
}
/*	function listViewProcess(){
	$this->processSearchForm();
	$this->searchColumns = $this->searchColumns;
	if(!$this->headers)
	return;
	if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
	$this->lv->setup($this->seed, 'custom/modules/Contacts/tpls/ListViewContacts.tpl', $this->where, $this->params);
	$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
	echo get_form_header($GLOBALS['mod_strings']['LBL_LIST_FORM_TITLE'] . $savedSearchName, '', false);
	echo $this->lv->display();
	}
	}
*/	
    function listViewProcess(){
        $this->processSearchForm();
        $this->lv->searchColumns = $this->searchForm->searchColumns;

        if(!$this->headers)
            return;
        if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
            $this->lv->ss->assign("SEARCH",true);
            $this->lv->setup($this->seed, 'custom/modules/Accounts/tpls/MyAccounts.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();
        }
    }
	///////////////////
	function listViewPrepare() {
	  if(empty($_REQUEST['orderBy'])) {
		$_REQUEST['orderBy'] = 'accounts.account_type desc';
	  }
	
	  parent::listViewPrepare();
	}	
	
		
}?>