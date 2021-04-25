<?php 
require_once 'views/require/back-end/header.php';
?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Video Nguồn</h3>
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
                    <th><i class="fa fa-picture-o"></i> Tên tập phim</th>
                    <th><i class="fa fa-television"></i> Tên Phim</th>
                    <th><i class="fa fa-question-circle"> Mô tả</th>
                    <th><i class="fa fa-link"></i> Link video </th>
                    <th><i class="fa fa-user"></i> Người tạo</th>
                    <th><i class=" fa fa-edit"></i> Hành động</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                   <?php foreach ($videos as $video) {
                     ?>
                     <tr>
                        <td><?= $video->id ?></td>
                        <td><?= $video->name ?></td>
                        <td><?= $video->movie_id ?></td>
                        <td><?= $video->description ?></td>
                        <td><a href="<?= $video->source ?>"><?= $video->source ?></a></td>
                        <td><?= $video->user_id ?></td>
                    <td>
                      <button class="btn btn-warning btn-xs"><a href="?admin=admin&mod=video&act=edit&id=<?= $video->id ?>"><i class="fa fa-pencil"></i></a></button>
                      <button class="btn btn-danger btn-xs"><a href="?admin=admin&mod=video&act=destroy&id=<?= $video->id ?>"><i class="fa fa-trash-o "></i></a></button>
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

    
    