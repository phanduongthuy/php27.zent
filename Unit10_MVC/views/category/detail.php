<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Category detail</title>
</head>
<body>
	<h3>Name: <?= $category['name']?></h3>
	<h3>Thumbnail: </h3> <img src="<?= "uploads/".$category['thumbnail'] ?>" alt="" width="100px" height="100px">
	<h3>Description: <?= $category['description']?></h3>
</body>
</html>