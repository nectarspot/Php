 <?php
if( $_POST){

$servername = "localhost";
$username = "marketf7_lokesh";
$password = "#Xka1ZJ$&QC[";
$dbname = "marketf7_mailspot";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$promoters_total = mysqli_real_escape_string($link, $_POST['promoters_total']);
$detractors_total = mysqli_real_escape_string($link, $_POST['detractors_total']);
$passives_total = mysqli_real_escape_string($link, $_POST['passives_total']);
$total_count = mysqli_real_escape_string($link, $_POST['total_count']);
$nps_total = mysqli_real_escape_string($link, $_POST['nps_total']);


 
// Attempt insert query execution
$sql = "INSERT INTO nps_piechart_results ( detractors_total, promoters_total, passives_total,nps_total,total_count)
 VALUES ( '$detractors_total', '$promoters_total','$passives_total', '$nps_total', '$total_count' )";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>
   window.location.href= 'https://marketenomicsdigital.com/NS-Forms/nps_chart_view.php';
    </script>";

} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>