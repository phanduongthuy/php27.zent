<?php 
	$id = $_GET['id'];
	require_once 'connection.php';

	// Câu lệnh truy vấn
	$query = "SELECT * FROM categories WHERE id =".$id;

	$result = $conn->query($query);

	$category = $result->fetch_assoc();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Category</title>
 </head>
 <body>
 	<center>
 		<h3>--- CATEGORIES ---</h3>
 		<hr width="60%"> 
 	</center>
	 	<ul>
	 		<li>
	 			<h3>Name: <?= $category['name'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Thumbnail: <?= $category['thumbnail'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Description: <?= $category['description'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Created at: <?= $category['created_at'] ?></h3>
	 		</li>
		 	
		 </ul>
 	
 	
 </body>
 </html>