<?php 
	$id = $_GET['id'];
	require_once 'connection.php';

	// Câu lệnh truy vấn
	$query = "SELECT * FROM users WHERE id =".$id;

	$result = $conn->query($query);

	$user = $result->fetch_assoc();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>User</title>
 </head>
 <body>
 	<center>
 		<h3>--- User ---</h3>
 		<hr width="60%"> 
 	</center>
	 	<ul>
	 		<li>
	 			<h3>Name: <?= $user['name'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Email: <?= $user['email'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Avatar: <?= $user['avatar'] ?></h3>
	 		</li>
	 		<li>
	 			<h3>Created at: <?= $user['created_at'] ?></h3>
	 		</li>
		 	
		 </ul>
 	
 	
 </body>
 </html>