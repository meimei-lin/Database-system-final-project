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
if (isset($_POST['mgr_login'])) {
    $mgraccount = $_POST['mgraccount'];
    $mgrpassword = $_POST['mgrpassword'];

    // 檢查帳號密碼是否正確
    $check_mgr_sql = "select * from manager where Mgr_account = '$mgraccount' AND Mgr_password = '$mgrpassword'";
    $check_mgr_result = $conn->query($check_mgr_sql);
    $row=mysqli_fetch_assoc($check_mgr_result);
    if ($check_mgr_result->num_rows > 0) {
        $_SESSION['Mgr_account'] = $mgraccount;
        $_SESSION['mgr_id']=$row['id'];
        header("Location: manage.php");
        exit();
    } else {
        $error_message = "帳號或密碼錯誤";
        echo $error_message;
    }
}
?>

<form method = "post">
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30>管理員登入畫面</h1></font>
<h3 style="position: absolute; left: 550;top:200;"><font size=6>帳號</h3></font>
<input type = "text" name = "mgraccount" required style="position: absolute; left: 680;top:230;width:300px;height:25px;"><br>  
<h3 style="position: absolute; left: 550;top:300;"><font size=6>密碼</h3></font>
<input type = "password" name = "mgrpassword" required style="position: absolute; left: 680;top:330;width:300px;height:25px;"><br>     
<input type = "submit" value = "登入" name="mgr_login" style="position: absolute; left: 680;top:400;background-color:#CA82FF;width:70px;height:50px;"> </form>   