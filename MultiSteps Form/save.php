<?php
  
 if(isset($_POST['submit'])){


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$state = $_POST["state"];
$lowerpayment = $_POST["lowerpayment"];
$interestrate = $_POST["interestrate"];

$zipcode = $_POST["zipcode"];
$city = $_POST["city"];
$street = $_POST["street"];
$dob = $_POST["dob"];
$range_value = $_POST["range_value"];
$working_status = $_POST["working_status"];
$credit_score = $_POST["credit_score"];
$credit_score2 = $_POST["credit_score2"];
$employee_status = $_POST["employee_status"];
$paid_status = $_POST["paid_status"];
$annual_income = $_POST["annual_income"];
$fcra = $_POST["fcra"];
$tcpa = $_POST["tcpa"];
$mail = $_POST["mail"];
// $interestrate = $_POST["interestrate"];

    $email = $_POST["email"];
$to = "nectarspot@gmail.com";
$subject = "Re:Empoyee Details ";
$headers = "From: $email\n";

 
 $message = "
<html>
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
                                            <td align='center'><img src='https://nectarspot.com/images/new-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px'></td>
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
                                    <span style='color: #3b3b3b'>$firstname Details</span>
                                    <br /><br />
Thank you for registering with Nectarspot! We look forward
to working with you.

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
                                                <h3 style='font-size: 18px'>The following are your registration details:</h3> 
                                            </td>
                                        </tr>
                                         <tr>
                                <td height='20' align='center'></td>
                            </tr>
                                        <tr>
                                            <td  align='left'>
                                                <table width='100%' cellpadding='4' cellspacing='2' >
                                                 <tr>
                                                    <td  align='left' width='150' >First Name</td>
                                                    <td  align='left' bgcolor='fff6e5'>$firstname</td>
                                                 </tr>
                                                 <tr>
                                                    <td  align='left' width='150' >Last Name</td>
                                                    <td  align='left' bgcolor='fff6e5'>$lastname</td>
                                                 </tr>
                                                 <tr>
                                                    <td  align='left' width='150' >State</td>
                                                    <td  align='left' bgcolor='fff6e5'>$state</td>
                                                 </tr>
                                                 <tr>
                                                    <td  align='left'>Lower Payment</td>
                                                    <td  align='left' bgcolor='fff6e5'>$lowerpayment
</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Interestrate</td>
                                                     <td bgcolor='fff6e5'>$interestrate</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Zipcode</td>
                                                     <td bgcolor='fff6e5'> $zipcode</td>
                                                 </tr>
                                                 <tr>
                                                     <td>City</td>
                                                     <td bgcolor='fff6e5'>$city</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Street</td>
                                                     <td bgcolor='fff6e5'>$street</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Date Of Birth</td>
                                                     <td bgcolor='fff6e5'>$dob</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Range Valu</td>
                                                     <td bgcolor='fff6e5'>$range_value</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Working Status</td>
                                                     <td bgcolor='fff6e5'>$working_status</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Credit Score</td>
                                                     <td bgcolor='fff6e5'>$credit_score</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Credit Score2</td>
                                                     <td bgcolor='fff6e5'>$credit_score2</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Employee Status</td>
                                                     <td bgcolor='fff6e5'>$employee_status</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Paid Status</td>
                                                     <td bgcolor='fff6e5'>$paid_status</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Annual Income</td>
                                                     <td bgcolor='fff6e5'>$annual_income</td>
                                                 </tr>
                                                 <tr>
                                                     <td>FCRA</td>
                                                     <td bgcolor='fff6e5'>$fcra</td>
                                                 </tr>
                                                 <tr>
                                                     <td>TCPA</td>
                                                     <td bgcolor='fff6e5'>$tcpa</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Email Address</td>
                                                     <td bgcolor='fff6e5'>$mail</td>
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
                                    <a style='font-size:20px; color:#ffa21a; text-decoration: none; font-weight: bold;' href='https://nectarspot.com/'>www.nectarspot.com</a>
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

</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
 $headers .=  "From: $email\n";
// $headers .=  "CC: $email\n";

mail($to,$subject,$message,$headers);

 $email = $_POST["email"];
$firstname1 = $_POST["firstname"];
$to = "$email";
$subject = "Re:Success Mail ";
$headers = "From: $email\n";

 
$message1 = "
<html>
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
                                            <td align='center'><img src='https://nectarspot.com/images/new-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px'></td>
                                        </tr>                                        
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                             <tr>
                                <td>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td height='2' align='center' bgcolor='#3b3b3b'></td>
                            </tr>
                            <tr>
                                <td height='40' align='center'></td>
                            </tr>
                            <tr>
                                <td align='left' style='padding-left: 10px; padding-right: 10px; padding-top: 0px; padding-bottom: 0px;'>
                                    <p style='color: #ffa500; font-weight: bold'>
                                    <span style='color: #3b3b3b'>Dear $firstname,</span>
                                    <br /><br />
Thank you for registering with Nectarspot! We look forward
to working with you.

                                </td>
                            </tr>
                             
                            <tr>
                                <tr>
                                            <td align='center'><img src='https://nectarspot.com/images/nectar.png' border='0' style='padding-left:10px; background-color:grey; vertical-align: bottom; padding-right: 10px'></td>
                                        </tr> 
                            </tr>
                            <tr>
                                <td align='center' style='padding-left: 10px; padding-right: 10px; font-size: 14px'>
                                   
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
                                    <a style='font-size:20px; color:#ffa21a; text-decoration: none; font-weight: bold;' href='https://nectarspot.com/'>www.nectarspot.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td height='80' align='center'>
                                    <p>
                                        <span style='padding:10px 0;'>
                            <a href='http://www.facebook.com' style='text-decoration: none;'>
                              <img src='https://gallery.mailchimp.com/d1e38b5d598c6f44dff403363/images/9eb8a202-5827-4e02-82c4-d3789be88db6.jpg' width='48' height='48'  border='0' style='padding-left:10px;' title='Facebook'>
                              </a>&nbsp;&nbsp;
                              <a href='http://www.twitter.com' style='text-decoration: none;'>
                                <img src='https://gallery.mailchimp.com/d1e38b5d598c6f44dff403363/images/be009b1d-9ed9-4992-bbfd-dff4b494cc96.jpg' width='48' height='48' border='0' style='padding-left:10px; ' title='Twitter'>
                                </a>&nbsp;&nbsp;
                                <a href='http://www.instagram.com/' style='text-decoration: none;'>
                                  <img src='https://gallery.mailchimp.com/d1e38b5d598c6f44dff403363/images/a56fcf27-08fc-4e2d-b172-ea49d2b85168.jpg' width='48' height='48'  border='0' style='padding-left:10px;' title='instagram'>
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

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
 $headers= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 

// More headers
 $headers .=  "From: <nectarspot@gmail.com>\n";
// $headers .=  "CC: $email\n";

mail($to,$subject,$message1,$headers );

$servername = "localhost";
$username = "marketf7_forms";
$password = "Forms@123";
$dbname = "marketf7_9b5";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//Escape user inputs for security



$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$mail = mysqli_real_escape_string($link, $_POST['mail']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$zipcode = mysqli_real_escape_string($link, $_POST['zipcode']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$street = mysqli_real_escape_string($link, $_POST['street']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
 $lowerpayment = mysqli_real_escape_string($link, $_POST['lowerpayment']);
 
 $interestrate = mysqli_real_escape_string($link, $_POST['interestrate']);
 
 
 $range_value = mysqli_real_escape_string($link, $_POST['range_value']);
 $working_status = mysqli_real_escape_string($link, $_POST['working_status']);
 $credit_score = mysqli_real_escape_string($link, $_POST['credit_score']);
 $credit_score2 = mysqli_real_escape_string($link, $_POST['credit_score2']);
 $employee_status = mysqli_real_escape_string($link, $_POST['employee_status']);
 
 $paid_status = mysqli_real_escape_string($link, $_POST['paid_status']);
 $annual_income = mysqli_real_escape_string($link, $_POST['annual_income']);
 $fcra = mysqli_real_escape_string($link, $_POST['fcra']);
 $tcpa = mysqli_real_escape_string($link, $_POST['tcpa']);
 

 
// Attempt insert query execution
$sql = "INSERT INTO formdata (name,email, firstname, mail,state,zipcode,lastname, city,street,dob,lowerpayment,interestrate,range_value,working_status,credit_score,credit_score2,employee_status,paid_status,annual_income,fcra,tcpa)
 VALUES ('$name','$email', '$firstname', '$mail','$state', '$zipcode', '$lastname','$city','$street','$dob', '$lowerpayment', '$interestrate','$range_value', '$working_status','$credit_score', '$credit_score2', '$employee_status', '$paid_status', '$annual_income', '$fcra', '$tcpa' )";
if(mysqli_query($link, $sql)){
header('Location: thank-you.php');
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}

?>