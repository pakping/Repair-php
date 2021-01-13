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
        <legend>เพิ่มเมนูอหาร</legend>
        <form>
          <div class="form-group">
            <table>

              <tr>
                <td> รหัสเมนู : </td>
                <td>
                  <input type="text" name="txt_id" pattern="m[0-9]{4}" title="ข้อความขึ้นต้นด้วยอักษร m และตัวเลข 4 ตัว" required>
                </td>
              </tr>
              <tr>
                <td>ชื่อเมนู :</td>
                <td>
                  <input type="text" name="txt_name" pattern="{50}" title="ข้อความไม่เกิน 50 ตัว" required>
                </td>
              </tr>
              <tr>
                <td> ประเภทอาหาร : </td>
                <td>
                  <select name="lst_type" required>
                    <option value="1">1 : อาหารคาว</option>
                    <option value="2">2 : อาหารหวาน</option>
                    <option value="3">3 : อาหารว่าง</option>
                  </select>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td> ราคาอาหาร : </td>
                <td>
                  <input type="number" name="price" pattern="{4}" title="ราคาอาหาร" required>
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