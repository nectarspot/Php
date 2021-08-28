<?php
    session_start();
    // if(!isset($_SESSION["login_user"])) {
    //     header("Location:index.php");
    //     exit();
    // }
?>


<?php include 'header.php' ?>



    <style>
    .hide{

visibility: hidden

}
.btn-primary{
    width: 85px;
padding: 8px 1px;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  width: 61px; 
  padding: 11px 1px;
  font-size: 11px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content input:hover {background-color: red;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.approved{
    width: 173px;
    padding: 16px 1px;
    font-size: 8px;
}
.drp-dwn-btn {
    background-color: #1b48b2 !important;
    margin-left: 15px !important;
        margin-top: -15px !important;
}
.ul-drp-dwn-menu {
    padding-left: 10px;
}
.dropdown-menu {min-width: auto !important;}
.ul-drp-dwn-menu-li {
    padding-bottom: .5rem;
}
.dr{
   
    position: absolute ;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 7rem;
    padding: .5rem 0;
    /* margin: 0.125rem -60px 4px; */
    font-size: .875rem;
    color: #6a7a8c;
    text-align: left;
    background-color: #1b48b2;
    border: 1px solid #1b48b2;
    border-radius: 2px;
    opacity: 1px;

}
.hold{
    background-color: #4c64af;
    color: white;
    width: 54px;
    padding: 10px 0px;
    font-size: 11px;
    border: none;
}
.reject{
    background-color: #f93913;
    color: white;
    width: 54px;
    padding: 10px 0px;
    font-size: 11px;
    border: none;
}
.btn-success:hover {
    color: #fff;
    background-color: #4c64af !important;
    border-color: #4c64af !important;
}
</style>


<body>

     

<?php
    if(isset($_POST['approved']))
    {
        $msg = "Approved";
        $status=$_POST['approved'];
    }
     if(isset($_POST['approved1']))
    {
        $msg = "Approved1";
        $status=$_POST['approved1'];
    }
      if(isset($_POST['approved2']))
    {
        $msg = "Approved2";
        $status=$_POST['approved2'];
    }
      if(isset($_POST['approved3']))
    {
        $msg = "Approved3";
        $status=$_POST['approved3'];
    }
    if(isset($_POST['rejected']))
    {
        $msg = "Rejected";
        $status=$_POST['rejected'];
    }
     if(isset($_POST['hold']))
    {
        $msg = "hold";
        $status=$_POST['hold'];
    }
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE ns_careers_apply SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql))
        header("refresh:1; url=careers_apply_view");
    else
        var_dump(mysqli_error($conn));
    ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand" style="background-color: #ffffff;">
                        <a href="index.php" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!--<img src="https://nectarspot.com/images/new-ns-clear-logo.png" alt="homepage" class="dark-logo" style="height: 40px; width: 200px; " />-->
                                <!-- Light Logo icon -->
                                <img src="https://nectarspot.com/images/new-ns-clear-logo.png" alt="homepage" class="light-logo" style="height: 31px; width: 187px;"/>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                           
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <?php echo ucwords($_SESSION['username'])?>
                             <button class="button btn-primary" style="margin-left:782px;"> <a href="admin_logout.php" style="color:#ffffff;"> Logout</a></button>
                           
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                       
                            
                            
                             <li class="sidebar-item nav-item dropdown">
                            <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Careers  
                                 
                            </a>
                            <ul class="dropdown-menu submenu-drpdwn">
                                 <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/careers_apply_view"> Apply </a></li>
      <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/phase_view"> Frontend Developer </a></li>
  </ul>
                            </li>
                            
                            
                    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title">Careers Apply Details</h4>
                         <span class="blue-font">( Click on download button to the download file )</span>
                         <?php if(isset($_SESSION['message'])): ?>
     <div class="col-md-5 mx-auto mt-5 alert alert-danger">
     <?php echo $_SESSION['message']; ?>
     </div>
<?php endif; ?>
<?php unset($_SESSION['message']); ?>
    
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
                     

                    </div>
                  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                          
                           
        <div class="table-wrapper table-responsive">
             <form method="POST" name="frm" action=''>
           <table id="example" class="table-striped"> 
             <thead>

             <th class="display-flex">
        <input type="checkbox" class="select-all" />
        <div class = "btn-group">
  
   
   <button type = "button" class = "btn btn-default dropdown-toggle drp-dwn-btn" data-toggle = "dropdown">
      <span class = "caret"></span>
      <span class = "sr-only">Toggle Dropdown</span>
   </button>
    
   <ul class = "dropdown-menu ul-drp-dwn-menu dr" role = "menu">
      <li onClick="edit_records();" class="ul-drp-dwn-menu-li"><span style="color:#ffffff;">Edit</span></li>
       <li onClick="delete_records();" ><span style="color:#ffffff;">Delete</span></li>
      <!--<li ><a href="delete_mul_careers.php"><span style="color:#ffffff;">Delete</span></a></li>-->
     
      
     
   </ul>
   
</div></th>
               <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Experience</th>
               <th> Call</th>
                <th>Full/Part Time</th>
                <th>Status</th>
                <th>Resume</th>
                 <th>Date</th>
               <th>IP Address</th>
                 <th class="hide">Link</th>
                <th>Action</th>
               
                <th>Approved/Rejected</th>
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM ns_careers_apply order by id desc";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
    <tr>
     <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>
     
      <td><?php echo $file['name']; ?></td>
      <td><a href="mailto:<?php echo $file['email'] ?>"><?php echo $file['email'] ?></a></td>
      <td><?php echo $file['phone_number']; ?></td>
      <td><?php echo $file['experience']; ?> years</td>
       <td><?php echo $file['time_to_call']; ?></td>
        <td><?php echo $file['full_part']; ?></td>
      <td><?php echo $file['status']; ?></td>
      <td><?php echo $file['file_name']; ?></td>
       <td><?php echo $file['date']; ?></td>
        <td><?php echo $file['ip_address']; ?></td>
       <td class="hide">https://marketenomicsdigital.com/NS-Forms/resume_download/<?php echo $file['file_name']; ?></td>
     
     
     
      <td>
  <div class="btn-group">
  &nbsp;<a class="btn btn-primary" style="background-color:blue; width:30px;"  href="resume_download?filename=<?php echo $file['file_name'];?>"><i class="fa fa-download" aria-hidden="true"></i></a></div></td>
   </form>
<td>
   
                            <form method="post" action="" id="form">
                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
                                 <input type="hidden" name="email" value="<?php echo $file['email']; ?>" />
                                  <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />
                                   <input type="hidden" name="name" value="<?php echo $file['name']; ?>" />
                                   <input type="hidden" name="position" value="<?php echo $file['position']; ?>" />
                                <!--<input type="submit" id="one" class="btn btn-primary" value="Approved" name="approved" style="width: 85px; padding: 8px 1px;"  />-->
                                <div class="dropdown">
  <button class="dropbtn">Approve</button>
  <div class="dropdown-content">
   <input type="submit" id="one" class="btn btn-primary approved" value="1st Round Overview" name="approved"   />
   <input type="submit" id="one" class="btn btn-primary approved" value="2nd Round Technical" name="approved1"   />
   <input type="submit" id="one" class="btn btn-primary approved" value="HR to Hire" name="approved2"   />
   <input type="submit" id="one" class="btn btn-primary approved" value="Joined as an Employee" name="approved3"   />
  </div>
</div>
                                <input type="submit" id="two" class="btn btn-success hold" value="On Hold" name="hold"  />
                               <input type="submit" id="two" class="btn btn-danger reject" value="Reject" name="rejected"  />
                               
                               
                            </form>
                        </td>
    </tr>
  

    

           <?php endforeach;?>
                  
</tbody>

                   
              </table>

                           
                    <?php
               if(isset($_POST['but_delete'])){
   

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){
        
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');
      $deleteUser = "DELETE from ns_careers_apply WHERE id=".$deleteid;
      mysqli_query($conn,$deleteUser);
       echo "<script type='text/javascript'>confirm('Are you sure to delete this record?');
    window.location.href= 'careers_apply_view';
    </script>";
    }
  }
 
}
?>        
                        </div>
                    </div>
                    
                </div>
                
                </div>
               
                
            </div>
           
        </div>
       
    </div>
    
     <?php
  
 if (isset($_POST['approved'])){




 require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$email = $_POST["email"];
$status = $_POST["status"];
$name = $_POST["name"];
$position = $_POST["position"];

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
// $mail->addBCC('nectarspot.ticket@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Employee Approved Mail';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    
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
                NectarSpot Careers
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 20px 20px; font-family: sans-serif;'>
               <h2 style='margin:0; padding:0;'>Dear $name,</h2>
               <p>  Thanks for your application at NectarSpot.</p>
               <p>Your Resume is selected for the next round of interview.</p>
               <P>Someone from our team will contact you via email or phone soon.</p>
               <p>Please ensure to add info@marketenomicsdigial.com to safe sender list to receive further updates.</p>
               
               
               <p>Regards,</p>
               <p>MarketEnomics Digital ( a subsidiary of NectarSpot Inc.) HR team.</p>
               
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
    echo "Message has been sent!";
}






}

?>

 <?php
  
 if (isset($_POST['approved1'])){



require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$email = $_POST["email"];
$status = $_POST["status"];
$name = $_POST["name"];
$position = $_POST["position"];

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
// $mail->addBCC('nectarspot.ticket@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Employee Approved Mail';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    
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
                NectarSpot Careers
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 20px 20px; font-family: sans-serif;'>
               <h2 style='margin:0; padding:0;'>Dear $name,</h2>
               <p>  You are shortlisted for Technical round at NectarSpot.</p>
               <p>Our Technical Team will contact you for interview soon..</p>
               
               
               
               <p>Regards,</p>
               <p>MarketEnomics Digital ( a subsidiary of NectarSpot Inc.) HR team.</p>
               
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
    echo "Message has been sent!";
}   


}

?>

<?php
  
 if (isset($_POST['approved2'])){



require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$email = $_POST["email"];
$status = $_POST["status"];
$name = $_POST["name"];
$position = $_POST["position"];

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
// $mail->addBCC('nectarspot.ticket@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Employee Approved Mail';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    
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
                NectarSpot Careers
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 20px 20px; font-family: sans-serif;'>
               <h2 style='margin:0; padding:0;'>Dear $name,</h2>
               <p>  You are selected for Manager and HR round at NectarSpot..</p>
               <p>Our HR team will contact you soon..</p>
               
               
               
               <p>Regards,</p>
               <p>MarketEnomics Digital ( a subsidiary of NectarSpot Inc.) HR team.</p>
               
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
    echo "Message has been sent!";
}



}

?>

<?php
  
 if (isset($_POST['approved3'])){




 require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$email = $_POST["email"];
$status = $_POST["status"];
$name = $_POST["name"];
$position = $_POST["position"];

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
// $mail->addBCC('nectarspot.ticket@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Employee Approved Mail';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    
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
                NectarSpot Careers
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 20px 20px; font-family: sans-serif;'>
              <h2 style='margin:0; padding:0;'>Dear $name,</h2>
               <p>Congratulation!! You are selected at NectarSpot.</p>
               <p>We will release your offer letter soon..</p>
               
               
               
               <p>Regards,</p>
               <p>MarketEnomics Digital ( a subsidiary of NectarSpot Inc.) HR team.</p>
               
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
    echo "Message has been sent!";
}



}

?>

 <?php
  
 if (isset($_POST['rejected'])){




  require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$email = $_POST["email"];
$status = $_POST["status"];
$name = $_POST["name"];
$position = $_POST["position"];

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
// $mail->addBCC('nectarspot.ticket@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Employee Approved Mail';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    
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
                NectarSpot Careers
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 20px 20px; font-family: sans-serif;'>
             <h2 style='margin:0; padding:0;'>Dear $name,</h2>
               <p>  Thanks for your application at NectarSpot.</p>
               <p>Your profile is not selected for the next round of Interview. </p>
               <p>Your resume is added to our database and if need arises, someone from our team will contact you via email or phone.</p>
               <p>In the meantime, we wish you all the best for your job search.</p>
               
               <p>Please ensure to add info@marketenomicsdigial.com to safe sender list to receive further updates.</p>
               
               <p>Regards,</p>
               <p>NectarSpot HR team.</p>
               
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
    echo "Message has been sent!";
}



}

?>

 <?php
  
 if (isset($_POST['hold'])){




  require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

$email = $_POST["email"];
$status = $_POST["status"];
$name = $_POST["name"];
$position = $_POST["position"];

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
// $mail->addBCC('nectarspot.ticket@gmail.com');


$mail->isHTML(true);
$mail->Subject='Re:Employee Approved Mail';
$mail->Body="<html>
<head>
    <title>Beyondshelving - Contact Us</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no'>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no';>
  
    
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
                NectarSpot Careers
          </td>
        </tr>
       </table>
     </td>
   </tr>
  <tr>
     <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-top: 5px;' bgcolor='#FFFFFF'>
       <table border='0' cellpadding='0' cellspacing='0' align='center' width='600' style='border-collapse: collapse; border-spacing: 0; padding: 0; max-width: 600px;' class='wrapper'>
         <tr>
           <td style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 20px 20px 20px; font-family: sans-serif;'>
             <h2 style='margin:0; padding:0;'>Dear $name,</h2>
               <p>  Thanks for your application at NectarSpot.</p>
               <p>Your Resume is On Hold for the next round of interview. </p>
               <p>Your resume is added to our database and if need arises, someone from our team will contact you via email or phone.</p>
               <p>In the meantime, we wish you all the best for your job search.</p>
               
               <p>Please ensure to add info@marketenomicsdigial.com to safe sender list to receive further updates.</p>
               
               <p>Regards,</p>
               <p>NectarSpot HR team.</p>
               
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
    echo "Message has been sent!";
}



}

?>
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>

    <script type="text/javascript">
        
$(document).ready(function() {
    $('#example').DataTable( {


        dom: 'Bfrtip',

        buttons: [
            'copy',
             { 
      extend: 'csv',
      text: 'Export'
   }, 
             'excel',
              'pdf' 
        ],
        initComplete: function () {
            var btns = $('.dt-button');
            btns.addClass('btn btn-success btn-sm');
            btns.removeClass('dt-button');

        }

        
    } );
} );

    </script>
   
    
 <script>
// $("#checkAl").click(function () {
// $('input:checkbox').not(this).prop('checked', this.checked);
// });

 $('document').ready(function()
{
    $(".select-all").click(function ()
    {
        $('.chk-box').attr('checked', this.checked)
    });
        
    $(".chk-box").click(function()
    {
        if($(".chk-box").length == $(".chk-box:checked").length)
        {
            $(".select-all").attr("checked", "checked");
        }
        else
        {
            $(".select-all").removeAttr("checked");
        }
    });
});


//  for select / deselect all


//  page redirect on user click edit/delete
function edit_records() 
{
	document.frm.action = "edit_mul_careers.php";
	document.frm.submit();		
}
function delete_records() 
{
	document.frm.action = "delete_mul_careers.php";
	document.frm.submit();
}
    </script>
    
    
</body>

</html>