<?php 
    require_once 'connection.php';
    	// Câu lệnh truy vấn
    $query = "SELECT * FROM posts";

    	// Thực thi câu lệnh
    $result = $conn->query($query);

    	// Tạo 1 mảng để chứa dữ liệu
    $users = array();

    while($row = $result->fetch_assoc()) { 
      $post[] = $row;
    };


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New Posts</a>
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
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumnail</th>
            <th>Content</th>
            <th>View</th>
            <th>Action</th>
        </thead>
        <?php foreach ($post as $post) {
           ?>
           <tr>
            <td><?php echo $post['id']; ?></td>
            <td><?php echo $post['title']; ?></td>
            <td><?php echo $post['description']; ?></td>
            <td>
                <img src="<?= "uploads/".$post['thumbnail'] ?>" width="100px" height="100px">
            </td>
            <td><?php echo $post['content']; ?></td>
            <td><?php echo $post['view_count']; ?></td>


            <td>
                <a href="post_detail.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Detail</a>
                <a href="post_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                <a href="post_del.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>
</body>
</html>