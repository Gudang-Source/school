            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Tambah Mapel Untuk Ujian </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('c_mapel') ?>">Mapel Untuk Ujian</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Mapel</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Mapel</h4>
                                    <p class="card-description"> Tambah Mapel Baru </p>
                                    <form class="forms-sample" action="<?php echo site_url('c_mapel/adddact') ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="exampleSelectGender" class="col-sm-3 col-form-label">Kelas</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="exampleSelectGender" name="kelas">
                                                    <?php foreach ($kel->result() as $k) { ?>
                                                        <option value="<?= $k->id_kelas ?>"><?= strtoupper($k->id_kelas) ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="text-danger">
                                                <?= form_error('kelas') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleSelectGender" class="col-sm-3 col-form-label">Id Mapel</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="exampleSelectGender" name="mapel">
                                                    <?php foreach ($mapel->result() as $m) { ?>
                                                        <option value="<?= $m->id_mapel ?>"><?= strtoupper($m->id_mapel) ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="text-danger">
                                                <?= form_error('mapel') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectGender" class="col-sm-3 col-form-label">Semester</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="semester" id="membershipRadios1" value="ganjil"> Genap </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="semester" id="membershipRadios2" value="genap"> Ganjil </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-danger">
                                                    <?= form_error('semester') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tanggal Ujian</label>
                                            <div class="col-sm-9">
                                                <input type='date' name="tanggal" class="form-control" />      
                                                <div class="text-danger">
                                                    <?= form_error('tanggal') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Waktu  Ujian</label>
                                            <div class="col-sm-4">
                                            <input type="time" name="mulai" class="form-control">
                                                <div class="text-danger">
                                                    <?= form_error('mulai') ?>
                                                </div>
                                            </div>
                                          <label for="" class="col-sm-1 col-form-label">S/D</label>

                                            <div class="col-sm-4">
                                            <input type="time" name="selesai" class="form-control">
                                                <div class="text-danger">
                                                    <?= form_error('selesai') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pass" class="form-control" placeholder="Password" />
                                                <div class="text-danger">
                                                    <?= form_error('pass') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
