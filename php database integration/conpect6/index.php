<?php 
session_start();
?>

<?php 
include("db_config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=mysqli_real_escape_string($dbconfig,$_POST['email']);
        $password=mysqli_real_escape_string($dbconfig,$_POST['password']);
        $password=md5($password); //hashing with md5
        $sql_query="SELECT id,username FROM ns_login WHERE email='$email' and password='$password'";
        $result=mysqli_query($dbconfig,$sql_query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        //$username=$row['username'];
        $fullname=$row['username'];
//print_r($fullname);
        // If result matched $username and $password, table row must be 1 row
        if($count==1){    //if login success
            $_SESSION['login_user']=$email;    //keep login name in session
          $_SESSION['success']="Login Successfully..";
           
         
                             //header("location:admin_dashboard/iimnet_internship_view.php");
                            //   $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                            //   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            //   print_r($actual_link);
                         echo "<script type='text/javascript'>
    window.location.href= 'https://marketenomicsdigital.com/NS-Forms/list';
  </script>";

// $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
//                 "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . 
//                 $_SERVER['REQUEST_URI'];
  
// echo $link;
                      
//               $previous_page = $_SERVER['HTTP_REFERER'];
// $path_parts = pathinfo($previous_page);
// $result = $path_parts['basename']; //index.php   
// echo $result;
                         
        }
        else{
              $error="Invalid login details";
        }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>NectarSpot-Login</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        label {
            color: #1b48b2;
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
    border-color: #1b48b2;
    background-color: #1b48b2;
}
.center-block {
    margin: 0 auto;
    display: table;
}
.btn-primary:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff;
    background-color: #1b48b2;
    border-color: #1b48b2;
}
.blue-font {
    color: #1b48b2;
}

.error-msg{
	border:1px solid #ee0000;
	background:#ee0000;
	color:#ffffff;
	padding:2px;
	font-size:13px;
}
 
.success-msg{
	border:1px solid #0ebc6f;
	background:#0ebc6f;
	color:#ffffff;
	font-size:13px;
	padding:2px;
}
 
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row"><br><br><br>
        <div class="col-md-4">
            
        </div>
          <div class="col-md-4" style="border-radius:15px;box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-webkit-box-shadow: 2.5px 4.33px 15px 0 rgb(0 0 0 / 15%);-moz-box-shadow: 2.5px 4.33px 15px 0 rgba(0, 0, 0, .15);-webkit-appearance: none;"><br>
              <img src="https://nectarspot.com/images/new-ns-clear-logo.png" alt="Girl in a jacket" style="margin: 0 auto;display: table; height:40px;">
             <!--<div class="center-block"><h1 class="logo-text">The Indian Harvest</h1></div> -->
            <br><br>
              <?php 
	if(isset($errorMsg))
	{
		echo "<div class='error-msg'>";
		echo $errorMsg;
		echo "</div>";
		unset($errorMsg);
	}
?>

<?php 
	if(isset($_GET['logout']))
	{
		echo "<div class='success-msg'>";
		echo "You have successfully logout";
		echo "</div>";
		
	}
?>
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
                  
                
                <button type="submit" class="btn btn-primary pull-right" name="submit" style="display: block; width: 100%;">Login</button><br><br>
                <div class="col-md-6">
                  <a href="forgot_password.php" class="blue-font">I forgot my password</a>
                </div>
                <div class="col-md-6">
                  <!--<a style="float: right" href="registration.php" class="blue-font">Register</a>-->
                </div>
                <br><br>
            </form>
        </div>
        
      </div>
    </div>
  </body>
</html>
