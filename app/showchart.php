<?php
$content ="admin";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <title>Chart</title>
  <link rel="stylesheet" href="../css/Chart.css">
  <link rel="stylesheet" href="../css/wrap-form.css">
</head>

<?php
  include '../css/bootstrap.php'
?>

<body class="d-flex flex-column h-100">
  <?php
  include '../components/navbaradmin.php'
  ?>

  <div class="container">
    <div class="">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Disabled</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
            <div class="row">
              <div class="col-md-6">
                <canvas id="myChart" width="200" height="200"></canvas>
              </div>
            </div>
      </div>
    </div>
  </div>
  <?php
  include '../components/footer.php'
?>
    <?php 
require("../DB/connect.php");
$data = $con->query("select count(problem) as sum_problem, problem from report group by problem");
while($result = $data->fetch_object()){
    $label[] = $result->problem;
    $datax[] = $result->sum_problem;
}
?>
<script src = "../js/Chart.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?=json_encode($label)?>,
        datasets: [{
            label: 'อุปรกรณ์ที่แจ้งเสีย',
            data: <?=json_encode($datax)?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</body>

</html>