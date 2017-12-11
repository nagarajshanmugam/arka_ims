<?php
    require('includes/common.php');
?>
<html>
<head>
<title> Barcode Print</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./dist/barcodes/JsBarcode.code128.min.js"></script>
<script src="./dist/JsBarcode.all.min.js"></script>

</head>
<body> 
<?php
$var=$_GET['m_code'];
$var=trim($var); // remove space at starting and ending of variable. 
$let = strlen(preg_replace('/[^a-zA-Z]/', '', $var));
if(!is_numeric($var)){
if($let<'3')
{
?>
    	<table style="padding:100px; margin-left:5px; margin-top:-260px;" border="0">
			<input type="hidden" id="barcode" name="barcode" value="<?php echo $_GET['m_code'];?>">
					<table width="120px" style="margin-left:-50px; margin-top:15px;" border="0" cellspacing=0>
					<tr >
						
									<td class="">
												

													
													<svg id="barcode1" /></svg>
													<script> 
													JsBarcode("#barcode1", document.getElementById("barcode").value, {
														  width: 1.11,
														  marginLeft:50,
														  marginRight:50,
														  marginTop: 10,
														  height: 37,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
											</td>
											  <td class="pad"></td>
											 
												</tr>
												
												<tr class="margin"></tr>
											 
							</table>
								
		</table>        	        

<?php
}
else
{?>
<table style="padding:100px; margin-left:5px; margin-top:-260px;" border="0">
			<input type="hidden" id="barcode" name="barcode" value="<?php echo $_GET['oracle_id'].'-'.$_GET['m_code'];?>">
					<table width="120px" style="margin-left:-50px; margin-top:15px;" border="0" cellspacing=0>
					<tr >
							<?php $loop = $_GET['stick_qty'];
								for($i=0;$i<$loop;$i++)
									{?>
									<td class="<?php $k++;?>">
													<div style="font-size:15px;margin-top:25px; margin-left:50px">&ensp;&ensp;<strong>QTY :<span style="font-size:15px;"><?php echo $sku=$_GET['sku'];?></span></strong> &nbsp;&nbsp;<strong>INV.QTY :<span style="font-size:15px;"><?php echo $sku=$_GET['inv_qty'];?></span></strong></div>

													
													<svg id="barcode1" /></svg>
													<script> 
													JsBarcode("#barcode1", document.getElementById("barcode").value, {
														  width: 1.11,
														  marginLeft:50,
														  marginRight:50,
														  marginTop: 10,
														  height: 37,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
											</td>
											  <td class="pad"></td>
											  <?php if($k==2)
											  {?>
												</tr>
												
												<tr class="margin">
											 <?php $k=0;}
											  ?>	
							<?php } ?>
							</table>
								
		</table>
<?php }
}

else
{
?>
    	<table style="padding:100px; margin-left:5px; margin-top:-260px;" border="0">
			<input type="hidden" id="barcode" name="barcode" value="<?php echo $_GET['oracle_id'].'-'.$_GET['m_code'];?>">
					<table width="120px" style="margin-left:-50px; margin-top:15px;" border="0" cellspacing=0>
					<tr >
							<?php $loop = $_GET['stick_qty'];
								for($i=0;$i<$loop;$i++)
									{?>
									<td class="<?php $k++;?>">
													<div style="font-size:15px;margin-top:5px; margin-left:50px">&ensp;&ensp;<strong>QTY :<span style="font-size:15px;"><?php echo $sku=$_GET['sku'];?></span></strong> &nbsp;&nbsp;<strong>INV.QTY :<span style="font-size:15px;"><?php echo $sku=$_GET['inv_qty'];?></span></strong></div>

													
													<svg id="barcode1" /></svg>
													<script> 
													JsBarcode("#barcode1", document.getElementById("barcode").value, {
														  width: 1.11,
														  marginLeft:50,
														  marginRight:50,
														  marginTop: 10,
														  height: 37,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
											</td>
											  <td class="pad"></td>
											  <?php if($k==2)
											  {?>
												</tr>
												
												<tr class="margin">
											 <?php $k=0;}
											  ?>	
							<?php } ?>
							</table>
								
		</table>        	        

<?php
}
?>
    <script type="text/javascript">
		 //window.onload=function(){self.print();} 
    </script>
	<style>
table 
{
	font-family: Calibri;
		
}

@media print
{
@page{ margin:0;}
body{margin: 1.4cm;}
.exclude {
        display: none !important;
    }

    .printOnly {
        display:block !important;
    }

    div#data,
    div#data div {
        width: 98% !important;
        border: none !important;
    }

    table.plain { page-break-inside:avoid; }
}
.print:last-child {
     page-break-after: auto;
}
.pad
{
padding-left:.5em;
padding-top:.5em;
}
.margin
{
margin-top:-260px;
}
.spa
{
margin-right:5px;
}

</style>
	</body>
</html>