<html>

<body>




<!--還沒弄,只是複製過來-->




    <?php
    include("connection.php");
    $select_db = @mysqli_select_db($link, "accommodation");
    $bookid = $_GET["id"];
    $number = $_GET["number"];
    echo 'number:' . $number.'<br>';
    $bid = $_GET["bid"];
    echo 'bid: ' . $bid. '<br>';
    $chk = $_GET["chk"];
    if ($chk == 1) {
        if ($bid == '') {
            $sql_query = "select max(bid) from baseket";
            $result = mysqli_query($link, $sql_query);
            $row = mysqli_fetch_array($result);
            $bid00 = $row[0];
            $bid00++;
            echo 'bid:' . $bid00;
            $sql_query = "INSERT INTO baseket VALUES('" . $bid00 . "','" . $bookid . "','" . $number . "')";
            mysqli_query($link, $sql_query);
        } else {
            $bid00 = $bid;
            $sql_query = "INSERT INTO baseket VALUES('" . $bid00 . "','" . $bookid . "','" . $number . "')";
            mysqli_query($link, $sql_query);
        }
    }
    ?>

    <center>
        <p><br></p>
        <p><br></p>
        <font size=6 color=blue>Ebook-書購網-商品購買</font>
        <hr>
        <?php
        //$del = $_GET["del"];
        $del = isset($_GET["del"]) ? $_GET["del"] : null;
        if ($del == 1) {
            $bookid = $_GET["bookid"];
            $bid00 = $_GET["bid"];
            $sql_query = "DELETE from baseket where bid='" . $bid00 . "' and bookid='" . $bookid . "'";
            mysqli_query($link, $sql_query);
        }
        echo '
        <table border=0 width=50%>
        <tr>
        <p><br>
        <td><a href=39.php?cate=1&bid='.$bid00.'>程式設計</a>
        <td><a href=39.php?cate=2&bid='.$bid00.'>應用軟體</a>
        <td><a href=39.php?cate=3&bid='.$bid00.'>硬體/創客</a>
        <td><a href=39.php?cate=4&bid='.$bid00.'>網路架站</a>
        </table>
        <p><hr><center><font color=#930000>我的購物車</font></center></p>
        ';
        $sql_query = "SELECT *FROM baseket where bid='" . $bid00 . "' ";
        $result = mysqli_query($link, $sql_query);
        if(mysqli_num_rows($result) == 0){
            $bid00="";
        }
        echo'<center><table width=100% border="0">';
        echo'<tr bgcolor=pink>';
        echo'<td align="center">訂單編號</td>';
        echo'<td align="center">書名</td>';
        echo'<td align="center">作者</td>';
        echo'<td align="center">出版商</td>';
        echo'<td align="center">單價(非會員)</td>';
        echo'<td align="center">單價(會員)</td>';
        echo'<td align="center">數量</td>';
        echo'<td align="center">刪除</td>';

        while($row = mysqli_fetch_array($result)){
            $sql_query00 = "SELECT *FROM sw where id = '" . $row[1] . "'";
            $result00 = mysqli_query($link, $sql_query00);
            $row00 = mysqli_fetch_array($result00);

            echo'<tr>';
            echo'<td align="center">'.$row[0].'</td>';
            echo'<td align="center">'.$row00[1].'</td>';
            echo'<td align="center">'.$row00[2].'</td>';
            echo'<td align="center">'.$row00[3].'</td>';
            echo'<td align="center">'.($row00[8]*0.85).'</td>';
            echo'<td align="center">'.$row00[8].'</td>';
            echo'<td align="center">'.$row[2].'</td>';
            echo'<td align="center"><a href=buy.php?bid='.$bid00.'&bookid='.$row[1].'&del=1>刪除</a></td>';
        }
        echo'</table>';
        echo'<form action="41.php" method="get">';
        echo'<input type="hidden" name="bid" value='.$bid00.'>';
        echo'<p align=left><table width=100% border="0">';
        echo'<tr><td>請輸入收件人:<input type="text" size="20" name="id">(如果是會員,請輸入會員姓名)';
        echo'<tr><td>請輸入聯絡號碼:<input type="text" size="20" name="tel">';
        echo'<tr><td>請輸入宅配地址:<input type="text" size="20" name="address">';
        echo'<tr><td><input type="submit" value="確定購買">';
        echo'</table></form>';
        ?>
</body>

</html>