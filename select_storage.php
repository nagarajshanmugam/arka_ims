<?php require_once('Connections/ARKA.php');
mysql_select_db($database_arka, $arka);
$sql="SELECT shelves,utilization FROM arka_rack_details WHERE levels='".$_GET['level']."' AND rows='".$_GET['rows']."' ORDER BY SUBSTR(shelves FROM 1 FOR 1), CAST(SUBSTR(shelves FROM 2) AS UNSIGNED) ";
$level_array=mysql_query($sql,$arka);
echo "<h4 id='title'>".$_GET['level']." / ".$_GET['rows']."</h4><table width='100%' border='1' class='table table-bordered' style='padding:2px;background-color:#ffff'>";
$i=0;
echo "<tr>";
echo "<input type='hidden' id='levels' name='levels' value='".$_GET['level']."' /><input type='hidden' id='rows' name='rows' value='".$_GET['rows']."' /><input type='hidden' id='mcode' name='mcode' value='".$_GET['material_code']."' />";	
while($level=mysql_fetch_array($level_array))
{
				$i=$i+1;
		if($i<=14)
		{
		
			if(($level['utilization']>1) && ($level['utilization']<=20))
			{
				echo "<td ><center>
				<input type='checkbox' name='column[]' value='".$level['shelves']."' />
				<span class='badge' style='font-size:10px; background:#66CCFF;'>".$level['utilization']."%</span>
				<br><strong>".$level['shelves']."</strong></br></center></td>";
			}
			else if(($level['utilization']>20) && ($level['utilization']<=50))
			{
				echo "<td><center>
				<input type='checkbox' name='column[]' value='".$level['shelves']."' />
				<span class='badge' style='font-size:10px; background:#CC9966;'>".$level['utilization']."%</span>
				<br><strong>".$level['shelves']."</strong></br></center></td>";
			}
			else if(($level['utilization']>50) && ($level['utilization']<=80))
			{
				echo "<td><center>
				<input type='checkbox' name='column[]' value='".$level['shelves']."' />
				<span class='badge' style='font-size:10px; background:#FFFF66;'>".$level['utilization']."%</span>
				<br><strong>".$level['shelves']."</strong></br></center></td>";
			}
			else if(($level['utilization']>80) && ($level['utilization']<100))
			{
				echo "<td><center>
				<input type='checkbox' name='column[]' value='".$level['shelves']."' />
				<span class='badge' style='font-size:10px; background:#FF6666;'>".$level['utilization']."%</span>
				<br><strong>".$level['shelves']."</strong></br></center></td>";
			}
			else if(($level['utilization']<1))
			{
				echo "<td><center>
				<input type='checkbox' name='column[]' value='".$level['shelves']."' />
				<span class='badge' style='font-size:10px; background:#00CC99;'>".$level['utilization']."%</span>
				<br><strong>".$level['shelves']."</strong></br></center></td>";
			}
			else if(($level['utilization']==100))
			{
				echo "<td><center>
				<span class='badge' style='font-size:10px; background:#FF6666;'>".$level['utilization']."%</span>
				<br><strong>".$level['shelves']."</strong></br></center></td>";
			}
		
			if($i==14)
			{
			$i=0;
			echo "</tr>";
			}
		}
}
echo "</table>";

?>

