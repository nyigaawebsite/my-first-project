<?php
require_once "connection.php";

if (isset($_POST['submit'])) {

    $parentId = $_POST['parentId'];
    $title = $_POST['title'];
    $metaTitle = $_POST['metaTitle'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];

    $query = "INSERT INTO `category`(`id`, `parentId`, `title`, `metaTitle`, `slug`, `content`) 
    VALUES (NULL,'$parentId','$title','$metaTitle','$slug','$content')";

    $query_run = mysqli_query($link,$query) or die(mysqli_error($link));
    
    
}


?>