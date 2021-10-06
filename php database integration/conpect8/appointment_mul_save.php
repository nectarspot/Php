<?php
	session_start();	
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
		//alert('At least one checkbox Must be Selected !!!');
		window.location.href='https://www.livclinic.com/dashboard/schedule-an-appointment-v1';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>Grunyklaw</title>
<!--<link rel="shortcut icon" href="https://nectarspot.com/images/favicon.png">-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body>


<div class="clearfix"></div>



<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="">

<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM liv_appointment WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
	<div class="modal-dialog">
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <h4 class="modal-title">Save  Details</h4>
            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          </div>
          <div class="modal-body">
            <form method="POST" action="update-appointment">
              <div class="row">
        <div class="col-sm-12">
         
          <div class="form-group">
            <label for="" style="color:black;">Name</label>
             <input type="hidden"  class="form-control" name="id[]" value="<?php echo $row['id']; ?>" />
            <input type="text" class="form-control" name="name[]" value="<?php echo $row['name']; ?>" disabled/>
          </div>
          
         
           <div class="form-group">
            <label for="" style="color:black;">Email</label>
             <input type="text" class="form-control" name="email[]" value="<?php echo $row['email']; ?>" disabled/>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Phone Number</label>
            <input type="text" class="form-control"name="phone_number[]" value="<?php echo $row['phone_number']; ?>" disabled/>
          </div>
          <div class="form-group">
            <label for="" style="color:black;">Are you a new or existing client?</label>
            
             <input type="text" class="form-control"name="client[]" value="<?php echo $row['client']; ?>" disabled/>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Would you like to schedule an appointment or a free consultation?</label>
           
             <input type="text" class="form-control"name="consultation[]" value="<?php echo $row['consultation']; ?>" disabled/>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Which days of the week are you available?</label>
           
             <input type="text" class="form-control"name="available_days[]" value="<?php echo $row['available_days']; ?>" disabled/>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">What time(s) of the day do you prefer? </label>
            
             <input type="text" class="form-control"name="prefer_time[]" value="<?php echo $row['prefer_time']; ?>" disabled/>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">How do you prefer to be contacted?</label>
            
             <input type="text" class="form-control"name="prefered_contact_media[]" value="<?php echo $row['prefered_contact_media']; ?>" disabled/>
          </div>
           <div class="form-group">
            <label for="" style="color:black;">Reason for Appointment</label>
            
             <input type="text" class="form-control"name="reason_for[]" value="<?php echo $row['reason_for']; ?>" disabled />
          </div>
           <input type="hidden" name="status" value="<?php echo $row['status']; ?>" />
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
 <input type="submit" id="one" class="btn btn-primary" value="Accept" name="Accept" style="width: 128px; padding: 7px;"  />&nbsp;
<a href="https://www.livclinic.com/dashboard/schedule-an-appointment-v1" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>

</form>
</div>



          
        

         
          
          
      
      </div>
          
          </div>
        </div>
      </div>
    </div>

 
</body>
</html>