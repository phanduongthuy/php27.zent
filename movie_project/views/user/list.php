<?php 
require_once 'views/require/back-end/header.php';
?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Người dùng</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
            <?php 

            if (isset($_COOKIE['success'])) {
               ?>     
               <div class="alert alert-success" role="alert">
                <strong>Thông báo: </strong>
                <?php 
                echo $_COOKIE['success'];

                ?>
                </div>
                <?php } ?>
                <?php 

                if (isset($_COOKIE['error'])) {
                   ?>     
                   <div class="alert alert-error" role="alert">
                    <strong>Thông báo: </strong>
                    <?php 
                    echo $_COOKIE['error'];

                    ?>
                </div>
            <?php } ?>
                    <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bookmark"></i> ID</th>
                    <th><i class="fa fa-user"></i> Họ và tên</th> 
                    <th><i class="fa fa-birthday-cake"></i> Ngày sinh</th> 
                    <th><i class="fa fa-map-marker"></i> Địa chỉ</th> 
                    <th><i class="fa fa-check"></i> Địa chỉ email</th>
                    <th><i class="fa fa-picture-o"></i> Ảnh đại diện</th>
                    <th><i class=" fa fa-edit"></i> Hành động</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) {
                       ?>
                       <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->birdth ?></td>
                        <td><?= $user->address ?></td>
                        <td><?= $user->email ?></td>
                        <td>
                            <!-- <img src="" width="100px" height="100px"> -->
                            <img src="<?= "uploads/".$user->avatar ?>" width="50px" height="50px" class="rounded-circle">
                        </td>
                    <td>
                      <button class="btn btn-success btn-xs"><a href="?admin=admin&mod=user&act=detail&id=<?= $user->id ?>"><i class="fa fa-check"></i></a></button>
                      <button class="btn btn-warning btn-xs"><a href="?admin=admin&mod=user&act=edit&id=<?= $user->id ?>"><i class="fa fa-pencil"></i></a></button>
                      <button class="btn btn-danger btn-xs"><a href="?admin=admin&mod=user&act=destroy&id=<?= $user->id ?>"><i class="fa fa-trash-o "></i></a></button>
                    </td>
                  </tr>
              <?php } ?>
                </tbody>
              </table>
                </div>
            </div>
        </div>
    <!-- /row -->
    </section>
</section>

<?php require_once 'views/require/back-end/footer.php'; ?>