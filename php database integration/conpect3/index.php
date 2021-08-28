<?php
session_start();
?>

<?php 
include("db_config.php");

if(!isset($_SESSION['login_user'])) {
    $login_status="true";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=mysqli_real_escape_string($dbconfig,$_POST['email']);
        $password=mysqli_real_escape_string($dbconfig,$_POST['password']);
        $password=md5($password); //hashing with md5
        $sql_query="SELECT * FROM fastup_login WHERE email='$email' and password='$password'";
        $result=mysqli_query($dbconfig,$sql_query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
         $count=mysqli_num_rows($result);
        // //$username=$row['username'];
     $fullname=$row['fullname'];
      $user_type=$row['user_type'];
        $user=$row['user'];
        
        //print_r($user);exit;
        
        if ($count==1){
        //echo "only 1 record in database";
                
                $_SESSION["user"]=$email;
                $_SESSION["pass"]=$password ;
                $_SESSION["login_user"]=$fullname ;
                $_SESSION["user"]=$user ;
                
                // $_SESSION["username"]=$fullname ;
                //print_r($fullname);
 $_SESSION['success']="Login Successfully..";
                        
                        if ($row['user']=="make as admin"){
                            
                             //header("location:admin_dashboard/iimnet_internship_view.php");
                         echo "<script type='text/javascript'>
    window.location.href= 'https://marketenomicsdigital.com/fastup/dashboard/contact-view.php';
  </script>";
                        }

                        if (($row['user_type']=="user") && ($row['status']== "Accept"))  {
                            
                          echo "<script type='text/javascript'>
    window.location.href= 'https://marketenomicsdigital.com/fastup/dashboard/user-contact-view.php';
  </script>";
                        }else{
                            $usererror="Please wait admin not accept to Your login";
                        }

    }
        else 
                $error="Invalid login details";

        

}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
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
    border-color: #023564;
    background-color: #023564;
}
.center-block {
    margin: 0 auto;
    display: table;
}
.btn-primary:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff;
    background-color: #023564;
    border-color: #023564;
}
.blue-font {
    color: #000;
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row"><br><br><br>
        <div class="col-md-4">
            
        </div>
          <div class="col-md-4" style="border-radius:15px;box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-webkit-box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-moz-box-shadow: 2.5px 4.33px 15px 0 rgba(0, 0, 0, .15);-webkit-appearance: none;"><br>
              <!--<img src="https://theindianharvest.com/images/logo1.png" alt="Girl in a jacket" style="margin: 0 auto;display: table;">-->
              <div class="center-block"><img src="assets/images/logo2.png" style="height: 44px; width: 149px;"/></div> 
            <br><br>
            <form role="form" method="POST">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input  class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
                </div>
                 <?php if (isset($error)) {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$error."</div>";
                  } ?>
                  <?php if (isset($usererror)) {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$usererror."</div>";
                  } ?>
                <button type="submit" class="btn btn-primary pull-right" name="submit" style="display: block; width: 100%;">Login</button><br><br>
                <div class="col-md-6">
                  <a href="forgot_password.php" class="blue-font">I forgot my password</a>
                </div>
                <div class="col-md-6">
                  <a style="float: right" href="user-registration.php" class="blue-font">Register</a>
                </div>
                <br><br>
            </form>
        </div>
        
      </div>
    </div>
  </body>
</html>
