<?php
    if(isset($_POST['approved']))
    {
        $msg = "Approved";
        $status=$_POST['approved'];
    }
    if(isset($_POST['rejected']))
    {
        $msg = "Rejected";
        $status=$_POST['rejected'];
    }
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE ns_phase SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql))
        header("refresh:1; url=phase_view.php?msg=$msg");
    else
        var_dump(mysqli_error($conn));
    ?>
    
    <?php
    
    if(isset($_POST['submit'])){
        
        $email = $_POST["email"];
$status = $_POST["status"];
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
                                    <span style='color: #3b3b3b'>Dear $firstname1,</span>
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

    }
    
    ?>