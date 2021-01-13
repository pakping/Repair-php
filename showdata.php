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
  include 'navbar.php'
  ?>
  <br>
  <br>
  <div class="wrap-form">
    <table class="table table-striped">
      </thead>
      <tr>
        <th>รหัสเมนู</th>
        <th>ชื่อเมนู</th>
        <th>ประเภทอาหาร</th>
        <th>ราคา</th>
      </tr>
      </thead>
      <?php
      require 'connect.php';
      $result = mysqli_query($con, "SELECT * FROM menu");

      if ($result) {
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row["menu_ID"] . "</td>";
          echo "<td>" . $row["menu_Name"] . "</td>";
          echo "<td>" . $row["menu_Type"] . "</td>";
          echo "<td>" . $row["menu_price"] . "</td>";
          echo "</tr>";
        }
      }
      ?>
    </table>
  </div>

</body>

</html>