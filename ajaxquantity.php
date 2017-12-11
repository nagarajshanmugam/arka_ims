<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.stock_outward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
	
    $objstock_outward	= new stock_outward();

		
	if(isset($_GET['location']))
	{
        $objstock_outward->AjaxGetMaterialQuantityDetails($_GET);		
	}
	

?>