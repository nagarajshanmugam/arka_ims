<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHP DATA Conversion</title>
</head>

<body>
<?php

$hostname_arka = "localhost";
$database_arka = "arka_ims";
$username_arka = "root";
$password_arka = "";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
$db_select=mysql_select_db('arka_ims',$arka);

$query='SELECT rows FROM `arka_level_details` WHERE `levels`="'.$_GET['q'].'"  GROUP BY rows ';
$exe_query=mysql_query($query,$arka);


while($row = mysql_fetch_array($exe_query))
{
$htsc_array = '<option value="'.$row["rows"].'">'.$row["rows"].'</option>';
echo   $htsc_array.'|$|'.$row["rows"];

}


 ?>

</body>
</html>
