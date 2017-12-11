<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.StockInward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjStockInward	= new StockInward();

		
	if(isset($_GET['material_code']))
	{
        $ObjStockInward->AjaxGetMaterialDetails($_GET);		
	}
	

?>