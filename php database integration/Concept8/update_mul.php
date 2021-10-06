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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$city = $_POST['city'];
$internship = $_POST['internship'];
$internship_type = $_POST['internship_type'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$answer = $_POST['answer'];
$answer1 = $_POST['answer1'];
$position = $_POST['position'];
$collage_name = $_POST['collage_name'];
$drive_link = $_POST['Drive_link'];
$file_name = $_POST['file_name'];
$status = $_POST['status'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE iimnet_internship SET first_name='$first_name[$i]', last_name='$last_name[$i]',email='$email[$i]', phone_number='$phone_number[$i]', city='$city[$i]' , internship='$internship[$i]' ,  internship_type='$internship_type[$i]' , start_date='$start_date[$i]' , end_date='$end_date[$i]' , answer='$answer[$i]' , answer1='$answer1[$i]' , position='$position[$i]' , collage_name='$collage_name[$i]', drive_link='$drive_link[$i]', file_name='$file_name[$i]', status='$status[$i]' WHERE id=".$id[$i]);
}
header("Location: https://iimnet.com/admin_dashboard/iimnet_internship_view");
?>