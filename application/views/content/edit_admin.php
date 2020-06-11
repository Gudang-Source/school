            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/akun') ?>">Akun Sekolah</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Akun Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Admin</h4>
                                    <p class="card-description"> Edit Data Admin</p>
                                    <form class="forms-sample" action="<?php echo site_url('welcome/edit_adminact') ?>" method="POST" enctype="multipart/form-data">
                                        <?php foreach ($admin->result() as $a) { ?>
                                            <input type="text" name="id" value="<?= $a->id ?>" hidden>
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="user" id="exampleInputUsername2" placeholder="Username" value="<?= $a->username ?> ">
                                                    <div class="text-danger">
                                                        <?php echo form_error('user'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email" value="<?= $a->email ?>">
                                                    <div class="text-danger">
                                                        <?php echo form_error('email'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="pass" id="exampleInputPassword2" placeholder="Password" value="<?= $a->pass ?>">
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
                                                        <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02" value="<?= $a->img ?>">
                                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Foto Admin</label>
                                                    </div>
                                                    <div class="text-danger">
                                                        <?php echo form_error('kontak'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>