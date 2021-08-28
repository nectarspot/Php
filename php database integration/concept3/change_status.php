<?php
 session_start();
?>

<?php
    if(isset($_POST['Accept']))
    {
        $msg = "Accept";
        $status=$_POST['Accept'];
    }
    
     if(isset($_POST['Reject']))
    {
        $msg = "Reject";
        $status=$_POST['Reject'];
    }
   
    $id=$_POST['id'];
    $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');

    $sql = "UPDATE haywardlaw_login SET status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
         $_SESSION['status_success'] = "Status Changed Successfully...";
		?>
        <script>
	//	window.alert('At least one checkbox Must be Selected !!!');
		window.location.href = 'https://marketenomicsdigital.com/haywardlaw-dashboard/user-list.php';
		</script>
        <?php
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
        
        
        
        
        
        
    ?>