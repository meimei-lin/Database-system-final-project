<HTML>
<HEAD>
    <meta charset=utf-8>
    <TITLE>MANAGER_DELETE</TITLE>
</HEAD>
<body BGCOLOR=#FFFFD4>
<h1 align="center" ><font color=#FFBFFF><font size=30>刪除品項</h1>
<form action="delete_product.php" method="post">
    <label for="name"  style="position: fixed; top:195px;left:680;font-size:25px;font-family:Microsoft JhengHei;">名稱：</label><input type="text" id="name" name="delete_name" required style="position: fixed; top:200px;left:800;height:30px"><br/>
    <input type="submit" name="del_btn" value="刪除該品項" style="position: fixed; top:500px;left:800;background-color:#CA82FF;width:150px;height:50px;font-size:20px;">
</form> 
<?php
if(isset($_POST['del_btn'])){
    header("location:delete_product.php");
}