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
 
//print_r($_POST['pay_total']);
 

$ipaddress = $_SERVER['REMOTE_ADDR'];

$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ipaddress)); 
    
     $current_date = date("m-d-Y ");
     
//Escape user inputs for security

$user_name = mysqli_real_escape_string($link, $_POST['user_name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$budget = mysqli_real_escape_string($link, $_POST['budget']);
$budget1 = mysqli_real_escape_string($link, $_POST['budget1']);
$budget2 = mysqli_real_escape_string($link, $_POST['budget2']);
$budget3 = mysqli_real_escape_string($link, $_POST['budget3']);
$budget4 = mysqli_real_escape_string($link, $_POST['budget4']);
$visitors = mysqli_real_escape_string($link, $_POST['visitors']);
$visitors1 = mysqli_real_escape_string($link, $_POST['visitors1']);
$bounce_rate = mysqli_real_escape_string($link, $_POST['bounce_rate']);
 $bounce_rate1 = mysqli_real_escape_string($link, $_POST['bounce_rate1']);
 
 
  $time_on_site = mysqli_real_escape_string($link, $_POST['time_on_site']);
  $time_on_site1 = mysqli_real_escape_string($link, $_POST['time_on_site1']);
  $authority = mysqli_real_escape_string($link, $_POST['authority']);
  $authority1 = mysqli_real_escape_string($link, $_POST['authority1']);
  $leads = mysqli_real_escape_string($link, $_POST['leads']);
  $leads1 = mysqli_real_escape_string($link, $_POST['leads1']);
  $sales = mysqli_real_escape_string($link, $_POST['sales']);
  $sales1 = mysqli_real_escape_string($link, $_POST['sales1']);
  $months = mysqli_real_escape_string($link, implode(',', $_POST['months']));

  
 
 
// Attempt insert query execution
$sql = "INSERT INTO goal_setting (user_name, email, budget, budget1, budget2, budget3, budget4, visitors, visitors1, bounce_rate, bounce_rate1, time_on_site, time_on_site1, authority, authority1, leads, leads1, sales, sales1, months,ip_address,date)
 VALUES ('$user_name','$email', '$budget', '$budget1','$budget2', '$budget3', '$budget4','$visitors','$visitors1','$bounce_rate','$bounce_rate1', '$time_on_site', '$time_on_site1', '$authority', '$authority1', '$leads', '$leads1',
 '$sales', '$sales1', ' $months', '$ipaddress', '$current_date' )";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
echo "<script type='text/javascript'>
    window.location.href= 'https://nectarspot.com/thankyou';
    </script>";

} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$user_name = $_POST["user_name"];
$email = $_POST["email"];



$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='nectarspot@gmail.com';
$mail->Password='Allthebest@123';

$mail->setFrom($email);
$mail->addAddress('nectarspot@gmail.com');
$mail->addReplyTo('nectarspot@gmail.com');
 $mail->addCC('rakesh@iim-jobs.com');

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
    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' style='border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px; background-color: #ffffff'>
        <tr>
            <td>
                <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width='100%' cellspacing='0' cellpadding='0'>
                                        <tr>
                                            <td align='center'><img src='https://nectarspot.com/images/new-ns-clear-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px; width:249px; height:49px;'></td>
                                        </tr>                                        
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            
                            <tr align='center'>
                                <td align='left' style='border: 2px solid #8F6D94; box-shadow: -3px 2px 4px 7px #bbcbd8;padding-left: 50px; padding-right: 50px; padding-top: 10px; padding-bottom: 10px;'>
                                    <p style='color: #ffa500; font-weight: bold'>
                                    <h3 style='color:#000000;'>Hello Subscriber,</h3><br>
                                    <h3> $user_name ($email)  join NectarSpot Team.</h3>
                                    <h3> From IP Address: $ipaddress on Date: $current_date</h3>
                                    </td>
                            </tr>
                            <tr>
                                <td height='10' align='center'></td>
                            </tr>
    
                            <tr>
                                <td height='40' style='padding-top:10px;padding-left:30px;padding-bottom:10px;padding-right:30px;'>
                                    <p style='font-size:14px;color:#ccc'>If you are unable to access the dashboard, please email us at <a href='mailto:support@nectarspot.com'>support@nectarspot.com</a>, it will be solved within one business day or you can also raise a ticket at <a href='https://nectarspot.com/support/ticket'>here.</a></p>
                                    <center><a style='font-size:20px;color:#8F6D94;  text-decoration: none; font-weight: bold;' href='https://www.livclinic.com/'>www.livclinic.com</a></center>
                                    
                                </td>
                            </tr>
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