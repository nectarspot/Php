
<?php
session_start();
if (!isset($_SESSION['nID']))
    header("Location: index");



?>

<?php include 'header.php' ?>

<body>
    
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
    $leave_id=$_POST['leave_id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE `leave` SET status = '$status' WHERE leave_id = '$leave_id'";

    if(mysqli_query($conn, $sql))
        header("refresh:1; url=leave_details.php");
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
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="https://nectarspot.com/images/new-ns-clear-logo.png" alt="homepage" class="dark-logo" style="height: 31px; width: 187px;" />
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
                             <button class="button btn-primary" style="margin-left:782px;"> <a href="logout.php" style="color:#ffffff;"> Logout</a></button>
                           
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
                        
                        <!--<li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/jobapplication_view"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">Job Application Details(Old)</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        
                        <!--<li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/phase_view"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">Careers - Frontend Developer</span>-->
                        <!--    </a>-->
                        <!--    </li>-->
                            
                        <!--     <li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/leave_details"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">Employee Leave Details</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        
                        <!-- <li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/employee_login&logout_details"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">Employee Login&Logout Details</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--  <li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/website-design-questionnaire_view"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">Website Design Questionnaire Details</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        
                        <!-- <li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/nps_view"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">NPS Details</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!-- <li class="sidebar-item">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/NS-Forms/careers_apply_view"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="mdi mdi-border-none"></i>-->
                        <!--        <span class="hide-menu">Careers Apply Details</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        
                        <li class="sidebar-item nav-item dropdown">
                            <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Careers  
                                 
                            </a>
                            <ul class="dropdown-menu submenu-drpdwn">
                                 <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/careers_apply_view"> Apply </a></li>
      <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/phase_view"> Frontend Developer </a></li>
  </ul>
                            </li>
                            <li class="sidebar-item nav-item dropdown">
                            <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Human Resources  
                                 
                            </a>
                            <ul class="dropdown-menu submenu-drpdwn">
                                 <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/leave_details"> Employee Leave Details </a></li>
      <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/employee_login&logout_details"> Login/Logout Details </a></li>
  </ul>
                            </li>
                            <li class="sidebar-item nav-item dropdown">
                            <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Questionnaire  
                                 
                            </a>
                            <ul class="dropdown-menu submenu-drpdwn">
                                 <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/website-design-questionnaire_view">Website Design Details </a></li>
      <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/nps_view">NPS Details </a></li>
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
                        <h4 class="page-title">Employee Leave Details</h4>
                    </div>
                   <!--  <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div> -->
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
                       
                    
                    
                    
                   
                    
                    
                    <div class="col-12">
                        <div class="card">
                           <!--  <div class="card-body">
                                <h4 class="card-title">Responsive tables</h4>
                                
                            </div> -->
                            <div class="table-responsive">
                                <table id="example" class="table-striped"  > 
             <thead>

              <th>S.No</th>
              <th>Employee Name</th>
               <th>Employee Email</th>
              <th>Leave Type</th>
              <th>From date</th>
               <th>To date</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Action</th>
                <th>Approved/Rejected</th>
 

               
              </thead>

              <tbody>
            

      
       <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$sql = "SELECT * FROM `leave` order by leave_id desc";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

      
      $i=1;
      foreach ($files as $file): ?>
    <tr>
      
      <td><?php echo $i++; ?></td>
      <td><?php echo $file['employee_name']; ?></td>
       <td><?php echo $file['email']; ?></td>
      <td><?php echo $file['leave_type']; ?></td>
      <td><?php echo $file['from_date']; ?></td>
      <td><?php echo $file['to_date']; ?> </td>
      <td><?php echo $file['reason']; ?></td>
       <td><?php echo $file['status']; ?></td>
     
 <td>
  <div class="btn-group"><a class="btn btn-primary" style="background-color:red;" href="leave_delete.php?leave_id=<?php echo $file['leave_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
     
<td>
                            <form method="post" action="">
                                <input type="hidden" name="leave_id" value="<?php echo $file['leave_id']; ?>" />
                                 <input type="hidden" name="email" value="<?php echo $file['email']; ?>" />
                                  <input type="hidden" name="name" value="<?php echo $file['employee_name']; ?>" />
                                 
                                <input type="submit" class="btn btn-primary" value="Approved" name="approved" style="margin-right:-22px;"/>
                               <input type="submit" class="btn btn-danger" value="Rejected" name="rejected" />
                            </fo


      
    </tr>
  <?php endforeach;?>




   

  
                  
</tbody>

                   
              </table>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                
                
                <?php
  
 if (isset($_POST['approved'])){




 $email = $_POST["email"];

$name = $_POST["name"];
$to = "$email";
$subject = "Re:Employee Leave Approved Mail ";
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
                                            <td align='center'><img src='https://nectarspot.com/images/new-ns-clear-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px; width:200px; height:47px;'></td>
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
                                    <span style='color: #3b3b3b'>Dear $name,</span>
                                    
                         <h3>Approved Leave</h3>


                                </td>
                            </tr>
                             
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

 <?php
  
 if (isset($_POST['rejected'])){




 $email = $_POST["email"];
//$status = $_POST["status"];
$name = $_POST["name"];
$to = "$email";
$subject = "Re:Employee Leave Rejected Mail ";
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
                                            <td align='center'><img src='https://nectarspot.com/images/new-ns-clear-logo.png' border='0' style='padding-left:10px; vertical-align: bottom; padding-right: 10px; width:200px; height:47px;'></td>
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
                                    <span style='color: #3b3b3b'>Dear $name,</span>
                                   
                             <h3>Rejected Leave</h3>


                                </td>
                            </tr>
                             
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







                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!--<script src="assets/libs/jquery/dist/jquery.min.js"></script>-->
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
</body>

</html>