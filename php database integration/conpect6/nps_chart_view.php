 <?php include 'header.php' ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="chart.js"></script>

 
 
 <?php
                       
            $conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');

$sql = "SELECT * FROM nps_piechart_results ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

      
   
      foreach ($files as $file): ?>
    <tr>
      
      
      <td><input type="hidden" class="total_count" name="detractors_total" id="promoters_total" value="<?php echo  $file['promoters_total']; ?>" ></td>
       <td><input type="hidden" class="total_count" name="detractors_total" id="detractors_total" value="<?php echo  $file['detractors_total']; ?>" ></td>
        <td><input type="hidden" class="total_count" name="detractors_total" id="passives_total" value="<?php echo  $file['passives_total']; ?>" ></td>
         <td><input type="hidden" class="total_count" name="detractors_total" id="nps_total" value="<?php echo  $file['nps_total']; ?>" ></td>
      
     


      
    </tr>
  <?php endforeach;?>
  
   <canvas id="myChart"></canvas>
   
   
    
</div>
   
    <script>
      
   
    var promoters =   document.getElementById('promoters_total').value;
     var detractors =   document.getElementById('detractors_total').value ;
      var passives =   document.getElementById('passives_total').value;
     var nps_result =  document.getElementById('nps_total').value;
   
          
     
//alert(promoters);
 var data = {
  labels: [
      "Promotores",
    "Passives ",
    "Detractors"
  ],
  datasets: [
    {
      data: [promoters,passives,  detractors],
      backgroundColor: [
        "#8be28b",
        "#fefe88",
        "#FAA0A0"
      ],
      hoverBackgroundColor: [
        "#8be28b",
        " #fefe88",
        "#FAA0A0"
      ],
      
    }]
};

var promisedDeliveryChart = new Chart(document.getElementById('myChart'), {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    legend: {
      display: true
    }
  }
});

Chart.pluginService.register({
  beforeDraw: function(chart) {
    var width = chart.chart.width,
        height = chart.chart.height,
        ctx = chart.chart.ctx;

    ctx.restore();
    var fontSize = (height /150).toFixed(2);
    ctx.font = fontSize + "em sans-serif";
    ctx.textBaseline = "center";

    var text ="NPS:" + nps_result + "",
        
        textX = Math.round((width - ctx.measureText(text).width) / 2),
        textY = height / 2;

    ctx.fillText(text, textX, textY);
    ctx.save();
  }
});
        
    </script>