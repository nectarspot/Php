<?php

 $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$leave_id = $_GET['leave_id']; // get id through query string

$del = mysqli_query($conn,"delete from `leave` where leave_id = '$leave_id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    echo "<script type='text/javascript'>alert('Deleted Successfully...');
    window.location.href= 'leave_details.php';
    </script>";
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>