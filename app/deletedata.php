<!DOCTYPE html>
<html>

<head>
  <title>หน้าลบข้อมูล</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/wrap-form.css">
  <?php
  include '../css/bootstrap.php'
  ?>

</head>

<body>
  <?php
  include '../components/navbar.php'
  ?>
  <div class="wrap-form">
    <hr>
    <form action="" method="post">
      รหัสเมนู :
      <input type="text" name="txt_id" required />
      <input type="submit" value="ค้นหา" /> <br>
      <hr>
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
        require '../DB/connect.php';
        if (isset($_POST['txt_id'])) {
          $id = $_POST['txt_id'];
          $search = "SELECT * FROM Report WHERE Case_ID = '$id' ";
          $result = mysqli_query($con, $search);
          $row = mysqli_fetch_array($result);

          echo "<tr>";
          echo "<td>" . $row["Case_ID"] . "</td>";
          echo "<td>" . $row["Location"] . "</td>";
          echo "<td>" . $row["Problem"] . "</td>";
          echo "<td>" . $row["Description"] . "</td>";
          echo "<td>" . $row["Name"] . "</td>";
          echo "<td>" . $row["Time"] . "</td>";
          echo "<td>" . $row["Date"] . "</td>";
          echo "<td>" . $row["Stat"] . "</td>";
          echo "<td><form method='POST'><input type='hidden' name='del' value='".$row["Case_ID"]."'/><input type='submit' name='submit-btn' value='Delete' /></form></td>";
        }
        ?>
      </table>

    </form>
    <?php
    require '../DB/connect.php';
    $id = filter_input(INPUT_POST, 'keydel');
    $del = " DELETE FROM report WHERE Case_ID = '$id'";
    $result = mysqli_query($con, $del);
    ?>

  </div>
</body>

</html>