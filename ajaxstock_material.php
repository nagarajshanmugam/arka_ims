<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.stock_outward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
	
    $objstock_outward	= new stock_outward();

		
	if(isset($_GET['mat_code']))
	{
        $objstock_outward->AjaxGetMaterialDetails($_GET);		
	}
		if(isset($_GET['material_code2']))
	{
        $objstock_outward->AjaxGetPickerMaterialDetails($_GET);		
	}
   if(isset($_GET['mat_code2']) && isset($_GET['so']))
	{
        $objstock_outward->AjaxGetSOMaterialDetails($_GET);		
	}
	if(isset($_GET['mat_code3']) && isset($_GET['inw']))
	{
        $objstock_outward->AjaxGetInwMaterialDetails($_GET);		
	}
	

?>