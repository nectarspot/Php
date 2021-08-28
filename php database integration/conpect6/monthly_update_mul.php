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
$organization = $_POST['organization'];
$s1_option = $_POST['s1_option'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];




$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE monthly SET name='$name[$i]', email='$email[$i]',phone_number='$phone_number[$i]', organization='$organization[$i]', answer1='$answer1[$i]' ,s1_option='$s1_option[$i]' , answer2='$answer2[$i]', answer3='$answer3[$i]'  WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/monthly_view");
?>