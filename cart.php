<?php
session_start();

// 資料庫連線設定
$host = 'localhost';
$username = 'root';
$password = '123456';
$database = 'shop';

// 建立資料庫連線
$connection =mysqli_connect($host, $username, $password, $database);
// 檢查連線是否成功
if ($connection->connect_error) {
    die("連線失敗：" . $connection->connect_error);
}
$user_id=$_SESSION['user_id'];

if(isset($_POST['submit'])){
    $new_product_id=$_POST['new_product_id'];
    $quantity=$_POST['quantity'];
    $sql="select * from products where id='$new_product_id'";
    $result=$connection->query($sql);$row=mysqli_fetch_assoc($result);
    $name=$row["name"];
    $price=$row["price"];
    $total_price=$price*$quantity;
    $sql="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$new_product_id."','".$user_id."','".$name."','".$price."','".$quantity."','".$total_price."')";
    $result=$connection->query($sql);
    if($result){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit1'])){
    $product_id1=$_POST["product_id1"];
    $quantity1=$_POST["quantity1"];
    $sql1="select * from products where id='$product_id1'";
    $result1=$connection->query($sql1);$row1=mysqli_fetch_assoc($result1);
    $name1=$row1["name"];
    $price1=$row1["price"];
    $total_price1=$price1*$quantity1;
    $sql1="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id1."','".$user_id."','".$name1."','".$price1."','".$quantity1."','".$total_price1."')";
    $result1=$connection->query($sql1);
    if($result1){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit2'])){
    $product_id2=$_POST["product_id2"];
    $quantity2=$_POST["quantity2"];
    $sql2="select * from products where id='$product_id2'";
    $result2=$connection->query($sql2);$row2=mysqli_fetch_assoc($result2);
    $name2=$row2["name"];
    $price2=$row2["price"];
    $total_price2=$price2*$quantity2;
    $sql2="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id2."','".$user_id."','".$name2."','".$price2."','".$quantity2."','".$total_price2."')";
    $result2=$connection->query($sql2);
    if($result2){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit3'])){
    $product_id3=$_POST["product_id3"];
    $quantity3=$_POST["quantity3"];
    $sql3="select * from products where id='$product_id3'";
    $result3=$connection->query($sql3);$row3=mysqli_fetch_assoc($result3);
    $name3=$row3["name"];
    $price3=$row3["price"];
    $total_price3=$price3*$quantity3;
    $sql3="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id3."','".$user_id."','".$name3."','".$price3."','".$quantity3."','".$total_price3."')";
    $result3=$connection->query($sql3);
    if($result3){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit4'])){
    $product_id4=$_POST["product_id4"];
    $quantity4=$_POST["quantity4"];
    $sql4="select * from products where id='$product_id4'";
    $result4=$connection->query($sql4);$row4=mysqli_fetch_assoc($result4);
    $name4=$row4["name"];
    $price4=$row4["price"];
    $total_price4=$price4*$quantity4;
    $sql4="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id4."','".$user_id."','".$name4."','".$price4."','".$quantity4."','".$total_price4."')";
    $result4=$connection->query($sql4);
    if($result4){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit5'])){
    $product_id5=$_POST["product_id5"];
    $quantity5=$_POST["quantity5"];
    $sql5="select * from products where id='$product_id5'";
    $result5=$connection->query($sql5);$row5=mysqli_fetch_assoc($result5);
    $name5=$row5["name"];
    $price5=$row5["price"];
    $total_price5=$price5*$quantity5;
    $sql5="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id5."','".$user_id."','".$name5."','".$price5."','".$quantity5."','".$total_price5."')";
    $result5=$connection->query($sql5);
    if($result5){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit6'])){
    $product_id6=$_POST["product_id6"];
    $quantity6=$_POST["quantity6"];
    $sql6="select * from products where id='$product_id6'";
    $result6=$connection->query($sql6);$row6=mysqli_fetch_assoc($result6);
    $name6=$row6["name"];
    $price6=$row6["price"];
    $total_price6=$price6*$quantity6;
    $sql6="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id6."','".$user_id."','".$name6."','".$price6."','".$quantity6."','".$total_price6."')";
    $result6=$connection->query($sql6);
    if($result6){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit7'])){
    $product_id7=$_POST["product_id7"];
    $quantity7=$_POST["quantity7"];
    $sql7="select * from products where id='$product_id7'";
    $result7=$connection->query($sql7);$row7=mysqli_fetch_assoc($result7);
    $name7=$row7["name"];
    $price7=$row7["price"];
    $total_price7=$price7*$quantity7;
    $sql7="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id7."','".$user_id."','".$name7."','".$price7."','".$quantity7."','".$total_price7."')";
    $result7=$connection->query($sql7);
    if($result7){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit8'])){
    $product_id8=$_POST["product_id8"];
    $quantity8=$_POST["quantity8"];
    $sql8="select * from products where id='$product_id8'";
    $result8=$connection->query($sql8);$row8=mysqli_fetch_assoc($result8);
    $name8=$row8["name"];
    $price8=$row8["price"];
    $total_price8=$price8*$quantity8;
    $sql8="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id8."','".$user_id."','".$name8."','".$price8."','".$quantity8."','".$total_price8."')";
    $result8=$connection->query($sql8);
    if($result8){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit9'])){
    $product_id9=$_POST["product_id9"];
    $quantity9=$_POST["quantity9"];
    $sql9="select * from products where id='$product_id9'";
    $result9=$connection->query($sql9);$row9=mysqli_fetch_assoc($result9);
    $name9=$row9["name"];
    $price9=$row9["price"];
    $total_price9=$price9*$quantity9;
    $sql9="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id9."','".$user_id."','".$name9."','".$price9."','".$quantity9."','".$total_price9."')";
    $result9=$connection->query($sql9);
    if($result9){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit10'])){
    $product_id10=$_POST["product_id10"];
    $quantity10=$_POST["quantity10"];
    $sql10="select * from products where id='$product_id10'";
    $result10=$connection->query($sql10);$row10=mysqli_fetch_assoc($result10);
    $name10=$row10["name"];
    $price10=$row10["price"];
    $total_price10=$price10*$quantity10;
    $sql10="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id10."','".$user_id."','".$name10."','".$price10."','".$quantity10."','".$total_price10."')";
    $result10=$connection->query($sql10);
    if($result10){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit11'])){
    $product_id11=$_POST["product_id11"];
    $quantity11=$_POST["quantity11"];
    $sql11="select * from products where id='$product_id11'";
    $result11=$connection->query($sql11);$row11=mysqli_fetch_assoc($result11);
    $name11=$row11["name"];
    $price11=$row11["price"];
    $total_price11=$price11*$quantity11;
    $sql11="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id11."','".$user_id."','".$name11."','".$price11."','".$quantity11."','".$total_price11."')";
    $result11=$connection->query($sql11);
    if($result11){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit12'])){
    $product_id12=$_POST["product_id12"];
    $quantity12=$_POST["quantity12"];
    $sql12="select * from products where id='$product_id12'";
    $result12=$connection->query($sql12);$row12=mysqli_fetch_assoc($result12);
    $name12=$row12["name"];
    $price12=$row12["price"];
    $total_price12=$price12*$quantity12;
    $sql12="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id12."','".$user_id."','".$name12."','".$price12."','".$quantity12."','".$total_price12."')";
    $result12=$connection->query($sql12);
    if($result12){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit13'])){
    $product_id13=$_POST["product_id13"];
    $quantity13=$_POST["quantity13"];
    $sql13="select * from products where id='$product_id13'";
    $result13=$connection->query($sql13);$row13=mysqli_fetch_assoc($result13);
    $name13=$row13["name"];
    $price13=$row13["price"];
    $total_price13=$price13*$quantity13;
    $sql13="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id13."','".$user_id."','".$name13."','".$price13."','".$quantity13."','".$total_price13."')";
    $result13=$connection->query($sql13);
    if($result13){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit14'])){
    $product_id14=$_POST["product_id14"];
    $quantity14=$_POST["quantity14"];
    $sql14="select * from products where id='$product_id14'";
    $result14=$connection->query($sql14);$row14=mysqli_fetch_assoc($result14);
    $name14=$row14["name"];
    $price14=$row14["price"];
    $total_price14=$price14*$quantity14;
    $sql14="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id14."','".$user_id."','".$name14."','".$price14."','".$quantity14."','".$total_price14."')";
    $result14=$connection->query($sql14);
    if($result14){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit15'])){
    $product_id15=$_POST["product_id15"];
    $quantity15=$_POST["quantity15"];
    $sql15="select * from products where id='$product_id15'";
    $result15=$connection->query($sql15);$row15=mysqli_fetch_assoc($result15);
    $name15=$row15["name"];
    $price15=$row15["price"];
    $total_price15=$price15*$quantity15;
    $sql15="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id15."','".$user_id."','".$name15."','".$price15."','".$quantity15."','".$total_price15."')";
    $result15=$connection->query($sql15);
    if($result15){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit16'])){
    $product_id16=$_POST["product_id16"];
    $quantity16=$_POST["quantity16"];
    $sql16="select * from products where id='$product_id16'";
    $result16=$connection->query($sql16);$row16=mysqli_fetch_assoc($result16);
    $name16=$row16["name"];
    $price16=$row16["price"];
    $total_price16=$price16*$quantity16;
    $sql16="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id16."','".$user_id."','".$name16."','".$price16."','".$quantity16."','".$total_price16."')";
    $result16=$connection->query($sql16);
    if($result16){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit17'])){
    $product_id17=$_POST["product_id17"];
    $quantity17=$_POST["quantity17"];
    $sql17="select * from products where id='$product_id17'";
    $result17=$connection->query($sql17);$row17=mysqli_fetch_assoc($result17);
    $name17=$row17["name"];
    $price17=$row17["price"];
    $total_price17=$price17*$quantity17;
    $sql17="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id17."','".$user_id."','".$name17."','".$price17."','".$quantity17."','".$total_price17."')";
    $result17=$connection->query($sql17);
    if($result17){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit18'])){
    $product_id18=$_POST["product_id18"];
    $quantity18=$_POST["quantity18"];
    $sql18="select * from products where id='$product_id18'";
    $result18=$connection->query($sql18);$row18=mysqli_fetch_assoc($result18);
    $name18=$row18["name"];
    $price18=$row18["price"];
    $total_price18=$price18*$quantity18;
    $sql18="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id18."','".$user_id."','".$name18."','".$price18."','".$quantity18."','".$total_price18."')";
    $result18=$connection->query($sql18);
    if($result18){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
if(isset($_POST['submit19'])){
    $product_id19=$_POST["product_id19"];
    $quantity19=$_POST["quantity19"];
    $sql19="select * from products where id='$product_id19'";
    $result19=$connection->query($sql19);$row19=mysqli_fetch_assoc($result19);
    $name19=$row19["name"];
    $price19=$row19["price"];
    $total_price19=$price19*$quantity19;
    $sql19="insert into orders(product_id,user_id,name,price,quantity,total_price) values ('".$product_id19."','".$user_id."','".$name19."','".$price19."','".$quantity19."','".$total_price19."')";
    $result19=$connection->query($sql19);
    if($result19){
        echo '<div style="font-size: 50px; color:#C678FF;text-align: center;">加入購物車成功'.'</div>';
    }else{
        echo "加入購物車失敗".mysqli_error($connection);
    }
}
mysqli_close($connection);
?>
<body BGCOLOR=#FFFFD4>
<a href="firstpage.php"><h3 style="position: absolute;top:200;left:700;"><font size=5>回上頁繼續點餐</font></a></h3>
<a href="orders.php"><h3 style="position: absolute; top:250;left:700;"><font size=5>查看訂單</font></a></h3>
</body>