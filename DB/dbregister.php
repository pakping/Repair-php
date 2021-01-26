<?php
require 'connect.php';
$name = $_POST['uname'];
$pass = $_POST['psw'];
$pass2 = $_POST['psw-repeat'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$tel = $_POST['telnum'];
$access = 'user';

if ($pass == $pass2) {
    /* $uname =$_SESSION["Username"]; */
    $adddata = "INSERT INTO user (Username,Password,firstname,lastname,Tel,Access) VALUE ('$name','$pass','$Fname','$Lname','$tel','$access')";
    $result = mysqli_query($con, $adddata);
    if ($result) {
        echo "success";
    } else {
        echo "fail";
    }
} else {
    echo "<script>alert('incorrect password');
        window.location.href='../app/register.php';
        </script>";
}
