<?php 
    require_once 'connection.php';
    $id = $_GET['id'];
        // Câu lệnh truy vấn 1
    $query1 = "SELECT * FROM posts WHERE id = ".$id;

        // Thực thi câu lệnh
    $result1 = $conn->query($query1);
    $post = $result1->fetch_assoc();

        // Câu lệnh truy vấn 2
    $query2 = "SELECT * FROM categories";
    $result2 = $conn -> query($query2);
    $cagetory = array();
    while ($row = $result2-> fetch_assoc()) {
        $cagetory[] =$row;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post edit</title>
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
    <hr>
    <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title</label>
            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $post['id']; ?>">
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title']; ?>">
        </div>

        <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description']; ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <br>
                <img src="<?= "uploads/".$post['thumbnail']; ?>" alt="" width="100px" haight="100px">
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?php echo $post['content']; ?>">
            </div>
             <!-- <div class="form-group">
                <label for="">User id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id">
            </div> -->
            <div class="form-group">
                <label for="">Categogy</label>
                <select name="category_id" id="category_id" class="form-control" >
                    <?php foreach ($cagetory as $cate) { ?>
                        <option  <?php if($post['category_id'] == $cate['id']) echo "selected"; ?> value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Created at</label>
                <input type="datetime-local" class="form-control" id="" placeholder="" name="created_at">
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>