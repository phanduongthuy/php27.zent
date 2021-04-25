<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Tạo mới thông tin phim</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=movie&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên phim</label>
                <input type="text" class="form-control round-form" id="" placeholder="Nhập tên phim" name="name" required="">
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Nhập mô tả" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="">Ảnh mô tả</label>
                <input type="file" class="form-control round-form" id="" name="image">
            </div>
            <div class="form-group">
                <label for="">Loại phim</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="type" value="0">Phim lẻ
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="type" value="1">Phim bộ
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Danh mục phim</label>
                <select name="category_id" id="category_id" class="form-control" >
                    <?php foreach ($categories as $cate) { ?>
                        <option value="<?= $cate->id?>"><?= $cate->name?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Giới hạn độ tuổi</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="age" value="0">18<sup>-</sup>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="age" value="1">18<sup>+</sup>
                    </label>
                </div>
                
            </div>
            <div class="form-group">
                <label for="">Độ phân giải       </label>

                <select name="quality" class="form-control">
                      <option value="0"><b>SD</b></option>
                      <option value="1"><b>HD</b></option>
                      <option value="2"><b>FullHD</b></option>
                      <option value="3"><b>2K</b></option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thời lượng phim</label>
                <input type="text" class="form-control round-form" id="" placeholder="Nhập thời lượng phim" name="time">
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


        
