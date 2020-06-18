<div class="content-wrapper">
	<div class="page-header">
      <h3 class="page-title"> Akun Admin</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Akun Admin</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="card-title">Data Akun</h4>    
              </div>
              <div class="col-sm-8">
                <p class="card-description"> Lengkapi data Admin</p>
              </div>
              <div class="col-sm-4 text-right">
                <a href="<?php echo base_url('admin/add_admin') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span> Tambah Mapel</span> </button></a>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Foto</th>
                  <th> Nama Admin </th>
                  <th> Email </th>
                  <th> No Telpon </th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($admin->result_array() as $s): ?>
                  <tr>
                  	<td><?php echo $no; ?></td>
                    <td class="py-1">
                      <img src="<?php echo base_url('assets/images/admin/').$s["foto"] ?>" alt="image" />
                    </td>
                    <td> <?php echo $s["nama"] ?></td>
                    <td><?php echo $s["email"] ?></td>
                    <td> <?php echo $s["no"] ?> </td>
                    <td class="text-center">
                        <a href="<?= base_url('welcome/hapus/'. $s["id"]) ?>">
                            <button type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                                <i class="mdi mdi-delete-forever btn-icon-prepend"></i> Hapus
                            </button>
                        </a>
                    </td>
                  </tr>
                <?php $no++; endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>