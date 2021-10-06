<?php
 session_start();
?>


<?php
$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[' );
    mysqli_select_db($conn, 'marketf7_mailspot');
if(isset($_POST['Update']) )
{
$id=$_POST['id'];
//$trn_date = date("Y-m-d H:i:s");
$name =$_POST['name'];
$email =$_POST['email'];
$phone_number =$_POST['phone_number'];
$client =$_POST['client'];
$consultation =$_POST['consultation'];
$available_days =$_POST['available_days'];
$prefer_time =$_POST['prefer_time'];
$prefered_contact_media =$_POST['prefered_contact_media'];
$reason_for =$_POST['reason_for'];
//$submittedby = $_SESSION["username"];
$update="update liv_appointment set  name='".$name."', email='".$email."', phone_number='".$phone_number."' , client='".$client."' , consultation='".$consultation."' , available_days='".$available_days."' , prefer_time='".$prefer_time."' , prefered_contact_media='".$prefered_contact_media."' , reason_for='".$reason_for."'  where id='".$id."'";
 if(mysqli_query($conn, $update)){
         $_SESSION['record_update'] = "Record Updated Successfully...";
//          header("Location: https://www.livclinic.com/dashboard/schedule-an-appointment-v1");
       echo "<script type='text/javascript'>
    window.location.href= 'https://www.livclinic.com/dashboard/schedule-an-appointment';
   </script>";
    }
   
        //header("refresh:1; url=iimnet_internship_view");
    else
        var_dump(mysqli_error($conn));
}

 ?>