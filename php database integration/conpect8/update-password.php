<?php 
session_start();
if($_SESSION['msg']) {
echo $_SESSION['msg'].'<br/>';
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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

<div class="wrapper" style="width: 35%; margin: 0 auto;">
<form class="form-signin" action='' method="post">       
<h2 class="form-signin-heading blue-font">Forgot Password</h2><br/>
<input type="text" class="form-control" name="gmail" placeholder="Email Your gmail" required="" autofocus="" />
<br/>
<input type="password" class="form-control" name="newpassword" placeholder="New Password" required=""/><br/>
<input type="password" class="form-control" name="confirmpassword" placeholder="Confirm New Password" required=""/>
<br/>
<button class="btn btn-small btn-primary btn-block" type="submit">Submit</button>   
<input type="hidden" name="object" value="submit"/>
</form>

<?php 
if( $_POST){

$servername = "localhost";
$username = "marketf7_lokesh";
$password = "#Xka1ZJ$&QC[";
$dbname = "marketf7_mailspot";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['gmail'];
session_start();
if($_POST['object']){ 
if($_POST['newpassword'] == $_POST['confirmpassword']) {
		$hash = 'LivWellness@123';
        $update = "UPDATE `livclinic_login` SET 'password' = '$hash' WHERE email = '$username' ";
        $result = mysqli_query($link, $update);
        $_SESSION['msg'] = 'Your new password has reset successfully, you can now login.';
        header("Location: https://www.livclinic.com/dashboard/login");
    } else {
        $_SESSION['msg'] = 'Password does not match';
        header("Location: https://www.livclinic.com/dashboard/login");
    }
}
}
?>

</div>