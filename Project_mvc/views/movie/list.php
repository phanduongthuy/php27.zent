<?php 
require_once 'views/require/back-end/header.php';
?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Danh Sách Phim</h3>
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
                    <th><i class="fa fa-picture-o"></i> Ảnh mô tả</th>
                    <th><i class="fa fa-television"></i> Tên Phim</th>
                    <th><i class="fa fa-bullhorn"></i> Danh mục</th>
                    <th><i class="fa fa-check"></i> Loại phim</th>
                    <th><i class="fa fa-user"></i> Người tạo</th>
                    <th><i class="fa fa-eye"></i> Lượt xem</th>
                    <th><i class=" fa fa-edit"></i> Hành động</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie) {
                    ?>
                  <tr>
                    <td>
                      <?= $movie->id?>
                    </td>
                    <td>
                      <img src="<?= "uploads/".$movie->image ?>" alt="" width="50px" height="50px">
                    </td>
                    <td>
                      <?= $movie->name?>
                    </td>
                    <td class="hidden-phone"><?= $movie->category_id?></td>
                    <td>
                        <?php if ($movie->type==0) {
                            echo "Phim lẻ";
                        }else {
                            echo "Phim bộ";
                        }  ?>

                    </td>
                    <td><?= $movie->user_id ?></td>
                     <td><?= $movie->view_count ?></td>
                    <td>
                      <button class="btn btn-success btn-xs"><a href="?admin=client&mod=home&act=detail&slug=<?= $movie->slug ?>"><i class="fa fa-check"></i></a></button>
                      <button class="btn btn-warning btn-xs"><a href="?admin=admin&mod=movie&act=edit&id=<?= $movie->id ?>"><i class="fa fa-pencil"></i></a></button>
                      <button class="btn btn-danger btn-xs"><a href="?admin=admin&mod=movie&act=destroy&id=<?= $movie->id ?>"><i class="fa fa-trash-o "></i></a></button>
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
