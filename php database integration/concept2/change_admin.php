<?php
  session_start();
?>

 <?php
    if(isset($_POST['admin']))
    {
        $msg = "admin";
        $admin=$_POST['admin'];
    }
    
    
   
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE grunyklaw_login SET user = '$admin' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        
       $_SESSION['admin_status'] = "Status Changed Successfully...";
		?>
        <script>
	//	window.alert('At least one checkbox Must be Selected !!!');
		window.location.href = 'https://marketenomicsdigital.com/grunkylaw/user-list.php';
		</script>
        <?php
        
         
//         // header("Location: https://marketenomicsdigital.com/grunkylaw/user-list.php");
//       echo "<script type='text/javascript'>
//     //window.location.href= 'https://marketenomicsdigital.com/grunkylaw/user-list.php';
//   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
        
        
        
        
        
        
    ?> 