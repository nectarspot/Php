
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
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='https://marketenomicsdigital.com/NS-Forms/phase_view.php';
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
<form method="post" action="update_mul_webdesign.php">

<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM ns_phase WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
	<div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">Edit  Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
           
              <div class="row">
        <div class="col-sm-12">
          
          <div class="form-group">
            <label for="" style="color:black;">Name</label>
             <input type="hidden"  class="form-control" name="id[]" value="<?php echo $row['id']; ?>" />
            <input type="text" class="form-control" name="name[]" value="<?php echo $row['name']; ?>" />
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Email</label>
             <input type="text" class="form-control" name="email[]" value="<?php echo $row['email']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Phone Number</label>
             <input type="text" class="form-control" name="phone_number[]" value="<?php echo $row['phone_number']; ?>" />
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Experience</label>
             <input type="text" class="form-control" name="experience[]" value="<?php echo $row['experience']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Git Hub Link</label>
             <input type="text" class="form-control" name="github_link[]" value="<?php echo $row['github_link']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Drive Link</label>
          <input type="text" class="form-control" name="drive_link[]" value="<?php echo $row['drive_link']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">File Name</label>
           <input type="text" class="form-control" name="file_name[]" value="<?php echo $row['file_name']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Status</label>
           <input type="text" class="form-control" name="status[]" value="<?php echo $row['status']; ?>" />
          </div>
          
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update</button>&nbsp;
<a href="https://iimnet.com/iimnet_internship_view" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>

</form>
</div>



          
          

         
          
          
      
      </div>
          
          </div>
        </div>
      </div>
    </div>


</body>
</html>