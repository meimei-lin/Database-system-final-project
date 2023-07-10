<html>
  <head>
    <meta charset="utf-8";>
  </head>
<body>
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
else{
  $sql="select * from products";
  $result = $connection->query($sql);
}
?>
<table width="50%" border="1">
  <tr>
    <th>名稱</th>
    <th>價格</th>
      <th>操作</th>
      </tr>
    <?php while($row=mysqli_fetch_assoc($result)):?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo "NT".$row['price'];?></td>
        <td>

        <form action="cart.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo($row["id"]);?>" />
        <label for="quantity">數量</label>
        <input type="number" name="quantity" id="quantity"/>
        <input type="submit" name="submit" value="加入購物車"/>
        </form>
        </td>
    </tr>
    <?php endwhile;?>
</table>
<?php mysqli_close($connection);?>
</body>
</html>
