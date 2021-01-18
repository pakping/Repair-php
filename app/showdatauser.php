<?php
$content ="user";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <?php
  include '../components/meta-title.php'
  ?>
  <?php
include '../css/bootstrap.php'
?>
</head>

<body class="d-flex flex-column h-100">
  <?php
  include '../components/navbar.php';
  $uname = $_SESSION["Username"];
  ?>

  <div class="container">
    <fieldset>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" >
        <h1 class="p-3">รายการแจ้งซ้อม</h1>
        <!-- <div class="wrap-form"> -->
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">งานที่</th>
              <th scope="col">ห้อง</th>
              <!-- <th scope="col">ประเภทของปัญหา</th> -->
              <th scope="col">ปัญหา</th>
              <th scope="col">ชื่อผู้แจ้ง</th>
              <th scope="col">เวลา</th>
              <!-- <th scope="col">วันที่</th> -->
              <th scope="col">สถานะ</th>
              <th scope="col">คำสั่ง</th>
            </tr>
          </thead>
          <tbody>
            <?php
      require '../DB/connect.php';
      $result = mysqli_query($con, "SELECT * FROM report Where Username = '$uname' and stat != 'Done' ");
      
      if ($result) {
        
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row["Case_ID"] . "</td>";
          echo "<td>" . $row["Location"] . "</td>";
          echo "<td>" . "<p class='fw-bold'>" . $row["Problem"] . "</p>" . $row["Description"] . "</td>";
          // echo "<td>" . "</td>";
          echo "<td>" . $row["Username"] . "</td>";
          echo "<td>" . $row["Date"] ."<br>" .  $row["Time"] . "</td>";
          // echo "<td>" . "</td>";
          echo "<td>" . $row[ "Stat"] . "</td>";
          echo "<td><form action='../components/delete2.php' method='POST'><input  type='hidden' name='delete' value='".$row["Case_ID"]."'/><input type='submit'  class='btn btn-danger'name='submit-btn' value='Delete' /></form></td>";
          echo "</tr>";
          
        }
      }
      ?></tbody>
        </table>
        <!-- </div> -->
      </div>
    </fieldset>
  </div>

  <?php
  include '../components/footer.php'
?>


</body>

</html>