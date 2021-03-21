<?php 
	session_start();
	// session_destroy();
	if (isset($_SESSION)) {
		$file = $_SESSION;
	}; 
?>

 	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List file upload</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<h2 class="text-center">___DOCUMENT___</h2>

		<a href="upload.php" class="btn btn-primary">Upload Document</a>

		<?php 

			if (isset($_COOKIE['msg'])) {
		 ?>		
		 		<div class="alert alert-success" role="alert">
				  	<strong>Thông báo: </strong>
				  	<?php 
				  		echo $_COOKIE['msg'];

				  	 ?>
				</div>
		<?php } ?>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Name</th>
						<th scope="col">Download</th>
						<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>
					<?php 

						$i = 0;
						foreach($file as $value) {
							$i++;
					?>
						<tr>
							<td>
								<?php 
									echo $i;
								 ?>
							</td>

							<td>
								<?php 
									echo $value['name'];
								 ?>
							</td>

							<td>
								<a download ="<?php echo $value['download']; ?>" href="uploads/<?php echo $value['download']?>"  class = "btn btn-success">Download</a>
								
							</td>

							<td>
								<a href="remove.php?name=<?php echo $value['name']; ?>" class = "btn btn-danger">Remove</a>
								
							</td>
						</tr>
					<?php } ?>					 
				</tbody>
			</table>  
	</div>
</body>
</html>






