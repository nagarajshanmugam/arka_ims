<?php
  require('includes/common.php');
  include_once $config['SiteClassPath']."class.Staff.php";
  include_once $config['SiteClassPath']."class.CustomerMgmt.php";
 include_once $config['SiteClassPath']."class.split_page_results.php"; 
  	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists($objArray);
  	$objCustomerMgmt	= new CustomerMgmt();
//	$objvendorReg->RoleList();
	//$objvendorList->GetvendorListView($_GET);
		$objCustomerMgmt->GetCustomerList($objArray);
		if(isset($_GET['customer_id']))
	  { 
		$objCustomerMgmt->DeleteID($_GET['customer_id']);		
       }
		//$objvendorReg->DeleteID($id);
	if(isset($_GET['server_response']))
         {
          $objSmarty->assign('SuccessMessage1', 'Customer Deleted Successfully');
		 // header('Location:' ."customerDetails.tpl cust_id=".$_GET['cust_id']);
         }
 	  if(isset($_POST['hdAction']) && isset($_POST['Submit']))
	  {
	  
  	$objCustomerMgmt->InsertCustomerContent($_POST);
		
		
       }
  		
		if(isset($_GET['deleid']))
		{  
		$objCustomerMgmt->delete_inward_details($_REQUEST);
		}

		if(isset($_GET['sm_on_del']))
	{ 
	$succs_msg_got=base64_decode($_GET['sm_on_del']);            
	$objSmarty->assign('SuccessMessage_on_delete', $succs_msg_got);
	}
	if(isset($_GET['sm']))
	{ 
	$succs_msg_got=base64_decode($_GET['sm']);            
	$objSmarty->assign('SuccessMessage', $succs_msg_g/ot);
	}			
	//$objvendorList->list_inward_details();

  $objSmarty->assign('IncludeTpl', 'customerList.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].' -::-IMS -::- Software');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);
 //	$objSmarty->assign('address','http://www.tasca.in');
  
 // $objSmarty->assign('address','http://localhost/alf/');
 
   
   $objSmarty->assign('IncludeJS', 
					'<script src="'. $config['SiteGlobalPath'] . 'js/jquery-2.1.1.js" type="text/javascript"></script>'. "\n" . 
                    '<script src="'. $config['SiteGlobalPath'] . 'js/bootstrap.min.js" type="text/javascript"></script>'. "\n" . 
                    '<script src="'. $config['SiteGlobalPath'] . 'js/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/metisMenu/jquery.metisMenu.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/jeditable/jquery.jeditable.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/jquery.dataTables.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/dataTables.bootstrap.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/dataTables.responsive.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/dataTables.tableTools.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/inspinia.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/pace/pace.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/chosen/chosen.jquery.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/jsKnob/jquery.knob.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/jasny/jasny-bootstrap.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/datapicker/bootstrap-datepicker.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/nouslider/jquery.nouislider.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/switchery/switchery.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/ionRangeSlider/ion.rangeSlider.min.js" type="text/javascript"></script>'. "\n" . 
                    '<script src="'. $config['SiteGlobalPath'] . 'js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/metisMenu/jquery.metisMenu.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/cropper/cropper.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src=" '. $config['SiteGlobalPath'] . 'js/plugins/pace/pace.min.js" type="text/javascript"></script>' );
   
   
   
   
 $objSmarty->assign('IncludeCSS',
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
			        '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'font-awesome/css/font-awesome.css" type="text/css" media="all"/>'. "\n" .
			        '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/toastr/toastr.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'js/plugins/gritter/jquery.gritter.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/animate.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/style.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.bootstrap.css" type="text/css" media="all"/>'. "\n".
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.responsive.css" type="text/css" media="all"/>'. "\n".
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/datapicker/datepicker3.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/ionRangeSlider/ion.rangeSlider.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/switchery/switchery.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/jasny/jasny-bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/nouslider/jquery.nouislider.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/iCheck/custom.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/chosen/chosen.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/colorpicker/bootstrap-colorpicker.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/cropper/cropper.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.tableTools.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.tableTools.min.css" type="text/css" media="print"/>' );
  /*Display page*/
  $objSmarty->assign('HeaderTpl', 'left.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');
  
   $objSmarty->display('pagetemplate.tpl');
?>