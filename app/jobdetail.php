<?php
$content ="admin";
require "../auth/sessionpersist.php";
$target = $_POST['job'];
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
  <?php
  include '../components/meta-title.php'
  ?>
</head>
<body class="d-flex flex-column h-100">
  <?php
  include '../components/navbar.php'
  ?>
  <div class="container">
    <div class="wrap-form">
      <br>
      <form action="../app/showdatahistory.php" method="post" name="F1">
        <fieldset>
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <legend>
              <h1>แจ้งซ่อม</h1>
            </legend>
              <div class="mb-3">
                <?php
                  require '../DB/connect.php';
                  $result = mysqli_query($con, "SELECT * FROM report Where Case_ID = '$target' ");                
                  if ($result) {                 
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<br>งานที่  ". $row["Case_ID"] . "</br>";
                      echo "<br>สถานที่  " . $row["Location"] . "</br>";
                      echo "<br>ปัญหา   " . $row["Problem"] . "</br>";
                      echo "<br>รายละเอียด    " . $row["Description"] . "</br>";
                      echo "<br>รายงานโดย    " . $row["Username"] . "</br>";
                      echo "<br>เวลา   " . $row["Time"] . "</br>";
                      echo "<br>วันที่    " . $row["Date"] . "</br>";
                      echo "<br>สถานะ   " . $row["Stat"] . "</br>";
                    }
                  }
              ?>
              </div>
            <button type="submit" class="btn btn-primary">กลับ</button>
          </div>
        </fieldset>
      </form>
    </div>
   

    
    <form action="../app/showdatahistory.php" method="post" name="F2">
        <fieldset>
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <legend>
              <h1>รายงานจากช่าง</h1>
            </legend>
              <div class="mb-3">
                <?php
                  require '../DB/connect.php';
                  $data = mysqli_query($con, "SELECT * FROM note Where Case_ID = '$target' ");
                  
                  if ($data) {
                      
                    while ($zzz = mysqli_fetch_array($data)) {
                      
                      echo "<p class='text-break'> รายละเอียด ". $zzz["Note"] . "</p>";
                      echo "<br>เขียนโดย  ". $zzz["Username"] . "</br>";
                    }
                  }
              ?>
              </div>
          </div>
        </fieldset>
      </form>
      
  </div>
  <?php
  include '../components/footer.php'
  ?>
</body>

</html>