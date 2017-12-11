<?php
    require('includes/common.php');
?>
<html>
<head>
<title> Barcode Print</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./dist/JsBarcode.all.js"></script>	

</head>
<body> 
    	<table style="padding:100px; margin-left:5px; margin-top:-240px;" border="0">
		
			<input type="hidden" id="barcode" name="barcode" value="<?php echo $_GET['barcode'];?>">
					<table width="80px" style="margin-left:-45px;" border="0" cellspacing=0>
					<tr>
							<?php $loop = $_GET['printqty'];
								for($i=0;$i<$loop;$i++)
									{?>
									<td class="<?php $k++;?>">
													<svg id="barcode1"/></svg>
													<script> 
													JsBarcode("#barcode1", document.getElementById("barcode").value, {
														  width: 1.2,
														  height: 30,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
													
											  </td><td class="pad">&nbsp;</td>
											  <?php if($k==3)
											  {?>
												</tr>
												<tr style="margin-top:-240px;">
   											    
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
body{margin: 1.6cm;}
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
padding-left:3.5em;
padding-top:4em;
}
.spa
{
margin-right:15px;
}
</style>
	</body>
</html>