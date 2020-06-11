            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/siswa') ?>">Setelan</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/siswa') ?>">Update Kelas</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Kelas</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Kelas</h4>
                                    <br>
                                    <form class="forms-sample" action="<?php echo site_url('welcome/add_kelasact') ?>" method="POST">
                                        <!-- <div class="form-group">
                                            <label for="exampleInputName1">Id Kelas</label>
                                            <input type="text" class="form-control" name="idkelas" id="exampleInputName1" placeholder="Id Kelas">
                                            <div class="text-danger">
                                                <?= form_error('idkelas') ?>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Kelas</label>
                                            <select class="form-control" id="exampleSelectGender" name="kelas">
                                                <option value="1">Kelas 1</option>
                                                <option value="2">Kelas 2</option>
                                                <option value="3">Kelas 3</option>
                                            </select>
                                            <div class="text-danger">
                                                <?= form_error('kelas') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ruangan</label>
                                            <input type="text" class="form-control" name="ruang" id="exampleInputName1" placeholder="Nama Ruangan">
                                            <div class="text-danger">
                                                <?= form_error('ruang') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Jurusan</label>
                                            <input type="text" class="form-control" name="jur" id="exampleInputName1" placeholder="Jurusan">
                                            <div class="text-danger">
                                                <?= form_error('jur') ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>