<meta charset="utf-8">
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
$order_id=$_POST["order_id"];
$quantity=$_POST["quantity"];
if(isset($_POST['modify'])){
$sql="select price from orders where id='$order_id'";
$result=$connection->query($sql);
$row=mysqli_fetch_assoc($result);
$price=$row["price"];
$total_price=$price*$quantity;
$sql="update orders set quantity='$quantity',total_price='$total_price' where id='$order_id'";
$connection->query($sql);
echo $total_price;
mysqli_close($connection);
header("location:orders.php");
}
if(isset($_POST['delete'])){
    $sql="DELETE FROM orders WHERE id='$order_id'";
    $connection->query($sql);
    mysqli_close($connection);
    header("location:orders.php");
}
?>