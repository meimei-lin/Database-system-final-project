<?php
session_start();
$user_id=$_SESSION["user_id"];
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$time=date("Y-m-d H:i:s");

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

 $sql="insert into message (content,user_id) values ('".$message."','".$user_id."')";
 if($conn->query($sql)){
    echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">已收到您的留言!!'.'</div>';
 }else{
    echo "留言失敗".mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>
 <body BGCOLOR=#FFFFD4>
<a href="firstpage.php"><h3 style="position: absolute;top:200;left:700;"><font size=5>回首頁繼續點餐</font></a></h3>
<a href="logout.php"><h3 style="position: absolute; top:250;left:700;"><font size=5>登出</font></a></h3>
</body>