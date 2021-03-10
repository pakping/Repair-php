<?php
$content = "admin";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include '../components/meta-title.php'
  ?>
  <title>เพิ่มห้อง</title>
</head>

<body>
  <?php
  include '../components/navbaradmin.php'
  ?>
  <div class="container">
    <br>
    <form action="../Function/addnewroom.php" method="post">
    <div  class="main-1">
        <div class="shadow-lg p-3">
        <h1>เพิ่มห้อง</h1>
        
        <hr>
        <table style=" width:100%">
          <tr>
            <td>
              <div class="mb-3">
                <label for="roomname" class="form-label"><b>ชื่อห้อง</b></label>
                <input type="text" class="form-control" placeholder="ห้อง" name="roomname" id="roomname" required>
              </div>
            </td>
          </tr>
        </table>
        <button type="submit" class="btn btn-primary">เพิ่ม</button>
      </div>
    </div>
    </form>
  </div>
</body>

</html>