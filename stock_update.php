<?php
$hostname_arka = "localhost";
$database_arka = "arka_wms";
$username_arka = "root";
$password_arka = "Arkawms@17";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_arka, $arka);
$query_rs1 = "SELECT * FROM arka_stock_master_temp WHERE status='1'";
$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
$num = mysql_num_rows($rs1);
$i=0;
	while($ran = mysql_fetch_array($rs1))
	
		{
		//echo $ran['m_code']."<br>";
			$query_rs2 = "SELECT DISTINCT(GROUP_CONCAT(location SEPARATOR '~')) AS location , material_code FROM arka_stock_master_old WHERE material_code='".$ran['material_code']."'";
			$rs2 = mysql_query($query_rs2, $arka) or die(mysql_error());
			$num2 = mysql_num_rows($rs2);
			$ran2 = mysql_fetch_array($rs2);
			
			$update = "UPDATE arka_stock_master_temp SET location='".$ran2['location']."' WHERE material_code='".$ran2['material_code']."'";
			$rs3 = mysql_query($update, $arka) or die(mysql_error());
			$i=$i+1;
			

			
			
		}
echo$i;


?>