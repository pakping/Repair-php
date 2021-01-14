<!DOCTYPE html>
<html>
<head>
<title>หน้าเพิ่มข้อมูล</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
        .wrap-form {
            width: 800px;
            margin: auto;
        }
    </style>
</head>

<body>


<?php
require 'connect.php';
    $desc = $_POST['desc'];
    $room = $_POST['room'];
    $name = $_POST['uname'];
    $type = $_POST['type'];
    

    $adddat = "INSERT INTO report (Location,Problem,Description,name,Time,Date,Stat) VALUE ('$room','$type','$desc','$name',CURRENT_TIME(),CURRENT_DATE(),'waiting') ";
    $result = mysqli_query($con, $adddat);
if ($result)
{
    echo "เพิ่มข้อมูลสำเร็จ" . "<br>";
    echo '<a href="showdata.php">show data</a>';
    header("Location: index.php");
}
else
{
    echo 'เพิ่มข้อมูลไม่สำเร็จ';
    header("Location: home.php");
}
?>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</html>
