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
              </tr>
              <tr>
                <td> ห้อง : </td>
              <td>
                  <select name="type" required>
                    <option value="OPD1">1 : OPD1</option>
                    <option value="OPD2">2 : OPD2</option>
                    <option value="IPD1">3 : IPD1</option>
                    <option value="IPD2">4 : IPD2</option>
                    <option value="Pharmacy">5 : Pharmacy</option>
                    <option value="Cashier">6 : Cashier</option>
                    <option value="Office 5">7 :  Office 5</option>
                    <option value="Office 6">8 : Office 6</option>
                    <option value="Office 7">9 : Office 7</option>
                    <option value="Office 8">10 : Office 8</option>
                    <option value="Emergency">11 : Emergency</option>
                    <option value="Labor">12 : Labor</option>
                    <option value="Surgical">11 : Surgical</option>
                    <option value="Lab">12 : Lab</option>
                  </select>
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