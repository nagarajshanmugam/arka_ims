<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
 
$hostname_arka = "192.168.1.206";
$database_arka = "arka_ims";
$username_arka = "root";
$password_arka = "";

$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_arka, $arka);

/*$connection = mysql_connect('localhost', 'root', '', 'arka_ims');*/

if($_GET['level']=="L1" || $_GET['level']=="L2" || $_GET['level']=="L3" )
	{

		for($i=1;$i<=26;$i++)
			{
				$rows = "R".$i;

			for($k=1;$k<=14;$k++)
				{
				$shelves1 = "A".$k;
				$shelves2 = "B".$k;
				$shelves3 = "C".$k;
				$shelves4 = "D".$k;
				$shelves5 = "E".$k;
				if($rows=="R6" || $rows=="R7" )
					{
						if(($k!=8) && ($k!=9) && ($k!=10) && ($k!=11) && ($k!=12))
							{
						echo $self1 = $_GET['level']."/".$rows."/".$shelves1;
						$sql = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves1.'","'.$self1.'","","","","","","","","1")';
						mysql_query($sql,$arka) or die(mysql_error());	
						echo "<br />";
						
						echo $self2 = $_GET['level']."/".$rows."/".$shelves2;
						$sql2 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves2.'","'.$self2.'","","","","","","","","1")';
						mysql_query($sql2);	
						echo "<br />";
						
						echo $self3 = $_GET['level']."/".$rows."/".$shelves3;
						$sql3 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves3.'","'.$self3.'","","","","","","","","1")';
						mysql_query($sql3);	
						echo "<br />";
						
						echo $self4 = $_GET['level']."/".$rows."/".$shelves4;
						$sql4 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves4.'","'.$self4.'","","","","","","","","1")';
						mysql_query($sql4);	
						echo "<br />";
						
						echo $self5 = $_GET['level']."/".$rows."/".$shelves5;
						$sql5 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves5.'","'.$self5.'","","","","","","","","1")';
						mysql_query($sql5);	
						echo "<br />";
							}
					}
					else if($rows=="R12" || $rows=="R13" )
					{
						if(($k!=1) && ($k!=2) && ($k!=3) && ($k!=4) && ($k!=5))
							{
						echo $self1 = $_GET['level']."/".$rows."/".$shelves1;
						$sql = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves1.'","'.$self1.'","","","","","","","","1")';
						mysql_query($sql);	
						echo "<br />";
						
						echo $self2 = $_GET['level']."/".$rows."/".$shelves2;
						$sql2 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves2.'","'.$self2.'","","","","","","","","1")';
						mysql_query($sql2);	
						echo "<br />";
						
						echo $self3 = $_GET['level']."/".$rows."/".$shelves3;
						$sql3 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves3.'","'.$self3.'","","","","","","","","1")';
						mysql_query($sql3);	
						echo "<br />";
						
						echo $self4 = $_GET['level']."/".$rows."/".$shelves4;
						$sql4 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves4.'","'.$self4.'","","","","","","","","1")';
						mysql_query($sql4);	
						echo "<br />";
						
						echo $self5 = $_GET['level']."/".$rows."/".$shelves5;
						$sql5 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves5.'","'.$self5.'","","","","","","","","1")';
						mysql_query($sql5);	
						echo "<br />";
						
							}
							
					}
					else if($rows=="R16" || $rows=="R17" || $rows=="R18" )
					{
						if(($k!=1) && ($k!=2) && ($k!=3))
							{
						echo $self1 = $_GET['level']."/".$rows."/".$shelves1;
						$sql = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves1.'","'.$self1.'","","","","","","","","1")';
						mysql_query($sql);	
						echo "<br />";
						
						echo $self2 = $_GET['level']."/".$rows."/".$shelves2;
						$sql2 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves2.'","'.$self2.'","","","","","","","","1")';
						mysql_query($sql2);	
						echo "<br />";
						
						echo $self3 = $_GET['level']."/".$rows."/".$shelves3;
						$sql3 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves3.'","'.$self3.'","","","","","","","","1")';
						mysql_query($sql3);	
						echo "<br />";
						
						echo $self4 = $_GET['level']."/".$rows."/".$shelves4;
						$sql4 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves4.'","'.$self4.'","","","","","","","","1")';
						mysql_query($sql4);	
						echo "<br />";
						
						echo $self5 = $_GET['level']."/".$rows."/".$shelves5;
						$sql5 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves5.'","'.$self5.'","","","","","","","","1")';
						mysql_query($sql5);	
						echo "<br />";
							}
					}
					else 
					{
						echo $self1 = $_GET['level']."/".$rows."/".$shelves1;
						$sql = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves1.'","'.$self1.'","","","","","","","","1")';
						mysql_query($sql);	
						echo "<br />";
						
						echo $self2 = $_GET['level']."/".$rows."/".$shelves2;
						$sql2 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves2.'","'.$self2.'","","","","","","","","1")';
						mysql_query($sql2);	
						echo "<br />";
						
						echo $self3 = $_GET['level']."/".$rows."/".$shelves3;
						$sql3 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves3.'","'.$self3.'","","","","","","","","1")';
						mysql_query($sql3);	
						echo "<br />";
						
						echo $self4 = $_GET['level']."/".$rows."/".$shelves4;
						$sql4 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves4.'","'.$self4.'","","","","","","","","1")';
						mysql_query($sql4);	
						echo "<br />";
						
						echo $self5 = $_GET['level']."/".$rows."/".$shelves5;
						$sql5 = 'INSERT INTO `arka_rack_details`
						            (`zone`,`storage_area`,`levels`, `rows`,`shelves`,`location`,`length`,`width`,`height`,`volume`,`part_volume`,`weight`,`utilization`,`status`) 
							  VALUES("Madavaram","Main Rack","'.$_GET['level'].'","'.$rows.'","'.$shelves5.'","'.$self5.'","","","","","","","","1")';
						mysql_query($sql5);	
						echo "<br />";
						
					}
				}

			}
	}
?>
</body>
</html>
