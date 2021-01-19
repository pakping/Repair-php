<?php
    session_start();
    if(isset($_SESSION)){
        if($_SESSION['type']=='admin'){
            echo 'Admin content';
            if ($content == 'user'){
                header("location:../app/showdata.php");
            }
        }
            //if user login we will check session and display user content
        elseif($_SESSION['type']=='user'){
            echo 'user content';
            if ($content == 'admin'){
                header("location:../app/showdatauser.php");
            }
        }else{
            header("location:../index.php");
        }
    }

?>