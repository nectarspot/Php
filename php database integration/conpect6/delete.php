<?php

 $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from ns_phase where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    echo "<script type='text/javascript'>alert('Deleted Successfully...');
    window.location.href= 'phase_view.php';
    </script>";
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>