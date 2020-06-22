<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-sm-4 mx-auto">
      <div class="auth-form-light p-5">
        <div class="brand-logo text-center">
          <img src="<?= base_url("assets/images/logo purple2.svg") ?>">
        </div>
        <h4>Ujian</h4>
        <h6 class="font-weight-light">Masukkan Data diri</h6>
        <form action="<?php echo site_url('mobile/lanjut') ?>" method="POST">
          <div class="form-group">
            <select class="form-control" name="sekolah">
              <option value=""> Pilih Sekolah</option>
              <?php foreach ($sekolah->result_array() as $k): ?>
              <option value="<?php echo $k["id_sekolah"] ?>"><?php echo $k["nama"] ?></option>
              <?php endforeach ?>
            </select>
            <div class="text-danger">
                <?= form_error('sekolah') ?>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="nis" class="form-control form-control-lg" id="nis" placeholder="NIS">
            <div class="text-danger">
                <?= form_error('nis') ?>
            </div>
          </div>
          	<div class="form-group">
	          <select class="form-control" name="kelas">
              <option value=""> Masukkan Kelas</option>
              <option value="1"> Kelas 1</option>
              <option value="2"> Kelas 2</option>
              <option value="3"> Kelas 3</option>
            </select>
            <div class="text-danger">
                <?= form_error('kelas') ?>
            </div>
	        </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Lanjut</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
