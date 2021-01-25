<?php
session_start();
require '../DB/connect.php';
$page = $_SESSION["lastpage"];
if (isset($_POST['delete'])) {
  $idd = $_POST['delete'];
  $del = " DELETE FROM report WHERE Case_ID = '$idd'";
  $result = mysqli_query($con, $del);
  if ($result) {
    
    header($page);
  } else {
    echo 'แก้ไขข้อมูลไม่สำเร็จ';
  }
}
?>