<?php
         //session_start();
        
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'nectarspot@gmail.com' && 
                  $_POST['password'] == 'Allthebest@2021') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  
                 session_start();
                   $_SESSION['username'] = 'nectarspot@gmail.com';
             
                  
                 echo "<script type='text/javascript'>alert('Login Successfully..');
    window.location.href= 'https://marketenomicsdigital.com/NS-Forms/careers_apply_view';
    </script>";
               }else {
                  $msg = 'Invalid Username and Password..';
               }
            }
         ?>

<html lang = "en">
   
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
      <title>NectarSpot Dashboard</title>
      <link rel="shortcut icon" href="https://nectarspot.com/images/favicon.png">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <style>
        body {
    background: #1b48b2;
    font-family: 'Montserrat', sans-serif !important;
}

.login-box {
    margin-top: 75px;
    height: auto;
    background:#ffffff;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    /*height: 100px;*/
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    /*letter-spacing: 2px;*/
    margin-top: 15px;
    font-weight: bold;
    color: #1b48b2;
}
.btn-primary {background-color: #1b48b2 !important;border: #1b48b2 !important;}
.form-control:focus {border-bottom: 2px solid #1b48b2 !important;}
.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    /*background-color: #1A2226;*/
    border: none;
    border-bottom: 2px solid #1b48b2;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    /*background-color: #1A2226;*/
    border: none;
    border-bottom: 2px solid #1b48b2E;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #000;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    /*background-color: #1A2226;*/
    color:#000;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 18px;
    color:  #1b48b2;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}

.btn-block{
    cursor: pointer;
}
      </style>
      
   </head>
	
   <body>
      
    
      
         
         
      
			
        <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                     <img src="https://nectarspot.com/images/new-ns-clear-logo.png" style="width:168px; background-color:#ffffff; margin-top:15px;">
                </div>
                <div class="col-lg-12 login-title">
                    NectarSpot Admin Dashboard
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <h4 class = "form-signin-heading" style="color:red;"><?php echo $msg; ?></h4>
                        <form class = "form-signin" role = "form"  action = "" method = "post">
                            
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                 <input type = "text" class = "form-control" name = "username" placeholder = "Enter Username"  required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type = "password" class = "form-control" name = "password" placeholder = "Enter Password" required>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    
                                    <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
         
      </div> 
      
   </body>
</html>