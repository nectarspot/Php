<?php

$DB_host = "localhost";
	 $DB_user = "marketf7_lokesh";
	 $DB_pass = "#Xka1ZJ$&QC[";
	 $DB_name = "marketf7_mailspot";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

$id = $_POST['id'];
$name = $_POST['name'];

$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$description = $_POST['description'];

$date = $_POST['date'];
$ip_address = $_POST['ip_address'];


$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE refhire_get_started SET name='$name[$i]',email='$email[$i]', phone_number='$phone_number[$i]' , description='$description[$i]' , date='$date[$i]',  ip_address='$ip_address[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/refhire-dashboard/get-started-view.php");
?>