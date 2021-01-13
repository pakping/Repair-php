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
      รหัสเมนู :
      <input type="text" name="txt_id" required>
      <input type="submit" value="ค้นหา"> <br>
    </form>
    <hr>
    <table>
      <tr>
        <th>รหัสเมนู</th>
        <th>ชื่อเมนูอาหาร</th>
        <th>ประเภทอาหาร</th>
        <th>ราคา</th>
      </tr>
      <?php
      require 'connect.php';
      error_reporting(~E_NOTICE);
      if (isset($_POST['txt_id'])) {
        $id = $_POST['txt_id'];

        $search = "SELECT * FROM menu WHERE menu_ID = '$id' ";
        $result = mysqli_query($con, $search);
        $row = mysqli_fetch_array($result);
      }
      ?>
      <form method="post" action="">
        <td>
          <input type="text" name="txt_id" value="<?php echo $row['menu_ID']; ?>" readonly>
        </td>
        <td>
          <input type="text" name="txt_name" title="ชื่อขึ้นต้นด้วยตัวพิมพ์ใหญ่ตามด้วยตัวพิมพ์เล็ก" value="<?php echo $row['menu_Name']; ?>" pattern="{50}" required />
        </td>
        <td>
          <select name="lst_type" required>
            <option value="1">1 : อาหารคาว</option>
            <option value="2">2 : อาหารหวาน</option>
            <option value="3">3 : อาหารว่าง</option>
          </select>
        </td>

        <td>
          <input type="number" name="price" pattern="{4}" title="ราคาอาหาร" value="<?php echo $row['menu_price']; ?>" pattern="{4}" required>
        </td>

        </tr>
    </table> <br>
    <input type="submit" name="update" value="อัพเดท">
    </form>

    </table> <br>
    <?php
    require 'connect.php';
    if (isset($_POST['update'])) {
      $idupd = $_POST['txt_id'];
      $nameupd = $_POST['txt_name'];
      $typeupd = $_POST['lst_type'];
      $priceupd = $_POST['price'];
      $upd = " UPDATE menu SET menu_Name = '$nameupd', menu_Type = '$typeupd', 
        menu_price = '$priceupd'  WHERE menu_ID = '$idupd'";
      $result = mysqli_query($con, $upd);
      if ($result) {
        header('Location: showdata.php');
      } else {
        echo 'แก้ไขข้อมูลไม่สำเร็จ';
      }
    }
    ?>
  </div>

</body>

</html>