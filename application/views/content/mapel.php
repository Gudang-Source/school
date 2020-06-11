            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Mata pelajaran Untuk Ujian </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mata pelajaran Untuk Ujian</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Mata Pelajaran </h4>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <a href="<?php echo base_url('c_mapel/addd_mapel') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-book-open-page-variant"></i> <span> Tambah Mapel</span> </button></a>
                                        </div>
                                    </div><br>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Id Mapel ujian </th>
                                                    <th> Mata Pelajaran </th>
                                                    <th> ID Kelas </th>
                                                    <th> Semester </th>
                                                    <th> Tanggal Ujian</th>
                                                    <th> Waktu Mulai </th>
                                                    <th> Waktu Selesai </th>
                                                    <th> Password </th>
                                                    <th class="text-center"> Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($mapel->result() as $a) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $no++; ?>
                                                        </td>
                                                        <td class="py-1">
                                                            <?php echo strtoupper($a->id_mapelsoal) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo strtoupper($a->id_mapel) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo strtoupper($a->id_kelas) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->semester ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->tanggal ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->mulai ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->selesai ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->pass ?>
                                                        </td>
                                                        <td class="text-center">
                                                        <a href="<?= base_url('welcome/hapus/', $a->id) ?>">
                                                            <button type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                                                                <i class="mdi mdi-delete-forever btn-icon-prepend"></i> Hapus
                                                            </button>
                                                        </a>
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