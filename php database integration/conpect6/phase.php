<?php
if( $_POST){

$servername = "localhost";
$username = "marketf7_lokesh";
$password = "#Xka1ZJ$&QC[";
$dbname = "marketf7_mailspot";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$file_name = $_FILES["file"]["name"]; 
    $tempname = $_FILES["file"]["tmp_name"];     
        $folder = "resume/".$file_name; 

if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
 
$name1 = mysqli_real_escape_string($link, $_POST['name']);

$sa = (rand(0,9999));      
 $invoiceid = $name1."-".$sa;
 
 $ipaddress = $_SERVER['REMOTE_ADDR'];

$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ipaddress)); 
    
     $current_date = date("m-d-Y ");
   
//  echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
//  echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 
//  echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 
//  echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 
//  echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 
//  echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"; 
//  echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"; 
//  echo 'Timezone: ' . $ipdat->geoplugin_timezone; 
     
//Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$answer = mysqli_real_escape_string($link, $_POST['answer']);
$answer1 = mysqli_real_escape_string($link, $_POST['answer1']);
$answer2 = mysqli_real_escape_string($link, $_POST['answer2']);
$answer3 = mysqli_real_escape_string($link, $_POST['answer3']);
$answer4 = mysqli_real_escape_string($link, $_POST['answer4']);
$answer5 = mysqli_real_escape_string($link, $_POST['answer5']);
$answer6 = mysqli_real_escape_string($link, $_POST['answer6']);
$answer7 = mysqli_real_escape_string($link, $_POST['answer7']);
$answer8 = mysqli_real_escape_string($link, $_POST['answer8']);
$answer9 = mysqli_real_escape_string($link, $_POST['answer9']);
$status = mysqli_real_escape_string($link, $_POST['status']);

$phone_number = mysqli_real_escape_string($link, $_POST['phone_number']);
$position = mysqli_real_escape_string($link, $_POST['position']);
$experience = mysqli_real_escape_string($link, $_POST['experience']);
$time_to_call = mysqli_real_escape_string($link, $_POST['time_to_call']);
$full_part = mysqli_real_escape_string($link, $_POST['full_part']);

$github_link = mysqli_real_escape_string($link, $_POST['github_link']);
$drive_link = mysqli_real_escape_string($link, $_POST['drive_link']);

 
 
 
   //print_r($total_price);exit;

 
 
// Attempt insert query execution
$sql = "INSERT INTO ns_phase (name, email, answer, answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9,status, jobid, location, phone_number, position,experience,city, file_name, time_to_call,full_part,github_link ,drive_link)
 VALUES ('$name', '$email', '$answer','$answer1', '$answer2', '$answer3','$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$status', '$invoiceid', '$ipdat->geoplugin_countryName', '$phone_number', '$position', '$experience','$ipdat->geoplugin_city', '$file_name', '$time_to_call', '$full_part', '$github_link', '$drive_link')";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
echo "<script type='text/javascript'>
    window.location.href= 'https://nectarspot.com/thankyou';
    </script>";
//  echo '<script>document.querySelector(".submit").addEventListener("click", function(){
//   swal("Our First Alert", "With some body text and success icon!", "success");
// });</script>';
//  echo '<script type="text/javascript">alert("Form Submitted Successfully. Goto Checkout page.!"),setTimeout(function () {
//     window.location.href = "checkout.php";
// }, 1000);</script>';
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$name = $_POST["name"];
$email = $_POST["email"];
//$position = $_POST["position"];
$phone_number = $_POST["phone_number"];

$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';

$mail->Username='support@marketenomics.com';
$mail->Password='Makeitbig@20192020';

$mail->setFrom('info@marketenomicsdigital.com');

$mail->addAddress('nectarspot@gmail.com');
$mail->addReplyTo('nectarspot@gmail.com');
 $mail->addCC('rakesh@iim-jobs.com');
//  $mail->addCC('hello@nectarspot.com');
//  $mail->addBCC('asha@nectarspot.com');

$mail->isHTML(true);
$mail->Subject='Re:Subscriber Details';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <style >
        body {
            margin-left: auto;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            font-family: Open Sans, sans-serif;
            background-color: #ffa500;
            font-size: 18px !important;
            max-width: 800px;
        }

        h1,h2,h3,h4,h5,h6 {margin-top: 0; margin-bottom: 0}
              
        th {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .data-details {
    width: 100%;
}



.data-details tr:nth-child(even){background-color: #f2f2f2}
        
        @media screen and (max-width: 630px) {
            .content {
                max-width: inherit;
            }
            td {display: block; text-align: center;}
            .data-details td {display: table-cell; text-align: left;}
            span.title {display: inline-block !important; padding-top: 20px; max-width: inherit;}
            .shippmethod td {width: 100%;}
            .Paymentdetails td {display: inline;}
            .table-data td {display: block; text-align: left}
        }
    </style>
</head>

<body>
    <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;' class='background'>
  <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;' bgcolor='#ffffff'>
      <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;'' class='wrapper'>
        <tr>
          <td align='left' style='font-family: sans-serif; padding:20px; color:#999999; font-size: 12px;'>
           
          </td>
          <td align='right' style='font-family: sans-serif; padding:20px;'>
            <a target='_blank' style='text-decoration: none;' href='#'>
             <img src='https://nectarspot.com/images/new-ns-clear-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 168px; width:200px; height:35px;'>
            </a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'>
      <table bgcolor='#1b48b2' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 40px; font-size: 28px; font-weight: bold; color: #ffffff; font-family: sans-serif;' class='header'>
            Frontend Developer Job Application
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 0px 20px; font-family: sans-serif;'>
               <h2 style='margin:0; padding:0;'>Dear Admin,</h2>
               <p>$name has applied for position in Frontend Developer Form. </p>
               <p> Please find the results <a href='https://marketenomicsdigital.com/NS-Forms/phase_view'>here</a> for resume and other details.</p>
               
           </td>
           
         </tr>
       </table>
     </td>
     </tr>
     <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding:0px 20px 10px 20px; font-family: sans-serif;'>
               
               <p><span style='color:#000000;'>Email:</span>  $email</p>
               <p><span style='color:#000000;'>Phone Number:</span>  $phone_number</p>
               
                <p><span style='color:#000000;'>Date:</span>  $current_date</p>
                <p><span style='color:#000000;'>IP Address:</span>  $ipaddress</p>
           </td>
           
         </tr>
       </table>
     </td>
  </tr>
  <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'>
      <table bgcolor='#1b48b2' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='center' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px; color: #ffffff; font-family: sans-serif;'>
<p><a href='https://nectarspot.com'><span style='color:#FFFFFF;'>Home</span></a> | <a href='https://nectarspot/about-us'><span style='color:#FFFFFF;'>About</span></a> | <a href='https://nectarspot/services-grid'><span style='color:#FFFFFF;'>Services</span></a> | <a href='https://nectarspot/contact-us'><span style='color:#FFFFFF;'>Contact</span></a> © NectarSpot Inc</p>

          </td>
			  </tr>
			</table>
		</td>
	</tr>
	<tr>
		<td align='left' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;' class='footer'>
      <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='left' style='font-family: sans-serif; padding:20px; font-size: 13px; font-family: sans-serif;'>
            <p>hello@nectarspot.com </p>
          </td>
          <td align='right' style='font-family: sans-serif; padding:20px; font-size: 13px; font-family: sans-serif;'>
            <p>All rights reserved </p>
          </td>
        </tr>
      </table>
		</td>
	</tr>
</table>
</body>

</html>";

if(!$mail->send()){
    echo "message could not be sent";
}else{
    echo "Message has benn sent!";
}








}
 

?>