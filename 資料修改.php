<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $filename = $_GET["id"];
    echo "id: " . $filename;
    echo "<br>";
    include("connection.php");
    $select_db = @mysqli_select_db($link, "accommodation");
    if (!$select_db) {
        echo '<br>找不到資料庫!<br>';
    } else {
        $sql_query = "select * from accom_data where accom_id = '" . $filename . "'";
        $result = mysqli_query($link, $sql_query);
        if (mysqli_num_rows($result) == 1) {
            //echo '<br>會員修改';
            echo '<form method="get" action="接收修改的資料.php"><center><table border=0 width=40%>';
            while ($row = mysqli_fetch_array($result)) {
    ?>
                <tr bgcolor=pink>
                    <td align="right">住宿編號: </td>
                    <td align="left">
                        <input type="text" maxLength="10" size="10" name="id" value="<?php echo ($row[0]); ?>">
                    </td>
                </tr>
                <tr>
                    <td align="right">住宿類型: </td>
                    <td align="left"><input type=text
                            maxLength="10" size="64"
                            name="type" value=<?php echo ($row[1]); ?>></td>
                </tr>
                <tr bgcolor=#77DDFF>
                    <td align="right">住宿店名: </td>
                    <td align="left"><input type=text
                            size="64" name="name" value=<?php echo ($row[2]); ?>></td>
                </tr>
                <tr>
                    <td align="right">地區: </td>
                    <td align="left"><input type=text
                            size="64" name="district" value=<?php echo ($row[3]); ?>></td>
                </tr>
                <tr bgcolor=pink>
                    <td align="right">地址: </td>
                    <td align="left"><input type=text
                            size="64" name="address" value=<?php echo ($row[4]); ?>></td>
                </tr>
                <tr>
                    <td align="right" width=25%>電話: </td>
                    <td align="left"><input type=text 
                            size="64" name=phone value=<?php echo ($row[5]); ?>></td>
                </tr>
                <tr bgcolor=pink>
                    <td align="right">信箱: </td>
                    <td align="left"><input type=text
                            size="64" name="mail" value=<?php echo ($row[6]); ?>></td>
                </tr>
                <tr>
                    <td align="right">官網: </td>
                    <td align="left"><input type=text
                            size="64" name="URL" value=<?php echo ($row[7]); ?>></td>
                </tr>
                <tr bgcolor=pink>
                    <td align="right">房間數量: </td>
                    <td align="left"><input type=text
                            size="64" name="room_num" value=<?php echo ($row[8]); ?>></td>
                </tr>
                <tr bgcolor=#77DDFF>
                    <td align="right" width=25%>類型: </td>
                    <td align="left">
                        <select name="equip_type">
                            <option value='A' <?php if ($row[9] == 'A') echo 'selected'; ?>>A</option>
                            <option value='B' <?php if ($row[9] == 'B') echo 'selected'; ?>>B</option>
                            <option value='C' <?php if ($row[9] == 'C') echo 'selected'; ?>>C</option>
                            <option value='D' <?php if ($row[9] == 'D') echo 'selected'; ?>>D</option>
                            <option value='E' <?php if ($row[9] == 'E') echo 'selected'; ?>>E</option>
                            <option value='F' <?php if ($row[9] == 'F') echo 'selected'; ?>>F</option>
                            <option value='G' <?php if ($row[9] == 'G') echo 'selected'; ?>>G</option>
                            <option value='H' <?php if ($row[9] == 'H') echo 'selected'; ?>>H</option>
                        </select>
                    </td>
                </tr>
                <tr bgcolor=pink>
                    <td align="right">評價: </td>
                    <td align="left"><input type=text name="review" value=<?php echo ($row[10]); ?>></td>
                    <input type=hidden name=oid value=<?php echo ($row[0]); ?>>
                </tr>
                <tr>
                    <td align=right><input type="submit" value="送出"></td>
                    <td><input type="reset" value="重新設定"></td>
                </tr>
                </form>
    <?php
            }
            echo '</table>';
        } else {
            echo '<br>你的賬號不存在';
        }
    }
    ?>


</body>

</html>