<?php 
	$id = $_GET['id'];
	require_once 'connection.php';

	// Câu lệnh truy vấn
	$query = "SELECT * FROM posts WHERE id =".$id;

	$result = $conn->query($query);

	$post = $result->fetch_assoc();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Post</title>
 </head>
 <body>
 	<center>
 		<h3>--- Post ---</h3>
 		<hr width="60%"> 
 	</center>
	 	<ul>
	 		<li>
	 			<h3>Title: <?= $post['title'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Description: <?= $post['description'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Thumbnail: <?= $post['thumbnail'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Content: <?= $post['content'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>View: <?= $post['view_count'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Create at: <?= $post['created_at'] ?></h3>
	 		</li>
	 		
		 </ul>
 	
 	
 </body>
 </html>