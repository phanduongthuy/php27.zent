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
        <form action="?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tiêu đề bài viết" name="title" required="">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mô tả bài viết" name="description" required="">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Nhập nội dung bài viết" required=""></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Categogy</label>
                <select name="category_id" id="category_id" class="form-control" >
                    <?php foreach ($categories as $cate) { ?>
                        <option value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>
                   

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>