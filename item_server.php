<?php
require_once "connection.php";

if (isset($_POST['submit'])) {

    $productId = $_POST['productId'];
    $brandId = $_POST['brandId'];
    $supplierId = $_POST['supplierId'];
    $orderId = $_POST['orderId'];
    $sku = $_POST['sku'];
    $mrp = $_POST['mrp'];
    $discount = $_POST['discount'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $sold = $_POST['sold'];
    $available = $_POST['available'];
    $defective = $_POST['defective'];
    $createdBy = $_POST['createdBy'];
    $updatedBy = $_POST['updatedBy'];
    $createdAt = $_POST['createdAt'];
    $updatedAt = $_POST['updatedAt'];

    $query = "INSERT INTO `item`(`id`, `productId`, `brandId`, `supplierId`, `orderId`, `sku`, `mrp`, `discount`, `price`, `quantity`, `sold`, `available`, `defective`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`) 
    VALUES (NULL,'$productId','$brandId','$supplierId','$orderId','$sku','$mrp','$discount','$price','$quantity','$sold','$available','$defective','$createdBy','$updatedBy','$createdAt','$updatedAt')";

    $query_run = mysqli_query($link,$query) or die(mysqli_error($link));
    if ($query_run) {
        echo "data inserted";
    }
    else{
        echo "not inserted";
    }
    

    
}


?>