<?php
    require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
 	include_once $config['SiteClassPath']."class.Inward.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";

	$objStaff	= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
	
    $objInward	= new Inward();
    $objInward->GetInReportList($objArray);
	if(isset($_GET['from_date']) && isset($_GET['to_date']))
		{
    $objInward->GetInReportDate($_GET);
		}
  
  
  $objSmarty->assign('IncludeTpl', 'in_print.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].' -::-IMS -::- Software');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address', $config['SiteGlobalPath']);
  
			
  
  /*Display page*/
  
  $objSmarty->display('pagetemplate.tpl');
?>