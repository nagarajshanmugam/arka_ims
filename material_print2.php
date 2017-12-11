<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="./dist/JsBarcode.all.js"></script>	
</head>
<body> 
<?php 
include('./barcode128.php'); 
$hostname_arka = "192.168.1.206";
$database_arka = "arka_wms";
$username_arka = "root";
$password_arka = "";

$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_arka, $arka);

if($_GET['from']!="" && $_GET['to']!="")
{ 
	//echo 'select count(m_code) AS tot from arka_material_reg_master where sl_no Between  "'.$_GET['from'].'" AND  "'.$_GET['to'].'"';
	/* $views=mysql_query('select count(m_code) AS tot from arka_material_reg_master where sl_no Between  "'.$_GET['from'].'" AND  "'.$_GET['to'].'"'); 
     $ran = mysql_fetch_array($views);*/
	?>
	<table style="padding:100px; margin-left:15px; margin-top:-220px; " border="0">
					  <table width="380px" style="margin-left:205px;" border="0" cellspacing=0>
	<?php				
						  
for($j=$_GET['from'];$j<=$_GET['to'];$j++)
{
?>
<tr align="inner">
<td class="<?php $k++;?>">
<?php 
$views2=mysql_query('select * from arka_material_reg_master where sl_no ="'.$j.'"'); 
$ran2 = mysql_fetch_array($views2); ?>
	<svg id="barcode1<?php echo $j;?>" /></svg>
	<script> 
	var rr = <?php echo $ran2['m_code'];?>;
	JsBarcode("#barcode1<?php echo $j;?>", "<?php echo $ran2['m_code'];?>", {
		  width: 1.6,
		 // marginLeft:30,
		  height: 60,
		//  fontSize: 18,
		  displayValue: true
		});
	</script>
</td>
</tr>
<?php
}?>				
</table>	
</table>   
<?php     	        
}?>
</body>	
    <script type="text/javascript">
		 //window.onload=function(){self.print();} 
    </script>
	<script> 
	function  myFunction(data)
	{ alert(data);
	JsBarcode("#barcode1",data, {
	  width: 1.6,
	  height: 60,
	  displayValue: true
	});
	}
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#barcode').on('input',function(e){
	{
	alert("here");
	});
	});
</script>
	<style>
table 
{
	font-family: Calibri;
		
}
td.inner {
    padding-top: .1em;
    padding-bottom: .1em;
}
@media print
{
@page{ margin:0;}
body{margin: 1.6cm;}
}
.number
{
font-size:32px;
font: bolder;

}
.text
{
font-size:20px;
font:bold;
}
.add
{
font-size:16px;
color:#000080;
}
	</style>
 
 
