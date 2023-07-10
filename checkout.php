<html>
<head>
<title>Checkout</title>
</head>
<body>
<body BGCOLOR=#FFFFD4>
<h1 align="center" style="color:#C678FF;">結帳畫面</h1>
<form action="message.php" method="post">
<input type="submit" value="留言板" name="btn_message" style="position: absolute; top:100;right: 130;background-color:#CA82FF;width:150px;height:90px;font-size:20px;" >
</form>
<form action="firstpage.php" method="post">
<input type="submit" name="back-page" value="繼續購買" style="position: absolute;top:200; right: 130;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<form action="dessert.php" method="post">
<input type="submit" name="logout" value="登出" style="position: absolute; top:300;right: 130;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>

<?php
session_start();

// 資料庫連線設定
$host = 'localhost';
$username = 'root';
$password = '123456';
$database = 'shop';

// 建立資料庫連線
$connection =mysqli_connect($host, $username, $password, $database);

// 檢查連線是否成功
if ($connection->connect_error) {
    die("連線失敗：" . $connection->connect_error);
}
$user_id=$_SESSION["user_id"];
if(isset($_POST['check_out'])){
    $sql="SELECT orders.id,orders.total_price FROM orders  WHERE orders.user_id='$user_id'";
    $result=$connection->query($sql);
    $all_money = 0;
    // 迭代處理每個訂單的金額
    while ($row = mysqli_fetch_assoc($result)) {
        $all_money += $row['total_price'];
    }
    // 輸出總金額
    echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">總金額：NT' . $all_money . '</div>';

    // 清空訂單資料
    $deleteSql = "DELETE FROM orders WHERE user_id='$user_id'";
    $connection->query($deleteSql);
}
if(isset($_POST['logout'])){
    header("location:logout.php");
}
if(isset($_POST['back-page'])){
    header("location:firstpage.php");
}
// 關閉資料庫連線
$connection->close();
?>
</body>
</html>