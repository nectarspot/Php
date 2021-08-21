<?php
    if(isset($_POST['hired']))
    {
        $msg = "hired";
        $status=$_POST['hired'];
    }
    
     if(isset($_POST['interview']))
    {
        $msg = "interview";
        $status=$_POST['interview'];
    }
     if(isset($_POST['hold']))
    {
        $msg = "hold";
        $status=$_POST['hold'];
    }
    
    if(isset($_POST['reject']))
    {
        $msg = "reject";
        $status=$_POST['reject'];
    }
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE iimnet_internship SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
       echo "<script type='text/javascript'>
    window.location.href= 'https://iimnet.com/admin_dashboard/user_internship_view.php';
  </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
    ?>