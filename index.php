<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/wrap-form.css">
<link href="./css/style.css" rel="stylesheet">
<?php
  include 'css/bootstrap.php'
?>
</head>
<body>

  <div class="wrap-form p-5">
<!-- <h2>Modal Login Form</h2> -->

<!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

<!-- <div id="id01" class="modal"> -->
  
  <form class="container " action="auth/checkLogin.php" method="post">
    <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->

    <div class="card p-5">
      <div class="d-flex justify-content-center">
        <img src="img\1200px-UPHosLogo.svg.png" alt="" width="40%" height="50%" >
        
      </div>
      <br>
      <h2 class="text-center">ระบบแจ้งซ้อม</h2>
      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="btn btn-primary">Login</button>
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