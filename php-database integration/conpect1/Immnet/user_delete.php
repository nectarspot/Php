<?php

 $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$user_id = $_GET['user_id']; // get id through query string

$del = mysqli_query($conn,"delete from `iimnet_internship` where id = '$user_id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    echo "<script type='text/javascript'>confirm('Do you want to delete Record..');
    window.location.href= 'user_internship_view.php';
    </script>";
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>