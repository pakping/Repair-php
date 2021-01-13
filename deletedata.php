<!DOCTYPE html>
<html>

<head>
  <title>หน้าลบข้อมูล</title>
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
      รหัสเมนู :
      <input type="text" name="txt_id" required />
      <input type="submit" value="ค้นหา" /> <br>
      <hr>
      <table>
        <tr>
          <th>รหัสเมนู</th>
          <th>ชื่อเมนู</th>
          <th>ประเภทอาหาร</th>
          <th>ราคา</th>
          <b>
            <th>ลบ</th>
        </tr>

        <?php
        require 'connect.php';
        if (isset($_POST['txt_id'])) {
          $id = $_POST['txt_id'];
          $search = "SELECT * FROM menu WHERE menu_ID = '$id' ";
          $result = mysqli_query($con, $search);
          $row = mysqli_fetch_array($result);

          echo "<tr>";
          echo "<td>" . $row["menu_ID"] . "</td>";
          echo "<td>" . $row["menu_Name"] . "</td>";
          echo "<td>" . $row["menu_Type"] . "</td>";
          echo "<td>" . $row["menu_price"] . "</td>";
          echo "<td>" . $row["menu_ID"] . "</td>";
          echo "</tr>";
        }
        ?>
      </table>

    </form>

    <form method="POST">
      <input type="hidden" name="keydel" value="<?php echo $row['menu_ID']; ?>" readonly> <br />
      <input type="Submit" name="del" value="ลบ" />
    </form>

    <?php
    require 'connect.php';
    $id = filter_input(INPUT_POST, 'keydel');
    $del = " DELETE FROM menu WHERE menu_ID = '$id'";
    $result = mysqli_query($con, $del);
    ?>

  </div>
</body>

</html>