<?php
$content = "admin";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php
    include '../components/meta-title.php'
    ?>
    <title>สถิติการแจ้งซ่อม</title>
    <link rel="stylesheet" href="../css/Chart.css">

</head>

<body>
    <?php
    include '../components/navbaradmin.php'
    ?>
    <br>

    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="card-body p-5">
                <h4 class="my-4">สถิติการแจ้งซ่อม</h4>
                <div class="row">
                    <div class="col-md-4">
                        <canvas id="myChart" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-4">
                        <h4 class="my-3">
                            </h3>
                            <p></p>
                            <h4 class="my-3">รายละเอียด</h3>
                                <ul>
                                    <li>คอมพิวเตอร์</li>
                                    <li>ปริ้นเตอร์</li>
                                    <li>อื่นๆ</li>

                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="card-body p-5">
                <h4 class="my-4">สถิติการแจ้งซ่อม</h4>
                <div class="row">
                    <div class="col-md-4">
                        <canvas id="myChart2" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-4">
                        <h4 class="my-3">
                            </h3>
                            <p></p>
                            <h4 class="my-3">รายละเอียด</h3>
                                <ul>
                                    <li>คอมพิวเตอร์</li>
                                    <li>ปริ้นเตอร์</li>
                                    <li>อื่นๆ</li>

                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    /* include '../components/footer.php'; */
    ?>
    <?php
        require("../DB/connect.php");
        $data = $con->query("select count(problem) as sum_problem, problem from report group by problem");
        $data2 = $con->query("select count(Location) as sum_location, Location from report group by location");
        $label = [];
        $datax = [];
        $loc= [];
        $locc= [];
        // print_r($data);
        while($result = $data->fetch_object()){
            $label[] = $result->problem;
            $datax[] = $result->sum_problem;
        }
        while($result = $data2->fetch_object()){
            $loc[] = $result->Location;
            $locc[] = $result->sum_location;
        }
    ?>
    <script src="../js/Chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($label) ?>,
                datasets: [{
                    label: 'อุปกรณ์ที่แจ้งเสีย',
                    data: <?= json_encode($datax) ?>,
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
    <script>
        var cty = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(cty, {
            type: 'bar',
            data: {
                labels: <?= json_encode($loc) ?>,
                datasets: [{
                    label: 'อุปกรณ์ที่แจ้งเสีย',
                    data: <?= json_encode($locc) ?>,
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