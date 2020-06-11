            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/akun') ?>">Akun Sekolah</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Akun Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Admin</h4>
                                    <p class="card-description"> Tambah Admin Baru </p>
                                    <form class="forms-sample" action="<?php echo site_url('welcome/add_akunact') ?>" enctype="multipart/form-data" method="POST">
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="user" id="exampleInputUsername2" placeholder="Username">
                                                <div class="text-danger">
                                                    <?php echo form_error('user'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email">
                                                <div class="text-danger">
                                                    <?php echo form_error('email'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                                <div class="text-danger">
                                                    <?php echo form_error('pass'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="repass" id="exampleInputConfirmPassword2" placeholder="Password">
                                                <div class="text-danger">
                                                    <?php echo form_error('repass'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Upload Foto</label>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Foto Admin</label>
                                                </div>
                                                <div class="text-danger">
                                                    <?php echo form_error('foto'); ?>
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