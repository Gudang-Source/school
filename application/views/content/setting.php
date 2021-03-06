<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title"> Profil Sekolah</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url("admin") ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profil</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Profil Sekolah</h4>
            <p class="card-description">Lengkapi Data Sekolah</p>
            <form class="forms-sample" action="<?php echo base_url('C_add/profil')?>" method="POST">
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Sekolah</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama" id="exampleInputUsername2" placeholder="Nama Sekolah">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="alamat" placeholder="Alamat Jalan sekolah"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Alamat Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" id="exampleInputConfirmPassword2" placeholder="Alamat Email">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">No telpon</label>
                <div class="col-sm-9">
                  <input type="tel" class="form-control" name="telpon" id="exampleInputConfirmPassword2" placeholder="Nomer Telepon">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>