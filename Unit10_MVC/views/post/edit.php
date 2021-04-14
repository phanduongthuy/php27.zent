<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Post</title>
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
    <hr>
    <br>
    <form action="?mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
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
                <textarea class="form-control" name="content" id="" cols="30" rows="10" value="<?php echo $post['content']; ?>" placeholder="" require></textarea>
            </div>
            <div class="form-group">
                <label for="">Categogy</label>
                <select name="category_id" id="category_id" class="form-control" >
                   <?php foreach ($categories as $cate) { ?>
                        <option  <?php if($post['category_id'] == $cate['id']) echo "selected"; ?> value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>

                </select>
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>