
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
		window.location.href='https://marketenomicsdigital.com/NS-Forms/nps_view.php';
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
<form method="post" action="update_mul_nps.php">

<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM ns_npm WHERE id=".$id);
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
            
            <input type="text" class="form-control" name="name[]" value="<?php echo $row['name']; ?>" />
          </div>
          
          <div class="form-group">
            <label for="" style="color:black;">Email</label>
             <input type="hidden"  class="form-control" name="id[]" value="<?php echo $row['id']; ?>" />
            <input type="text" class="form-control" name="email[]" value="<?php echo $row['email']; ?>" />
          </div>
          
           <div class="form-group">
            <label for="" style="color:black;">Phone Number</label>
             <input type="text" class="form-control" name="phone_number[]" value="<?php echo $row['phone_number']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Company</label>
             <input type="text" class="form-control" name="company[]" value="<?php echo $row['company']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">1. How likely is it that you would recommend NectarSpot Inc. to a friend or colleague?</label>
            <input type="text" class="form-control"name="rate[]" value="<?php echo $row['rate']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">2. What does NectarSpot Inc. do really well?</label>
             <input type="text" class="form-control" name="answer[]" value="<?php echo $row['answer']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">3. What does NectarSpot Inc. did not do really well?</label>
             <input type="text" class="form-control" name="answer1[]" value="<?php echo $row['answer1']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">4. In what country do you currently reside?</label>
          <input type="text" class="form-control" name="answer2[]" value="<?php echo $row['answer2']; ?>" />
          </div>
           <div class="form-group">
            <label for="" style="color:black;">5. Do you have any other comments, questions, or concerns?</label>
           <input type="text" class="form-control" name="answer3[]" value="<?php echo $row['answer3']; ?>" />
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