<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="add_process.php" method="POST" role="form">
            <legend class="text-center" style="margin: 30px auto;"><h2>ZENTGROUP - PHP - SESSION</h2></legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="id" required>
            </div>

            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name" required>
            </div>

             <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone" required>
            </div>

             <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email" required>
            </div>

             <div class="form-group">
                <label for="">Giới tính</label>
                <br>
                <input type="radio" class="" id="" placeholder="" name="gender" value="Nam" required> Male
                <input type="radio" class="" id="" placeholder="" name="gender" value="Nữ" required> Female
                <input type="radio" class="" id="" placeholder="" name="gender" value="Khác" required> Other
            </div>
            
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address" required>
            </div>  
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>