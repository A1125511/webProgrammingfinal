<html>

<head>
    <title>會員註冊</title>
</head>

<body>
    <form method="get" action="接收新增的資料.php">
        <p align="center">
            <font size="4" face="標楷體" color=blue>新增資料</font>
        </p>
        <hr>
        <TT>
            <center>
                <table border="0" width="30%">
                <tr bgcolor=pink>
                        <td align="right">住宿編號: </td>
                        <td align="left"><input type=text maxLength="10" size="10" name="id"></td>
                    </tr>
                    <tr bgcolor=pink>
                        <td align="right">住宿類型: </td>
                        <td align="left"><input type=text maxLength="10" size="10" name="type"></td>
                    </tr>
                    <tr>
                        <td align="right">住宿店名: </td>
                        <td align="left"><input type=text maxLength="10" size="10" name="name"></td>
                    </tr>

                    <tr bgcolor=#77DDFF>
                        <td align="right">地區: </td>
                        <td align="left"><input type=text size="20" name="district"></td>
</tr>
                    <tr>
                        <td align="right">地址: </td>
                        <td align="left"><input type=text size="20" name="address"></td>
</tr>
                    <tr bgcolor=#77DDFF>
                    <td align="right" width=20%>電話:</td>
                        <td align="left">
                            <input maxLength="15" size="15" name="phone" type="text">
</tr>
                    <tr>
                        <td align="right">信箱: </td>
                        <td align="left"><input type=text size="20" name="mail"></td>
</tr>
                    <tr bgcolor=#77DDFF>
                        <td align="right">官網: </td>
                        <td align="left"><input type=text size="20" name="URL"></td>
</tr>
                    <tr>
                        <td align="right">房間數量: </td>
                        <td align="left"><input type=text size="20" name="room_num"></td>
</tr>
<tr bgcolor=#77DDFF>
                        <td align="right">配備:</td>
                        <td align="left">
                            <select name="equip_type">
                                <option selected value='A'>A</option>
                                <option value='B'>B</option>
                                <option value='C'>C</option>
                                <option value='D'>D</option>
                                <option value='E'>E</option>
                                <option value='F'>F</option>
                                <option value='G'>G</option>
                                <option value='H'>H</option>
                            </select>
                            </tr>
                    <tr bgcolor=#77DDFF>
                        <td align="right">評價: </td>
                        <td align="left"><input type=text size="20" name="review"></td>
</tr>
                        
                </table>
                <p align="center">
                    <input value="線上註冊" type="submit">
                    <input value=" 清  除 " type="reset">
    </form>
</body>

</html>