<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-sm-6 mx-auto">
      <div class="auth-form-light p-5">
        <div class="brand-logo text-center">
          <img src="<?= base_url("assets/images/logo purple2.svg") ?>">
        </div>
        <h4 class="text-center">UJIAN SELESAI</h4>
        <br>
        <form action="<?= site_url("mobile") ?>"  class="text-center">
          <div class="form-group row">
            <label class="col-sm-12">Terimakasih :</label>
          </div>
          <div class="form-group  row">
            <label class="col-sm-3 text-left">Nama Siswa :</label>
            <label class="col-sm-9 text-left"><?php echo $nama ?></label>
          </div>
          <div class="form-group  row">
            <label class="col-sm-3 text-left">Mata Pelajaran : </label>
            <label class="col-sm-9 text-left"><?php echo $mapel ?></label>
          </div>
          <button type="submit" class="btn btn-primary">selesai</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
