<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title"> Tambah Siswa</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/siswa') ?>">data siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">tambah siswa</li>
          </ol>
      </nav>
  </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Sekolah</h4>
            <p class="card-description">Lengkapi Data Sekolah</p>
            <form class="forms-sample" action="<?php echo base_url('c_add/add_siswa') ?>" method="POST">
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nomer Induk Siswa</label>
                <div class="col-sm-9">
                  <input type="number" name="nis" class="form-control" id="exampleInputEmail2" placeholder="NIS">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Siswa</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" id="exampleInputUsername2" placeholder="Nama Siswa">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>