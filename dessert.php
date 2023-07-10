<HTML>
<HEAD>
    <meta charset=utf-8>
    <TITLE>MEIMEI DESSERT</TITLE>
</HEAD>
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30> 歡迎來到 MEIMEI の 甜點窩</h1>
<img src="./img/head0.jpg"  style="display:block; margin:auto;height:500px;" />
<form action="login.php" method="post">
<input type="submit" name="member" value="會員登入點我" style="position: absolute; top:650;left: 730;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<form action="manage_log.php" method="post">
<input type="submit" name="manage_log" value="管理員登入點我" style="position: absolute; top:650;left: 930;background-color:#CA82FF;width:150px;height:90px;font-size:20px;"/>
</form>
<?php
session_start();
if(isset($_POST['member'])){
    header("location:login.php");
}
if(isset($_POST['manage_log'])){
    header("location:manage_log.php");
}
?>