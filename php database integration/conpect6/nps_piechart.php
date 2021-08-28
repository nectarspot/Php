<?php include 'header.php' ?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="chart.js"></script>


<style>
    .hidden1{
       visibility: hidden;
    }
</style>

<body  >
<form  action="nps_result" method="POST" name="form" id="form"  >
 <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$sql = "SELECT sum(promoters_total) as pr,sum(detractors_total) as de, sum(passives_total) as ps, sum(total_count) as total  FROM ns_npm ORDER BY date DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

      
   
      foreach ($files as $file): ?>
    <tr>
      
      
      <td><input type="hidden" class="total_count" name="promoters_total" id="promoters_total" value="<?php echo  $file['pr']; ?>" ></td>
       <td><input type="hidden" class="total_count" name="detractors_total" id="detractors_total" value="<?php echo  $file['de']; ?>" ></td>
        <td><input type="hidden" class="total_count" name="passives_total" id="passives_total" value="<?php echo  $file['ps']; ?>" ></td>
         <td><input type="hidden" class="total_count" name="total_count" id="total_count" value="<?php echo  $file['total']; ?>" ></td>
      
     


      
    </tr>
  <?php endforeach;?>
    
    <input type="hidden" id="nps_result1" name="nps_total" value=""  />
       
    </form>
   <div class="hidden1">
   <canvas id="myChart" ></canvas>
    
  </div>
    
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
$nps_total = mysqli_real_escape_string($link, $_POST['nps_total']);


 
// Attempt insert query execution
$sql = "INSERT INTO nps_piechart_results ( detractors_total, promoters_total,passives_total, nps_total)
 VALUES ( '$detractors_total', '$promoters_total', '$passives_total','$nps_total' )";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
    // echo "<script type='text/javascript'>
    // window.location.href= 'https://marketenomicsdigital.com/NS-Forms/nps_piechart';
    // </script>";

} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>
   
 </body>   
    <script>
       window.onload = function(){
var total_count =   document.getElementById('total_count').value ;
   
    var promoters =   document.getElementById('promoters_total').value;
     var detractors =   document.getElementById('detractors_total').value ;
      var passives =   document.getElementById('passives_total').value;
     
     var pr = promoters ;
     var de = detractors;
var nps_result = (((parseInt(pr)/ parseInt(total_count)) - (parseInt(de)/ parseInt(total_count) )) * 100) .toFixed(0) ;

 
             var nps_result1 = ((parseInt(promoters)/ parseInt(total_count)) - (parseInt(detractors)/ parseInt(total_count) )) * 100 ;
          
           if (!isNaN(nps_result1)) {
               document.getElementById('nps_result1').value = nps_result1 .toFixed(0);
           }
          
     
//alert(promoters);
 var data = {
  labels: [
    "Passives ",
    "Promotores",
    
    "Detractors"
  ],
  datasets: [
    {
      data: [passives, promoters, detractors],
      backgroundColor: [
        "#56903A",
        "#BAE5F9",
        "#C56C39"
      ],
      hoverBackgroundColor: [
        "#56903A",
        "#BAE5F9",
        "#C56C39"
      ]
    }]
};

var promisedDeliveryChart = new Chart(document.getElementById('myChart'), {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    legend: {
      display: false
    }
  }
});

Chart.pluginService.register({
  beforeDraw: function(chart) {
    var width = chart.chart.width,
        height = chart.chart.height,
        ctx = chart.chart.ctx;

    ctx.restore();
    var fontSize = (height /200).toFixed(2);
    ctx.font = fontSize + "em sans-serif";
    ctx.textBaseline = "middle";

    var text ="NPS:"+ nps_result + "",
        textX = Math.round((width - ctx.measureText(text).width) / 2),
        textY = height / 2;

    ctx.fillText(text, textX, textY);
    ctx.save();
  }
});

 
document.getElementById("form").submit();



 
};
    </script>
   <script>
     
   </script>
    
   
       
   
   
    
    
    
