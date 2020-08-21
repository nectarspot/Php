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