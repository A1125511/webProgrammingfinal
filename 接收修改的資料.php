<?php
    $fileid = $_GET["id"];
    $filetype = $_GET["type"];
    $filename = $_GET["name"];
    $filedistrict = $_GET["district"];
    $fileaddress = $_GET["address"];
    $filephone = $_GET["phone"];
    $filemail = $_GET["mail"];
    $fileURL = $_GET["URL"];
    $fileroom = $_GET["room_num"];
    $fileequip = $_GET["equip_type"];
    $filereview = $_GET["review"];
    echo "id: " .$fileid;
    echo "id: " .$filetype;
    echo "<br> password: " .$filename;
    echo "<br> password: " .$filedistrict;
    echo "<br> password: " .$fileaddress;
    echo "<br> password: " .$filephone;
    echo "<br> password: " .$filemail;
    echo "<br> password: " .$fileURL;
    echo "<br> password: " .$fileroom;
    echo "<br> password: " .$fileequip;
    echo "<br> password: " .$filereview;
    include("connection.php");
    $select_db = @mysqli_select_db($link, "accommodation");
    if (!$select_db) {
        echo'<br>找不到資料庫!<br>';
    }
    else {
        $sql_query = "INSERT INTO accom_data (accom_id, type, name, district, address, phone, mail, URL, room_num, equip_type, review) 
              VALUES ('".$fileid."', '".$filetype."', '".$filename."', '".$filedistrict."', 
                      '".$fileaddress."', '".$filephone."', '".$filemail."', '".$fileURL."', '".$fileroom."'
                      , '".$fileequip."', '".$filereview."') 
               ON DUPLICATE KEY UPDATE 
        type = VALUES(type), 
        name = VALUES(name), 
        district = VALUES(district), 
        address = VALUES(address), 
        phone = VALUES(phone), 
        mail = VALUES(mail), 
        URL = VALUES(URL), 
        room_num = VALUES(room_num), 
        equip_type = VALUES(equip_type), 
        review = VALUES(review)";

        mysqli_query($link,$sql_query);
        //echo '<br>你的賬號不存在';
    }
?>