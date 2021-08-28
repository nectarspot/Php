<?php 
session_start();
?>
<?php include 'header.php' ?>
<?php
	
	error_reporting(0);

 //$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

	 $DB_host = "localhost";
	 $DB_user = "marketf7_lokesh";
	 $DB_pass = "#Xka1ZJ$&QC[";
	 $DB_name = "marketf7_mailspot";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

	if(isset($_POST['chk'])=="")
	{
	     $_SESSION["error"]=" At least one checkbox Must be Selected !!!";
	     
		?>
		
        <script>
	//	alert('At least one checkbox Must be Selected !!!');
		window.location.href='https://marketenomicsdigital.com/indianharvest/indianharvest_view';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<link rel="stylesheet" href="style.css" type="text/css" />-->

</head>

<body>


<div class="clearfix"></div>



<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="update_mul.php">
<table class='table table-bordered'>
<tr>
  <th>Date(MM/DD/YY)</th>
              <th>Time</th>
              <th>Persons</th>
              <th>Name</th>
               <th> Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Status</th>
                
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM indianharvest_reservation WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id']; ?>"/>
            <input type="text" class="form-control" name="date[]" value="<?php echo $row['date']; ?>"/>
        </td>
        <td>
		<input type="text"  class="form-control" name="time[]" value="<?php echo $row['time']; ?>"/>
		</td>
		 <td>
		<input type="text"  class="form-control" name="persons[]" value="<?php echo $row['persons']; ?>"/>
		</td>
		 <td>
	 <input type="text"  class="form-control" name="customer_name[]" value="<?php echo $row['customer_name']; ?>"/>
		</td>
		 <td>
	<input type="text"  class="form-control" name="email[]" value="<?php echo $row['email']; ?>"/>
		</td>
		 <td>
		<input type="text" class="form-control" name="phone_number[]" value="<?php echo $row['phone_number']; ?>"/>
		</td>
		 <td>
		<input type="text"  class="form-control" name="message[]" value="<?php echo $row['message']; ?>"/>
		</td>
		 <td>
	<input type="text" class="form-control" name="status[]" value="<?php echo $row['status']; ?>"/>
		</td>
		
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update</button>&nbsp;
<a href="https://marketenomicsdigital.com/indianharvest/indianharvest_view" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
</div>



</body>
</html>