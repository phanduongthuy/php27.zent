<?php 
	
	require_once 'views/require/back-end/header.php';

 ?>

 	 <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?= $user->name?></h3>
                <h5><?= $user->birdth?></h5>
                <p><?= $user->address?></p>
                <p><?= $user->email?></p>
                <!-- <p><button class="btn btn-theme"><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTJFqHsXKlTshjdLJDdVvZLkFbBZxflSDJHxSQMHmfMvtKHnKnvWcNgsHvgbwRtzgvRRBB"><i class="fa fa-envelope"></i> Send Message</a></button></p> -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?= "uploads/".$user->avatar ?>" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme"><a href="https://www.facebook.com/phanthuy11112001/" target="blank"><i class="fa fa-facebook"></i> <span  style="color: white;">Facebook</span></a></button>
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel" style="width: 90%; margin: auto;">
              <div class="panel-heading">
                <!-- <ul class="nav nav-tabs nav-justified">
                  <li class="col-12">
                    <a data-toggle="tab" href="#edit">Ch???nh S???a Th??ng Tin</a>
                  </li>
                </ul> -->
              </div>
              <!-- /panel-heading -->
              
                  
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">TH??NG TIN NG?????I D??NG</h4>
                        <form action="?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
				            <div class="form-group">
				                <label for="">T??n ng?????i d??ng</label>
				                <input type="hidden" class="form-control round-form" id="" placeholder="" name="id" value="<?= $user->id ?>">
				                <input type="text" class="form-control round-form" id="" placeholder="" name="name" value="<?= $user->name ?>">
				            </div>
				            <div class="form-group">
				                <label for="">Sinh nh???t</label>
				                <input type="date" class="form-control round-form" id="" placeholder="" name="birdth" value="<?= $user->birdth?>">
				            </div>
				            <div class="form-group">
				                <label for="">?????a ch???</label>
				                <input type="text" class="form-control round-form" id="" placeholder="" name="address" value="<?= $user->address?>">
				            </div>
				           <div class="form-group">
				                <label for="">?????a ch??? email</label>
				                <input type="email" class="form-control round-form" id="" placeholder="" name="email" value="<?= $user->email ?>">
				            </div>
				            <div class="form-group">
				                <label for="">???nh ?????i di???n</label>
				                <br>
				                <img class="fileupload-preview fileupload-exists thumbnail" src="<?= "uploads/".$user->avatar ?>" alt="" width="100px" height="100px">
				                <input type="file" class="form-control round-form" id="" placeholder="" name="avatar">
				            </div>
                    <div class="form-group">
                      <label for="">Ch???c v???</label>
                      <select name="permission" id="permission" class="form-control" >
                          <option value="1">Qu???n l??</option>
                          <option value="0">Nh??n vi??n</option>
                      </select>
                  </div>
				            <button type="submit" class="btn btn-primary mb">C???p nh???t</button>
				        </form>
                      </div>
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>



<?php 

	require_once 'views/require/back-end/footer.php';

 ?>