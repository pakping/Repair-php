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
        <h1>เพิ่มอุปกรณ์</h1>
        
        <hr>
        <table style=" width:100%">
          <tr>
            <td>
              <div class="mb-3">
                <label for="toolname" class="form-label"><b>ชื่ออุปกรณ์</b></label>
                <input type="text" class="form-control" placeholder="อุปกรณ์" name="toolname" id="toolname" required>
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