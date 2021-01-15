<?php
require("../DB/connect.php");
$ref = $_POST['ref'];
$result = mysqli_query($con, "SELECT * FROM report Where Case_ID='$ref'");
      
      if ($result) {
        $row = mysqli_fetch_array($result)





?>