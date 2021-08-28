<?php

 $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$time_id = $_GET['time_id']; // get id through query string

$del = mysqli_query($conn,"delete from time_table where time_id = '$time_id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    echo "<script type='text/javascript'>alert('Deleted Successfully...');
    window.location.href= 'employee_login&logout_details.php';
    </script>";
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>