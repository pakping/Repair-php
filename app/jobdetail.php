<?php
$content = "admin";
session_start();
$target = $_POST['job'];
$_SESSION['target'] = $target;
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <?php
  include '../components/meta-title.php';
  
  echo "<title>รายละเอียดของงานที่ : " . $target . "</title>";
  ?>
</head>

<body >
  <div class="container">
    <div class="wrap-form">
      <br>
      <form action="printtest.php" target="_blank" method="post" name="F1">
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
                  echo "<br>งานที่  " . $row["Case_ID"] . "</br>";
                  echo "<br>สถานที่  " . $row["Location"] . "</br>";
                  echo "<br>ปัญหา   " . $row["Problem"] . "</br>";
                  echo "<br>รายละเอียด    " . $row["Description"] . "</br>";
                  echo "<br>รายงานโดย    " . $row["Username"] . "</br>";
                  echo "<br>เวลา   " . $row["Time"] . "</br>";
                  echo "<br>วันที่    " . $row["Date"] . "</br>";
                  echo "<br>สถานะ   " . $row["Stat"] . "</br>";
                  $_SESSION['cid'] = $row["Case_ID"];
                  $_SESSION['loc'] = $row["Location"];
                  $_SESSION['pro'] = $row["Problem"];
                  $_SESSION['des'] = $row["Description"];
                  $_SESSION['user'] = $row["Username"];
                  $_SESSION['tim'] = $row["Time"];
                  $_SESSION['dat'] = $row["Date"];
                }
              }
              ?>
            </div>
            <button type="print" class="btn btn-primary">print</button>
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

                echo "<p class='text-break'> รายละเอียด " . $zzz["Note"] . "</p>";
                echo "<br>เขียนโดย  " . $zzz["Username"] . "</br>";
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