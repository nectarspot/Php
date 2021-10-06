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
<title> Scheduled An Appointment | LIV Wellness Lounge</title>
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
    width: 52px;
padding: 8px 1px;

}
.btn-secondry{
    width: 55px;
padding: 8px 1px;
}
.btn-danger1{
    width: 55px;
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
.btn-secondry, .btn-sm {background:  #CBB094!important;}
.btn-danger1, .btn-sm1 {background:  #FF7F7F!important;}

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
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    border: 1px solid #CBB094 !important;
    background: #CBB094;
    color: #fff !important;
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
.edit{
    margin: 0 10px
    
}
.status{
    margin-bottom:0;
}
.br{
    border: 1px solid #8F6D94 !important;
   
}
.br1{
    border: 1px solid #CBB094 !important;
     background-color:#CBB094 !important;
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
                                <img src="https://www.livclinic.com/images/white-bg-logo.png" alt="homepage" class="dark-logo" style="height: 40px; width: 120px; " />
                                <!-- Light Logo icon -->
                                <img src="https://www.livclinic.com/images/white-bg-logo.png" alt="homepage" class="light-logo" style=" width: 120px;"/>
                                <!--<h2>LIV Wellness</h2>-->
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
    
    <?php if(isset($_SESSION['record_update'])): ?>
                     <div class="col-sm-4 alert alert-success alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["record_update"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['record_update']); ?>
   
   
   
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>
    <?php if(isset($_SESSION['success_status'])): ?>
                     <div class="col-sm-4 alert alert-success alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["success_status"]; ?>
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
    
    
     <?php if(isset($_SESSION['record_delete'])): ?>
                     <div class="col-sm-4 alert alert-danger alert-dismissible fade show container1">
        <strong>Success!</strong>  <?php echo   $_SESSION["record_delete"]; ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
     <?php endif; ?>
<?php unset($_SESSION['record_delete']); ?>
   
   
   
    
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
                        <h4 class="page-title">Scheduled Appointment</h4>
                        
                         <!--<span class="blue-font">( Click on download button to the download file )</span>-->
                         
      
                     

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
<!--           <th class="display-flex">-->
<!--        <input type="checkbox" class="select-all check" />-->
<!--        <div class = "btn-group align-none delete">-->
  
   
<!--   <button type = "button" class = "btn btn-default "  onClick="delete_records();"><i class="fa fa-trash" aria-hidden="true"></i></button>-->
    
  
   
<!--</div></th>     -->
<!--<input type='submit' class="bb" value='Delete' name='but_delete'>-->
<!--   <th class="display-flex">-->
<!--        <input type="checkbox" class="select-all check-mr6" />-->
<!--        <div class = "btn-group align-none">-->
  
   
<!--   <button type = "button" class = "btn btn-default "  onClick="delete_records();"><i class="fa fa-trash" aria-hidden="true"></i></button>-->
    
  
   
<!--</div></th>-->

                <th style="padding-left: 10px;">S.No</th>
                <th style="padding-left: 10px;">View</th>
                <th >Date</th>
                <th style="padding-left: 10px;">Name</th>
                <th style="padding-left: 10px;">Email</th>
                <th style="padding-left: 10px;">Phone</th>
                <th style="padding-left: 10px;">Client</th>
                <th style="padding-left: 10px;">Consultation</th>
                <th style="padding-left: 10px;">Available Days</th>
                <th style="padding-left: 10px;">Prefer Time</th>
                <th style="padding-left: 10px;">Contact Media</th>
                <th style="padding-left: 10px;">Reason</th>
                <th style="padding-left: 10px;">Status</th>
               <th style="padding-left: 70px;">Action</th>
                
                
              
                
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM liv_appointment order by id desc";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
    <tr>
     <!--<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>-->
     <td><?=$i++?></td>
       <td>
  <div class="btn-group" style="width:30px;"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $file['id']; ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a>
  </div></td>
   <td><?php echo $file['time']; ?></td>
     <td><?php echo $file['name']; ?></td>
    
      <td><a href="mailto:<?php echo $file['email'] ?>"><?php echo $file['email'] ?></a></td>
      <td><?php echo $file['phone_number']; ?></td>
       <td><?php echo $file['client']; ?></td>
        <td><?php echo $file['consultation']; ?></td>
         <td><?php echo $file['available_days']; ?></td>
          <td><?php echo $file['prefer_time']; ?></td>
           <td><?php echo $file['prefered_contact_media']; ?></td>
            <td><?php echo $file['reason_for']; ?></td>
       
         <!--<td><?php echo $file['ip_address']; ?></td>-->
        
           
           <td><?php echo $file['status']; ?></td>
           
           <td style="display: inline-flex;">
                <form></form>
                
                                <form method="post" action="appointment_status" id="form" class="status">
                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
                               
                                   <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />
                                  
                                <input type="submit" id="one" class="btn btn-primary br" value="Accepted" name="Accept"   />
                              
                               
                                <!--<input type="submit" id="one" class="btn btn-primary" value="make as admin" name="admin" style="width: 128px; padding: 7px;"  />-->
                               
                            </form>
                           
               <!--<a href="appointment_status.php?id=<?php echo $file['id']; ?>" class="btn btn-primary  status br">Accept</a>-->
				<a class="btn btn-primary btn_toggle edit br1" data-toggle="modal" href="#Modal_Edit_<?php echo $file['id']; ?>" >Edit</a>
			
		
				<a href="appointment_mul_delete.php?id=<?php echo $file['id']; ?>" class="btn btn-danger1 btn-sm1">Delete</a>
		</td>
<!--           <td>-->
<!--                            <form method="post" action="appointment_status" id="form">-->
<!--                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />-->
                                 
<!--                                   <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />-->
                                  
<!--                                <input type="submit" id="one" class="btn btn-primary" value="Accept" name="Accept"   />-->
                              
                               <!--<input type="submit" id="two" class="btn btn-secondry" value="Edit" name="Edit"  />-->
                                <!--<input type="submit" id="one" class="btn btn-danger1 btn-sm1" value="Delete" name="Delete" style="width: 128px; padding: 7px;"  />-->
                               
<!--                            </form>-->
<!--                             <form method="post" action="appointment_mul_delete" id="form">-->
<!--                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />-->
                                 
<!--                                   <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />-->
                                  
                                <!--<input type="submit" id="one" class="btn btn-primary" value="Accept" name="Accept"   />-->
                              
                               <!--<input type="submit" id="two" class="btn btn-secondry" value="Edit" name="Edit"  />-->
<!--                                <input type="submit" id="one" class="btn btn-danger1 btn-sm1" value="Delete" name="Delete" style="width: 128px; padding: 7px;"  />-->
                               
<!--                            </form>-->
<!--</td>-->
     
  <!--    <td>-->
  <!--<div class="btn-group"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $file['id']; ?>" ><i class="fa fa-edit" aria-hidden="true"></i></a>-->
  <!--</div></td>-->
      
   </form>

    </tr>
  

   <div id="Modal_View_<?php echo $file['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">View  Details</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          </div>
          <div class="modal-body">
            <form method="post" action="" id="form">
              <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
               <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
            <label for="" style="color:black;">Name</label>
            <!--<textarea type="text" class="form-control" id="first_name_edit"name="first_name_edit" placeholder="Enter First Name" value="<?php echo $file['answer']; ?>" disabled></textarea>-->
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['name']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Email</label>
           <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['email']; ?></textarea>
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Phone Number </label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['phone_number']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Are you a new or existing client?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['client']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Would you like to schedule an appointment or a free consultation?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['consultation']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Which days of the week are you available?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['available_days']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">What time(s) of the day do you prefer? </label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['prefer_time']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">How do you prefer to be contacted?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['prefered_contact_media']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Reason for Appointment</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['reason_for']; ?></textarea>
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Date</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['time']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">IP Address</label>
            <textarea name="answer" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" disabled><?php echo $file['ip_address']; ?></textarea>
          </div>
          
          <!--<div class="form-group">-->
          <!-- <input type="submit" id="one" class="btn btn-primary" value="Save" name="Accept" style="width: 128px; padding: 7px;"  />-->
          <!--</div>-->
        
      </div>
          
          </div>
          </form>
        </div>
      </div>
    </div>
</div>

<div id="Modal_Edit_<?php echo $file['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">Edit Appointment  Details</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          </div>
          <div class="modal-body">
            <form method="post" action="appointment-update.php" id="form">
              <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
               <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
            <label for="" style="color:black;">Name</label>
           
            <textarea name="name" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['name']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Email</label>
           <textarea name="email" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['email']; ?></textarea>
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Phone Number </label>
            <textarea name="phone_number" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['phone_number']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Are you a new or existing client?</label>
            <textarea name="client" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['client']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Would you like to schedule an appointment or a free consultation?</label>
            <textarea name="consultation" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['consultation']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Which days of the week are you available?</label>
            <textarea name="available_days" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['available_days']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">What time(s) of the day do you prefer? </label>
            <textarea name="prefer_time" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['prefer_time']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">How do you prefer to be contacted?</label>
            <textarea name="prefered_contact_media" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['prefered_contact_media']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Reason for Appointment</label>
            <textarea name="reason_for" class="form-control" id="help-you" cols="2" rows="2" placeholder=""   value="" ><?php echo $file['reason_for']; ?></textarea>
          </div>
          
          
          
          <div class="form-group">
           <input type="submit" id="one" class="btn btn-primary" value="Update" name="Update" style="width: 128px; padding: 7px;"  />
          </div>
        
      </div>
          
          </div>
          </form>
        </div>
      </div>
    </div>
</div>

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
        $( '#topheader .sidebar-nav a' ).on('click', 
                    function () {
            $( '#topheader .sidebar-nav' ).find( 'li.active' )
            .removeClass( 'active' );
            $( this ).parent( 'li' ).addClass( 'active' );
        });
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
function save_records() 
{
	document.frm.action = "appointment_mul_save";
	document.frm.submit();		
}
function delete_records() 
{
	document.frm.action = "appointment_mul_delete";
	document.frm.submit();
}
    </script>
    
    
</body>

</html>