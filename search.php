<?php
// 連接到資料庫
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';
$conn = new mysqli($host, $user, $pass, $db);

// 檢查連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 獲取搜尋查詢
$query = $_GET['query'];

// 執行資料庫查詢
$sql = "SELECT * FROM your_table WHERE your_column LIKE '%$query%'";
$result = $conn->query($sql);

// 顯示搜尋結果
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row['your_column'] . "</p>";
    }
} else {
    echo "沒有結果";
}

$conn->close();
?>
