
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php

 $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from ns_npm where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
  echo  "<script type='text/javascript'>alert('Deleted Successfully...');
    window.location.href= 'nps_view.php';
    </script>";
    
    
//     echo '<script>
//     setTimeout(function() {
//         swal({
//             title: "Successfully!",
//             text: "Deleted",
//             type: "success"
//         }, function() {
//             window.location = "nps_view.php";
//         });
//     }, 1000);
// </script>';
   
   // exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>