<?php 
    require 'products.php';  
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
     <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">___PRODUCTS___</h2>

        <table class="table table-bordered">
            <thead>     
                <tr>
                    <th scope="col" colspan="4" class="text-center"><h4><b>DANH SÁCH SẢN PHẨM </b></h4></th>
                    <th class="text-center"><a href="cart.php"><b>Xem giỏ hàng</b>     <i class="fa fa-chevron-right" aria-hidden="true"></i></a></th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Tên sản phẩm</th>
                    <th scope="col" class="text-center">Số lượng</th>
                    <th scope="col" class="text-center">Đơn giá</th>
                    <th scope="col" class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($product as $value) {  

                 ?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo $value['maSP']; ?> </th>
                        <td class="text-center"><?php echo $value['tenSP']; ?></td>
                        <td class="text-center"><?php echo $value['soLuong']; ?></td>
                        <td class="text-center"><?php echo number_format($value['donGia']); ?> Vnđ </td>
                        <td class="text-center"><a href="add2cart.php?maSP=<?php echo $value['maSP']; ?>">Add to cart</a></td>
                    </tr>
                
                   <?php } ?>             
            </tbody>
        </table>  
    </div>
</body>
</html>