

<?php
include("db_config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // username and password 
    $email=mysqli_real_escape_string($dbconfig,$_POST['email']);
    $fullname=mysqli_real_escape_string($dbconfig,$_POST['fullname']);
     $user=mysqli_real_escape_string($dbconfig,$_POST['user']);
    $password=mysqli_real_escape_string($dbconfig,$_POST['password']); 
    $password=md5($password); // Encrypted Password with md5
    $sql="Insert into harvest_login(password,username,email,user) values('$password','$fullname','$email','$user')";
    //echo $sql;
    $result=mysqli_query($dbconfig,$sql);
    $msg="Registered";
    //After 
      
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>Registration</title>
        <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        label {
            color: #000;
        }
        .logo-text {
    font-size: 22px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 1.55em 0 0;
}
.logo-text::after {
    border-bottom: 2px solid #000;
    content: " ";
    display: block;
    width: 36%;
}
.btn-primary {
    font-weight: 700;
    color: #fff;
    border-color: #C59D5F;
    background-color: #C59D5F;
}
.center-block {
    margin: 0 auto;
    display: table;
}
.btn-primary:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff;
    background-color: #C59D5F;
    border-color: #C59D5F;
}
.blue-font {
    color: #000;
}
</style>
    </head>
    <body>
        <div class="container">
            <div class="row"><br><br><br>
                <div class="col-md-4"></div>
                <div class="col-md-4" style="border-radius:15px;box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-webkit-box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-moz-box-shadow: 2.5px 4.33px 15px 0 rgba(0, 0, 0, .15);-webkit-appearance: none;">
                    <!--<img src="https://theindianharvest.com/images/logo1.png" alt="Girl in a jacket" style="width: 127px; height: 67px; margin-left: 120px;">-->
                    <div class="center-block"><h1 class="logo-text">The Indian Harvest</h1></div> 
                    <br>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" required="true" placeholder="Full Name" id="fullname" name="fullname" />
                             <input type="hidden" class="form-control" required="true" placeholder="Full Name" id="user" name="user" value="make as admin" />
                        </div>
                        <div class="form-group">
                            <input type="text" type= "email" class="form-control" required="true" placeholder="Email" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required="true" placeholder="Password" id="password" name="password" />
                        </div>
                        
                        <?php if (isset($msg)) {
                        echo"<div class='alert alert-success' role='alert'>
                            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                            <span class='sr-only'>Error:</span>".$msg."</div>";
                            } ?>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" class="blue-font">Register</button>
                        </div>
                        <center><a href="index.php" class="blue-font">Go to login</a></center>
                    </form>
                    <br>  
                </div> 
                
            </div>
        </div>
    </body>
</html>


