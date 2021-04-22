
<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Cập nhật thông tin người dùng</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên người dùng</label>
                <input type="hidden" class="form-control round-form" id="" placeholder="" name="id" value="<?= $user->id ?>">
                <input type="text" class="form-control round-form" id="" placeholder="" name="name" value="<?= $user->name ?>">
            </div>
            <div class="form-group">
                <label for="">Sinh nhật</label>
                <input type="date" class="form-control round-form" id="" placeholder="" name="birdth" value="<?= $user->birdth?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control round-form" id="" placeholder="" name="address" value="<?= $user->address?>">
            </div>
           <div class="form-group">
                <label for="">Địa chỉ email</label>
                <input type="email" class="form-control round-form" id="" placeholder="" name="email" value="<?= $user->email ?>">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control round-form" id="" placeholder="" name="pass" value="<?= $user->password ?>">
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <br>
                <img class="fileupload-preview fileupload-exists thumbnail" src="<?= "uploads/".$user->avatar ?>" alt="" width="100px" height="100px">
                <input type="file" class="form-control round-form" id="" placeholder="" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        
    </div>
</div>
</div>
<!-- /row -->
</section>
</section>

<?php require_once 'views/require/back-end/footer.php'; ?>
