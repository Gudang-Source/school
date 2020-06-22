<div class="content-wrapper">
	<div class="page-header">
      <h3 class="page-title"> Profil Sekolah</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profil Sekolah</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="card-title">Sekolah</h4>    
              </div>
              <div class="col-sm-8">
                <p class="card-description"> Lengkapi data Sekolah</p>
              </div>
              <div class="col-sm-4 text-right">
                <a href="<?php echo base_url('admin/seting') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span>Sekolah</span> </button></a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th> Nomer Sekolah</th>
                    <th> Nama Sekolah</th>
                    <th> Alamat </th>
                    <th> Email </th>
                    <th> Telepon </th>
                    <th> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($profil->result_array() as $p): ?>
                    <tr>
                    	<td><?php echo $p["id_sekolah"] ?></td>
                      <td><?php echo $p["nama"] ?></td>
                      <td><?php echo $p["alamat"] ?></td>
                      <td><?php echo $p["email"] ?></td>
                      <td><?php echo $p["telpon"] ?></td>
                      <td class="text-center">
                          <a href="<?= base_url('c_delet/sekolah/'. $p["id"]) ?>">
                              <button type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                                  <i class="mdi mdi-delete-forever btn-icon-prepend"></i> Hapus
                              </button>
                          </a>
                      </td>
                    </tr>
                  <?php  endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>