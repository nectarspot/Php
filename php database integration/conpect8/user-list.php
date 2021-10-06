<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location:login");
        exit();
    }
?>
 
<html lang="en">

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>Livclinic User List Page</title>
<!--<link rel="shortcut icon" href="https://nectarspot.com/images/favicon.png">-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<!--<link href="dist/css/jquery.dataTables.min.css" rel="stylesheet">-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>  -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"></script>
    <!-- Favicon icon -->
   
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->


</head>
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
    background-color: #CBB094;
    border: 1px solid #CBB094;
    border-radius: 2px;
    opacity: 1px;

}
.dropdown-menu {min-width: auto !important;}
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

.close {
    float: right !important;
    font-size: 1.3125rem !important;
    line-height: 1 !important;
    color: #141212 !important;
    text-shadow: 0 1px 0 #fff !important;
    opacity: .5 !important;
}
.container {
  ...
  display: flex;
  justify-content: center;
}
.left-sidebar{
    background:#CBB094!important;
}

.sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link:hover {
background:#8F6D94!important;   
color:#ffffff!important;
}
.sidebar-nav ul .sidebar-item .sidebar-link i:hover {color:#ffffff!important;}

.page-breadcrumb{background:  #CBB094 !important;}
.page-breadcrumb .page-title{color: #fff !important;}
.table-responsive thead th {color:  #8F6D94 !important;}
.logo-icon h2{
    color:#CBB094 !important;
}
.drp-dwn-btn { background:#8F6D94 !important;}
.btn-primary, .btn-sm {background:  #8F6D94!important;}
.fa-home:before{color: #fff!important;}
.modal-title {
   color: #CBB094 !important;
}
.modal-body label {
     color: #CBB094 !important;
}
.dataTables_wrapper .dataTables_filter input::-webkit-search-cancel-button {
  -webkit-appearance: button !important;
  -moz-appearance: button !important; 
  cursor: pointer !important;
}
table.dataTable thead th, table.dataTable thead td {
    padding: 8px 31px;
    border-bottom: 1px solid #111;
}
/*.display-flex{*/
/*    display: inline-flex;*/
/*    align-items: center;*/
/*}*/
/*.check-mr6{*/
/*    margin-right: 6px;*/
/*}*/
#main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5] .sidebar-nav ul, #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5] .sidebar-nav ul, #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin5] {
    background: #CBB094;
}
.sidebar-item.selected{
    background-color:#8F6D94!important;
}
.sidebar-nav ul .sidebar-item {
    width: auto;
}
#main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin5], #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin5] {
    background: #CBB094;
}
.check{
        margin: -14px -18px;
}
.delete{
     margin: -22px 15px;
    padding: 2px 3px;
}
.btn-default {
    background-color: #CBB094;
}
.sidebar-link:hover i {color: #CBB094  !important;}
</style>


<body>

   


    
    
    
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
                                <img src="https://livclinic.com/images/white-bg-logo.png" alt="homepage" class="light-logo" style=" width: 120px;"/>
                               
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
                    
                    </ul>
                      <?php if(isset($_SESSION['success'])): ?>
                     <div class="col-sm-4 alert alert-success alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["success"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['success']); ?>
   
   
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
             
                    
                     <b>  Admin</b>
                     
                    <button class="button btn-primary" style="margin-left:10px;"> <a href="https://www.livclinic.com/dashboard/logout" style="color:#ffffff;"> Logout</a></button>
               
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
         <?php include 'side-nav.php' ?>
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
                        <h4 class="page-title">User List </h4><h5 style="color:white;">(Users list who can access the dashboard other than Admin)</h5>
                        
                         <!--<span class="blue-font">( Click on download button to the download file )</span>-->
                         
   <?php if(isset($_SESSION['error'])): ?>
                     <div class="col-sm-5 alert alert-danger alert-dismissible fade show container">
        <strong>Error!</strong>  <?php echo   $_SESSION["error"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['error']); ?>
    
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
    
    <?php if(isset($_SESSION['success_status'])): ?>
                     <div class="col-sm-5 alert alert-danger alert-dismissible fade show container">
        <strong>Error!</strong>  <?php echo   $_SESSION["success_status"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['success_status']); ?>
    
   
    
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
             <form method="post" name="frm">
           <table id="example" class="table-striped"> 
             <thead>
                 
<!--<input type='submit' class="bb" value='Delete' name='but_delete'>-->
<!--   <th class="display-flex">-->
<!--        <input type="checkbox" class="select-all check" />-->
<!--        <div class = "btn-group align-none delete">-->
  
   
<!--   <button type = "button" class = "btn btn-default "  onClick="delete_records();"><i class="fa fa-trash" aria-hidden="true"></i></button>-->
    
  
   
<!--</div></th>    -->


                 <th style="padding-left: 10px;">User Name</th>
               <th style="padding-left: 10px;">Email</th>
               <th style="padding-left: 10px;">Status</th>
               <th style="padding-left: 10px;">Accept/Reject</th>
              <th style="padding-left: 10px;">Make As Admin</th>
                
                <!--<th>Status</th>-->
              
                
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM livclinic_login WHERE user_type = 'user' ";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
     <tr>
    
     
      <!--<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>-->
     <td><?php echo $file['fullname']; ?></td>
     <td><?php echo $file['email']; ?></td>
      <td><?php echo $file['status']; ?></td>
<td>
                            <form method="post" action="" id="form">
                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
                                 <input type="hidden" name="name" value="<?php echo $file['fullname']; ?>" />
                                  
                                   <input type="hidden" name="email" value="<?php echo $file['email']; ?>" />
                                   <input type="hidden" name="user_type" value="<?php echo $file['user_type']; ?>" />
                                   <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />
                                  
                                <input type="submit" id="one" class="btn btn-primary" value="Accept" name="Accept" style="width: 61px; padding: 7px 0px;"  />
                              
                               <input type="submit" id="two" class="btn btn-danger" value="Reject" name="Reject" style="width:62px;" />
                                <!--<input type="submit" id="one" class="btn btn-primary" value="make as admin" name="admin" style="width: 128px; padding: 7px;"  />-->
                               
                            </form>
</td>

<td>
                            <form method="post" action="" id="form">
                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
                                 <input type="hidden" name="name" value="<?php echo $file['fullname']; ?>" />
                                  
                                   <input type="hidden" name="email" value="<?php echo $file['email']; ?>" />
                                   <input type="hidden" name="user_type" value="<?php echo $file['user_type']; ?>" />
                                   <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />
                                  
                              
                                <input type="submit" id="one" class="btn btn-primary" value="make as admin" name="admin" style="width: 128px; padding: 7px;"  />
                               
                            </form>
</td>


   
    </tr>
  

   

           <?php endforeach;?>
                  
</tbody>

                   
              </table>

                           
                   


                        </div>
                    </div>
                    
                </div>
                
                </div>
               
                
            </div>
           
        </div>
       
    </div>
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
         //$_SESSION['success_status'] = "Status Changed Successfully...";
         header("Location: https://www.livclinic.com/dashboard/user-list");
//       echo "<script type='text/javascript'>
//     window.location.href= 'https://www.livclinic.com/dashboard/user-list';
//   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
        
        
        
        
        
        
    ?>
    
    
     <?php
    if(isset($_POST['admin']))
    {
        $msg = "admin";
        $admin=$_POST['admin'];
    }
    
    
   
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE livclinic_login SET user = '$admin' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
         //$_SESSION['success_status'] = "Status Changed Successfully...";
         
          header("Location: https://www.livclinic.com/dashboard/user-list");
//       echo "<script type='text/javascript'>
//     window.location.href= 'https://www.livclinic.com/dashboard/user-list';
//   </script>";
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
                                    <a href='https://www.livclinic.com/dashboard'><button style='margin-top:5px;padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; width:20%; background-color:#CBB094;color:#fff;border-radius:30px;border:2px solid #CBB094'> Login to Dashboard</button></a>
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
// function edit_records() 
// {
// 	document.frm.action = "edit_mul";
// 	document.frm.submit();		
// }
// function delete_records() 
// {
// 	document.frm.action = "delete_mul";
// 	document.frm.submit();
// }
    </script>
    
    
</body>

</html>