<?php
require_once "connection.php";

if (isset($_POST['submit'])) {

    $productId = $_POST['productId'];
    $itemId = $_POST['itemId'];
    $orderId = $_POST['orderId'];
    $sku = $_POST['sku'];
    $discount = $_POST['discount'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $content = $_POST['content'];
    $createdAt = $_POST['createdAt'];
    $updatedAt = $_POST['updatedAt'];

    $query = "INSERT INTO `order_item`(`id`, `productId`, `itemId`, `orderId`, `sku`, `price`, `discount`, `quantity`, `createdAt`, `updatedAt`, `content`) 
    VALUES (NULL,'$productId','$itemId','$orderId','$sku','$price','$discount','$quantity','$createdAt','$updatedAt','$content')";

    $query_run = mysqli_query($link,$query) or die(mysqli_error($link));
    
    

    
}


?>