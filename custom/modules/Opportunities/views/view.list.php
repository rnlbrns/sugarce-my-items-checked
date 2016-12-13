<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('modules/Accounts/views/view.list.php');

class OpportunitiesViewList extends ViewList
{
    public function display()
    {
        parent::display();
        $this->processMyItems();
    }


    /**
     * @return $this
     */
    protected function processMyItems()
    {
        if(!isset($_REQUEST["saved_search_select"])) {
            $ss = new Sugar_Smarty();
            $ss->display("custom/utils/SearchFormExt.html");
        }

        return $this;
    }
}
