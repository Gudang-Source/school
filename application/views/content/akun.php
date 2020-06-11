            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Akun Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Akun Admin</h4>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <a href="<?php echo base_url('welcome/add_akun') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span> Tambah Akun</span> </button></a>
                                        </div>
                                    </div><br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> User </th>
                                                    <th> Username </th>
                                                    <th> Email </th>
                                                    <th> Pass </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($akun->result() as $a) { ?>
                                                    <tr>
                                                        <td>
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td class="py-1">
                                                            <img src="<?= base_url('assets/images/admin/' . $a->img)  ?>" class="rounded-circle" alt="Foto">
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