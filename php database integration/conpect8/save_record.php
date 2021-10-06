<?php
	session_start();
	error_reporting(0);
	
$DB_host = "localhost";
	 $DB_user = "marketf7_lokesh";
	 $DB_pass = "#Xka1ZJ$&QC[";
	 $DB_name = "marketf7_mailspot";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }
	
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
	if(!isset($chk))
	{
	    
 $_SESSION["error"]=" At least one checkbox Must be Selected !!!";

		?>
        <script>

		window.location.href = 'https://www.livclinic.com/dashboard/index';
		</script>
        <?php
	}
	else
	{
		for($i=0; $i<$chkcount; $i++)
		{
			 $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

            $sql = "SELECT * FROM liv_appointment WHERE status = 'Pending' ";
            $result = mysqli_query($conn, $sql);

            $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


                  
                  $i=1;
      foreach ($files as $file): ?>
     
    
     
      <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $file['id']; ?>" ></td>
     

                            <form method="post" action="" id="form">
                                <input type="hidden" name="id" value="<?php echo $file['id']; ?>" />
                                 <input type="hidden" name="name" value="<?php echo $file['name']; ?>" />
                                  
                                   <input type="hidden" name="email" value="<?php echo $file['email']; ?>" />
                                  
                                   <input type="hidden" name="status" value="<?php echo $file['status']; ?>" />
                                  
                                <input type="submit" id="one" class="btn btn-primary" value="Accept" name="Accept" style="width: 61px; padding: 7px 0px;"  />
                              
                               <!--<input type="submit" id="two" class="btn btn-danger" value="Reject" name="Reject" style="width:62px;" />-->
                                <!--<input type="submit" id="one" class="btn btn-primary" value="make as admin" name="admin" style="width: 128px; padding: 7px;"  />-->
                               
                            </form>



<?php endforeach;?>
   
    
  

			$del = $chk[$i];
			$sql=$MySQLiconn->query("DELETE FROM liv_careers WHERE id=".$del);
		}	
		
		if($sql)
		{
		     $_SESSION['record_delete']= "<?php echo $chkcount; ?> Record Delete Successfully";
			?>
			
			<script>
// 			alert('<?php echo $chkcount; ?> Records Was Deleted !!!');
           
			//window.location.href='https://www.livclinic.com/dashboard/schedule-an-appointment-v1';
			</script>
			<?php
		}
	
		
	}

	
?>


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
         //$_SESSION['success_status'] = "Status Changed Successfully...";
         //header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
//       echo "<script type='text/javascript'>
//     window.location.href= 'https://www.livclinic.com/dashboard/user-list';
//   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
        
        
        
        
        
        
    ?>