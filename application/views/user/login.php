<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-sm-4 mx-auto">
      <div class="auth-form-light p-5">
        <div class="brand-logo text-center">
          <img src="<?= base_url("assets/images/logo purple2.svg") ?>">
        </div>
        <h4 class="text-center">Login Mata Pelajaran</h4>
        <br>
        <form action="<?= site_url("soal") ?>" method="POST" class="text-center">
          <div class="form-group">
            <input type="hidden" name="mapel" value="<?php echo $this->uri->segment(3) ?>">
            <input type="password" name="pass" class="form-control" placeholder="Password Kelas">
          </div>
          <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
