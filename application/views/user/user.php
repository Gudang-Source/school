<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-sm-4 mx-auto">
      <div class="auth-form-light p-5">
        <div class="brand-logo text-center">
          <img src="<?= base_url("assets/images/logo purple2.svg") ?>">
        </div>
        <h4>Ujian</h4>
        <h6 class="font-weight-light">Masukkan Data diri</h6>
        <form action="">
          <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
          </div>
          	<div class="form-group">
	          <button type="button" class="form-control btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Kelas</button>
	          <div class="dropdown-menu">
	            <a class="dropdown-item">Go back</a>
	            <a class="dropdown-item">Delete</a>
	            <a class="dropdown-item">Swap</a>
	          </div>
	        </div>
          <div class="mt-3">
            <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="<?php echo site_url("mobile/lanjut")?>">Lanjut</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
