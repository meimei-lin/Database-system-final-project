<?php
session_start();
// 資料庫連線設定
$host = 'localhost';
$username = 'root';
$password = '123456';
$database = 'shop';

// 建立資料庫連線
$connection = mysqli_connect($host, $username, $password, $database);

// 檢查連線是否成功
if ($connection->connect_error) {
    die("連線失敗：" . $connection->connect_error);
}

$name=$_POST['name'];
$price=$_POST['price'];
$mgr_id=intval($_SESSION['mgr_id']);
$sql = "insert into products (name,price,mgr_id) values ('".$name."','".$price."','".$mgr_id."')";

if ($connection->query($sql) === TRUE) {
    echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">新增品項成功'.'</div>';
} else {
    echo "新增商品失敗：" . mysqli_error($connection);
}?>
<body BGCOLOR=#FFFFD4>
<a href="manage.php"><h3 style="position: absolute;top:200;left:700;"><font size=5>回上頁</font></a></h3>
<a href="mgr_logout.php"><h3 style="position: absolute; top:250;left:700;"><font size=5>登出</font></a></h3>
</body>