<?php 
    require_once('connection.php');
    
    $query = "SELECT * FROM categories";
    $result = $conn -> query($query);
    $cagetory = array();
    while ($row = $result-> fetch_assoc()) {
        $cagetory[] =$row;
    }
    // echo "<pre>";
    //     print_r($cagetory);
    // echo "</pre>";
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add new post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENTGROUP - Education And Technology Group</h3>
    <h3 align="center">Add New Post</h3>
    <hr>
    <?php 

            if (isset($_COOKIE['msg'])) {
         ?>     
                <div class="alert alert-danger" role="alert">
                    <strong>Thông báo: </strong>
                    <?php 
                        echo $_COOKIE['msg'];

                     ?>
                </div>
        <?php } ?>
        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content">
            </div>
             <!-- <div class="form-group">
                <label for="">User id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id">
            </div> -->
            <div class="form-group">
                <label for="">Categogy</label>
                <select name="category_id" id="category_id" class="form-control" >
                    <?php foreach ($cagetory as $cate) { ?>
                        <option value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Created at</label>
                <input type="datetime-local" class="form-control" id="" placeholder="" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>