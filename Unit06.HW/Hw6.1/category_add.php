<?php 
    require_once 'connection.php';
    // Câu lệnh truy vấn
    $query = "SELECT * FROM categories WHERE parent_id is NULL";

    // Thực thi câu lệnh
    $result = $conn->query($query);

    // Tạo 1 mảng để chứa dữ liệu
    $categories = array();

    while($row = $result->fetch_assoc()) { 
        $categories[] = $row;
    };


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add new category</title>
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
    <h3 align="center">Add New Category</h3>
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
        <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Parent</label>
                <select name="parent_id" id="parent_id" class="form-control" >
                    <option value="0">Là danh mục cha</option>
                    <?php foreach ($categories as $cate) { ?>
                        <option value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
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