<?php
    session_start();
    if(!isset($_SESSION["login_user"])) {
        header("Location:index.php");
        exit();
    }
?>


<?php include 'header.php' ?>

<title>HaywardlawOffices | Newsletters</title>


    <style>
    .hide{

visibility: hidden

}
.btn-primary{
    width: 85px;
padding: 8px 1px;
}

.drop-list{
  display: flex;
}
.drop-list .dropdown{
  padding:10px;
}

/*.dropbtn {*/
/*  background-color: #4CAF50;*/
/*  color: white;*/
/*  width: 85px; */
/*  padding: 11px 1px;*/
/*  font-size: 11px;*/
/*  border: none;*/
/*}*/

/*.dropdown {*/
/*  position: relative;*/
/*  display: inline-block;*/
/*}*/

/*.dropdown-content {*/
/*  display: none;*/
/*  position: absolute;*/
/*  background-color: #f1f1f1;*/
/*  min-width: 160px;*/
/*  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
/*  z-index: 1;*/
/*}*/

/*.dropdown-content a {*/
/*  color: black;*/
/*  padding: 12px 16px;*/
/*  text-decoration: none;*/
/*  display: block;*/
/*}*/

/*.dropdown-content input:hover {background-color: red;}*/

/*.dropdown:hover .dropdown-content {display: block;}*/

/*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/
.approved{
    width: 173px;
    padding: 16px 1px;
    font-size: 8px;
}

.table-striped tbody tr td {
    font-size: 14px;
    color: #212529;
}

.left-sidebar {
position: absolute;
width: 210px;
height: 100%;
top: 0;
z-index: 10;
padding-top: 64px;
background: #fff;
}
#main-wrapper[data-layout=vertical][data-sidebartype=full] .page-wrapper {
margin-left: 210px;
}
.table-responsive thead th {
color: #1b48b2 !important;
font-weight: 600 !important;
font-size: 14px !important;
}


/*.dt-buttons{margin:-34px 80px !important}*/
/*.bb{*/
/*    margin: 8px 18px;*/
/*background-color: #1848b2;*/
/*color: #fff;*/
/*border: none;*/
/*padding: 3px 6px;*/
/*}*/
/*#checkAl{margin-left:-8px;margin-right:7px}*/
/*@media screen and (max-width:320px){ .bb {*/
/*margin: 8px 5px;*/
/*}}*/
/*@media screen and (max-width:767px){ */
/*    .bb {*/
/*margin: 8px 32px;*/
/*}*/
/*    .dt-buttons {*/
/*margin: -35px -60px 0 0!important;*/
/*}*/
/*}*/

.btn-default {
    background-color: #a9adb2 !important;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 7rem;
    padding: .5rem 0;
    /*margin: 0.125rem -60px 4px;*/
    font-size: .875rem;
    color: #6a7a8c;
    text-align: left;
    background-color: #1b48b2;
    border: 1px solid #1b48b2;
    border-radius: 2px;
    opacity:1px;
}
.drp-dwn-btn {
    background-color: #1b48b2 !important;
    margin-left: 5px !important;
}
.ul-drp-dwn-menu {
    padding-left: 16px;
}
.ul-drp-dwn-menu-li {
    padding-bottom: .5rem;
}
.display-flex {
    display: flex;
    padding-left: 10px !important;
    align-items: center;
}
body table.dataTable thead .display-flex .sorting_asc {
    background-image: none !important;
}
.container {
  ...
  display: flex;
  justify-content: center;
}
.container1 {
  ...
  display: flex;
  justify-content: center;
}
.dataTables_wrapper .dataTables_filter input::-webkit-search-cancel-button {
  -webkit-appearance: button !important;
  -moz-appearance: button !important; 
  cursor: pointer !important;
}
#main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5] .sidebar-nav ul, #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5] .sidebar-nav ul, #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin5] {
    background: #023564;
}
.sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link:hover {
    background: #ffffff;
    color: #023564;
    width: 229px;
}
.page-breadcrumb {
    padding: 20px 20px;
    background-color: #ffffff;
    /* border: red; */
    border-style: solid;
    border-color: #023564;
}
.page-breadcrumb .page-title {
    margin-bottom: 0;
    font-weight: 500;
    font-size: 21px;
    color: #023564;
}
.left-sidebar {
    position: absolute;
    width: 229px;
    height: 100%;
    top: 0;
    z-index: 10;
    padding-top: 64px;
    background: #fff;
}
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
                                <img src="https://haywardlawoffices.com/images/hayward-logo.png" alt="homepage" class="light-logo" style="height: 58px; width: 166px;"/>
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
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                   
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
     <b>  <?php echo   $_SESSION["login_user"]; ?>(Admin)</b>
              <button class="button btn-primary" style="margin-left:10px;"> <a href="https://marketenomicsdigital.com/haywardlaw-dashboard/admin_logout.php" style="color:#ffffff;"> Logout</a></button>         
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
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/haywardlaw-dashboard/contact-view.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Contact Details</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/haywardlaw-dashboard/newsletters-view.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Newsletters Details</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://marketenomicsdigital.com/haywardlaw-dashboard/user-list.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">User Details</span>
                            </a>
                        </li>
                        
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
                        
  <!--                      <li class="sidebar-item nav-item dropdown">-->
  <!--                          <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Careers  -->
                                 
  <!--                          </a>-->
  <!--                          <ul class="dropdown-menu submenu-drpdwn">-->
  <!--                               <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/careers_apply_view"> Apply </a></li>-->
  <!--    <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/phase_view"> Frontend Developer </a></li>-->
  <!--</ul>-->
  <!--                          </li>-->
  <!--                          <li class="sidebar-item nav-item dropdown">-->
  <!--                          <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Human Resources  -->
                                 
  <!--                          </a>-->
  <!--                          <ul class="dropdown-menu submenu-drpdwn">-->
  <!--                               <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/leave_details"> Employee Leave Details </a></li>-->
  <!--    <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/employee_login&logout_details"> Login/Logout Details </a></li>-->
  <!--</ul>-->
  <!--                          </li>-->
  <!--                          <li class="sidebar-item nav-item dropdown">-->
  <!--                          <a class="nav-link dropdown-toggle sidebar-link waves-effect waves-dark sidebar-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-border-none"></i> Questionnaire  -->
                                 
  <!--                          </a>-->
  <!--                          <ul class="dropdown-menu submenu-drpdwn">-->
  <!--                               <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/website-design-questionnaire_view">Website Design Details </a></li>-->
  <!--    <li><a class="dropdown-item" href="https://marketenomicsdigital.com/NS-Forms/nps_view">NPS Details </a></li>-->
  <!--</ul>-->
  <!--                          </li>-->
                    
  <!--                  </ul>-->
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
                        <h4 class="page-title">Newsletters Details</h4>
                        
                         <!--<span class="blue-font">( Click on VIEW button see the other Details )</span>-->
                          <?php if(isset($_SESSION['error'])): ?>
                     <div class="col-sm-4 alert alert-danger alert-dismissible fade show container">
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
    <th class="display-flex">
        <input type="checkbox" class="select-all" />
        <div class = "btn-group">
  
   
   <button type = "button" class = "btn btn-default dropdown-toggle drp-dwn-btn" data-toggle = "dropdown">
      <span class = "caret"></span>
      <span class = "sr-only">Toggle Dropdown</span>
   </button>
    
   <ul class = "dropdown-menu ul-drp-dwn-menu" role = "menu">
      <li onClick="edit_records();" class="ul-drp-dwn-menu-li"><span style="color:#ffffff;">Edit</span></li>
     <li onClick="delete_records();" class="ul-drp-dwn-menu-li"><span style="color:#ffffff;">Delete</span></li>
     
      
     
   </ul>
   
</div></th>


              
             
               <th> Email</th>
               
                 <th>Date(MM/DD/YY)</th>
              <th>IP Address</th>
               
                
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM haywardlaw_newsletters order by id desc";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
    <tr>
     <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>
     
     
     
     
     
      
        <td><a href="mailto:<?php echo $file['email'] ?>"><?php echo $file['email'] ?></a></td>
       
     <td><?php echo $file['date']; ?></td>
      <td><?php echo $file['ip_address']; ?></td>
     
     
     
  
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
	document.frm.action = "newsletters-edit-mul.php";
	document.frm.submit();		
}
function delete_records() 
{
	document.frm.action = "newsletters-delete-mul.php";
	document.frm.submit();
}
    </script>
    
    
</body>

</html>