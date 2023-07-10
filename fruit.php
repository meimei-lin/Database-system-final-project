<?php
	session_start();//建立SESSION
?>
<HTML>
<HEAD>
    <meta charset=utf-8>
    <TITLE>FRUIT</TITLE>
</HEAD>
<?php
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	error_reporting(E_ALL & ~(E_NOTICE | E_WARNING));//關提醒跟警告的

    // 建立與資料庫的連接
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "shop";
    $conn =mysqli_connect($servername, $username, $password, $dbname);
    $user_id=$_SESSION['user_id'];
    $result=mysqli_query($conn,"select * from user where id='$user_id'");
    $row_user=mysqli_fetch_assoc($result);
    if ($conn->connect_error) {
        die("連接失敗：" . $conn->connect_error);
    }
    else{
            $sql1="select * from products where id=5";
            $result1 = $conn->query($sql1);
            $sql2="select * from products where id=6";
            $result2 = $conn->query($sql2);
            $sql3="select * from products where id=7";
            $result3 = $conn->query($sql3);
            $sql4="select * from products where id=8";
            $result4 = $conn->query($sql4);
            if(isset($_POST['logout'])){
                header("location:logout.php");
            }
            
        
        }  
?>
<body BGCOLOR=#FFFFD4>
<form action="logout.php" method="post">
<input type="submit" name="logout" value="登出" style="position: absolute; right: 100;background-color:#CA82FF;width:100px;height:50px;font-size:20px;"/>
</form>
<form action="message.php" method="post">
<input type="submit" value="留言板" name="btn_message" style="position: absolute; right: 260;background-color:#CA82FF;width:100px;height:50px;font-size:20px;" >
</form>
<h1 align="center" ><font color=#FFBFFF><font size=30>MEIMEI の 甜點窩</h1>
<img src="./img/head.jpg"  style="display:block; margin:auto;" />
<font size=8 style="position: absolute; left:800;color:#C678FF">水果味NO1</font>
<h2 align="center"><font color=#DEDEDE><font size=20>-------------------------------------------------------------</h2>
<img src="./img/d1.jpg" style="position: absolute; left:400;bottom:-150;display:block; height:250px" />
<img src="./img/d2.jpg" style="position: absolute; left:700;bottom:-150;display:block; height:250px" />
<img src="./img/d3.jpg" style="position: absolute; left:1000;bottom:-150;display:block; height:250px" />
<img src="./img/d4.jpg" style="position: absolute; left:1300;bottom:-150;display:block; height:250px" />
<div class="menu" style="position: absolute;bottom:-300;">
    <ul><font color=#DBABFF>
        <li><a href = "firstpage.php" >首頁</a></li>
        <li><a href = "new.php">新品上市</a></li>
        <li><a href = "fruit.php" >水果味NO1</a></li>
        <li><a href = "no1cake.php" >人氣戚風蛋糕</a></li>
        <li><a href = "choco.php" >巧克力系列</a></li>
        <li><a href = "dgwz.php">達克瓦茲系列</a></li>
    </ul>
</div>
<font size=5.5 style="position: absolute; left:460;bottom:-200;color:#404040">生乳芒果戚風</font>
<font size=5.5 style="position: absolute; left:490;bottom:-230;color:#ABABAB">NT 390</font>
<font size=5.5 style="position: absolute; left:770;bottom:-200;color:#404040">芒果慕斯</font>
<font size=5.5 style="position: absolute; left:780;bottom:-230;color:#ABABAB">NT 370</font>
<font size=5.5 style="position: absolute; left:1075;bottom:-200;color:#404040">檸檬慕斯</font>
<font size=5.5 style="position: absolute; left:1085;bottom:-230;color:#ABABAB">NT 330</font>
<font size=5.5 style="position: absolute; left:1350;bottom:-200;color:#404040">柚香起司蛋糕</font>
<font size=5.5 style="position: absolute; left:1370;bottom:-230;color:#ABABAB">NT 400</font>
</body>
<?php $row1=mysqli_fetch_assoc($result1);
      $row2=mysqli_fetch_assoc($result2);
      $row3=mysqli_fetch_assoc($result3);
      $row4=mysqli_fetch_assoc($result4);
?>   
<form action="cart.php" method="post">
    <input type="hidden" name="product_id5" value="<?php echo($row1["id"]);?>" />
    <label for="quantity" style="position: absolute; left:430;bottom:-260;color:#ABABAB"><font size=5>數量</font></label>
    <input type="number" name="quantity5" id="quantity" min=0 style="position: absolute; left:490;bottom:-260;color:#CA82FF"/>
    <input type="submit" name="submit5" value="加入購物車" style="position: absolute; left:490;bottom:-290;color:#CA82FF;width:100px;height:25px;"/>
    <input type="hidden" name="product_id6" value="<?php echo($row2["id"]);?>" />
    <label for="quantity" style="position: absolute; left:700;bottom:-260;color:#ABABAB"><font size=5>數量</font></label>
    <input type="number" name="quantity6" id="quantity" min=0  style="position: absolute; left:760;bottom:-260;color:#CA82FF"/>
    <input type="submit" name="submit6" value="加入購物車" style="position: absolute; left:760;bottom:-290;color:#CA82FF;width:100px;height:25px;"/>
    <input type="hidden" name="product_id7" value="<?php echo($row3["id"]);?>" />
    <label for="quantity" style="position: absolute; left:1005;bottom:-260;color:#ABABAB"><font size=5>數量</font></label>
    <input type="number" name="quantity7" id="quantity" min=0 style="position: absolute; left:1065;bottom:-260;color:#CA82FF"/>
    <input type="submit" name="submit7" value="加入購物車" style="position: absolute; left:1065;bottom:-290;color:#CA82FF;width:100px;height:25px;"/>
    <input type="hidden" name="product_id8" value="<?php echo($row4["id"]);?>" />
    <label for="quantity" style="position: absolute; left:1290;bottom:-260;color:#ABABAB"><font size=5>數量</font></label>
    <input type="number" name="quantity8" id="quantity" min=0 style="position: absolute; left:1350;bottom:-260;color:#CA82FF"/>
    <input type="submit" name="submit8" value="加入購物車" style="position: absolute; left:1350;bottom:-290;color:#CA82FF;width:100px;height:25px;"/>
</form>

</body>
