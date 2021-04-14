<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update category</title>
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
        <h3 align="center">Update Category</h3>
        <hr>
        <form action="?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $category['id']?>">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['name']?>">
            </div>
            <div class="form-group">
                <label for="">Parent</label>
                <select name="parent_id" id="parent_id" class="form-control" >
                    <option value="0">Là danh mục cha</option>
                    <?php foreach ($parents as $parent) { ?>
                    <option <?php if($parent['id'] == $category['parent_id']){echo "selected"; } ?> value="<?= $parent['id']?>"><?= $parent['name']?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <br>
                 <img src="<?= "uploads/".$category['thumbnail'] ?>" alt="" width="100px" height="100px">
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>