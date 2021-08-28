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
$position = $_POST['position'];
$experience = $_POST['experience'];
$file_name = $_POST['file_name'];
$time_to_call = $_POST['time_to_call'];
$full_part = $_POST['full_part'];
$status = $_POST['status'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE ns_careers_apply SET name='$name[$i]', email='$email[$i]',phone_number='$phone_number[$i]', position='$position[$i]', experience='$experience[$i]', file_name='$file_name[$i]', time_to_call='$time_to_call[$i]', full_part='$full_part[$i]',status='$status[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/careers_apply_view");
?>