<?php
$id =  $_GET['id'];
$active =  $_GET['active'];
$unactive =  $_GET['unactive'];
  $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');


if($active == 1)
{
mysqli_query($conn,"UPDATE `ns_phase` SET status = '1' where id='$id'");
}
else
{
 mysqli_query($conn,"UPDATE `ns_phase` SET status = '0' where id='$id'");
}
  header('location:phase_view.php');
  mysqli_close($conn);
 ?> 