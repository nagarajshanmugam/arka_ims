<?php
  require('includes/common.php');
  include_once $config['SiteClassPath']."class.Staff.php";
  include_once $config['SiteClassPath']."class.stock_outward.php";
  include_once $config['SiteClassPath']."class.split_page_results.php"; 
  	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
  	$objstock_outward	= new stock_outward();
	$objstock_outward->GetStockOutwardView($_GET);
	$objstock_outward->GetSLists($objArray);
	$objstock_outward->GetSoMaterialLists($objArray);
	$objstock_outward->getToAddress($_GET);
	if(isset($_GET['server_response']))
         {
          $objSmarty->assign('SuccessMessage1', 'New Outward and Entitled Added Successfully');
         }
		 if(isset($_GET['server_responses']))
         {
          $objSmarty->assign('SuccessMessage1', 'Outward Deleted Successfully');
         }
		 
 	  if(isset($_POST['hdAction'])) 
	  {
  //	$objstock_outward->InsertStockContent($_POST);
	$objstock_outward->InsertOutward($_POST);
       }
	   if(isset($_GET['so_no']) && isset($_GET['invoice_no']))
		{
	$objstock_outward->AjaxGetMaterialDetails();  
		}
  		
			$objstock_outward->AjaxGetOutwardDetails();                
	
		if(isset($_GET['outward_entry']) && isset($_GET['sl_no']) && isset($_GET['mcode']) && isset($_GET['qty']))
	 {
  		$objstock_outward->Delete($_GET);
     }
		if(isset($_GET['deleid']))
		{
		$objstock_outward->delete_inward_details($_REQUEST);
		}
	$objstock_outward->list_inward_details();

  $objSmarty->assign('IncludeTpl', 'outwardReg.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].' -::-IMS -::- Software');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);
 
  $objSmarty->assign('IncludeCSS',
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
			        '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'font-awesome/css/font-awesome.css" type="text/css" media="all"/>'. "\n" .
			        '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/toastr/toastr.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'js/plugins/gritter/jquery.gritter.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/animate.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/style.css" type="text/css" media="all"/>'. "\n" .
					 '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.css" type="text/css" media="all"/>'. "\n" .
			  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
			  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dhtmlxMessage/codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" . 
			  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.css" type="text/css" media="all"/>'. "\n" .
				  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxwindows_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
				  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid.css" type="text/css" media="all"/>'. "\n" .
				  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" . 
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
					'<script src="' . $config['SiteGlobalPath'] . 'codebase/common/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
   					'<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.js" type="text/javascript"></script>'. "\n" .
					'<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
				   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
				   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgrid.js" type="text/javascript"></script>'. "\n" .
				   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgridcell.js" type="text/javascript"></script>'. "\n" .
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
  /*Display page*/
  $objSmarty->assign('HeaderTpl', 'left.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');
  
   $objSmarty->display('pagetemplate.tpl');
?>