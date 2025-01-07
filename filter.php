<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $filename = $_GET['searching'] ?? '';
    //echo 'data:'.$filename.'<br>';
    include("connection.php");
    $select_db = @mysqli_select_db($link, "accommodation");
    if (!$select_db) {
        echo "<br>找不到資料庫!<br>";
    } else {
        $sql_query = "SELECT * FROM equip WHERE 1=1";
        $result = mysqli_query($link, $sql_query);
        if (mysqli_num_rows($result) > 0) {
            
        } else {
            echo "<br>查無資料!";
        }
    }
    ?>
</body>
</html>