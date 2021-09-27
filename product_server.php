<?php 

require_once "connection.php";

if (isset($_POST['Submit'])) {
	
        $title = $_POST['title'];
		$summary = $_POST['summary'];
        $type = $_POST['type'];
		$createdAt = $_POST['createdAt'];
		$updatedAt = $_POST['updatedAt'];
        $content = $_POST['content'];
		$query = "INSERT INTO `product` (`id`, `title`, `summary`, `type`, `createdAt`, `updatedAt`, `content`) 
        VALUES (NULL, '$title', '$summary', '$type', '$createdAt', '$updatedAt', '$content');";

		$run = mysqli_query($link, $query) or die(myqli_error($link));
        

		
}

 ?>