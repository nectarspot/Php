<?php
 session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

$id=$_REQUEST['id'];
$query = "DELETE FROM liv_appointment WHERE id=$id"; 
 if(mysqli_query($conn, $query)){
         $_SESSION['record_delete'] = "Record Deleted Successfully...";
//          header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
       echo "<script type='text/javascript'>
    window.location.href= 'https://www.livclinic.com/dashboard/schedule-an-appointment';
   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
         
?>