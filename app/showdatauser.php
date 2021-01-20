<?php
$content ="user";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
<title>หน้าแสดงข้อมูล</title>
  <?php
  include '../components/meta-title.php'
  ?>
</head>
<body class="d-flex flex-column h-100">
  <?php
  include '../components/navbar.php';
  $uname = $_SESSION["Username"];
  ?>
  <br>
  <div class="container">
    <fieldset>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" >
        <h1 class="p-3">รายการแจ้งซ่อม</h1>
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
              <th scope="col">ผู้รับงาน</th>
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
          echo "<td>" . "<p class='fw-bold'>" . $row["Problem"] . "</p>" ."<p class='text-break'>". $row["Description"] ."</p>". "</td>";
          // echo "<td>" . "</td>";
          echo "<td>" . $row["Username"] . "</td>";
          echo "<td>" . $row["Date"] ."<br>" .  $row["Time"] . "</td>";
          // echo "<td>" . "</td>";
          echo "<td>" . $row[ "Stat"] . "</td>";
          echo "<td>" . $row["Worker"] . "</td>";
          echo "<td><form action='../components/delete2.php' method='POST'><input  type='hidden' name='delete' value='".$row["Case_ID"]."'/><input type='submit'class=' btn btn-danger'name='submit-btn' value='ลบ' /></form><form target='_blank' action='../app/jobdetail.php' method='POST'><input  type='hidden' name='job' value='".$row["Case_ID"]."'/><input type='submit'class=' btn btn-warning'name='submit-btn' value='รายละเอียด' /></form></td>";       
          
          echo "</tr>";
          
        }
      }
      ?></tbody>
        </table>
        <!-- </div> -->
      </div>
      <!-- <?php
      include '../components/pagination.php'
      ?> -->
    </fieldset>
  </div>

  <?php
  include '../components/footer.php'
?>


</body>

</html>