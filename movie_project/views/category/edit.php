
<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Cập nhật thông tin danh mục</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control round-form" id="" placeholder="" name="id" value="<?= $category->id?>">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control round-form" id="" placeholder="" name="name" value="<?= $category->name?>">
            </div>
            <div class="form-group">
                <label for="">Danh mục cha</label>
                <select name="parent_id" id="parent_id" class="form-control" >
                    <option value="0">Là danh mục cha</option>
                    <?php foreach ($parents as $parent) { ?>
                    <option <?php if($parent->id == $category->parent_id){echo "selected"; } ?> value="<?= $parent->id?>"><?= $parent->name?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" class="form-control round-form" id=""  placeholder="Nhập mô tả" name="description" value="<?= $category->description?>">
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


        