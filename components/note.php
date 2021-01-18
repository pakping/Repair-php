<?php
    session_start();
    $ref = $_SESSION['ref'];
    require '../DB/connect.php';
    $input = $_POST['desc'];
    $upd = " UPDATE Report SET note = '$input' WHERE Case_ID = '$ref' ";
    if (isset($ref)) {
      $result = mysqli_query($con, $upd);
      if ($result) {
        header('Location:../app/showdatahistory.php');
      } else {
        echo 'แก้ไขข้อมูลไม่สำเร็จ';
        
      }
    }
?>