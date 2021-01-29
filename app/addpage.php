<?php session_start();
  $target = $_SESSION['target'];
  require_once 'vendor/autoload.php';
  require '../DB/connect.php';
  $mpdf = new \Mpdf\Mpdf();
  $pagecount = $mpdf->SetSourceFile('Realform.pdf');
          $import_page = $mpdf->ImportPage(2);
          $page = $mpdf->UseTemplate($import_page);
          $mpdf ->AddPage($page);


      














$mpdf->Output("Newpdf.pdf");
ob_end_flush();
header('location:newpdf.pdf');

      ?>