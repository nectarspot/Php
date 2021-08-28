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
$company= $_POST['company'];
$rate = $_POST['rate'];
$answer = $_POST['answer'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE ns_npm SET name='$name[$i]', email='$email[$i]',phone_number='$phone_number[$i]', company='$company[$i]', rate='$rate[$i]', answer='$answer[$i]', answer1='$answer1[$i]', answer2='$answer2[$i]',answer3='$answer3[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/nps_view");
?>