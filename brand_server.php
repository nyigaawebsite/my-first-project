<?php 

require_once "connection.php";

if (isset($_POST['Submit'])) {
	
        $title = $_POST['title'];
		$summary = $_POST['summary'];
		$createdAt = $_POST['createdAt'];
		$updatedAt = $_POST['updatedAt'];
        $content = $_POST['content'];
		$query = "INSERT INTO `brand` (`id`, `title`, `summary`,`createdAt`, `updatedAt`, `content`) 
        VALUES (NULL, '$title', '$summary','$createdAt', '$updatedAt', '$content');";

		$run = mysqli_query($link, $query) or die(myqli_error($link));
        

		
}

 ?>