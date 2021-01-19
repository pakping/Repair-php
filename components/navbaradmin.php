<?php 
require_once("../DB/connect.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6f42c1;">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="..\img\1200px-UPHosLogo.svg.png" alt="" width="30" height="24">
    </a>
    <a class="navbar-brand" href="#">ระบบแจ้งซ่อมออนไลน์</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <!--  <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        <!-- </li>
        <li class="nav-item">
        <a class="nav-link active" href="home.php">แบบฟอร์มแจ้งซ่อม</a>
        </li> -->
         
         <!-- <li class="nav-item">
        <a class="nav-link" href="../searchdata.php">ค้นหาข้อมูล</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../app/updatedata.php">แก้ไขข้อมูล</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../app/deletedata.php">ลบข้อมูล</a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link" href="../app/showdata.php">แสดงคำร้องข้อมูลแจ้งซ่อม</a>
         </li>
         <li class="nav-item">
        <a class="nav-link" href="../app/showdatahistory.php">แสดงประวัติการซ่อมแจ้งซ่อม</a>
         </li>
        <li class="nav-item"> 
        <a class="nav-link" href="../app/showchart.php">สถิติ</a>
        </li>
      </ul>
      <span class="navbar-text">
      <a class="nav-link" href="../auth/logout.php">ออกจากระบบ</a>
      </span>
    </div>
  </div>
</nav>