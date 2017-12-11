<?php
ob_start();
session_start();
$hostname_arka = "localhost";
$database_arka = "arka_wms";
$username_arka = "root";
$password_arka = "Arkawms@17";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_arka, $arka);
$query_rs1 = "SELECT MAX(random_no) AS Ran ,SUM(total_number) AS TOT FROM arka_mothercart_random WHERE DATE(time_stamp)=DATE(NOW())";
$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
$num = mysql_num_rows($rs1);
$ran = mysql_fetch_array($rs1); 
$myDate = date('ymd');
$test= $ran['Ran'];
$j=0;

if((!empty($test)))
{
if(empty($_GET['inn']))
{
$myArray = explode($myDate, $test);
if(!empty($_GET['tott']))
{
$i=$myArray[1];
$wq=$myArray[1];
}
else
{
$i=$_GET['tot1'];
}
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./dist/barcodes/JsBarcode.code128.min.js"></script>

</head>
<body> 
    	<table style="padding:100px; margin-left:5px; margin-top:-10px;" border="0">
		
			
					<table width="120px" style="margin-left:-10px; margin-top:15px;" border="0" cellspacing=0>
					<tr>
<?php

for($j=0;$j<$_GET['tot'];$j++)

	{
	$i++;
	$random =($myDate.$i);
	?>
	
	<td class="<?php $k++;?> {$s++}">
													<svg id="barcode1<?php echo $j;?>" /></svg>
													<script> 
													
													var rr = <?php echo $random;?>;
													
													JsBarcode("#barcode1<?php echo $j;?>", rr, {
														  width: 2.5,
														  marginLeft:30,
														  height: 30,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
													
											  </td><td class="pad"></td>
											  <?php if($k==2)
											  {?>
												</tr>
												<tr style="margin-top:-230px;">
											 <?php $k=0;}
											  ?>	
							<?php } 
	$total = $ran['TOT']+$j;
		
	if(empty($_GET['tot1']))
	{
	$Update_query = "UPDATE arka_mothercart_random SET random_no='".$random."',total_number='".$total."' WHERE DATE(time_stamp)=DATE(NOW())";
	$update = mysql_query($Update_query, $arka) or die(mysql_error());
		header('Location:./random.php?tot='.$_GET['tot'].'&tot1='.$wq);
		
	}
}
else
{
$j=0;
//echo "hiii"; exit;
?>
<html>
<head>
<title> Barcode Print</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./dist/barcodes/JsBarcode.code128.min.js"></script>

</head>
<body> 
    	<table style="padding:100px; margin-left:5px; margin-top:-10px;" border="0">
		
			
					<table width="120px" style="margin-left:-10px; margin-top:15px;" border="0" cellspacing=0>
					<tr ><?php

for($i=0;$i<$_GET['tot'];$i++)
	{
	$j++;
	$random =($myDate.$j);	
	?>
	<td class="<?php $k++;?>">
													<svg id="barcode1<?php echo $j;?>" /></svg>
													<script> 
													
													var rr = <?php echo $random;?>;
													
													JsBarcode("#barcode1<?php echo $j;?>", rr, {
														  width: 2.5,
														  marginLeft:30,
														  height: 30,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
													
											  </td><td class="pad"></td>
											  <?php if($k==2)
											  {?>
												</tr>
												<tr style="margin-top:-230px;">
											 <?php $k=0;}
											 
	}
		$total = $ran['TOT']+$j;
		
	if(empty($_GET['tot1']))
	{		
		$Insert_query = "INSERT INTO arka_mothercart_random (random_no,total_number) VALUES('".$random."','".$total."')";
		$insert = mysql_query($Insert_query, $arka) or die(mysql_error());
		header('Location:./random.php?tot='.$_GET['tot'].'&tot1=1&inn=1');
		
	}
}

	
?>
							</table>
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
	<?php
	}

else
{
$j=0;
//echo "hiii"; exit;
?>
<html>
<head>
<title> Barcode Print</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./dist/barcodes/JsBarcode.code128.min.js"></script>

</head>
<body> 
    	<table style="padding:100px; margin-left:5px; margin-top:-10px;" border="0">
		
			
					<table width="120px" style="margin-left:-10px; margin-top:15px;" border="0" cellspacing=0>
					<tr ><?php

for($i=0;$i<$_GET['tot'];$i++)
	{
	$j++;
	$random =($myDate.$j);	
	echo $random."<br>";
	?>
	<td class="<?php $k++;?>">
													<svg id="barcode1<?php echo $j;?>" /></svg>
													<script> 
													
													var rr = <?php echo $random;?>;
													
													JsBarcode("#barcode1<?php echo $j;?>", rr, {
														  width: 2.5,
														  marginLeft:30,
														  height: 30,
														  fontSize: 18,
														  displayValue: true
														});
													</script>
													
											  </td><td class="pad"></td>
											  <?php if($k==2)
											  {?>
												</tr>
												<tr style="margin-top:-230px;">
											 <?php $k=0;}
											 
	}
		$total = $ran['TOT']+$j;
		
	if(!empty($_GET['tot']))
	{		
		$Insert_query = "INSERT INTO arka_mothercart_random (random_no,total_number) VALUES('".$random."','".$total."')";
		$insert = mysql_query($Insert_query, $arka) or die(mysql_error());
		header('Location:./random.php?tot='.$_GET['tot'].'&tot1=1&inn=1');
		
	}
}
?>