<?php
session_start();
$target = $_SESSION['target'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ใบแจ้งซ่อม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Niramit', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php
                  require '../DB/connect.php';
                  $result = mysqli_query($con, "SELECT * FROM report Where Case_ID = '$target' ");                
                  if ($result) {                 
                    while ($row = mysqli_fetch_array($result)) {
        echo "<div class=''>";
        echo    "<p class='d-flex justify-content-end'>ใบแจ้งเลขที่  " . $row["Case_ID"] . "</p><br>";
        echo    "<h1 class='d-flex justify-content-center'>ใบแจ้งซ่อม</h1><br>";
        echo    "<p class='d-flex justify-content-center'>งานสาธารณูปโภคและซ่อมบำรุง งานอาคารสถานที่</p><br>";
        echo    "<p class='d-flex justify-content-end'>วันที่ เดือน พ.ศ." . $row["Date"] . "</p><br>";
        echo    "<br>";
        echo    "<div class='d-flex justify-content-evenly'>";
        echo     "<p>ผู้แจ้ง  " . $row["Username"] . "" ;
                
        echo       "</p>";
        echo        "<p>ห้อง " . $row["Location"] . "</p>";
        echo"</div>";
        echo"<div class='d-flex justify-content-evenly'>";
         
        echo    "<p>เวลาที่แจ้ง น." . $row["Time"] . "</p>";
        echo"</div>";
        echo"<br>";
        echo"<table class='table table-bordered border-secondary'>";
        echo    "<thead>";
        echo        "<tr>";
        echo            "<th>ประเภทงาน</th>";
        echo            "<th>รายละเอียดแจ้งซ่อม</th>";
        echo        "</tr>";
        echo    "</thead>";
        echo    "<tbody>";
        echo        "<tr>";
        echo            "<th>ปัญหา   " . $row["Problem"] . "</th>";
        echo            "<th>รายละเอียด     " . $row["Description"] . "</th>";
        echo        "</tr>";
        echo    "</tbody>";
        echo"</table>";
        echo"<br>";
        echo"<div class='d-flex justify-content-evenly'>";
        echo    "<p>(......................................)</p>";
        echo    "<p>(......................................)</p>";
        echo"</div>";
        echo"<div class='d-flex justify-content-evenly'>";
        echo    "<P>ผู้รับ      </P>";
        echo    "<p>ผู้แจ้ง      </p>";
        echo"</div>";
                    }
                }
                ?>
    </div>
    </div>
</body>















<?php
// echo "<script>window.print()</script>";    
?>