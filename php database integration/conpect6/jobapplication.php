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
 

$file_name = $_FILES["file"]["name"]; 
    $tempname = $_FILES["file"]["tmp_name"];     
        $folder = "uploads/".$file_name; 

if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 

     
//Escape user inputs for security

$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone_number = mysqli_real_escape_string($link, $_POST['phone_number']);
$appication = mysqli_real_escape_string($link, $_POST['appication']);
$work = mysqli_real_escape_string($link, $_POST['work']);
$experience = mysqli_real_escape_string($link, $_POST['experience']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$address1 = mysqli_real_escape_string($link, $_POST['address1']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$zipcode = mysqli_real_escape_string($link, $_POST['zipcode']);
$description = mysqli_real_escape_string($link, $_POST['description']);
 $certification = mysqli_real_escape_string($link, $_POST['certification']);
 
 
 
   //print_r($total_price);exit;

 
 
// Attempt insert query execution
$sql = "INSERT INTO ns_job_application (name, email, phone_number, appication, work, experience, address,address1, city, zipcode, file_name, description, certification)
 VALUES ('$name','$email', '$phone_number', '$appication','$work', '$experience', '$address', '$address1', '$city',
 '$zipcode', '$file_name','$description','$certification')";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
echo "<script type='text/javascript'>alert('Form Submitted Successfully...');
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


$name = $_POST["name"];

//print_r($name);

$email = $_POST["email"];
$to = "nectarspot@gmail.com";
$subject = "Re:Emplyee Details ";
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
                                            <td align='center'><img src='https://nectarspot.com/images/new-ns-clear-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px; width:249px; height:49px;'></td>
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
                                    <span style='color: #3b3b3b'>Application  Details</span>
                                    <br /><br />


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
                                                    <td  align='left' width='150' >Name</td>
                                                    <td  align='left' bgcolor='fff6e5'>$name</td>
                                                 </tr>

                                               
                                                 
                                                 <tr>
                                                     <td>Email Address</td>
                                                     <td bgcolor='fff6e5'>$email</td>
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
                                    <a style='font-size:20px; color:#ffa21a; text-decoration: none; font-weight: bold; width:249px;height:49px;' href='https://nectarspot.com/'>www.nectarspot.com</a>
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
$firstname1 = $_POST["name"];
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
                                            <td align='center'><img src='https://nectarspot.com/images/new-ns-clear-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px;  width:249px;height:49px;' ></td>
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
                                    <span style='color: #3b3b3b'>Dear $firstname1,</span>
                                    <br /><br />
Thank you for registering with Nectarspot! We look forward
to working with you.

                                </td>
                            </tr>
                             
                            <tr>
                                <tr>
                                            
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
                                    <a style='font-size:20px; color:#ffa21a; text-decoration: none; font-weight: bold; width:249px; height:49px;' href='https://nectarspot.com/'>www.nectarspot.com</a>
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



}
 

?>