<?php

?>

<?php 
$message="";
$valid='true';
include("db_config.php");
session_start();
if(isset($_GET['key']) && isset($_GET['email'])) {
    $key=$_GET['key'];
    $email=$_GET['email'];
   // print_r($email);
    $check=mysqli_query($dbconfig,"SELECT * FROM grunyklaw_forgot_password WHERE email='$email' and temp_key='$key'");
    //if key doesnt matches
    if (mysqli_num_rows($check)!=1) {
      echo "This url is invalid or already been used. Please verify and try again.";
      exit;
    }
}
else{
  header('location:index.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password1=mysqli_real_escape_string($dbconfig,$_POST['password1']);
        $password2=mysqli_real_escape_string($dbconfig,$_POST['password2']);
        if ($password2==$password1) {
            // $message_success="New password has been set for ".$email;
             $message_success="Successfully changed Password ";
            $password=md5($password1);
            //destroy the key from table
            mysqli_query($dbconfig,"DELETE FROM grunyklaw_forgot_password where email='$email' and temp_key='$key'");
            //update password in database
            mysqli_query($dbconfig,"UPDATE grunyklaw_login set password='$password' where email='$email'");
        }
        else{
            $message="Verify your password";
        }
}
        
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
          <br><br>
          <form role="form" method="POST">
              <label>Please enter your new password</label><br><br>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" name="password1" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" name="password2" placeholder="Re-type Password">
              </div>
                  <?php if (isset($error)) {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$error."</div>";
                    } ?>
                  <?php if ($message<>"") {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$message."</div>";
                    } ?>
                  <?php if (isset($message_success)) {
                    echo"<div class='alert alert-success' role='alert'>
                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$message_success."</div>";
                    } ?>
                <button type="submit" class="btn btn-primary pull-right" name="submit" style="display: block; width: 100%;">Save Password</button>
                <br><br>
                <label>This link will work only once for a limited time period.</label>
                <center> <a href="index.php" class="blue-font">Back to Login</a></center>
                <br>
          </form>
        </div>
        
    </div>
  </body>
</html>
