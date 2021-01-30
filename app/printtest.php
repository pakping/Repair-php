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

        /* head */
        .cas {
            position: absolute;
            text-align: center;
            top: 10px;
            right: 100px;
        }

        .dat {
            position: absolute;
            text-align: center;
            top: 35px;
            right: 100px;
        }

        .loc {
            position: absolute;
            text-align: center;
            top: 120px;
            right: 550px;
        }

        .num {
            position: absolute;
            text-align: center;
            top: 120px;
            right: 245px;
        }

        .tim {
            position: absolute;
            text-align: center;
            top: 120px;
            right: 100px;
        }

        /* checkbox */
        .kp {
            position: absolute;
            text-align: center;
            top: 130px;
            right: 555px;
        }

        .ks {
            position: absolute;
            text-align: center;
            top: 130px;
            right: 435px;
        }

        .kc {
            position: absolute;
            text-align: center;
            top: 130px;
            right: 315px;
        }

        .ac {
            position: absolute;
            text-align: center;
            top: 130px;
            right: 180px;
        }

        .el {
            position: absolute;
            text-align: center;
            top: 150px;
            right: 720px;
        }

        .sa {
            position: absolute;
            text-align: center;
            top: 150px;
            right: 635px;
        }

        .all {
            position: absolute;
            text-align: center;
            top: 150px;
            right: 520px;
        }

        .comment {
            position: absolute;
            text-align: center;
            top: 170px;
            right: 350px;
        }

        /*  text ชื่อครุภัณฑ์ */

        .namek {
            position: absolute;
            text-align: center;
            top: 190px;
            right: 550px;
        }

        .numk {
            position: absolute;
            text-align: center;
            top: 190px;
            right: 200px;
        }

        .yeark {
            position: absolute;
            text-align: center;
            top: 213px;
            right: 590px;
        }

        .pricek {
            position: absolute;
            text-align: center;
            top: 213px;
            right: 430px;
        }

        .y {
            position: absolute;
            text-align: center;
            top: 213px;
            right: 200px;
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
    <div class="loc">
        <p> <?php echo $_SESSION['loc']; ?></p>
    </div>
    <div class="num">
        <p>055555555</p>
    </div>
    <div class="tim">
        <p><?php echo $_SESSION['tim']; ?></p>
    </div>
    <?php
    $kp = "1";
    $ks = "1";
    $kc = "1";
    $ac = "1";
    $el = "1";
    $sa = "1";
    $all = "1";
    if ($kp == "1") {
        echo "<div class='kp'>
        <h1>" . "/" . "</h1>
             </div>";
    }
    if ($ks == "1") {
        echo "<div class='ks'>
        <h1>" . "/" . "</h1>
             </div>";
    }
    if ($kc == "1") {
        echo "<div class='kc'>
        <h1>" . "/" . "</h1>
             </div>";
    }
    if ($ac == "1") {
        echo "<div class='ac'>
        <h1>" . "/" . "</h1>
             </div>";
    }
    if ($el == "1") {
        echo "<div class='el'>
        <h1>" . "/" . "</h1>
             </div>";
    }
    if ($sa == "1") {
        echo "<div class='sa'>
        <h1>" . "/" . "</h1>
             </div>";
    }
    if ($all == "1") {
        echo "<div class='all'>
        <h1>" . "/" . "</h1>
             </div>
             <div class='comment'>
             <p>รายละเอียดอื่นๆ</p>
             </div>";
    }
    ?>

    <div class="namek">
        <p><?php echo "ชื่อของ"; ?></p>
    </div>
    <div class="numk">
        <p><?php echo "เลขของ"; ?></p>
    </div>
    <div class="yeark">
        <p><?php echo "ปีของ"; ?></p>
    </div>
    <div class="pricek">
        <p><?php echo "ราคา"; ?></p>
    </div>
    <div class="y">
        <p><?php echo "ปีล่าสุด"; ?></p>
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