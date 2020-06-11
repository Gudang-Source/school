            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/setel') ?>">Setelan</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/editakun') ?>">Update data Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Akun Admin</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Update Akun Admin</h4>
                                        </div>

                                    </div><br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Username </th>
                                                    <th> Email </th>
                                                    <th> Pass </th>
                                                    <th class="text-center"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($akun->result() as $a) { ?>
                                                    <tr>
                                                        <td>
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->username ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->email ?>
                                                        </td>
                                                        <td>
                                                            <?= $a->pass ?>
                                                        </td>
                                                        <td class="text-center" >
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <a href="<?= base_url('welcome/editadmin/' . $a->id) ?>">
                                                                        <button type="button" class="btn btn-outline-success btn-sm btn-icon-text">
                                                                            <i class="mdi mdi-pencil btn-icon-prepend"></i> Edit
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <a href="<?= base_url('welcome/hapus/', $a->id) ?>">
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