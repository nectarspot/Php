<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<!-- <label>Number of members in your team</label>
<input type="text" class="input value1"><br>
	<label> Hours (per day)</label>
<input type="text" class="input value1"><br>
<label> Cost for (Hourly wage)</label>
<input type="text" class="input value2"><br>
<input type="text" disabled="disabled" id="result"> -->



<form method="GET" action="" >
	<label>Number of members in your team</label>
<input type="text"  name="team_value"><br>
<label> Hourly Pay</label>
<input name="num1" type="text" ><br>
<label>Hours work per day</label>
<input name="num2" type="text" >
<input type="submit" name="submit" value="Calculate">
</form>
<h3>Result</h3>

<?php

if (isset($_GET['num1']) && isset($_GET['team_value']) && isset($_GET['num2'])) {
    $rate = $_GET['num1'];
    $team_value = $_GET['team_value'];
     $num2 = $_GET['num2']; 


$result_day= $rate * $team_value * $num2;
$result_week = $result_day  * 5;
$result_month = $result_week   * 4;
$result_year = $result_month * 12;

echo "Team Numbers: " .  $team_value . "<br>";
echo "Working Hours: " .  $num2 . "<br>";
echo "Rate: " . $rate . "<br>";
echo "Daily: " . $result_day . "<br>";
echo "Weekly: " . $result_week . "<br>";
echo "Monthly: " . $result_month . "<br>";
echo "Yearly: " . $result_year . "<br>";

}else{
 //echo  "Please enter your rate!";
}
?>
<?php 

// $time = $timeRow['time'] / 1000;

// $days = floor($time / (24*60*60));
// $hours = floor(($time - ($days*24*60*60)) / (60*60));
// $minutes = floor(($time - ($days*24*60*60)-($hours*60*60)) / 60);
// $seconds = ($time - ($days*24*60*60) - ($hours*60*60) - ($minutes*60)) % 60;

// echo'Time Played: '.$days.' days '.$hours.' hours '.$minutes.' minutes '.$seconds.' seconds';
?>

<script type="text/javascript">
	$(document).ready(function(){
    $(".input").keyup(function(){
          var val1 = +$(".value1").val();
          var val2 = +$(".value2").val();
          $("#result").val(val1+val2);
   });
});


</script>
</body>
</html>