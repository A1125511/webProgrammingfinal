<?php
    $location = "localhost";
    $account = "root";
    $password = "";
    if (isset($location) && isset($account) && isset($password)){
        $link = mysqli_connect($location,$account,$password);//$link = mysql_pconnect($location,$account,$password)
        if(!$link){
            echo'無法連接';
            exit();
        }
        else{
            //echo '成功連接';
        }
    }
?>
