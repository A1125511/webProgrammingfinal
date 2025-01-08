<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
<body>
<?php
    $id = $_GET['id'] ?? '';
    //echo 'data:'.$id.'<br>';
    include("connection.php");
    $select_db = @mysqli_select_db($link, "accommodation");
    if (!$select_db) {
        echo "<br>找不到資料庫!<br>";
    } else {
        $sql_query = "SELECT * FROM guest WHERE name = '$id'";
        $result = mysqli_query($link, $sql_query);
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>查詢</h1>";
            echo "<center><table border=0>";
            echo "<tr><th>飯店名字</th><th>姓名</th><th>聯絡號碼</th><th>預定房間</th><th>價格</th><th>付款狀態</th></tr>";
            while ($row = mysqli_fetch_array($result)){//1 2 4 7 8
                $sql_qry = "SELECT * FROM accom_data WHERE accom_id = '$row[3]'";
                $result01 = mysqli_query($link, $sql_qry);
                $row01 = mysqli_fetch_array($result01);
    ?>
                    <td align="left"><?php echo $row01[2] ?></td>
                    <td align="left"><?php echo $row[1] ?></td>
                    <td align="left"><?php echo $row[2]?></td>
                    <td align="left"><?php echo $row[4] ?></td>
                    <td align="left"><?php echo $row[7] ?></td>
                    <?php
                    if($row[8]==1){
                        ?>
                        <td align="left"><?php echo "已付款" ?></td>
                        <?php
                    }
                    else{
                        ?>
                        <td align="left"><?php echo "未付款" ?></td>
                        <?php
                    }
                    ?>
                </tr>
    <?php
            }
            echo "</table></center>";
        } else {
            echo "<br>查無資料!";
        }
    }
    ?>
</body>
</html>