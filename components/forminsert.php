<?php
session_start();
require '../DB/connect.php';
    $header = "ระบบแจ้งซ่อม";
    
    $desc = $_POST['desc'];
    $room = $_POST['room'];
    $type = $_POST['type'];
    $uname =$_SESSION["Username"];
    $adddat = "INSERT INTO report (Location,Problem,Description,Time,Date,Stat,Username,Worker) VALUE ('$room','$type','$desc',CURRENT_TIME(),CURRENT_DATE(),'รอดำเนินการ','$uname','ไม่มี')";
    $result = mysqli_query($con,$adddat);
//line notify
define('LINE_API',"https://notify-api.line.me/api/notify");
 //ใส่Token ที่copy เอาไว้
$token = "mWLUxFiNjmdgXKZu8oqef6H00OGi6ktec0ftBvhpTs7"; 
 //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
$str = $message = $header.
        "\n".'ประเภท  : '.$type.
        "\n".'รายละเอียด  : '.$desc.
        "\n".'ห้อง  : '.$room.
        "\n".'ชื่อ  : '.$uname;
$res = notify_message($str,$token);
print_r($res);
function notify_message($message,$token){
 $queryData = array('message' => $message);
 $queryData = http_build_query($queryData,'','&');
 $headerOptions = array( 
         'http'=>array(
            'method'=>'POST',
            'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                      ."Authorization: Bearer ".$token."\r\n"
                      ."Content-Length: ".strlen($queryData)."\r\n",
            'content' => $queryData
         ),
 );
 $context = stream_context_create($headerOptions);
 $result = file_get_contents(LINE_API,FALSE,$context);
 $res = json_decode($result);
 return $res;
}
    
    if ($result)
    {
     
        
        echo "<script type=\"text/javascript\">";
        echo "alert(\"เพิ่มข้อมูลสำเร็จ\");";
        echo "window.history.back();";
        echo "</script>";
        /* header("Location: ../app/home.php");  */
    }
    else
    {
        
        echo "<script type=\"text/javascript\">";
        echo "alert(\"เพิ่มข้อมูลไม่สำเร็จ\");";
        echo "window.history.back();";
        echo "</script>";
        
    }
?>

