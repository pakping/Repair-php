<?php
$content = "admin";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <title>แสดงประวัติการแจ้งซ่อม</title>
  <link rel="stylesheet" type="text/css" href="../css/wrap-form.css">
  <?php
  include '../components/meta-title.php'
  ?>
</head>

<body>
  <?php
  include '../components/navbaradmin.php'
  ?>
  <br>
  <div class="container">
    <div class="row">
    <fieldset>
      <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="p-3 ">
          <h1>ประวัติแจ้งซ่อม</h1>
        </div>
        <div class="table-responsive">
        <table class="table table-hover table-sm">
          <tr>
            <th scope="col">งานที่</th>
            <th scope="col">ห้อง</th>
            <!-- <th scope="col">ประเภทของปัญหา</th> -->
            <th scope="col">ปัญหา</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">เวลา</th>
            <!-- <th scope="col">วันที่</th> -->
            <th scope="col">สถานะ</th>
            <th scope="col">ผู้ดำเนินการ</th>
            <th scope="col">คำสั่ง</th>
          </tr>

          <?php
          require '../DB/connect.php';
          $result = mysqli_query($con, "SELECT * FROM report WHERE stat = 'สำเร็จ' ");

          if ($result) {

            while ($row = mysqli_fetch_array($result)) {

              echo "<tr>";
              echo "<td>" . $row["Case_ID"] . "</td>";
              echo "<td>" . $row["Location"] . "</td>";
              echo "<td>" . "<p class='fw-bold'>" . $row["Problem"] . "</p>" . "<p class='text-break' style='text-decoration: none;
              text-overflow: ellipsis; /* เพิ่ม ... จุดจุดจุดท้ายสุด */ 
              display: block; overflow: hidden; 
              white-space: nowrap; 
              width: 150px; /* กำหนดความกว้าง */ '>" . $row["Description"]  . "</p>" . "</td>";
              // echo "<td>" . . "</td>";
              echo "<td>" . $row["Username"] . "</td>";
              $date = date_create($row["Date"]); 
              echo "<td>" .  date_format($date,"d/m/Y") . "<br>" . $row["Time"] . "</td>";
              // echo "<td>" . "</td>";
              echo "<td>" . $row["Stat"] . "</td>";
              //echo "<td><button id='" . $row['Case_ID'] . "' onclick = >Accept</button></td>" ;
              echo "<td>" . $row["Worker"] . "</td>";
              echo "<td> <div class='btn-group' role='group' aria-label='Basic mixed styles example'><form action='../components/delete.php' method='POST'><input type='hidden' name='delete' value='" . $row["Case_ID"] . "'/><input type='submit' class='btn btn-danger' name='submit-btn' value='ลบ' /></form>";
              echo "<form target='_blank' action='../app/jobdetail.php' method='POST'><input type='hidden' name='job' value='" . $row["Case_ID"] . "'/><input type='submit' class='btn btn-warning' name='submit-btn' value='รายละเอียด' /></form>";
              echo "<form target='_blank' action='../app/addnote.php' method='POST'><input type='hidden' name='ref' value='" . $row["Case_ID"] . "'/><input type='submit' class='btn btn-success' name='submit-btn' value='หมายเหตุ' /></form> </div></td>";

              echo "</tr>";
            }
          }
          ?>
        </table>
      </div>
      </div>
  </div>
  </div>
  <?php
  include '../components/footer.php'
  ?>
</body>


</html>