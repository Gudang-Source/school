            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Tabel Soal </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tabel Soal</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Soal Ujian </h4>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <a href="<?php echo base_url('c_soal/soal') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-book-open-page-variant"></i> <span> Tambah Soal</span> </button></a>
                                        </div>
                                    </div><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th> Mapel </th>
                                                    <th> No </th>
                                                    <th> Soal </th>
                                                    <th> Jawab A </th>
                                                    <th> Jawab B </th>
                                                    <th> Jawab C </th>
                                                    <th> Jawab D </th>
                                                    <th> Jawaban </th>
                                                    <th class="text-center"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($soal->result() as $a) { ?>
                                                    <tr>
                                                        <td class="py-1">
                                                            <?php echo strtoupper($a->id_mapelsoal) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->nomer ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->soal ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->jawab_a ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->jawab_b ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->jawab_c ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->jawab_d ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $a->jawaban ?>
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