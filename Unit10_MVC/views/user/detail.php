<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User detail</title>
</head>
<body>
	<p><b>Name: </b><?= $user['name']?></p>
	<p><b>Email: </b><?= $user['email']?></p>
	<p><b>Avatar: </b></p><img src="<?= "uploads/".$user['avatar']; ?>" alt="" width="100px" height="100px">
	<p><b>Created at: </b><?= $user['created_at']?></p>
</body>
</html>