<?php
$content ="user";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html>
<!doctype html>
<html lang="en" class="h-100">

<head>
<?php
  include '../components/meta-title.php'
  ?>
<?php
include '../css/bootstrap.php'
?>
</head>

<body>

  <?php
  include '../components/navbar.php';
  $uname = $_SESSION["Username"];
  ?>
  <div class="container p-5">
  <div class="wrap-form">
    <table class="table table-bordered border-primary">
      </thead>
      <tr>
        <th>งานที่</th>
        <th>ห้อง</th>
        <th>ประเภทของปัญหา</th>
        <th>ปัญหา</th>
        <th>ชื่อ</th>
        <th>เวลา</th>
        <th>วันที่</th>
        <th>สถานะ</th>
        <th>ลบ</th>

      </tr>
      </thead>
      <?php
      require '../DB/connect.php';
      $result = mysqli_query($con, "SELECT * FROM report Where Username = '$uname' and stat != 'Done' ");
      
      if ($result) {
        
        while ($row = mysqli_fetch_array($result)) {
          
          echo "<tr>";
          echo "<td>" . $row["Case_ID"] . "</td>";
          echo "<td>" . $row["Location"] . "</td>";
          echo "<td>" . $row["Problem"] . "</td>";
          echo "<td>" . $row["Description"] . "</td>";
          echo "<td>" . $row["Username"] . "</td>";
          echo "<td>" . $row["Time"] . "</td>";
          echo "<td>" . $row["Date"] . "</td>";
          echo "<td>" . $row[ "Stat"] . "</td>";
          echo "<td><form action='../components/delete2.php' method='POST'><input  type='hidden' name='delete' value='".$row["Case_ID"]."'/><input type='submit'  class='btn btn-danger'name='submit-btn' value='Delete' /></form></td>";
          echo "</tr>";
          
        }
      }
      ?>
    </table>
  </div>
</div>
<?php
  include '../components/footer.php'
  ?>
</body>

</html>