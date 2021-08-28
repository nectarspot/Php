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
$date = $_POST['date'];
$time = $_POST['time'];
$persons = $_POST['persons'];
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];
$status = $_POST['status'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE indianharvest_reservation SET date='$date[$i]', time='$time[$i]',persons='$persons[$i]', customer_name='$customer_name[$i]', email='$email[$i]', phone_number='$phone_number[$i]', message='$message[$i]', status='$status[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/indianharvest/indianharvest_view");
?>