<!-- <!DOCTYPE html>
<html>
<head>
<title>หน้าเพิ่มข้อมูล</title>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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
 -->
<?php
session_start();
require '../DB/connect.php';
    $desc = $_POST['desc'];
    $room = $_POST['room'];
    $type = $_POST['type'];
    $uname =$_SESSION["Username"];
    $adddat = "INSERT INTO report (Location,Problem,Description,Time,Date,Stat,Username,Worker) VALUE ('$room','$type','$desc',CURRENT_TIME(),CURRENT_DATE(),'รอดำเนินการ','$uname','ไม่มี')";
    $result = mysqli_query($con,$adddat);
    
    if ($result)
    {
        // echo "เพิ่มข้อมูลสำเร็จ" . "<br>";
        // echo '<a href="showdata.php">show data</a>';
        
        echo "<script type=\"text/javascript\">";
        echo "alert(\"เพิ่มข้อมูลสำเร็จ\");";
        echo "window.history.back();";
        echo "</script>";
        header("Location: ../app/home.php"); 
    }
    else
    {
        
        echo "<script type=\"text/javascript\">";
        echo "alert(\"เพิ่มข้อมูลไม่สำเร็จ\");";
        echo "window.history.back();";
        echo "</script>";
        // header("Location: home.php"); 
        // echo 'เพิ่มข้อมูลไม่สำเร็จ';
        // header("Location: ../app/home.php");
    }
?>
<!-- 
</body>
</html> -->
