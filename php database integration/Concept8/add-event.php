<?php
    session_start();
?>
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
 


$name = mysqli_real_escape_string($link, $_POST['title']);

// Attempt insert query execution
$sql = "INSERT INTO tbl_events(title)
 VALUES ('$name')";
//print_r($sql);
if(mysqli_query($link, $sql)){
    
//   header("location:careers-thankyou.php");
echo "<script type='text/javascript'>
    window.location.href= 'https://www.livclinic.com/dashboard/schedule-an-appointment-v2';
    </script>";

} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}

//  if(isset($_POST['Accept']))
//     {
//         $msg = "Accept";
//         $status=$_POST['Accept'];
//     }
    
  
   
//     $id=$_POST['id'];
//     $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
//     mysqli_select_db($conn, 'marketf7_mailspot');

//     $sql = "UPDATE liv_appointment SET status = '$status' WHERE id = '$id'";

//     if(mysqli_query($conn, $sql)){
//          $_SESSION['success_status'] = "Status Changed Successfully...";
//          //header("Location: https://www.livclinic.com/dashboard/user-list");
//       echo "<script type='text/javascript'>
//     window.location.href= 'https://www.livclinic.com/dashboard/schedule-an-appointment-v2';
//   </script>";
//     }
   
//         //header("refresh:1; url=iimnet_internship_view");
//     else
//         var_dump(mysqli_error($conn));
        
        
        
?>