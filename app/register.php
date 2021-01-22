<?php
$content = "admin";
require "../auth/sessionpersist.php" 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action= "../DB/dbregister.php" method = "post">
  <div class="container">
    <h1>ลงทะเบียน</h1>
    <p>กรอกข้อมูลเพื่อสร้างบัญชีใหม่</p>
    <hr>
   
    <label for="Uname"><b>ชื่อผู้ใช้</b></label>
    <input type="text" placeholder="ระบุชื่อผู้ใช้" name="uname" id="uname" required>

    <label for="psw"><b>รหัสผ่าน</b></label>
    <input type="password" placeholder="ระบุรหัสผ่าน" name="psw" id="psw" required>
    
    <label for="psw-repeat"><b>รหัสผ่านอีกครั้ง</b></label>
    <input type="password" placeholder="ระบุรหัสผ่านอีกครั้ง" name="psw-repeat" id="psw-repeat" required>
    
    <label for="Fname"><b>ชื่อ</b></label>
    <input type="text" placeholder="ระบุชื่อ" name="Fname" id="Fname" required>

    <label for="Lname"><b>นามสกุล</b></label>
    <input type="text" placeholder="ระบุนามสกุล" name="Lname" id="Lname" required>
    
    <label for="Telnum"><b>เบอร์โทรศัพท์</b></label>
    <input type="text" placeholder="ระบุเบอร์โทรศัพท์" name="telnum" id="telnum" required>
    
    <hr>
    

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
</form>

</body>
</html>
