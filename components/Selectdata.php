<?php
    require '../DB/connect.php';
    if (isset($_POST['ref'])) {
      $ref = $_POST['ref'];
      $input = $_POST[]
      $upd = " UPDATE Report SET stat = 'Working' WHERE Case_ID = '$idupd'";
      $result = mysqli_query($con, $upd);
      if ($result) {
        header('Location: ../app/showdata.php');
      } else {
        echo 'แก้ไขข้อมูลไม่สำเร็จ';
      }
    }
?>