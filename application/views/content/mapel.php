<div class="content-wrapper">
	<div class="page-header">
      <h3 class="page-title"> Mata Pelajaran </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url("admin") ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">mata pelajaran</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 ">
                <h4 class="card-title">Data Mata pelajaran</h4>
              </div>
              <div class="col-sm-8">
                <p class="card-description"> Lengkapi data Mapel</p>
              </div>
              <div class="col-sm-4 text-right">
                <a href="<?php echo base_url('admin/add_mapel') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span> Tambah Mapel</span> </button></a>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Id Mapel </th>
                  <th> Mapel </th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="py-1">
                    <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                  </td>
                  <td>nip</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>