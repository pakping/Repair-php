<?php
session_start();
require '../DB/connect.php';
if (isset($_POST['tempId'])) {
  $idupd = $_POST['tempId'];

  $upd = " UPDATE Report SET stat = 'กำลังดำเนินการ' WHERE Case_ID = '$idupd'";
  $result = mysqli_query($con, $upd);
  if ($result) {
    header('Location: ../app/showdata.php');
  } else {
    echo 'แก้ไขข้อมูลไม่สำเร็จ';
  }
}
?>