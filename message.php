
<HTML>
<HEAD>
    <meta charset=utf-8>
    <TITLE>MESSAGE</TITLE>
</HEAD>
<body>
<body BGCOLOR=#FFFFD4>
<h1 align="center" style="color:#C678FF;">留言板</h1>
<h2 align="center" style="color:#C678FF;">有什麼想跟我們說的可以打在這裡喔!!</h2>
<form action="post.php" method="post">
<label for="name" style="position: fixed; top:195px;left:680;font-size:25px;font-family:Microsoft JhengHei;">您的姓名:</label><input type="text" id="name" name="name"  style="position: fixed; top:200px;left:800;height:30px"><br/>
<label for="email" style="position: fixed; top:295px;left:630;font-size:25px;font-family:Microsoft JhengHei;">您的電子郵件:</label><input type="email" id="email" name="email" style="position: fixed; top:300px;left:800;height:30px"/><br/>;
<label for="content" style="position: fixed; top:395px;left:630;font-size:25px;font-family:Microsoft JhengHei;">想說什麼:</label><br/>
<textarea name="message" id="message" cols="100" rows="20" style="position: fixed; top:400px;left:750;height:90px"></textarea><br/>
<input type="submit" name="send" value="送出" style="position: fixed; top:500px;left:800;background-color:#CA82FF;width:100px;height:50px;font-size:20px;"/> 
</form>
<form action="firstpage.php" method="post">
<input type="submit" name="back-page" value="繼續購買" style="position: fixed;top:500;left:950;background-color:#CA82FF;width:100px;height:50px;font-size:20px;"/>
</form>
<form action="login.php" method="post">
<input type="submit" name="logout" value="登出" style="position:fixed; top:500;left:1100;background-color:#CA82FF;width:100px;height:50px;font-size:20px;"/>
</form>

   
