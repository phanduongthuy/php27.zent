<?php 
    require_once 'connection.php';
    $id = $_GET['id'];
    // Câu lệnh truy vấn
    $query = "SELECT * FROM users WHERE id = ".$id;

    // Thực thi câu lệnh
    $result = $conn->query($query);
    $user = $result->fetch_assoc();
    // echo $user['avatar'];
    // echo "<pre>";
    //     print_r($user);
    // echo "</pre>";
?>
    


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User edit</title>
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
        <form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $user['id']; ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name']; ?>">
            </div>
            
           <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email']; ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="pass" value="<?php echo $user['password']; ?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $user['avatar']; ?>">
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