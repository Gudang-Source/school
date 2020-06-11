<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo text-center">
                            <img src="<?php echo base_url('assets/images/logo purple2.svg') ?>">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3" action="<?php echo site_url('login/loginpun') ?>" method="POST">
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
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SING IN</button>
                            </div><br>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <a href="<?php echo base_url("login/forget") ?>" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="<?php echo base_url('login/regis') ?>" class="text-primary">Create</a>
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