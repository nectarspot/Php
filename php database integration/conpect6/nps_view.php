<?php
    session_start();
    // if(!isset($_SESSION["login_user"])) {
    //     header("Location:index.php");
    //     exit();
    // }
?>


<?php include 'header.php' ?>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.min.js" integrity="sha512-IHQXMp2ha/aGMPumvzKLQEs9OrPhIOaEXxQGV5vnysMtEmNNcmUqk82ywqw7IbbvrzP5R3Hormh60UVDBB98yg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.css" integrity="sha512-3Mf7x3QC98zKhMBTTGj5fDu2wQE9bgC/MmyFLRuyUTWZRWM4txPrzVfWqrCOWs9Il79iEw5T6+N7fbXXSUafrQ==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.js" integrity="sha512-/2LAWgYlRv0SU4+anDImXAEXGumWtSgZEpRkr6NJ7ehenRBRhWjpJx350BLc+ddOy024/vLjI6ymeDmfAuqPdQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.min.css" integrity="sha512-qZl4JQ3EiQuvTo3ccVPELbEdBQToJs6T40BSBYHBHGJUpf2f7J4DuOIRzREH9v8OguLY3SgFHULfF+Kf4wGRxw==" crossorigin="anonymous" />


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
  width: 85px; 
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
</style>
<body>


<?php
    // if(isset($_POST['approved']))
    // {
    //     $msg = "Approved";
    //     $status=$_POST['approved'];
    // }
    // if(isset($_POST['rejected']))
    // {
    //     $msg = "Rejected";
    //     $status=$_POST['rejected'];
    // }
    // $id=$_POST['id'];
    // $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    // mysqli_select_db($conn, 'marketf7_mailspot');

    // $sql = "UPDATE ns_phase SET status = '$status' WHERE id = '$id'";

    // if(mysqli_query($conn, $sql))
    //     header("refresh:1; url=phase_view.php");
    // else
    //     var_dump(mysqli_error($conn));
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
        <header class="topbar" data-navbarbg="skin6"><meta charset="euc-jp">
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
            <?php if(isset($message)) { echo $message; } ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title">Net Promoter® Score (NPS) Details</h4>
                        <span class="blue-font">( Click on view button to see the other text field results )</span>
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
           <form method="POST" action='' name="frm">
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
                <th>View</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Company</th>
              
               <th >1. How likely is it that you would recommend NectarSpot Inc. to a friend or colleague?</th>
                <th >2. What does NectarSpot Inc. do really well?</th>
                 <th >3. What does NectarSpot Inc. did not do really well?</th>
                  <th >4. In what country do you currently reside?</th>
                   <th >5. Do you have any other comments, questions, or concerns?</th>
             <th>Date</th>
              <th>IP Address</th>
              
               
               
                
                
              </thead>

              <tbody>
            


           

                  <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM ns_npm order by id desc";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  
      foreach ($files as $file): ?>
    <tr>
       <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>
         <td>
  <div class="btn-group" style="width:30px;"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $file['id']; ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a>
  </div></td>
      <td><?php echo $file['name']; ?></td>
      
     
      <td><a href="mailto:<?php echo $file['email'] ?>"><?php echo $file['email'] ?></a></td>
      <td><?php echo $file['phone_number']; ?></td>
      <td><?php echo $file['company']; ?></td>
      <td ><?php echo $file['rate']; ?></td>
      <td ><?php echo $file['answer']; ?></td>
      <td ><?php echo $file['answer1']; ?></td>
      <td ><?php echo $file['answer2']; ?></td>
      <td ><?php echo $file['answer3']; ?></td>
       <td><?php echo $file['date']; ?></td>
        <td><?php echo $file['ip_address']; ?></td>
      
      
       
     
    
    
<!--<td>-->
<!--                            <form method="post" action="">-->
<!--                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />-->
<!--                                 <input type="hidden" name="email" value="<?php echo $file['email']; ?>" />-->
<!--                                  <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />-->
<!--                                   <input type="hidden" name="name" value="<?php echo $file['name']; ?>" />-->
<!--                                <input type="submit" class="btn btn-primary" value="Approved" name="approved" style="margin-right:-22px;"/>-->
<!--                               <input type="submit" class="btn btn-danger" value="Rejected" name="rejected" />-->
<!--                            </form>-->
<!--                        </td>-->
    </tr>
  <div id="Modal_View_<?php echo $file['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">View  Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
           
              <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="" style="color:black;">1. *How likely is it that you would recommend NectarSpot Inc. to a friend or colleague?</label>
            <!--<textarea type="text" class="form-control" id="first_name_edit"name="first_name_edit" placeholder="Enter First Name" value="<?php echo $file['answer']; ?>" disabled></textarea>-->
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['rate']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">2. What does NectarSpot Inc. do really well?</label>
           <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['answer']; ?></textarea>
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">3. What does NectarSpot Inc. did not do really well?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['answer1']; ?></textarea>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">4. In what country do you currently reside?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['answer2']; ?></textarea>
          </div>
          
            <div class="form-group">
            <label for="" style="color:black;">5. Do you have any other comments, questions, or concerns?</label>
            <textarea name="answer" class="form-control" id="help-you" cols="5" rows="5" placeholder=""   value="" disabled><?php echo $file['answer3']; ?></textarea>
          </div>
           
          
          

         
          
          
      
      </div>
            
          </div>
        </div>
      </div>
    </div>
</div>

    

           <?php endforeach;?>
                  
</tbody>

                   
              </table>

                </form>           
                           
                        </div>
                    </div>
                    
                </div>
                
                </div>
            <?php 
            
             
if(isset($_POST['but_delete'])){
   

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){
        
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');
      $deleteUser = "DELETE from ns_npm WHERE id=".$deleteid;
      mysqli_query($conn,$deleteUser);
       echo "<script type='text/javascript'>confirm('Are you sure to delete this record?');
     window.location.href= 'nps_view';
    </script>";
    }
  }
 
}
?>
       
    
     <?php
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');
    
$result = mysqli_query($conn,"select year(date) as year, month(date) as month,  nps_total as nps_total  
from nps_piechart_results 
  ORDER BY date DESC LIMIT 1");
  
//   $result = mysqli_query($conn,"SELECT nps_total as nps_total, month(date) as month, date
// FROM nps_piechart_results 
// WHERE date >= DATE(NOW()) - INTERVAL 3 MONTH ");

//  $result = mysqli_query($conn,"SELECT  nps_total,month(date) as 'month'
// FROM nps_piechart_results WHERE YEAR(date) = YEAR(CURDATE())
//  ORDER BY date DESC LIMIT 1");

//  $result = mysqli_query($conn,"SELECT COUNT(id) as Count,nps_total, month(date) as month
// FROM nps_piechart_results WHERE YEAR(date) = YEAR(CURDATE()) ORDER BY date DESC LIMIT 1 AND
// GROUP BY YEAR(date),MONTH(date)");


?>


<div class="container">
    <div><h3 style="color:#137eff;">NPS Pie Chart Score</h3></div>
    <table class="table table-bordered">
			<thead>
			  <tr>
				
				<th>Month</th>
				<!--<th>promoters Score</th>-->
				<!--	<th>detractors Score</th>-->
				<!--	<th>Responsers</th>-->
						<th>NPS Score</th>
					
			  </tr>
			</thead>
			<tbody>
<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	$monthNum  = $row["month"];
	$dateObj   = DateTime::createFromFormat('!m', $monthNum);
	$monthName = $dateObj->format('F');
?>
			  <tr>
				
				<td><?php echo $monthName; ?></td>
				<!--<td><?php echo $row["pr_amount"]; ?></td>-->
				<!--<td><?php echo $row["de_total"]; ?></td>-->
				<!--<td><?php echo $row["total"]; ?></td>-->
				<td><?php echo $row["nps_total"]; ?></td>
			
			  </tr>
			  <?php
$i++;
}
?>
			</tbody>
  </table>
                
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
	document.frm.action = "edit_mul_nps.php";
	document.frm.submit();		
}
function delete_records() 
{
	document.frm.action = "delete_mul_nps.php";
	document.frm.submit();
}
    </script>
    
    
</body>

</html>