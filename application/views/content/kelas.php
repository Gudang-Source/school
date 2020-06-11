            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/setel') ?>">Setelan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Kelas</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Update Kelas</h4>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <a href="<?php echo base_url('welcome/add_kelas') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-library-plus"> </i> <span> Tambah Kelas</span> </button></a>
                                        </div>
                                    </div><br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Id Kelas </th>
                                                    <th> Kelas </th>
                                                    <th> Ruangan </th>
                                                    <th> Jurusan </th>
                                                    <th class="text-center"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($kelas->result() as $a) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $no++; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->id_kelas ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->kelas ?>
                                                        </td>
                                                        <td>
                                                            <?php echo strtoupper($a->ruangan) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo strtoupper($a->jurusan) ?>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <a href="<?php echo site_url('welcome/editadmin') ?>"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <a href=""><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
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