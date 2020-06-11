            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Data Siswa </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title">Data Siswa</h4>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <a href="<?php echo base_url('c_siswa/add_siswa') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span> Tambah Siswa</span> </button></a>
                                        </div>
                                    </div><br>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Nama </th>
                                                <th> NIS </th>
                                                <th> Jenis Kelamin </th>
                                                <th> Kelas </th>
                                                <th>No Handphone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($siswa->result() as $a) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $no++; ?>
                                                    </td>
                                                    <td class="py-1">
                                                        <?php echo $a->nama ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $a->nis ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $a->jk ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $a->id_kelas ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $a->nope ?>
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