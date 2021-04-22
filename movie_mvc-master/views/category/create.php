<?php 
require_once 'views/require/back-end/header.php';
?>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Tạo mới danh mục</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form class="form-horizontal style-form" action="?admin=admin&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control round-form" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Danh mục cha</label>
                <select name="parent_id" id="parent_id" class="form-control" >
                    <option value="0">Là danh mục cha</option>
                    <?php foreach ($parents as $parent) { ?>
                        <option value="<?= $parent->id?>"><?= $parent->name?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Nhập mô tả" name="description"></textarea>
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

