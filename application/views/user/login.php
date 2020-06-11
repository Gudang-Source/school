<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
                <div class="brand-logo text-center">
                    <img src="<?php echo base_url('assets/images/logo purple2.svg') ?>">
                </div>
                <h4>Login Ujian</h4>
                <h6 class="font-weight-light">Mata pelajaran</h6>
                <form class="pt-3" action="<?php echo site_url('masuk/login') ?>" method="POST">
                    <?php foreach ($data->result() as $l) { ?>
                        <input type="hidden" name="idsek" value="<?php echo $l->id_sek ?>">
                        <input type="hidden" name="soal" value="<?php echo $l->id_mapelsoal ?>">
                    <?php } ?>
                    <div class="form-group">
                        <input type="numeric" class="form-control form-control-lg" name="nis" id="exampleInputEmail1" placeholder="Nis">
                        <div class="text-danger">
                            <?php echo form_error('nis'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="pass" id="exampleInputPassword1" placeholder="Password">
                        <div class="text-danger">
                            <?php echo form_error('pass'); ?>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-rounded btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SING IN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->