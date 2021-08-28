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
	//	window.alert('At least one checkbox Must be Selected !!!');
		window.location.href = 'https://marketenomicsdigital.com/indianharvest/indianharvest_view';
		</script>
        <?php
	}
	else
	{
		for($i=0; $i<$chkcount; $i++)
		{
			
			$del = $chk[$i];
			$sql=$MySQLiconn->query("DELETE FROM indianharvest_reservation WHERE id=".$del);
		}	
		
		if($sql)
		{
			?>
			<script>
			alert('<?php echo $chkcount; ?> Records Was Deleted !!!');
			window.location.href='https://marketenomicsdigital.com/indianharvest/indianharvest_view';
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Error while Deleting , TRY AGAIN');
			window.location.href='https://marketenomicsdigital.com/indianharvest/indianharvest_view';
			</script>
			<?php
		}
		
	}

	
?>