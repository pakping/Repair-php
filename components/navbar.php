<?php
require_once("../DB/connect.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark"style="background-color: #6f42c1;" >
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="..\img\1200px-UPHosLogo.svg.png" alt="" width="30" height="24">
    </a>
    <a class="navbar-brand" href="home.php">ระบบแจ้งซ่อมออนไลน์</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link " href="home.php">แบบฟอร์มแจ้งซ่อม</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../app/showdatauser.php">แสดงคำร้องข้อมูลแจ้ง</a>
        </li>

      </ul>
      <form class="d-flex">
        
        <a class="navbar-brand" >  <?php
            echo "<p class='fs-6'>" . $_SESSION['Username'] . "</p>";
            ?></a>
        <a  href="../auth/logout.php" class="btn btn-success" role="button">ออกจากระบบ</a>
      </form>
    </div>
  </div>
</nav>