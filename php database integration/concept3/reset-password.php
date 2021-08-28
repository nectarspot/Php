<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
}
        body {
            font-family: 'Montserrat', sans-serif;
        }
        label {
            color: #000;
        }
        .logo-text {
    font-size: 22px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 1.55em 0 0;
}
.logo-text::after {
    border-bottom: 2px solid #000;
    content: " ";
    display: block;
    width: 36%;
}
.btn-primary {
    font-weight: 700;
    color: #fff;
    border-color: #C59D5F;
    background-color: #C59D5F;
    width: 100%;
}
.center-block {
    margin: 0 auto;
    display: table;
}
.btn-primary:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff;
    background-color: #C59D5F;
    border-color: #C59D5F;
}
.blue-font {
    color: #000;
}
form {
    margin-bottom: 2em;
}
</style>
</head>
<body>
    <div class="container">
<div class="row"><br><br><br>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border-radius:15px;box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-webkit-box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-moz-box-shadow: 2.5px 4.33px 15px 0 rgba(0, 0, 0, .15);-webkit-appearance: none;">
          <br><br>
<h3 class="blue-font">Reset password</h3>


  <form action="" method="post">
      <div class="form-group">
                  <label for="email">Email</label>
                  <input  class="form-control" id="email" name="email" placeholder="Enter Your Registered Mail..">
                </div>
   

   

    <button type="submit" value="Submit" class="btn btn-primary ">Send ➞</button>
  </form>
</div>
</div>
</div>

<?php
if( $_POST){




require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


$email = $_POST["email"];


$mail = new PHPMailer;
//$mail->isSMTP();
$mail->Host ='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='livclinic2021@gmail.com';
$mail->Password='LivWellness@123';

$mail->setFrom($email);
$mail->addAddress('livclinic2021@gmail.com');
$mail->addReplyTo('livclinic2021@gmail.com');


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
                                            <td align='center'><img src='https://www.livclinic.com/images/white-bg-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px'></td>
                                        </tr>                                        
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                             
                                <td height='2' align='center' bgcolor='#3b3b3b'></td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            <tr>
                                <td align='left' style='padding-left: 10px; padding-right: 10px; padding-top: 0px; padding-bottom: 0px;'>
                                    <p style='color: #ffa500; font-weight: bold'>
                                    
                                   
<h3 style='color:#000000;'>Hello LivWellness!</h3><br>
<h3>Forgot Password <a href='https://marketenomicsdigital.com/indianharvest/update-password'>Link<a/> Here</h3>

                                </td>
                            </tr>
                             
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            <tr>
                                <td align='center' style='padding-left: 10px; padding-right: 10px; font-size: 14px'>
                                    <table width='100%' cellpadding='0' cellspacing='0' class='table-data'>
                                        <tr>
                                            <td  align='left'>
                                               
                                        </tr>
                                         <tr>
                                <td height='20' align='center'></td>
                            </tr>
                                        <tr>
                                            <td  align='left'>
                                                <table width='100%' cellpadding='4' cellspacing='2' >
                                                
                                                 <tr>
                                                     
                                                 </tr>
                                                
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
              <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            <tr>
                                <td height='2' align='center' bgcolor='#3b3b3b'></td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                         
                            
                            
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            <tr>
                                <td height='40' align='center'>
                                    <a style='font-size:20px; color:#ffa21a; text-decoration: none; font-weight: bold;' href='https://www.livclinic.com/'>www.livclinic.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td height='80' align='center'>
                                    <p>
                                        <span style='padding:10px 0;'>
                            <a href='http://www.facebook.com' style='text-decoration: none;'>
                              <img src='https://gallery.mailchimp.com/d1e38b5d598c6f44dff403363/images/9eb8a202-5827-4e02-82c4-d3789be88db6.jpg' width='48' height='48'  border='0' style='padding-left:18px;' title='Facebook'>
                              </a>&nbsp;&nbsp;
                              <a href='http://www.twitter.com' style='text-decoration: none;'>
                                <img src='https://gallery.mailchimp.com/d1e38b5d598c6f44dff403363/images/be009b1d-9ed9-4992-bbfd-dff4b494cc96.jpg' width='48' height='48' border='0' style='padding-left:110px; ' title='Twitter'>
                                </a>&nbsp;&nbsp;
                                <a href='http://www.instagram.com/' style='text-decoration: none;'>
                                  <img src='https://gallery.mailchimp.com/d1e38b5d598c6f44dff403363/images/a56fcf27-08fc-4e2d-b172-ea49d2b85168.jpg' width='48' height='48'  border='0' style='padding-left:160px;' title='instagram'>
                                  </a>
                                </span>
                                    </p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height='40' align='center'></td>
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
    echo "Forgot Password successfully Sent to your Register mail!";
}

}
?>
</body>
</html>