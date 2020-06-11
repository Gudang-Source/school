<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-sm-12 mx-auto">
            <div class="brand-logo">
                <img src="<?= base_url('assets/images/logo purple2.svg') ?>">
            </div>
            <h4>Cari Sekolah</h4>
            <form class="pt-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Cari Sekolah">
                </div>
            </form>
            <br>
            <div class="row">
                <?php foreach ($sekolah->result() as $s) { ?>
                    <div class="col-sm-6 grid-margin stretch-card">
                        <a href="<?= base_url('mobile/mapel/') . $s->id_sek ?>" style="text-decoration: none">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-sm-4">
                                        <img src="<?= base_url('assets/images/sekolah/') . $s->foto ?>" class="card-img" style="padding-top: 16%; padding-left : 10%; padding-right : 10%; padding-bottom : 5%;">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $s->nama ?></h5>
                                            <p class="card-text text-dark"><?php echo $s->alamat . ", " . $s->kec . ", " . $s->kab . ", " . $s->provinsi ?></p>
                                            <!-- <p class="card-text"><small class="text-muted">Last updated</small></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>