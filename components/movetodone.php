<?php
session_start();
require '../DB/connect.php';
if (isset($_POST['tempId2'])) {
  $idupd2 = $_POST['tempId2'];
  $upd = " UPDATE Report SET stat = 'Done' WHERE Case_ID = '$idupd2'";
  $result = mysqli_query($con, $upd);
  if ($result) {
    //$select = "SELECT * FROM Report WHERE Case_ID = '$idupd2'"
    header('Location: ../app/showdata.php');
  } else {
    echo 'แก้ไขข้อมูลไม่สำเร็จ';
  }
}
?>