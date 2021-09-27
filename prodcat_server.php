<?php
require_once "connection.php";

if (isset($_POST['submit'])) {

    $parentId = $_POST['productId'];
    $categoryId = $_POST['title'];
    $query = "INSERT INTO `product_category`(`productId`, `categoryId`) 
    VALUES ('$productId','$categoryId')";

    $query_run = mysqli_query($link,$query) or die(mysqli_error($link));
    
    
}


?>