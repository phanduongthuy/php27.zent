
<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Tạo mới thông tin người dùng</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên người dùng</label>
                <input type="text" class="form-control round-form" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Sinh nhật</label>
                <input type="date" class="form-control round-form" id="" placeholder="" name="birdth">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control round-form" id="" placeholder="" name="address">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ email</label>
                <input type="email" class="form-control round-form" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control round-form" id="" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <input type="file" class="form-control round-form" id="" placeholder="" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
        
    </div>
</div>
</div>
<!-- /row -->
</section>
</section>

<?php require_once 'views/require/back-end/footer.php'; ?>
