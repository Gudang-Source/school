<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title"> Tambah Admin</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/akun') ?>">data admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">tambah admin</li>
          </ol>
      </nav>
  </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Admin Sekolah</h4>
            <p class="card-description">Lengkapi Data Admin</p>
            <form class="forms-sample" action="<?php echo base_url('C_add/admin') ?>" enctype="multipart/form-data" method="POST">
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Admin</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Nama Admin">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email Admin</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nomer Telpon</label>
                <div class="col-sm-9">
                  <input type="tel" name="no" class="form-control" id="exampleInputEmail2" placeholder="Nomer Telepon">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" name="pass" class="form-control" id="exampleInputEmail2" placeholder="Password">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Re-entry Password</label>
                <div class="col-sm-9">
                  <input type="password" name="confpass" class="form-control" id="exampleInputEmail2" placeholder="Re-entry Password">
                </div>
              </div>
              <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Foto Admin</label>
                  <div class="col-sm-9">
                      <div class="custom-file">
                          <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                          <label class="custom-file-label col-form-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Foto Admin</label>
                      </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>