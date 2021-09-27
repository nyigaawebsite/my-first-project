<?php 

require_once "connection.php";

if (isset($_POST['Submit'])) {
	
        $userId = $_POST['userId'];
		$orderId = $_POST['orderId'];
        $code = $_POST['code'];
        $type = $_POST['type'];
        $mode = $_POST['mode'];
        $status = $_POST['status'];
		$createdAt = $_POST['createdAt'];
		$updatedAt = $_POST['updatedAt'];
        $content = $_POST['content'];
		$query = "INSERT INTO `transaction`(`id`, `userId`, `orderId`, `code`, `type`, `mode`, `status`, `createdAt`, `updatedAt`, `content`) 
        VALUES (NULL,'$userId','$orderId','$code','$type','$mode','$status','$createdAt','$updatedAt','$content');";

		$run = mysqli_query($link, $query) or die(myqli_error($link));
        
		
}

 ?>