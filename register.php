<?php
	session_start();//建立SESSION
	
?>
<HTML>
<HEAD>
<TITLE>註冊畫面</TITLE>
</HEAD>
<BODY>
<P></P>
<?php

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	error_reporting(E_ALL & ~(E_NOTICE | E_WARNING));//關提醒跟警告的 
	// 建立與資料庫的連接
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "shop";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("連接失敗：" . $conn->connect_error);
	}
	else{

	// 處理會員註冊
	if (isset($_POST['submit'])) {
		$account = $_POST['useraccount'];
		$name = $_POST['username'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirm_pwd'];
		$birthday = $_POST['bdate'];
		$address = $_POST['addr'];
		$phone = $_POST['phone_num'];
		$email = $_POST['email'];
	
		// 檢查密碼是否一致
		if ($password !== $confirmPassword) {
			echo "密碼和確認密碼不一致。";
			exit();
		}
	
		// 檢查帳號是否已存在
		$check_sql = "select * from user where uAccount = '$account'";
		$check_result = $conn->query($check_sql);
		if ($check_result->num_rows > 0) {
			echo "該帳號已被使用。";
			exit();
		}
	
		// 創建新會員
		//$hash_password = password_hash($password,$password);
		$insert_sql = "insert into user (uAccount, uName, Password, bDate, Addr, Telephone, eMail) values ('".$account."', '".$name."', '".$password."', '".$birthday."', '".$address."', '".$phone."', '".$email."')";
		if ($conn->query($insert_sql) === TRUE) {
			header("Location: login.php");
			exit();
		} else {
			echo "註冊失敗：" . $conn->error;
		}
	}}
	mysqli_close($conn);
	?>
	
<form method = "post" > 
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30>註冊畫面</h1></font>
<h3 style="position: absolute; left: 550;top:200;"><font size=6>帳號</h3></font>
<input type = "text" name = "useraccount" required style="position: absolute; left: 680;top:230;width:300px;height:25px;"><br>
<h3 style="position: absolute; left: 550;top:250;"><font size=6>姓名</h3></font>
<input type = "text" name = "username" required style="position: absolute; left: 680;top:280;width:300px;height:25px;"><br>
<h3 style="position: absolute; left: 550;top:300;"><font size=6>密碼</h3></font>
<input type = "password" name = "password" required style="position: absolute; left: 680;top:330;width:300px;height:25px;"><br>     
<h3 style="position: absolute; left: 520;top:350;"><font size=6>確認密碼</h3></font>
<input type = "password" name = "confirm_pwd" required style="position: absolute; left: 680;top:380;width:300px;height:25px;"><br>
<h3 style="position: absolute; left: 550;top:400;"><font size=6>生日</h3></font>
<input type = "date" name = "bdate" required style="position: absolute; left: 680;top:430;width:300px;height:25px;"><br>     
<h3 style="position: absolute; left: 550;top:450;"><font size=6>地址</h3></font>
<input type = "text" name = "addr" required style="position: absolute; left: 680;top:480;width:450px;height:25px;"><br> 
<h3 style="position: absolute; left: 520;top:500;"><font size=6>手機號碼</h3></font>
<input type = "tel" name = "phone_num" required style="position: absolute; left: 680;top:530;width:300px;height:25px;"><br>
<h3 style="position: absolute; left: 520;top:550;"><font size=6>電子郵件</h3></font>
<input type = "email" name = "email"  style="position: absolute; left: 680;top:580;width:300px;height:25px;"><br>
<input type = "submit" value = "確認註冊" name="submit" style="position: absolute; left: 680;top:630;background-color:#CA82FF;width:130px;height:50px;">
</form>