<?php

?>

<?php
include("db_config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // username and password 
    
     $fullname=mysqli_real_escape_string($dbconfig,$_POST['fullname']);
    $email=mysqli_real_escape_string($dbconfig,$_POST['email']);
    $user=mysqli_real_escape_string($dbconfig,$_POST['user']);
    $status=mysqli_real_escape_string($dbconfig,$_POST['status']);
     $user_type=mysqli_real_escape_string($dbconfig,$_POST['user_type']);
    $password=mysqli_real_escape_string($dbconfig,$_POST['password']); 
    $password1=md5($password); // Encrypted Password with md5
    $sql="Insert into livclinic_login(fullname,email,user,user_type,status,password) values('$fullname','$email','$user','$user_type','$status','$password1')";
    //echo $sql;
    $result=mysqli_query($dbconfig,$sql);
    $msg="Registration Successfully. Click on login button!!";
    //After 
    
      require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


//$date = $_POST["date"];
//$time = $_POST["time"];

$email = $_POST["email"];
$fullname = $_POST["fullname"];

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
$mail->Subject='Re:User Registration Mail';
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
                                    <p>Your registration is Successfully, Now you can </p>
                                    <a href='https://www.livclinic.com/dashboard/login'>
                                    <button style='margin-top:5px;padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; width:20%; background-color:#CBB094;color:#fff;border-radius:30px;border:2px solid #CBB094'> Login to Dashboard</button></a>
                                      <h2>Login Details:</h2>
                                <p>Username: $email</p>
                                 <p>Password: $password</p>
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
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>User Registration</title>
        <style>
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
</style>
    </head>
    <body>
        <div class="container">
            <div class="row"><br><br><br>
                <div class="col-md-4"></div>
                <div class="col-md-4" style="border-radius:15px;box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-webkit-box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-moz-box-shadow: 2.5px 4.33px 15px 0 rgba(0, 0, 0, .15);-webkit-appearance: none;"><br>
                     <img src="https://www.livclinic.com/images/white-bg-logo.png" alt="Girl in a jacket" style="margin: 0 auto;display: table;
    width: 120px;">
                    <!--<div class="center-block"><h1 class="logo-text">LIV Wellness</h1></div> -->
                    <br>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" required="true" placeholder="Full Name" id="fullname" name="fullname" />
                             
                        </div>
                        <input type="hidden" class="form-control" required="true" placeholder="Full Name" id="user" name="user" value="user"  />
                              <input type="hidden" class="form-control" required="true" placeholder="Full Name" id="status" name="status" value="Pending"  />
                               <input type="hidden" class="form-control" required="true" placeholder="Full Name" id="user_type" name="user_type" value="user"  />
                        <div class="form-group">
                            <input type="text" type= "email" class="form-control" required="true" placeholder="Email" id="email" name="email" />
                        </div>
                       
                        <div class="form-group">
                            <input type="password" class="form-control" required="true" placeholder="Password" id="password" name="password" />
                             
                        </div>
                        
                        <?php if (isset($msg)) {
                        echo"<div class='alert alert-success' role='alert'>
                            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                            <span class='sr-only'>Error:</span>".$msg."</div>";
                            } ?>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" class="blue-font">Register</button>
                        </div>
                        <center><a href="index" class="blue-font">Go to login</a></center>
                    </form>
                    <br>  
                </div> 
                
            </div>
        </div>
    </body>
</html>


