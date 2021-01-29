<?php
// Require composer autoload
session_start();
$target = $_SESSION['target'];
require_once 'vendor/autoload.php';
require '../DB/connect.php';
// เพิ่ม Font ให้กับ mPDF
$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf([
    'tempDir' => __DIR__ . '/tmp',
    'fontdata' => $fontData + [
        'niramit' => [ // ส่วนที่ต้องเป็น lower case ครับ
            'R' => 'Niramit-Medium.ttf',
            'I' => 'Niramit-Italic.ttf',
            'B' =>  'Niramit-SemiBold.ttf',
            'BI' => "Niramit-SemiBoldItalic.ttf",
        ]
    ],
]);
$pagecount = $mpdf->SetSourceFile('Realform.pdf');
$import_page = $mpdf->ImportPage(1);
$mpdf->UseTemplate($import_page);


ob_start(); // Start get HTML code
?>


<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <style>
        body {
            font-family: niramit;
        }
        .cas {
            position: absolute;
            text-align: center;
            top:10px;
            right:100px; 
        }
        .dat {
            position: absolute;
            text-align: center;
            top:10px;
            right:100px; 
        }
        .location {
            position: absolute;
            text-align: center;
            top:120px;
            right: 550px; 
        }  
    </style>
    
</head>

<body>
    <div class="cas">
        <p> <?php echo "0" . $_SESSION['cid']; ?></p>
    </div>
    <div class="dat">
        <p> <?php echo $_SESSION['dat']; ?></p>
    </div>
    <div class="location">
        <p> <?php echo $_SESSION['loc']; ?></p>
    </div>
</body>

</html>



<?php
$html = ob_get_contents();
$mpdf->WriteHTML($html);
$mpdf->AddPage();
$import_page = $mpdf->ImportPage(2);
$mpdf->UseTemplate($import_page);
$mpdf->Output("ใบแจ้งซ่อมที่" . $_SESSION['cid'] . ".pdf");
ob_end_flush();
header("location:ใบแจ้งซ่อมที่" . $_SESSION['cid'] . ".pdf");
?>

<!-- ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF.pdf">คลิกที่นี้</a> -->