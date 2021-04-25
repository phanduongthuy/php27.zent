
<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Cập nhật thông tin phim</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=movie&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $movie->id ?>">
                <input type="text" class="form-control round-form" id="" placeholder="" name="name" value="<?= $movie->name ?>">
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" class="form-control round-form" id=""placeholder="Nhập mô tả" name="description" value="<?= $movie->description?>">
            </div>
            <div class="form-group">
                <label for="">Ảnh mô tả</label>
                <img  class="fileupload-preview fileupload-exists thumbnail" src="<?= "uploads/".$movie->image ?>" width="100px" height="100px">
                <input type="file" class="form-control" id="" name="image">
            </div>
            <div class="form-group">
                <label for="">Loại phim</label>
                <div class="radio">
                    <label>
                        <input <?php if ($movie->type == 0){ echo "checked";} ?> type="radio" name="type" value="0">Phim lẻ
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input <?php if ($movie->type == 1){echo "checked";} ?> type="radio" name="type" value="1">Phim bộ
                    </label>
                </div>
                
            </div>
            <div class="form-group">
                <label for="">Danh mục phim</label>
                <select name="category_id" id="category_id" class="form-control" >
                    <?php foreach ($categories as $cate) { ?>
                        <option <?php if ($cate->id == $movie->category_id){ echo "selected";}  ?> value="<?= $cate->id?>"><?= $cate->name?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Giới hạn độ tuổi</label>
                <div class="radio">
                    <label>
                        <input <?php if ($movie->type == 0){echo "checked";} ?> type="radio" name="age" value="0">18<sup>-</sup>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input <?php if ($movie->type == 1){echo "checked";} ?> type="radio" name="age" value="1">18<sup>+</sup>
                    </label>
                </div>
                
            </div>
            <div class="form-group">
                <label for="">Độ phân giải</label>
                <select name="quality" class="form-control">
                      <option <?php if ($movie->quality == 0)echo "selected"; ?> value="0"><b>SD</b></option>
                      <option <?php if ($movie->quality == 1)echo "selected"; ?>value="1"><b>HD</b></option>
                      <option <?php if ($movie->quality == 2)echo "selected"; ?>value="2"><b>FullHD</b></option>
                      <option <?php if ($movie->quality == 3)echo "selected"; ?>value="3"><b>2K</b></option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thời lượng phim</label>
                <input type="text" class="form-control round-form" id="" placeholder="Nhập thời lượng phim" name="time" value="<?= $movie->time?>">
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
