<?php 
    require_once 'connection.php';
    $id = $_GET['id'];
    // Câu lệnh truy vấn
    $query1 = "SELECT * FROM categories WHERE id = ".$id;

    // Thực thi câu lệnh
    $result = $conn->query($query1);
    $category1 = $result->fetch_assoc();
    $query2 = "SELECT * FROM categories where parent_id is NULL";
    $result2 = $conn->query($query2);
    $category2 = array();

    while($row = $result2->fetch_assoc()) { 
        $category2[] = $row;
    }
?>
    


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category edit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT - Education And Technology Group</h3>
    
    <hr>
        <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $category1['id']; ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category1['name']; ?>">
            </div>
            
            <div class="form-group">
                <label for="">Parent</label>
                <select name="parent_id" id="parent_id" class="form-control" >
                    <option value="0">Là danh mục cha</option>
                    <?php foreach ($category2 as $cate) { ?>
                        <option value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumb" value="<?php echo $category1['thumbnail']; ?>">
            </div>
            <div class="form-group">
                <label for="">Created at</label>
                <input type="datetime-local" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $category1['created_at']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>