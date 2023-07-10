<?php
session_start();
$product_name = $_POST['delete_name'];
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
        die("連線失敗：" . $conn->connect_error);
}
$sql = "SELECT id FROM products WHERE name = '$product_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $product_id = $row['id'];

    $delete_sql = "delete from products where id = $product_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">成功刪除此品項'.'</div>';
    } else {
        echo "刪除失敗: " . $conn->error;
    }
    } else {
        echo "找不到此品項";
    }
$conn->close();
?>
<body BGCOLOR=#FFFFD4>
<a href="manage.php"><h3 style="position: absolute;top:200;left:700;"><font size=5>回上頁</font></a></h3>
<a href="mgr_logout.php"><h3 style="position: absolute; top:250;left:700;"><font size=5>登出</font></a></h3>
</body>