<?php
require_once "connection.php";

if (isset($_POST['submit'])) {

    $usertype = $_POST['usertype'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $registeredAt = $_POST['registeredAt'];

    $query = "INSERT INTO `user`(`id`, `usertype`, `firstname`, `middlename`, `lastname`, `username`, `mobile`, `email`, `password`, `registeredAt`) VALUES 
    (NULL,'$usertype','$firstname','$middlename','$lastname','$username','$mobile','$email','$password','$registeredAt')";

    $query_run = mysqli_query($link,$query) or die(mysqli_error($link));
    
}


?>