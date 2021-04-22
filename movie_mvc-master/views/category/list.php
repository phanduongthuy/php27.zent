<?php 

    require_once 'views/require/back-end/header.php';
 ?>


    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Danh sách danh mục</h3>
        <!-- row -->
        <div class="row mt">
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
                    <th><i class="fa fa-bullhorn"></i> Tên danh mục</th>
                    <th><i class="fa fa-transgender-alt"></i> Tên danh mục cha</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Mô tả</th>
                    <th><i class=" fa fa-edit"></i> Hành động</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $cate) {
                    ?>
                  <tr>
                    <td>
                      <?= $cate->id?>
                    </td>
                    <td>
                      <?= $cate->name?>
                    </td>
                    <td>
                      <?= $cate->parent?>
                    </td>
                    <td class="hidden-phone"><?= $cate->description?></td>
                    <td>>
                      <button class="btn btn-warning btn-xs"><a href="?admin=admin&mod=category&act=edit&id=<?= $cate->id ?>"><i class="fa fa-pencil"></i></a></button>
                      <button class="btn btn-danger btn-xs"><a href="?admin=admin&mod=category&act=destroy&id=<?= $cate->id ?>"><i class="fa fa-trash-o "></i></a></button>
                    </td>
                  </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>


<?php require_once 'views/require/back-end/footer.php'; ?>