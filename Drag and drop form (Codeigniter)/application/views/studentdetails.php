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


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>  -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<style type="text/css">
    .col-sm-3{
    /*    height: 150px;
        background-color:#01549b;*/
}
/*.col-sm-9{
    height: 160px;
    background-color:#2aabd2;
    border: 1px solid yellow;
    opacity: 0.9;
}*/
 label.error{
    
    color: red;
     font-family: "Times New Roman", Times, serif;
     
    font-size: 1.0em;
   
}

.nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: #2e353d;
    position: fixed;
    top: 0px;
    width: 19%;
    height: 100%;
    color: #e1ffff;
}
.nav-side-menu .brand {
    background-color: #f3f3f3;
    line-height: 50px;
    display: block;
    text-align: center;
    font-size: 14px;
}
.nav-side-menu .toggle-btn {
    display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
    list-style: none;
    padding: 0px;
    margin: 0px;
    line-height: 35px;
    cursor: pointer;
    /*    
      .collapsed{
         .arrow:before{
                   font-family: FontAwesome;
                   content: "\f053";
                   display: inline-block;
                   padding-left:10px;
                   padding-right: 10px;
                   vertical-align: middle;
                   float:right;
              }
       }
    */
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
    font-family: FontAwesome;
    content: "\f078";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
    color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
    color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
    background-color: #181c20;
    border: none;
    line-height: 28px;
    border-bottom: 1px solid #23282e;
    margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
    background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
}
.nav-side-menu li {
    padding-left: 0px;
    border-left: 3px solid #2e353d;
    border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
    text-decoration: none;
    color: #e1ffff;
}
.nav-side-menu li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
}
.nav-side-menu li:hover {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
@media (max-width: 767px) {
    .nav-side-menu {
        position: relative;
        width: 100%;
        margin-bottom: 10px;
    }
    .nav-side-menu .toggle-btn {
        display: block;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 10 !important;
        padding: 3px;
        background-color: #ffffff;
        color: #000;
        width: 40px;
        text-align: center;
    }
    .brand {
        text-align: left !important;
        font-size: 22px;
        padding-left: 20px;
        line-height: 50px !important;
    }
}
@media (min-width: 767px) {
    .nav-side-menu .menu-list .menu-content {
        display: block;
    }
}
body {
    margin: 0px;
    padding: 0px;
}

.wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }

</style>
<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
        <div  class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="nav-side-menu">
                        <div class="brand"><img src="<?php echo base_url()?>assets/NectarSpot.png"></div>
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li class="active">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/index">
                                         Dashboard
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-list" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/alllist">List</a>
                                </li>

                                 
                                 <li>
                                    <i class="fa fa-list" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/empform">Create a Form</a>
                                </li>
                <li>
                                    <i class="fa fa-list" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/emailtmp">Email Template</a>
                                </li>
                                <!-- <ul class="sub-menu collapse" id="new">
                                    <li>New New 1</li>
                                </ul> -->
                            </ul>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-9 col-sm-offset-1">
                 
              <div class="row" style="margin-right: 53px; padding-top: 30px;">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Student Details</h2>
                        
                        <a class="btn btn-primary pull-right btn_toggle" data-toggle="modal" href="#Modal_Field" > Add Field</a> 
                        <!-- <a class="btn btn-primary pull-right btn_toggle" data-toggle="" onclick="myFunction()" > Add Field</a> -->
                        <!-- <button onclick="myFunction()">Try it</button> -->
                    </div>
                <div class="">    
              <table id="example" class="table table-bordered" style="padding:0px !important; "> 
             <thead>
                    <?php foreach ($getfield as  $value){ ?>
    
          <th> <?php echo $value->field_name; ?> </th>
        
    
                
                <?php } ?> 
<th>Action</th> 

                <!-- <tr id="myRow">
    <td>User Name</td>
    <td>Email</td>
    <p id="demo"></p> 
  </tr> -->
              </thead>

              <tbody>
            <?php $i=1;
            // print_r($h);exit;
            foreach ($getdata as $row){ ?> 

                  <tr>
                  <td><?php echo $i++ ;?></td>
                  <td><?php echo $row->full_name ;?></td>
                  <td><?php echo $row->email ;?>
                  <td><?php echo $row->phonenumber ;?></td>
                  <td><?php echo $row->address ;?></td>
                   <td><?php echo $row->city ;?></td>


                 
                  <td>
  <div class="btn-group"><a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_View_<?php echo $row->id;?>" ><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;<a class="btn btn-primary btn_toggle" data-toggle="modal" href="#Modal_Edit_<?php echo $row->id;?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class="btn btn-primary btn_toggle" style="background-color:red;" data-toggle="modal" href="#Modal_Delete_<?php echo $row->id;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                  </td> 

                  </tr>


<div id="Modal_View_<?php echo $row->id;?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">View Profile</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form id="form1">
              <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="" style="color:black;">Full Name:</label>
            <input type="text" class="form-control" id="fullName_edit"name="fullName_edit" placeholder="Enter customer name" value="<?php echo $row->fullName;?>" disabled>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">City:</label>
            <input type="text" class="form-control" id="city_edit" name="city_edit" placeholder="Enter address " value="<?php echo $row->city;?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Email:</label>
            <input type="text" class="form-control" id="email_edit" name="email_edit" placeholder="Enter address " value="<?php echo $row->email;?>" disabled>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber_edit" name="phoneNumber_edit" placeholder="Enter address " value="<?php echo $row->phoneNumber;?>" disabled>
          </div>
        </div>
        <div class="col-sm-6">
         
        </div>
      </div>
      
      

             <!--  <div class="m-t-20 text-center">
                <button id="btn_update" type="submit" class="btn btn-primary btn-lg">Update</button>
              </div>
              <input type="hidden" name="userid" id="userid" value="<?php echo $row->id;?>"> -->
            </form>
          </div>
        </div>
      </div>
    </div>


    <!--START MODAL EDIT-->

    <div id="Modal_Edit_<?php echo $row->id;?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">Modify Here...</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form id="edit_data">
              <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="" style="color:black;">Full Name:</label>
            <input type="text" class="form-control" id="fullName_edit"name="fullName_edit" placeholder="Enter customer name" value="<?php echo $row->fullName;?>">
          </div>
          <div class="form-group">
            <label for="" style="color:black;">City:</label>
            <input type="text" class="form-control" id="city_edit" name="city_edit" placeholder="Enter address " value="<?php echo $row->city;?>">
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Email:</label>
            <input type="text" class="form-control" id="email_edit" name="email_edit" placeholder="Enter address " value="<?php echo $row->email;?>">
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber_edit" name="phoneNumber_edit" placeholder="Enter address " value="<?php echo $row->phoneNumber;?>">
          </div>
        </div>
        <div class="col-sm-6">
         
        </div>
      </div>
      
      

              <div class="m-t-20 text-center">
                <button id="btn_update" type="submit" class="btn btn-primary btn-lg">Save</button>
              </div>
              <input type="hidden" name="userid" id="userid" value="<?php echo $row->id;?>">
            </form>
          </div>
        </div>
      </div>
    </div>

  <!--END MODAL EDIT-->

  <!--MODAL DELETE-->
         
            <div class="modal fade" id="Modal_Delete_<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Empolyee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this Empolyee?</strong>
                  </div>
                  
                  <div class="modal-footer">
                    <form id="form3">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $row->id;?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button  type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                     </form>
                  </div>
             
                </div>
              </div>
            </div>
            
        <!--END MODAL DELETE-->

              <?php } ?>
                  
</tbody>

                   
              </table>
              </div>
            </form>
                </div>
            </div>
       <div class="modal fade" id="Modal_Field" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Field</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="add_field">
                       <div class="form-group">
                            <label>Add Field Name:</label>
                            <input type="text" name="field_name" id="field_name" class="form-control" value="">
                            
                        </div>
                  </div>
                  
                  <div class="modal-footer">
                    
                    
                     <input type="submit" class="btn btn-primary" value="Save">
                        
                    
                  </div>
                  </form>
             
                </div>
              </div>
            </div>
    </div>  
     </div>
            
        </div>

        <!-- <script>
function myFunction() {
  var row = document.getElementById("myRow");
  var x = row.insertCell(2);
  x.innerHTML = '<input type="text" id="myText" value="New Column"/> <input type="submit" value="save"/>';
}



</script> -->

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

        <script type="text/javascript">

$("form#add_field").submit(function(e){
e.preventDefault();
var formdata= new FormData(this);
//alert("hii");
var IsValid=$("#add_field").valid();
  if(IsValid){
$.ajax({
    url:"<?php echo base_url('Form/addfield')?>",
    type:"POST",
    data:formdata,
    success:function(data){
       // alert(data);
        if ($.trim(data)=="success") {
               swal({
                title: "Congratulations!",
                text: " successfully add field",
                type: "success",
                confirmButtonText: "Ok"
            }, function() {
                window.location = "<?php echo base_url();?>Form/empdetails";
            }, 1000);
    
         }
        
    },
    cache:false,
    processData:false,
    contentType:false

      });
    }
  });





          
$("form#edit_data").submit(function(e){
e.preventDefault();
var formdata= new FormData(this);
//alert("hii");
var IsValid=$("#edit_data").valid();
  if(IsValid){
$.ajax({
    url:"<?php echo base_url('Form/form_edit')?>",
    type:"POST",
    data:formdata,
    success:function(data){
       // alert(data);
        if ($.trim(data)=="updated") {
               swal({
                title: "Congratulations!",
                text: "Data Updated successfully",
                type: "success",
                confirmButtonText: "Ok"
            }, function() {
                window.location = "<?php echo base_url();?>Form/empdetails";
            }, 1000);
    
         }
        
    },
    cache:false,
    processData:false,
    contentType:false

      });
    }
  });


  $("form#form3").submit(function(e) {
      e.preventDefault();
      var userid= $("#user_id").val();
      $.ajax({
              url:"<?php echo base_url('Form/form_del')?>",
              method:"POST",
              data:{user_id:userid},
              success:function(data){
                  //alert(data);
                  if ($.trim(data)=="deleted") {
                        swal({
                          title: "Congratulations!",
                          text: "Data deleted successfully",
                          type: "success",
                          confirmButtonText: "Ok"
                      }, function() {
                          window.location = "<?php echo base_url();?>Form/empdetails";
                      }, 1000);
              
                  }
                  
              }

      });
    
  });

        </script>