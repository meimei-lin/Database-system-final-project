<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />   
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

// 登入
if (isset($_POST['login'])) {
    $useraccount = $_POST['useraccount'];
    $password = $_POST['password'];

    // 檢查帳號密碼是否正確
    $check_user_sql = "select * from user where uAccount = '$useraccount' AND Password = '$password'";
    $check_user_result = $conn->query($check_user_sql);
    $row=mysqli_fetch_assoc($check_user_result);
    if ($check_user_result->num_rows > 0) {
        $_SESSION['uAccount'] = $useraccount;
        $_SESSION['user_id']=$row["id"];
        header("Location: firstpage.php");
        exit();
    } else {
        $error_message = "帳號或密碼錯誤";
    }
}
?>

<form method = "post">
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30>登入畫面</h1></font>
<h3 style="position: absolute; left: 550;top:200;"><font size=6>帳號</h3></font>
<input type = "text" name = "useraccount" required style="position: absolute; left: 680;top:230;width:300px;height:25px;"><br>  
<h3 style="position: absolute; left: 550;top:300;"><font size=6>密碼</h3></font>
<input type = "password" name = "password" required style="position: absolute; left: 680;top:330;width:300px;height:25px;"><br>     
<input type = "submit" value = "登入" name="login" style="position: absolute; left: 680;top:400;background-color:#CA82FF;width:70px;height:50px;"> </form>   
<a href = "register.php" ><h3 style="position: absolute; left: 780;top:390;"><font size=5>新用戶點我註冊</font></a>