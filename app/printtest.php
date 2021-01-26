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
        'sarabun' => [ // ส่วนที่ต้องเป็น lower case ครับ
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNewItalic.ttf',
            'B' =>  'THSarabunNewBold.ttf',
            'BI' => "THSarabunNewBoldItalic.ttf",
        ]
    ],
]);

ob_start(); // Start get HTML code
?>


<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>

    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: sarabun;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <div class="container">
        <p align="right">ใบแจ้งเลขที่ <?php echo $_SESSION['cid']; ?></p>
        <h1 align="center">ใบแจ้งซ่อม</h1>
        <p align="center">งานสาธารณูปโภคและซ่อมบำรุง งานอาคารสถานที่</p>
        <p align="right">วันที่ เดือน พ.ศ. <?php echo $_SESSION['dat']; ?></p>
        <div align="center">
            <p>ผู้แจ้ง <?php echo $_SESSION['user']; ?></p>
            <p>ห้อง <?php echo $_SESSION['loc']; ?></p>
        </div>
        <div align="right">
            <p>เวลาที่แจ้ง <?php echo $_SESSION['tim'];  ?>น.</p>
        </div>
        <div align="center" style="width: 90%">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50%">ประเภทงาน</th>
                        <th style="width: 50%">รายละเอียดแจ้งซ่อม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo $_SESSION['pro']; ?></td>
                        <td> <?php echo $_SESSION['des']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div align="center">
            <p>(....................................) (....................................)</p>
        </div>
        <div align="center">
            <P>ผู้รับ.................................... ผู้แจ้ง.................................... </P>
            <p></p>
        </div>

</body>

</html>

<?php
$html = ob_get_contents();
$mpdf->WriteHTML($html);
$mpdf->Output("ใบแจ้งซ่อมที่" . $_SESSION['cid'] . ".pdf");
ob_end_flush();
header("location:ใบแจ้งซ่อมที่" . $_SESSION['cid'] . ".pdf");
?>

<!-- ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF.pdf">คลิกที่นี้</a> -->