<?php
session_start();
$target = $_SESSION["target"];
require "../DB/connect.php";
?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>

    <title>ใบแจ้งซ่อม</title>
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel=stylesheet
        integrity=sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1 crossorigin=anonymous>
    <link rel=preconnect href=https://fonts.gstatic.com>
    <link href=https://fonts.googleapis.com/css2?family=Niramit:wght@200&display=swap rel=stylesheet>
    <style>
        body {
            font-family: "Niramit", sans-serif;
        }
    </style>
</head>

<body>
    <div class=container>
    
         <div class="">
            <p class="d-flex justify-content-end">ใบแจ้งเลขที่   . $row[Case_ID] . </p><br>
            <h1 class="d-flex justify-content-center">ใบแจ้งซ่อม</h1><br>;
            <p class="d-flex justify-content-center">งานสาธารณูปโภคและซ่อมบำรุง งานอาคารสถานที่</p><br>
            <p class="d-flex justify-content-end">วันที่ เดือน พ.ศ. . $row[Date] . </p><br>
            <br>;
            <div class="d-flex justify-content-evenly">
             <p>ผู้แจ้ง 
                
               </p>
                <p>ห้อง</p>
        </div>
        <div class="d-flex justify-content-evenly">
         
            <p>เวลาที่แจ้ง น.</p>
        </div>
        <br>
        <table class="table table-bordered border-secondary">
            <thead>
                <tr>
                    <th>ประเภทงาน</th>
                    <th>รายละเอียดแจ้งซ่อม</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ปัญหา</th>
                    <th>รายละเอียด</th>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="d-flex justify-content-evenly">
            <p>(......................................)</p>
            <p>(......................................)</p>
        </div>
        <div class="d-flex justify-content-evenly">
            <P>ผู้รับ      </P>
            <p>ผู้แจ้ง      </p>
        </div>;
                    }
                }
                ?>
    </div>
    </div>
</body>















<?php
//  <script>window.print()</script>;    
?>