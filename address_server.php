<?php 

require_once "connection.php";

if (isset($_POST['Submit'])) {
	
		
        $userId = $_POST['userId'];
		$orderId = $_POST['orderId'];
        $firstName  = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];
        $mobile = $_POST['mobile'];
		$email = $_POST['email'];
        $line1 = $_POST['line1'];
        $line2 = $_POST['line2'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $country = $_POST['country'];
        $createdAt = $_POST['createdAt'];
        $updatedAt = $_POST['updatedAt'];

		$query = "INSERT INTO `address`(`id`, `userId`, `orderId`, `firstName`, `middleName`, `lastName`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `createdAt`, `updatedAt`)
         VALUES (NULL,'$userId','$orderId','$firstName','$middleName','$lastName','$mobile','$email','$line1','$line2','$city','$province','$country','$createdAt','$updatedAt')";
		$run = mysqli_query($link, $query) or die(myqli_error($link));

		
}

 ?>