<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />  
<?php
session_start();

// 建立與資料庫的連接
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "shop";

$conn =mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("連接失敗：" . $conn->connect_error);
}
else{
// 獲取產品列表
$product_sql = "select * from dessert";
$product_result = $conn->query($product_sql);
$products = array();
while ($row = $product_result->fetch_assoc()) {
    $products[] = $row;
}

// 將產品添加到購物車
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // 檢查產品是否已存在於購物車
    $cart_sql = "select * from shop_cart where id = '$product_id' AND user_id = '{$_SESSION['user_id']}'";
    $cart_result = $conn->query($cart_sql);
    if ($cart_result->num_rows > 0) {
        // 更新購物車中的數量
        $update_sql = "update cart set quantity = quantity + '$quantity' where product_id = '$product_id' AND user_id = '{$_SESSION['user_id']}'";
        $conn->query($update_sql);
    } else {
        // 將產品添加到購物車
        $insert_sql = "insert into shop_cart (product_id, quantity, user_id) values ('$product_id', '$quantity', '{$_SESSION['user_id']}')";
        $conn->query($insert_sql);
    }

    header("Location: index.php");
    exit();
}

// 從購物車中移除產品
if (isset($_GET['remove'])) {
    $cart_id = $_GET['remove'];

    // 從購物車表中刪除指定的資料
    $delete_sql = "delete from cart where id = '$cart_id' AND user_id = '{$_SESSION['user_id']}'";
    $conn->query($delete_sql);

    header("Location: index.php");
    exit();
}

// 結帳
if (isset($_POST['checkout'])) {
    // 創建新訂單
    $insert_order_sql = "insert into orders (user_id) values ('{$_SESSION['user_id']}')";
    $conn->query($insert_order_sql);
    $order_id = $conn->insert_id;

    // 獲取購物車內容
    $cart_sql = "select * from shop_cart where user_id = '{$_SESSION['user_id']}'";
    $cart_result = $conn->query($cart_sql);

    while ($cart_row = $cart_result->fetch_assoc()) {
        $product_id = $cart_row['product_id'];
        $quantity = $cart_row['quantity'];

        // 獲取產品資訊
        $product_sql = "select * from dessert where id = '$product_id'";
        $product_result = $conn->query($product_sql);
        $product_row = $product_result->fetch_assoc();

        $product_name = $product_row['dName'];
        $product_price = $product_row['dPrice'];

        // 將購物車內容添加到訂單明細
        $insert_order_detail_sql = "insert into order_details (order_id, product_id, quantity, price) values ('$order_id', '$product_id', '$quantity', '$product_price')";
        $conn->query($insert_order_detail_sql);
    }

    // 清空購物車
    $clear_cart_sql = "delete from shop_cart where user_id = '{$_SESSION['user_id']}'";
    $conn->query($clear_cart_sql);

    header("Location: firstpage.php");
    exit();
}}
?>

<!DOCTYPE html>
<html>
<head>
    <title>購物車</title>
</head>
<body>
    <h2>購物車</h2>
    
    <table>
        <tr>
            <th>產品名稱</th>
            <th>價格</th>
            <th>數量</th>
            <th>操作</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <input type="number" name="quantity" value="1" min="1">
                        <input type="submit" name="add_to_cart" value="添加到購物車">
                    </form>
                </td>
                <td>
                    <a href="index.php?remove=<?php echo $product['id']; ?>">移除</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>購物車內容</h2>
    <?php
    $cart_sql = "SELECT cart.*, products.name, products.price FROM cart LEFT JOIN products ON cart.product_id = products.id WHERE cart.user_id = '{$_SESSION['user_id']}'";
    $cart_result = $conn->query($cart_sql);
    ?>
    <table>
        <tr>
            <th>產品名稱</th>
            <th>價格</th>
            <th>數量</th>
            <th>小計</th>
            <th>操作</th>
        </tr>
        <?php while ($cart_row = $cart_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $cart_row['name']; ?></td>
                <td><?php echo $cart_row['price']; ?></td>
                <td><?php echo $cart_row['quantity']; ?></td>
                <td><?php echo $cart_row['price'] * $cart_row['quantity']; ?></td>
                <td>
                    <a href="index.php?remove=<?php echo $cart_row['id']; ?>">移除</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>結帳</h2>
    <form method="POST" action="index.php">
        <input type="submit" name="checkout" value="結帳">
    </form>
</body>
</html>
