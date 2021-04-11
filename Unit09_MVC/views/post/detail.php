<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post detail</title>
</head>
<body>
	<p><b>Title: </b><?= $post['title']?></p>
	<p><b>Description: </b><?= $post['description']?></p>
	<p><b>Thumbnail: </b><?= $post['thumbnail']?></p>
	<p><b>Content: </b><?= $post['content']?></p>
	<p><b>View: </b><?= $post['view_count']?></p>
	<p><b>Create at: </b><?= $post['created_at']?></p>
</body>
</html>