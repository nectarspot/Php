<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
</head>
<style type="text/css">
    
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
<body>






<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
        <div  class="container-fluid" style="padding-left: 0px;">
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
                                
                            </ul>
                        </div>
                    </div>
                </div><br>
               <div class="col-sm-9 col-sm-offset-1">
                 
              <div class="row" style="margin-right: 53px; padding-top: 30px;">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">List Details</h2>
                        
                        
                        <!-- <a class="btn btn-primary pull-right btn_toggle" data-toggle="" onclick="myFunction()" > Add Field</a> -->
                        <!-- <button onclick="myFunction()">Try it</button> -->
                    </div>
                <div class="card">    
              <table class="table table-striped"> 
             <thead>
                   
    
          <th> Sn no </th>
        <th> List Name </th>
        

               
              </thead>
              <tbody>
              <tr>
                <td>1</td>
               <td> <a href="<?php echo base_url()?>Form/empdetails">Empolyee List</a></td>
                
              </tr>
              <tr>
                <td>2</td>
               <td> <a href="<?php echo base_url()?>Form/studentdetails">Student List</a></td>
                
              </tr>
          </tbody>
               </table>  
              </div>

</div>
</div>
</div>
</div>
</div>
</body>
</html>

         
     

    
              