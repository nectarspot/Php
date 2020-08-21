<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  
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
    background-color: #23282e;
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

</style>
        <div  class="container-fluid">
            <div class="row">
                
                <div class="col-sm-9 col-sm-offset-1">
                 

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid" style="padding-left: 0px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">

                        
                        <h2>Create Record</h2>
                    </div>
                    
                    <form id="addform" >
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="fullName" id="fullName" class="form-control" value="">
                            <!-- <span class="help-block"><?php echo $fullName_err;?></span> -->
                        </div>
                        <div class="form-group ">
                            <label>City</label>
                            <input type="text" name="city" id="city" class="form-control" value="">
                            <!-- <span class="help-block"><?php echo $city_err;?></span> -->
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="">
                            <!-- <span class="help-block"><?php echo $email_err;?></span> -->
                        </div>

                        <div class="form-group ">
                            <label>PhoneNumber</label>
                            <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" value="">
                            <!-- <span class="help-block"><?php echo $phoneNumber_err;?></span> -->
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="#" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

                
       
    <script type="text/javascript">
  $(document).ready(function(){

      $("#addform").validate({

                    rules: {
                         "fullName": {
                            required: true,
                            
                        },
                         "city": {
                            required: true,
                        },
                         "email": {
                            required: true,
                        },

                         "phoneNumber": {
                            required: true,
                        }
                     
                     
                    
                  },
                                       
                    
                    messages: {
                        
                        "fullName": {
                            required: "Please enter Property name"},
                        "city": {
                            required: "Please enter address"
                        },
                        "email": {
                            required: "Please enter property type"
                        },

                        "phoneNumber": {
                            required: "Please enter status"
                        }
                  
                        
                        },
                     
                });
  });
  
  $("form#addform").submit(function(e) {
    e.preventDefault();      
    var formData = new FormData(this);
 var IsValid=$("#addform").valid();
  if(IsValid){
    $.ajax({
        url: "<?php echo base_url();?>Form/addform",
        type: 'POST',
        data: formData,
        success: function (data) {
          //alert(data);
           if ($.trim(data)=="success") {
               swal({
                title: "Congratulations!",
                text: "Data added successfully",
                type: "success",
                confirmButtonText: "Ok"
            }, function() {
                 window.location = "<?php echo base_url();?>Form/createform";
            }, 1000);
    
           $("#addform")[0].reset();
         }
               
        },
        cache: false,
        contentType: false,
        processData: false
    });
  }

  });

  

</script>