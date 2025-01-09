<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $filename = $_GET["id"];
    include("connection.php");
    $select_db = @mysqli_select_db($link,"school");
    if (!$select_db) {
        echo'<br>找不到資料庫!<br>';
    }
    else {
        $sql_query = "select * from admin where id = '".$filename."'";
        $result = mysqli_query($link, $sql_query);
        if (mysqli_num_rows($result)==1) {
            //echo'<br>歡迎光臨';
            echo'
            <center>
        <p><br>
        <p><br>
        <font size=6 color="blue">資料維護系統</font>
        <table border="0" width="50%">
            <tr>
            <p><br>
            <td><a href="查詢資料顯示.php">查詢</a></td>
            <td><a href="新增.php">新增</a></td>
            <td><a href="修改.php">修改</a></td>
        </table>
    </center>';
        }
        else{
            echo '<br>你的賬號不存在';
        }
    }
?>
<body>
</body>
</html>