<HTML>
<HEAD>
    <meta charset=utf-8>
    <TITLE>MANAGER</TITLE>
</HEAD>
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30>選擇要進行的操作</h1>
<form action="manage_add.php" method="post">
    <input type="submit" name="add" value="新增商品" style="position: fixed; top:500px;left:600;background-color:#CA82FF;width:100px;height:90px;font-size:20px;">
</form> 
<form action="manage_delete.php" method="post">
    <input type="submit" value="刪除商品" style="position: fixed; top:500px;left:800;background-color:#CA82FF;width:100px;height:90px;font-size:20px;">
</form>
<form action="mgr_logout.php" method="post">
<input type="submit" name="mgr_logout_btn" value="登出" style="position: fixed; top:500px;left:1000;background-color:#CA82FF;width:100px;height:90px;font-size:20px;">
</form>
<?php
if(isset($_POST['mgr_logout_btn'])){
    header("location:mgr_logout.php");
}

?>