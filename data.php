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
    </style>

<body>
    <?php
    //echo 'data:'.$filename.'<br>';
    include("connection.php");
    $select_db = @mysqli_select_db($link, "accommodation");
    if (!$select_db) {
        echo "<br>找不到資料庫!<br>";
    } else {
        $sql_query = "SELECT * FROM accom_data";
        $result = mysqli_query($link, $sql_query);
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>資訊</h1>";
            echo "<center><table border=0>";
            echo "<tr><th>編號</th><th>名稱</th><th>地區</th><th>評分</th></tr>";
            $count = 1;
            while ($row = mysqli_fetch_array($result)) {
                $id = $row[0];
                echo "<tr onclick=\"window.location='details.php?id=$id'\">";
    ?>
                    <td align="left"><?php echo $count++ ?></td>
                    <td align="left"><?php echo $row[2]//name ?></td>
                    <td align="left"><?php echo $row[3]//district ?></td>
                    <td align="left"><?php echo $row[10]//review ?></td>
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