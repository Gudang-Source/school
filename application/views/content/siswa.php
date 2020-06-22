<div class="content-wrapper">
	<div class="page-header">
      <h3 class="page-title"> Data Siswa </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url("admin") ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="card-title">Data Siswa</h4>    
              </div>
              <div class="col-sm-8">
                <p class="card-description"> Lengkapi data siswa</p>
              </div>
              <div class="col-sm-4 text-right">
                <a href="<?php echo base_url('admin/add_siswa') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span> Tambah Siswa</span> </button></a>
              </div>
            </div>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> No </th>
                  <th> NIS</th>
                  <th> Nama Siswa</th>
                  <th class="text-center"> Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($anak->result_array() as $s) { ?>
                  <tr>
                  <td><?php echo $no ?></td>
                  <td class="py-1"><?php echo $s["nis"] ?></td>
                  <td><?php echo $s["nama"] ?></td>
                  <td class="text-center">
                    <a href="<?= base_url('c_delet/siswa/'. $s["id"]) ?>">
                        <button type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                            <i class="mdi mdi-delete-forever btn-icon-prepend"></i> Hapus
                        </button>
                    </a>
                </td>
                </tr>

                <?php $no++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>