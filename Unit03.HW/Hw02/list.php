<?php 
	session_start();

	if (isset($_SESSION['infor'])) {
		$data = $_SESSION['infor'];
	}

?>

 	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List uers</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<h2 class="text-center">DANH SÁCH NGƯỜI DÙNG</h2>

		<a href="add.php" class="btn btn-primary">Thêm mới</a>

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
						<th scope="col">#</th>
						<th scope="col">Mã sinh viên</th>
						<th scope="col">họ tên</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 

						$i = 0;
						foreach($data as $value) {
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
									echo $value['id'];
								 ?>
							</td>
							<td>
								<?php 
									echo $value['name'];
								 ?>
							</td>
							<td>
								<a href="detail.php?id=<?php echo $value['id']; ?>" class = "btn btn-success">Detail</a>
								<a href="delete.php?id=<?php echo $value['id']; ?>" class = "btn btn-danger">Delete</a>
								<a href="update.php?id=<?php echo $value['id']; ?>" class = "btn btn-danger">Update</a>
							</td>
						</tr>
					<?php } ?>					 
				</tbody>
			</table>  
	</div>
</body>
</html>






