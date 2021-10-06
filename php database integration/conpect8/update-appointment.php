 <?php
    if(isset($_POST['Accept']))
    {
        $msg = "Accept";
        $status=$_POST['Accept'];
    }
    
    
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE liv_appointment SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
         $_SESSION['success_status'] = "Status Changed Successfully...";
         header("Location:https://www.livclinic.com/dashboard/schedule-an-appointment");
//       echo "<script type='text/javascript'>
//     window.location.href= 'https://www.livclinic.com/dashboard/user-list';
//   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
        
        
        
        
        
        
    ?> 