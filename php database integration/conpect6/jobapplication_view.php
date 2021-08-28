


<?php include 'header.php' ?>

<?php  
session_start();  
  
// if(!$_SESSION['username'])  
// {  
  
//     header("Location: index");//redirect to the login page to secure the welcome page without login access.  
// }  
  
?>  

<body>

      <?php




// connect to database
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$sql = "SELECT * FROM ns_job_application";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

//$file1 = "logo_ldg.png";





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
                <div class="navbar-header top-navbar-header" data-logobg="skin5">
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
                             <button class="button btn-primary btn-blue" style="margin-left:782px;"> <a href="logout.php" style="color:#ffffff;"> Logout</a></button>
                           
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
                        <h4 class="page-title">Job Application Details</h4>
                         <span class="blue-font">( Click on download button to the download file )</span>
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
                                 <form method="POST" action=''>
                                <table id="example" class="table-striped"  > 
             <thead>
              <th> <input type='submit' value='Delete' name='but_delete'></th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Job Applied For</th>
              <th>Currently Working in</th>
              <th>Years of Experience</th>
            <th>Address</th>
            <th>City</th>
            <th>Zipcode</th>
            <th>Describe your Skills</th>
              <th>Training or Certifications</th>
               <th>Resume</th>
                <th>Action</th>         
 

               
              </thead>

              <tbody>
            

      <?php $i=1;
      foreach ($files as $file): ?>
    <tr>
      <td><input type="checkbox" name="delete[]" value="<?php echo $file['id']; ?>" ></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo $file['email']; ?></td>
      <td><?php echo $file['phone_number']; ?></td>
      <td><?php echo $file['appication']; ?></td>
      <td><?php echo $file['work']; ?></td>
       <td><?php echo $file['experience']; ?></td>
        <td><?php echo $file['address']; ?></td>
         <td><?php echo $file['city']; ?></td>
          <td><?php echo $file['zipcode']; ?></td>
           <td><?php echo $file['description']; ?></td>
            <td><?php echo $file['certification']; ?></td>
             <td><?php echo $file['file_name']; ?></td>
     
      <td>
        <a href="download.php?filename=<?php echo $file['file_name'];?>" >Download</a>  
      
</td>
      
    </tr>
  <?php endforeach;?>




   

  
                  
</tbody>

                   
              </table>
                            </div>
                           
                        </div>
                    </div>
                      <?php
               if(isset($_POST['but_delete'])){
   

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){
        
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');
      $deleteUser = "DELETE from ns_job_application WHERE id=".$deleteid;
      mysqli_query($conn,$deleteUser);
       echo "<script type='text/javascript'>confirm('Are you sure to delete this record?');
    window.location.href= 'jobapplication_view';
    </script>";
    }
  }
 
}
?>      
                </div>
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
            btns.addClass('btn btn-success btn-sm btn-blue');
            btns.removeClass('dt-button');

        }

        
    } );
} );

    </script>
</body>

</html>