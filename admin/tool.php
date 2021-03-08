<?php
$content = "admin";
require "../auth/sessionpersist.php";
$_SESSION['lastpage'] = "../app/showdatauser.php";
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <title>อุปกรณ์</title>
    <?php
    include '../components/meta-title.php'
    ?>
</head>

<body>
    <?php
    include '../components/navbaradmin.php';
    $uname = $_SESSION["Username"];
    ?>
    <br>
    <div class="container">
        <div class="main-1">
            <div class="shadow-lg p-3">
                <div class="p-3 ">
                    <h1>รายการอุปกรณ์</h1>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">รหัสอุปกรณ</th>
                                <th scope="col">ชื่ออุปกรณ์</th>
                                <th scope="col">คำสั่งจัดการ</th>
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

                                    echo "<td><div class='btn-group' role='group' aria-label='Basic mixed styles example'>


                <form action='../components/delete.php' method='POST'>
                <input  type='hidden' name='delete' value='" . $row["Case_ID"] . "'/>
                <button type='button'class=' btn btn-danger'name='submit-btn' title='ลบห้อง'  value='ลบ' data-bs-toggle='modal' data-bs-target='#Modeldel" . $row["Case_ID"] . "'>
                <span class='material-icons'>
              delete
              </span>
                </button>
          <div class='modal fade' id='Modeldel" . $row["Case_ID"] .
                                    "' tabindex='-1' aria-labelledby='modeldell' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='modeldell'>ยืนยันการลบ</h5>
                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                  โปรดยืนยันการลบรายงาน
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>ยกเลิก</button>
                  <button type='submit' class='btn btn-success'>ยืนยัน</button>
                </div>
              </div>
            </div>
          </div>
          </form>

          
          <form target='_blank' action='../app/jobdetail.php' method='POST'>
          <input  type='hidden' name='job' value='" . $row["Case_ID"] . "'/>    
          <button type='submit'class=' btn btn-warning'name='submit-btn'title='เพิ่มห้อง'   value='เพิ่ม' >
          <span class='material-icons'>
          assignment
          </span></button>
          </form>
          </div>
          </td>";
                                    echo "</tr>";
                                }
                            }
                            ?></tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <br><br>
    <?php
    include '../components/footer.php'
    ?>
</body>

</html>