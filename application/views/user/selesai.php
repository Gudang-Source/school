<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
                <div class="brand-logo text-center">
                    <img src="<?php echo base_url('assets/images/logo purple2.svg') ?>">
                </div>
                <h4>Ujian Selesai</h4>
                <h5 class="font-weight-light">Terimakasih <?= $siswa ?> <br> Semoga Hasilnya Memuaskan <i class="fa fa-smile-o" aria-hidden="true"></i>
</h5>
                <h6 class="font-weight-light">Nama Siswa : <?= $siswa ?> </h6>
                <h6 class="font-weight-light">Mata pelajaran : <?= $siswa ?></h6><br>
                <a href="<?= site_url("mobile")?>" style="text-decoration : none"><button type="submit" class="btn btn-rounded btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SING IN</button></a>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->