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
$user_id=$_SESSION["user_id"];
$sql="SELECT orders.id,products.name,orders.price,orders.quantity,orders.total_price FROM orders INNER JOIN products ON orders.product_id=products.id WHERE orders.user_id='$user_id'";
$result=$connection->query($sql);
if(isset($_POST['back-page'])){
    header("Location:firstpage.php");
}
if(isset($_POST['logout'])){
    header("location:logout.php");
}
?>
<html>
<head>
<title>Orders</title>
</head>
<body>
<body BGCOLOR=#FFFFD4>  
<h1 align="center" style="color:#C678FF;">您的訂單</h1>
<table width="50%" border="1" align="center" style="color:#CA82FF;">
<tr>
    <th><font size=5>名稱</font></th>
    <th><font size=5>數量</font></th>
    <th><font size=5>單價</font></th>
    <th><font size=5>金額</font></th>
    <th><font size=5>修改數量</font></th>
    <th><font size=5>刪除訂單</font></th>
</tr>
<?php while($row=mysqli_fetch_assoc($result)):?>
<tr>
    <td><font size=5><?php echo $row['name'];?></font></td>
    <td><font size=5><?php echo $row['quantity'];?></font></td>
    <td><font size=5><?php echo "NT".$row['price'];?></font></td>
    <td><font size=5><?php echo "NT".$row['total_price'];?></font></td>
<td>
<form action="update_total_price.php" method="post">
<input type="hidden" name="order_id" value="<?php echo($row["id"]);?>"/>
<input type="number" name="quantity" id="quantity" min=0 style="color:#CA82FF;" values="<?php echo($row['quantity']);?>"/>
<input type="submit" name="modify" value="修改數量" style="background-color:#FFBFFF;color:#454545;width:100px;height:25px;"/>

</td>
<td>
<input type="submit" name="delete" value="刪除" style="background-color:#FFBFFF;color:#454545;width:100px;height:25px;"/>
</form>
</td>
</tr>
<?php endwhile;?>
</table>
<form action="message.php" method="post">
<input type="submit" value="留言板" name="btn_message" style="position: fixed; top:100px;right: 130;background-color:#CA82FF;width:150px;height:90px;font-size:20px;" >
</form>
<form action="checkout.php" method="post">
<input type="submit" name="check_out" value="確認結帳" style="position: fixed; top: 200px; right: 130px;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<form action="firstpage.php" method="post">
<input type="submit" name="back-page" value="繼續購買" style="position: fixed;top: 300px; right: 130px;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<form action="logout.php" method="post">
<input type="submit" name="logout" value="登出" style="position: fixed;top: 400px; right: 130px;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
</body>
</html>
<?php mysqli_close($connection);?><br>