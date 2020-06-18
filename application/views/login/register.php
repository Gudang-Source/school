<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-6 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo text-center">
                            <img src="<?php echo base_url('assets/images/logo purple2.svg') ?>">
                        </div>
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form class="pt-3" action="<?php echo site_url('login/loginact') ?>" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="id_sek" id="exampleInputUsername1" placeholder="No Sekolah">
                                <div class="text-danger">
                                    <?php echo form_error('id_sek'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="user" id="exampleInputUsername1" placeholder="Username">
                                <div class="text-danger">
                                    <?php echo form_error('user'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                                <div class="text-danger">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="pass" id="exampleInputPassword1" placeholder="Password">
                                <div class="text-danger">
                                    <?php echo form_error('pass'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="confpass" id="exampleInputPassword1" placeholder="Re-Entry Password">
                                <div class="text-danger">
                                    <?php echo form_error('confpass'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control form-control-lg" name="no" id="exampleInputEmail1" placeholder="No Telepon">
                                <div class="text-danger">
                                    <?php echo form_error('no'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                                    <label class="form-control form-control-lg custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Foto Admin</label>
                                </div>
                                <div class="text-danger">
                                    <?php echo form_error("foto"); ?>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="agree" class="form-check-input"> I agree to all Terms & Conditions </label>
                                    <div class="text-danger">
                                        <?php echo form_error('agree'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="<?php echo base_url('login') ?>" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>