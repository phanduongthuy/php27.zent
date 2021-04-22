
<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Tạo Mới Video Nguồn</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=video&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên video nguồn</label>
                <input type="text" class="form-control round-form" id="" placeholder="Nhập tên video" name="name" required="">
            </div>
            <div class="form-group">
                <label for="">Tên phim</label>
                <select name="movie_id" id="movie_id" class="form-control" >
                    <?php foreach ($movies as $movie) { ?>
                        <option value="<?= $movie->id?>"><?= $movie->name?></option>
                    <?php } ?>
                   

                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Nhập mô tả" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="">Nguồn</label>
                <input type="text" class="form-control round-form" id="" name="source">
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
