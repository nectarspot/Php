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

$experience = $_POST['experience'];
$github_link = $_POST['github_link'];
$time_to_call = $_POST['time_to_call'];
$drive_link = $_POST['drive_link'];
$file_name = $_POST['file_name'];
$status = $_POST['status'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE ns_phase SET name='$name[$i]', email='$email[$i]',phone_number='$phone_number[$i]', position='$position[$i]', experience='$experience[$i]', file_name='$file_name[$i]', github_link='$github_link[$i]', drive_link='$drive_link[$i]',status='$status[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/phase_view");
?>