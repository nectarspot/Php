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

    $sql = "UPDATE iimnet_login SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/admin_dashboard/user_list.php';
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
    <title>IIMnet</title>
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
          <h3 style='text-align: center;font-size: 50px; padding-left: -36px;margin-right: 89px;'>IIMnet</h3>
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
             Welcome to IImnet
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
               <h2 style='margin:0; padding:0;'>Hello $fullname,</h2>
               <p>Your registration is been accepted, Now you can login to the dashboard<a href='https://iimnet.com/admin_dashboard/index.php'> here. </a></p>
              
              
           </td>
           
         </tr>
       </table>
     </td>
     </tr>
     <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        
       </table>
     </td>
  </tr>
  
		
	
	 <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'>
      <table bgcolor='#1b48b2' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='center' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px; color: #ffffff; font-family: sans-serif;'>
<p><a href='https://iimnet.com/'><span style='color:#FFFFFF;'>Home</span></a> | <a href='https://iimnet.com/internship/index'><span style='color:#FFFFFF;'>Internship</span></a> | <a href='https://iimnet.com/contact'><span style='color:#FFFFFF;'>Contact</span></a> © IIMnet 2021</p>

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
            <p>info@iimnet.com </p>
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
    <title>IIMnet</title>
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
          <h3 style='text-align: center;font-size: 50px; padding-left: -36px;margin-right: 89px;'>IIMnet</h3>
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
             Welcome to IImnet
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
               <h2 style='margin:0; padding:0;'>Hello $fullname,</h2>
               <p>Your registration is been rejected from Admin to view the dashboard. Please come back again</p>
              
              
           </td>
           
         </tr>
       </table>
     </td>
     </tr>
     <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        
       </table>
     </td>
  </tr>
  
		
	
	 <tr>
    <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'>
      <table bgcolor='#1b48b2' border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
        <tr>
          <td align='center' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px; color: #ffffff; font-family: sans-serif;'>
<p><a href='https://iimnet.com/'><span style='color:#FFFFFF;'>Home</span></a> | <a href='https://iimnet.com/internship/index'><span style='color:#FFFFFF;'>Internship</span></a> | <a href='https://iimnet.com/contact'><span style='color:#FFFFFF;'>Contact</span></a> © IIMnet 2021</p>

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
            <p>info@iimnet.com </p>
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
   // echo "Message has been sent!";
}
    }
    
    ?>