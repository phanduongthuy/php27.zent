
<?php 

require_once 'views/require/back-end/header.php';
?>


<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Cập nhật video nguồn</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="content-panel" style="padding: 30px !important;">
         <form action="?admin=admin&mod=video&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên video nguồn</label>
                <input type="hidden" class="form-control" id="" name="id" value="<?= $video->id?>">
                <input type="text" class="form-control round-form" id="" placeholder="Nhập tên video" name="name" required="" value="<?= $video->name?>">
            </div>
            <div class="form-group">
                <label for="">Tên phim</label>
                <select name="movie_id" id="movie_id" class="form-control" >
                    <?php foreach ($movies as $movie) { ?>
                        <option <?php if($movie->id==$video->movie_id) echo "selected"; ?> value="<?= $movie->id?>"><?= $movie->name?></option>
                    <?php } ?>
                   

                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                 <input type="text" class="form-control round-form" id=""placeholder="Nhập mô tả" name="description" value="<?= $video->description?>">
            </div>
            <div class="form-group">
                <label for="">Nguồn</label>
                <input type="text" class="form-control round-form" id="" name="source" value="<?= $video->source?>">
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
