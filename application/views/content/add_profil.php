            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/profil') ?>">Profil Sekolah</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/setel') ?>">Setelan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah profil Sekolah</h4>
                                    <p class="card-description"> Lengkapi Data Profil Sekolah </p>
                                    <form class="forms-sample" action="<?= site_url('welcome/sekolah') ?>" enctype="multipart/form-data" method="POST">
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sekolah" class="form-control" id="exampleInputUsername2" placeholder="Nama Sekolah">
                                                <div class="text-danger">
                                                    <?php echo form_error('sekolah'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">provinsi</label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-sm" name="prov" id="exampleFormControlSelect3">
                                                    <option value="Aceh">Aceh</option>
                                                    <option value="Bengkulu">Bengkulu</option>
                                                    <option value="Lampung">Lampung</option>
                                                    <option value="Riau">Riau</option>
                                                    <option value="Sumbar">Sumatra Barat</option>
                                                </select>
                                                <div class="text-danger">
                                                    <?php echo form_error('prov'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Kabupaten</label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-sm" name="kab" id="exampleFormControlSelect3">
                                                    <option value="Natuna">Natuna</option>
                                                    <option value="Bintan">Bintan</option>
                                                    <option value="Aceh Tengah">Aceh Tengah</option>
                                                    <option value="Aceh Jaya">Aceh Jaya</option>
                                                    <option value="Bener Meriah">Bener Meriah</option>
                                                </select>
                                                <div class="text-danger">
                                                    <?php echo form_error('kab'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Kecamatan</label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-sm" name="kec" id="exampleFormControlSelect3">
                                                    <option value="Bandar">Bandar</option>
                                                    <option value="Bener Kelipah">Bener Kelipah</option>
                                                    <option value="Bukit">Bukit</option>
                                                    <option value="Gajah Putih">Gajah Putih</option>
                                                    <option value="Mesidah">Mesidah</option>
                                                </select>
                                                <div class="text-danger">
                                                    <?php echo form_error('kec'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="alamat" id="exampleTextarea1" rows="4"></textarea>
                                                <div class="text-danger">
                                                    <?php echo form_error('alamat'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email Sekolah</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email" id="exampleInputUsername2" placeholder="Email Sekolah">
                                                <div class="text-danger">
                                                    <?php echo form_error('email'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">kontak Sekolah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="kontak" id="exampleInputUsername2" placeholder="kontak Sekolah">
                                                <div class="text-danger">
                                                    <?php echo form_error('kontak'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Upload Logo</label>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                </div>
                                                <div class="text-danger">
                                                    <?php echo form_error("foto"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>