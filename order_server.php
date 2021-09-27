<?php
require_once "connection.php";

if (isset($_POST['submit'])) {

    $userId = $_POST['userId'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $subTotal = $_POST['subTotal'];
    $itemDiscounnt = $_POST['itemDiscount'];
    $tax = $_POST['tax'];
    $shipping = $_POST['shipping'];
    $total = $_POST['total'];
    $promo = $_POST['promo'];
    $discount = $_POST['discount'];
    $grandTotal = $_POST['grandTotal'];
    $createdAt = $_POST['createdAt'];
    $updatedAt = $_POST['updatedBy'];
    $content = $_POST['content'];
    

    $query = "INSERT INTO `order`(`id`, `userId`, `type`, `status`, `subTotal`, `itemDiscount`, `tax`, `shipping`, `total`, `promo`, `discount`, `grandTotal`, `createdAt`, `updatedAt`, `content`) 
    VALUES (NULL,'$userId','$type','$status','$subTotal','$itemDiscounnt','$tax','$shipping','$total','$promo','$discount','$grandTotal','$createdAt','$updatedAt','$content')";

    $query_run = mysqli_query($link,$query) or die(mysqli_error($link));
    if ($query_run) {
        echo "data inserted";
    }
    else{
        echo "not inserted";
    }
    

    
}


?>