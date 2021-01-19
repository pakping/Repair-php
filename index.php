<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./css/style.css" rel="stylesheet">
  <link href="./bootstrap-5/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="./bootstrap-5/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <?php
  session_start();
  if (!isset($_SESSION['type'])){
    $_SESSION['type'] = 'none';
  }
  if ($_SESSION['type'] == 'user'){
    header("location:app/home.php");
  }elseif($_SESSION['type'] == 'admin'){
    header("location:app/showdata.php");
  }
  
?>
</head>

<body>

  <div style="margin-top: 5%;">
    <!-- <h2>Modal Login Form</h2> -->

    <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

    <!-- <div id="id01" class="modal"> -->

    <form class="container" action="auth/checkLogin.php" method="post">
      <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->

      <div class="card col-md-6 offset-md-3" >
        <div class="text-center" style="margin-top: 5%;">
          <img src="https://upload.wikimedia.org/wikipedia/th/thumb/a/a4/UPHosLogo.svg/1024px-UPHosLogo.svg.png"
            class="img-fluid w-25 p-3" alt="Responsive image">
          <h2>ลงชื่อเข้าใช้</h2>
          <h6>ระบบ Maintenance Report โรงพยาบาลมหาวิทยาลัยพะเยา</h6>
        </div>
        <div class="p-2">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <!--   <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div> -->

        <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div> -->
    </form>
    <!-- </div> -->
  </div>
  <script>
    // Get the modal
    // var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }
  </script>

</body>

</html>