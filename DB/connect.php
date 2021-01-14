<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "sqltest1";

    $con = mysqli_connect($host, $username, $password, $db_name);
    mysqli_set_charset($con, "utf8"); //เชื่อมต่อกับฐานข้อมูล
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  }
?>

