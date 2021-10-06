<?php
 session_start();
?>

<?php
    if(isset($_POST['Accept']))
    {
        $msg = "Accept";
        $status=$_POST['Accept'];
    }
    
     if(isset($_POST['Reject']))
    {
        $msg = "Reject";
        $status=$_POST['Reject'];
    }
   
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE livclinic_login SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
         $_SESSION['success_status'] = "Status Changed Successfully...";
       echo "<script type='text/javascript'>
    window.location.href= 'https://www.livclinic.com/dashboard/user-list';
  </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
        
        
        
        
        
        
    ?>
    
    <?php
    if (isset($_POST['Accept'])){
        
        
         require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


//$date = $_POST["date"];
//$time = $_POST["time"];

$email = $_POST["email"];
$fullname = $_POST["name"];

$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';

$mail->Username='info@marketenomicsdigital.com';
$mail->Password='Allthebest@123';

$mail->setFrom('info@marketenomicsdigital.com');
$mail->addAddress($email);
//$mail->addReplyTo('nectarspot@gmail.com');
// $mail->addCC('rakesh@nectarspot.com');
// $mail->addBCC('nectarspot.ticket@gmail.com')


$mail->isHTML(true);
$mail->Subject='Re:User Login Access Mail';
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
                                            <td align='center'><img src='https://www.livclinic.com/images/white-bg-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px; width:230px; height:100px'></td>
                                        </tr>                                        
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            
                            <tr align='center'>
                                <td align='left' style='border: 2px solid #8F6D94; box-shadow: -3px 2px 4px 7px #bbcbd8;padding-left: 50px; padding-right: 50px; padding-top: 10px; padding-bottom: 10px;'>
                                     <h2 style='margin:0; padding:0;'>Hello $fullname,</h2>
                                    <p>Your registration is been accepted, Now you can </p>
                                    <a href='https://www.livclinic.com/dashnboard'>
                                    <button style='margin-top:5px;padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; width:20%; background-color:#CBB094;color:#fff;border-radius:30px;border:2px solid #CBB094'> Login to Dashboard</button></a>
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
   // echo "Message has been sent!";
}
    }
    
    ?>
    
     <?php
    if (isset($_POST['Reject'])){
        
        
require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


//$date = $_POST["date"];
//$time = $_POST["time"];

$email = $_POST["email"];


$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';

$mail->Username='info@marketenomicsdigital.com';
$mail->Password='Allthebest@123';

$mail->setFrom('info@marketenomicsdigital.com');
$mail->addAddress($email);
//$mail->addReplyTo('nectarspot@gmail.com');
// $mail->addCC('rakesh@nectarspot.com');
// $mail->addBCC('nectarspot.ticket@gmail.com')


$mail->isHTML(true);
$mail->Subject='Re:User Login Rejected Mail';
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
                                            <td align='center'><img src='https://www.livclinic.com/images/white-bg-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px; width:230px; height:100px'></td>
                                        </tr>                                        
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            
                            <tr align='center'>
                                <td align='left' style='border: 2px solid #8F6D94; box-shadow: -3px 2px 4px 7px #bbcbd8;padding-left: 50px; padding-right: 50px; padding-top: 10px; padding-bottom: 10px;'>
                                     <h2 style='margin:0; padding:0;'>Hello $fullname,</h2>
               <p>Your registration is been rejected from Admin to view the dashboard. Please come back again</p>
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
   // echo "Message has been sent!";
}
    }
    
    ?>