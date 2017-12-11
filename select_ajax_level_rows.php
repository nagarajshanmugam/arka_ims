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

$query='SELECT rows FROM `arka_level_details` WHERE `levels`="'.$_GET['q'].'"  GROUP BY rows ';
$exe_query=mysql_query($query,$arka);


while($row = mysql_fetch_array($exe_query))
{
$htsc_array = '<option value="'.$row["rows"].'">'.$row["rows"].'</option>';
echo   $htsc_array.'|$|'.$row["rows"];

}
echo  '<option value="0" selected="selected">--Select--</option>';
//$htsc_array .= '<option value="0" selected="selected">--Select--</option>';


mysql_close($arka);


?>
