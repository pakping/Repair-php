<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>หน้าเพิ่มข้อมูล</title>
  <link rel="stylesheet" type="text/css" href="css/wrap-form.css">
  <?php
  include 'css/bootstrap.php'
  ?>
</head>

<body>
  <?php
  include 'navbar.php'
  ?>
  <hr>
  <div class="wrap-form">
    <form action="forminsert.php" method="post" name="F1">
      <fieldset style="width:50%">
        <legend>แจ้งซ่อม</legend>
        <form>
          <div class="form-group">
            <table>
            </tr>
              <tr>
                <td> ประเภทอาหาร : </td>
                <td>
                  <select name="type" required>
                    <option value="Computer">1 : คอมพิวเตอร์</option>
                    <option value="Printer">2 : เครื่องพิมพ์</option>
                    <option value="Other">3 : อื่นๆ</option>
                  </select>
            </tr>
              <tr>
                <td> ระบุปัญหา </td>
                <td>
                  <input type="text" name="desc"  title="กรุณาระบุปัญหา" required>
                </td>
              </tr>
              <tr>
                <td>ห้อง :</td>
                <td>
                  <input type="text" name="room" pattern="{50}" title="ข้อความไม่เกิน 50 ตัว" required>
                </td>
              <tr>
                <td> ชื่อ : </td>
                <td>
                  <input type="text" name="uname" pattern="{24}" title="ราคาอาหาร" required>
                </td>
              </tr>
          </div>
        </form>
        </table>
        <br>
        <button type="submit" class="btn btn-primary">ยืนยัน</button>
        <button type="reset" class="btn btn-warning">รีเซ็ต</button>
      </fieldset>
    </form>
  </div>
</body>

</html>