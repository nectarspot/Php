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
$company_name = $_POST['company_name'];
$contact_name = $_POST['contact_name'];
$phone_number = $_POST['phone_number'];
$contact_position = $_POST['contact_position'];
$email = $_POST['email'];
$website = $_POST['website'];
$answer = $_POST['answer'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];
$answer11 = $_POST['answer11'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE ns_questionnaire SET company_name='$company_name[$i]', contact_name='$contact_name[$i]',phone_number='$phone_number[$i]', contact_position='$contact_position[$i]', email='$email[$i]', website='$website[$i]', answer='$answer[$i]', answer1='$answer1[$i]',answer2='$answer2[$i]',answer3='$answer3[$i]',answer4='$answer4[$i]',answer5='$answer5[$i]',answer6='$answer6[$i]',answer7='$answer7[$i]',answer8='$answer8[$i]',answer9='$answer9[$i]',answer10='$answer10[$i]',answer11='$answer11[$i]' WHERE id=".$id[$i]);
}
header("Location: https://marketenomicsdigital.com/NS-Forms/website-design-questionnaire_view");
?>