<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.stock_outward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
	
    $objstock_outward	= new stock_outward();

		
	if(isset($_GET['picker_name']) && isset($_GET['salut']) && isset($_GET['fname']) && isset($_GET['lname']))
	{ 
        $objstock_outward->AjaxGetPickerId($_GET);		
	}
	

?>