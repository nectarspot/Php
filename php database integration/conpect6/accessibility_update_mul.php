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
$company = $_POST['company'];
$time_to_call = $_POST['time_to_call'];
$briefly_tell_us = $_POST['briefly_tell_us'];

$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE ns_accessibility SET name='$name[$i]', email='$email[$i]',phone_number='$phone_number[$i]', company='$company[$i]', time_to_call='$time_to_call[$i]', briefly_tell_us='$briefly_tell_us[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/accessibility_view");
?>