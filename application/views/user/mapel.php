<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-sm-12 mx-auto">
            <div class="brand-logo">
                <img src="<?= base_url('assets/images/logo purple2.svg') ?>">
            </div>
            <h4>Cari Mata Pelajaran</h4>
            <form class="pt-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Cari Sekolah">
                </div>
            </form>
            <br>
            <div class="row">
                <?php foreach ($mapel->result() as $s) { ?>
                    <div class="col-sm-4 grid-margin stretch-card" disa>
                        <a href="<?= base_url('masuk/masuk/' . $s->id_sek . '/' . $s->id_mapelsoal) ?>" style="text-decoration: none" onclick="return true">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <input type="hidden" value="<?= $s->pass ?>">
                                    </form>
                                    <h4 class="card-title"><?= $s->mapel ?></h4>
                                    <div class="media">
                                        <i class="mdi mdi-book-open-variant icon-md text-info d-flex align-self-start mr-3 text-dark"></i>
                                        <div class="media-body">
                                            <p class="card-text text-secondary">Waktu Ujian : <?= $s->mulai . " s/d " . $s->selesai ?> </p>
                                            <ul class="list-arrow text-primary">
                                                <li>Kelas : <?= $s->kelas ?></li>
                                                <li>Ruangan : <?= $s->ruangan ?></li>
                                                <li>Jurusan : <?= $s->jurusan ?></li>
                                            </ul>
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