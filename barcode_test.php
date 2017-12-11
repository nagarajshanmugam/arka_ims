<?php
    require('includes/common.php');
?>
<html>
<head>
<title> Barcode Print</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./dist/barcodes/JsBarcode.code128.min.js"></script>

</head>
<body> 
    	<table style="padding:100px; margin-left:5px; margin-top:-260px;" border="0">
		
			<input type="hidden" id="barcode" name="barcode" value="<?php echo $_GET['invoice_no'];?>">
					<table width="120px" style="margin-left:-50px; margin-top:15px;" border="0" cellspacing=0>
					<tr >
							<?php $loop = $_GET['stick_qty'];
								for($i=0;$i<$loop;$i++)
									{?>
									<td class="<?php $k++;?>">
													<div style="font-size:10px; margin-left:25px;"> &ensp; &ensp;<strong>PART CODE: <?php echo $_GET['part_no'];?></strong> </div>
													<div style="font-size:18px;margin-top:-5px; margin-left:15px">&ensp;&ensp;<strong>PKD ON :<span style="font-size:30px;"><?php $date=$_GET['date']; $str = substr($date, 0, 7);$str2 = substr($date, 5, 2);$str3 = substr($date, 0, 4);
													echo  $mon= date('M-Y', strtotime($date));?></span></strong> </div>
													<svg id="barcode1" /></svg>
													<script> 
													JsBarcode("#barcode1", document.getElementById("barcode").value, {
														  width: 2.5,
														  marginLeft:30,
														  height: 30,
														  fontSize: 18,
														  displayValue: false
														});
													</script>
													
											  </td><td class="pad"></td>
											  <?php if($k==2)
											  {?>
												</tr>
												<tr style="margin-top:-230px;">
											 <?php $k=0;}
											  ?>	
							<?php } ?>
							</table>
								
		</table>        	        


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
}
/*.number
{
font-size:32px;
font: bolder;

}
.text
{
font-size:20px;
font:bold;
}
.simparts
{
padding-left:25px;
padding-bottom:30%;
font-size:8px;
font:bold;
}
.add
{
font-size:16px;
color:#000080;
}*/
.pad
{
padding-left:.1em;
padding-top:.5em;
}
.spa
{
margin-right:5px;
}

</style>
	</body>
</html>