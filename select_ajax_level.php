<?php 

/*$host="Localhost";
$uname="root";
$pwd="";
$conn=mysql_connect($host,$uname,$pwd);
$db_select=mysql_select_db('alf',$conn);

$host="adroittesting.db.10615255.hostedresource.com";
$uname="adroittesting";
$pwd="Asz@2606";
$conn=mysql_connect($host,$uname,$pwd);
$db_select=mysql_select_db('adroittesting',$conn);*/
/*$hostname_arka = "160.153.16.6";
$database_arka = "arkawindscada";
$username_arka = "windscada";
$password_arka = "ArkaScada@15";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
$db_select=mysql_select_db('arkawindscada',$arka);*/
$hostname_arka = "localhost";
$database_arka = "arka_ims";
$username_arka = "root";
$password_arka = "";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
$db_select=mysql_select_db('arka_ims',$arka);

/*$host="160.153.16.6";
$uname="windscada";
$pwd="ArkaScada@15";
$conn=mysql_connect($host,$uname,$pwd);
$db_select=mysql_select_db('arkawindscada',$conn);*/
 $query='SELECT location, location2, location3, location4, location5 FROM `arka_stock_master` WHERE `material_code`="'.$_GET['q'].'" AND record_status="1"';
$exe_query=mysql_query($query,$arka);


while($row = mysql_fetch_array($exe_query))
{
$htsc_array = '<option value="'.$row["location"].'">'.$row["location"].'</option>';
if($row["location2"] <>'0//'){
$htsc_array2 = '<option value="'.$row["location2"].'">'.$row["location2"].'</option>';
}if($row["location3"] <>'0//'){
$htsc_array3 = '<option value="'.$row["location3"].'">'.$row["location3"].'</option>';
}if($row["location4"] <>'0//'){
$htsc_array4 = '<option value="'.$row["location4"].'">'.$row["location4"].'</option>';
}if($row["location5"] <>'0//'){
$htsc_array5 = '<option value="'.$row["location5"].'">'.$row["location5"].'</option>';
}


echo   $htsc_array.'|$|'.$row["location"];
echo   $htsc_array2.'|$|'.$row["location2"];
echo   $htsc_array3.'|$|'.$row["location3"];
echo   $htsc_array4.'|$|'.$row["location4"];
echo   $htsc_array5.'|$|'.$row["location5"];

}
echo  '<option value="0" selected="selected">--Select--</option>';
//echo   $htsc_array.'|$|'.$row["location"];
//$htsc_array = '<option value="'.$row["location"].'">'.$row["location"].'</option>';


mysql_close($arka);


?>
