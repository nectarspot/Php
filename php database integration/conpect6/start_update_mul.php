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

$website = $_POST['website'];
$project = $_POST['project'];
$description = $_POST['description'];
$budget = $_POST['budget'];
$about_us = $_POST['about_us'];

$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE start SET name='$name[$i]', email='$email[$i]',phone_number='$phone_number[$i]', website='$website[$i]', project='$project[$i]' , description='$description[$i]', budget='$budget[$i]' , about_us='$about_us[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/start_view");
?>