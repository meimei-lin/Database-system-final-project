<?php
session_start();
// 建立與資料庫的連接
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("連接失敗：" . $conn->connect_error);
}
if(isset($_POST['add_btn'])){
    $sql="select * from manager where id";
    $result = $connection->query($sql);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['mgr_id']=$row['id'];
    header("location:add_product.php");
    exit();
}
?>
<HTML>
<HEAD>
    <meta charset=utf-8>
    <TITLE>MANAGER_ADD</TITLE>
</HEAD>
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30>新增品項</h1>
<form action="add_product.php" method="post">
    <label for="name" style="position: fixed; top:195px;left:680;font-size:25px;font-family:Microsoft JhengHei;">名稱：</label><input type="text" id="name" name="name" required style="position: fixed; top:200px;left:800;height:30px"><br/>
    <label for="price" style="position: fixed; top:295px;left:680;font-size:25px;font-family:Microsoft JhengHei;">價格：</label>
    <input type="number" id="price" name="price" step="0.01" required style="position: fixed; top:300px;left:800;height:30px"><br>
    <input type="submit" name="add_btn" value="新增商品" style="position: fixed; top:500px;left:800;background-color:#CA82FF;width:100px;height:50px;font-size:20px;">
</form> 
