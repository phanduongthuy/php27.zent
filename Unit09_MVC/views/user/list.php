<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New User</a>
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
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
            </thead>
            <?php foreach ($users as $user) {
             ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <!-- <img src="" width="100px" height="100px"> -->
                    <img src="<?= "uploads/".$user['avatar'] ?>" width="100px" height="100px">
                </td>
                <td>
                    <a href="index.php?mod=user&act=detail&id=<?= $user['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="user_del.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>