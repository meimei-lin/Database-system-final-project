<html>
<head>
<title>NEW</title>
</head>
<body BGCOLOR=#FFFFD4>  
<h1 align="center" style="color:#C678FF;">新品上市</h1>
<table width="50%" border="1" align="center" style="color:#CA82FF;">
<form action="firstpage.php" method="post">
<input type="submit" name="back-page" value="回首頁" style="position:fixed;top: 300px; right: 130px;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<form action="logout.php" method="post">
<input type="submit" name="logout" value="登出" style="position:fixed;top: 400px; right: 130px;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}
$sql = "SELECT * FROM products WHERE mgr_id = 2";
$result = $conn->query($sql);
if(isset($_POST['back-page'])){
    header("location:firstpage.php");
}
if(isset($_POST['logout'])){
    header("location:logout.php");
}
?>
<table width="50%" border="1" align="center" style="color:#CA82FF;">
<tr>
    <th><font size=5>名稱</font></th>
    <th><font size=5>單價</font></th>
    <th><font size=5>數量</font></th>
</tr>
<?php while($row=mysqli_fetch_assoc($result)):?>
<tr>
    <td><font size=5><?php echo $row['name'];?></font></td>
    <td><font size=5><?php echo $row['price'];?></font></td>
    <td>
        <form action="cart.php" method="post">
            <input type="hidden" name="new_product_id" value="<?php echo($row["id"]);?>"/>
            <input type="number" name="quantity" id="quantity" min=0 style="color:#CA82FF;"/>
            <input type="submit" name="submit" value="加入購物車" style="background-color:#FFBFFF;color:#454545;width:100px;height:25px;"/>
        </form>
    </td>
</tr>
<?php endwhile;?>
</table>


<?php mysqli_close($conn);?>
</body>
</html>
