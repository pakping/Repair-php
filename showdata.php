<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>หน้าแสดงข้อมูล</title>
  <link rel="stylesheet" type="text/css" href="css/wrap-form.css">
  <?php
  include 'css/bootstrap.php'
  ?>
</head>

<body>

<?php
  include 'components/navbar.php'
  ?>

  <br>
  <br>
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
      </tr>
      </thead>
      <?php
      require 'connect.php';
      $result = mysqli_query($con, "SELECT * FROM report");
      
      if ($result) {
        
        while ($row = mysqli_fetch_array($result)) {
          
          echo "<tr>";
          echo "<td>" . $row["Case_ID"] . "</td>";
          echo "<td>" . $row["Location"] . "</td>";
          echo "<td>" . $row["Problem"] . "</td>";
          echo "<td>" . $row["Description"] . "</td>";
          echo "<td>" . $row["Name"] . "</td>";
          echo "<td>" . $row["Time"] . "</td>";
          echo "<td>" . $row["Date"] . "</td>";
          echo "<td>" . $row["Stat"] . "</td>";
          //echo "<td><button id='" . $row['Case_ID'] . "' onclick = >Accept</button></td>" ;
          echo "<td><form action='accept.php' method='POST'><input type='hidden' name='tempId' value='".$row["Case_ID"]."'/><input type='submit' name='submit-btn' value='Accept' /></form></td></tr>";
          
          
          
          echo "</tr>";
        }
      }
      ?>
      <?php
    require 'connect.php';
    $id = filter_input(INPUT_POST, 'keydel');
    $del = " DELETE FROM menu WHERE menu_ID = '$id'";
    $result = mysqli_query($con, $del);
    ?>

    </table>
  </div>

</body>

</html>