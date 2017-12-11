<?php
$hostname_arka = "192.168.1.206";
$database_arka = "arka_ims";
$username_arka = "root";
$password_arka = "";

$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_arka, $arka);

$book_id=$_REQUEST['id'];
$branch_id=$_REQUEST['branch_id'];


$sql="update book_receipt set bar_code='".$bar_code."',shelf_rack='".$shelf_rack."' where id='".$branch_id."'";
mysql_query($sql);

?>