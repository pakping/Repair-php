<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <title>หน้าแสดงข้อมูล</title>
  <link rel="stylesheet" type="text/css" href="../css/wrap-form.css">
</head>

<?php
  include '../css/bootstrap.php'
  ?>

<body class="d-flex flex-column h-100">

  <?php
  include '../components/navbaradmin.php'
  ?>
  
  <div class="container p-5">
    <div class="wrap-form">
      <table class="table table-striped">
        </thead>
        <tr>
          <th>งานที่</th>
          <th>ห้อง</th>
          <th>ประเภทของปัญหา</th>
          <th>ปัญหา</th>
          <th>ชื่อ</th>
          <th>เวลา</th>
          <th>วันที่</th>
          <th>สถานะ</th>
          <th>งาน</th>
          <th>ลบ</th>

        </tr>
        </thead>
        <?php
      require '../DB/connect.php';
      $result = mysqli_query($con, "SELECT * FROM report Where stat != 'Done'");
      
      if ($result) {
        
        while ($row = mysqli_fetch_array($result)) {
          
          echo "<tr>";
          echo "<td>" . $row["Case_ID"] . "</td>";
          echo "<td>" . $row["Location"] . "</td>";
          echo "<td>" . $row["Problem"] . "</td>";
          echo "<td>" . $row["Description"] . "</td>";
          echo "<td>" . $row["Username"] . "</td>";
          echo "<td>" . $row["Time"] . "</td>";
          echo "<td>" . $row["Date"] . "</td>";
          echo "<td>" . $row["Stat"] . "</td>";
          //echo "<td><button id='" . $row['Case_ID'] . "' onclick = >Accept</button></td>" ;
          
          if ($row["Stat"] == 'Working'){
            echo "<td><form action='../components/movetodone.php' method='POST'><input type='hidden' name='tempId2' value='".$row["Case_ID"]."'/><input type='submit' name='submit-btn' value='Done' /></form></td>";
          }else{
            echo "<td><form action='../components/accept.php' method='POST'><input type='hidden' name='tempId' value='".$row["Case_ID"]."'/><input type='submit' name='submit-btn' value='Accept' /></form></td>";
          }
          echo "<td><form action='../components/delete.php' method='POST'><input type='hidden' name='delete' value='".$row["Case_ID"]."'/><input type='submit' name='submit-btn' value='Delete' /></form></td>";
          echo "</tr>";

        }
      }
      ?>
      </table>
    </div>
  </div>
  <?php
  include '../components/footer.php'
  ?>
</body>

</html>