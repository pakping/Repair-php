<!DOCTYPE html>
<html>

<head>
  <title>หน้าค้นหาข้อมูล</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/wrap-form.css">
  <?php
  include 'css/bootstrap.php'
  ?>
</head>

<body>
<?php
  include 'navbar.php'
  ?>
    <div class="wrap-form">
  <hr>
  <form action="" method="post">
    รหัสเมนู หรือ ชื่อเมนูอาหาร
    <input type="text" name="txt_id" required />
    <input type="submit" value="ค้นหา" /> <br />
  </form>
  <br />
  <?php
  require 'connect.php';
  if (isset($_POST['txt_id'])) {
    $id = $_POST['txt_id'];
    $search = "SELECT * FROM menu WHERE menu_ID = '$id' OR menu_Name LIKE '%$id%' ";
    $result = mysqli_query($con, $search);
    echo    "<table><tr> 
                        <th>รหัสอาหาร</th> <th>ชื่อรายการ</th> <th>ประเภทอาหาร</th> <th>ราคา</th>
                    </tr>";
    if ($result) {
      while ($row = mysqli_fetch_array($result)) {
        echo "<td>" . $row["menu_ID"] . "</td>";
        echo "<td>" . $row["menu_Name"] . "</td>";
        echo "<td>" . $row["menu_Type"] . "</td>";
        echo "<td>" . $row["menu_price"] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    }
  }
  ?>
    </div>
</body>


</html>