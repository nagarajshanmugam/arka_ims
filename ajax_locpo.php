<?php

   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.StockInward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
	
    $ObjStockInward	= new StockInward();

		
	if(isset($_GET['locpo_no']))
	{  
       $ObjStockInward->AjaxGetInwardlocPo($_GET);		
	
// $ObjStockInward->AjaxGetPoMaterialDetails($_GET);
 }	
?>