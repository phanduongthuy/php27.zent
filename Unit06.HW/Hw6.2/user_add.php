
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
    <h3 align="center">Add New User</h3>
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
        <form action="user_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="pass">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar">
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