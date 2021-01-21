<?php
$content ="user";
require "../auth/sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
<title>รายการแจ้งซ่อม</title>
  <?php
  include '../components/meta-title.php'
  ?>
</head>
<body>
  <?php
  include '../components/navbar.php';
  $uname = $_SESSION["Username"];
  ?>
  <br>
  <div class="container">
      <div class="shadow-lg p-3 mb-5 bg-white rounded" >
      <div class="p-3 ">
        <h1 >รายการแจ้งซ่อม</h1>  
        </div>
      <div class="table-responsive">
        <table class="table table-hover table-sm">
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
          echo "<td>" . "<p class='fw-bold'>" . $row["Problem"] . "</p>" ."<p class='text-break' style='text-decoration: none;
          text-overflow: ellipsis; /* เพิ่ม ... จุดจุดจุดท้ายสุด */ 
          display: block; overflow: hidden; 
          white-space: nowrap; 
          width: 150px; /* กำหนดความกว้าง */ '>". $row["Description"] ."</p>". "</td>";
          // echo "<td>" . "</td>";
          echo "<td>" . $row["Username"] . "</td>";
          $date = date_create($row["Date"]); 
          echo "<td>" .  date_format($date,"d/m/Y") . "<br>" . $row["Time"] . "</td>";
          // echo "<td>" . "</td>";
          echo "<td>" . $row[ "Stat"] . "</td>";
          echo "<td>" . $row["Worker"] . "</td>";
          echo "<td><div class='btn-group' role='group' aria-label='Basic mixed styles example'><form action='../components/delete2.php' method='POST'><input  type='hidden' name='delete' value='".$row["Case_ID"]."'/><input type='submit'class=' btn btn-danger'name='submit-btn' value='ลบ' /></form><form target='_blank' action='../app/jobdetail.php' method='POST'><input  type='hidden' name='job' value='".$row["Case_ID"]."'/><input type='submit'class=' btn btn-warning'name='submit-btn' value='รายละเอียด' /></form></div></td>";
          echo "</tr>";
          
        }
      }
      ?></tbody>
        </table>
        <!-- </div> -->
      </div>
      </div>
      

  
  </div>

  <?php
  include '../components/footer.php'
?>


</body>

</html>