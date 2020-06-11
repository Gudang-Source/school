            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/setel') ?>">Setelan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Data Siswa</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Update Data Siswa</h4>
                                        </div>

                                    </div><br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> ID Kelas </th>
                                                    <th> NIS </th>
                                                    <th> Nama </th>
                                                    <th> Jenis Kelamin </th>
                                                    <th> No Handphone </th>
                                                    <th class="text-center"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($siswa->result() as $a) { ?>
                                                    <tr>
                                                        <td>
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->id_sek ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->nis ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->nama ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->jk ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->nope ?>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <a href="<?= base_url('c_siswa/edit_siswa/' . $a->id) ?>">
                                                                        <button type="button" class="btn btn-outline-success btn-sm btn-icon-text">
                                                                            <i class="mdi mdi-pencil btn-icon-prepend"></i> Edit
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <a href="<?= base_url('c_siswa/hapus/', $a->id) ?>">
                                                                        <button type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                                                                            <i class="mdi mdi-delete-forever btn-icon-prepend"></i> Hapus
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>