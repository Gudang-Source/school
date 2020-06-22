<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-sm-12 mx-auto">
            <div class="brand-logo">
                <img src="<?= base_url('assets/images/logo purple2.svg') ?>">
            </div>
            <br>
            <div class="row">
                <?php foreach ($mapel->result() as $m): ?>
                    <div class="col-sm-4 grid-margin stretch-card" disa>
                        <a href="<?= base_url("mobile/login/".$m->id_mapel) ?>" style="text-decoration: none" onclick="return true">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST">
                                        <input type="hidden" name="pass" value="<?php echo $m->pass?>">
                                        <input type="hidden" name="sekolah" value="<?php echo $m->id_sek?>">
                                    </form>
                                    <h4 class="card-title"><?php echo $m->mapel?></h4>
                                    <div class="media">
                                        <i class="mdi mdi-book-open-variant icon-md text-info d-flex align-self-start mr-3 text-dark"></i>
                                        <div class="media-body">
                                            <p class="card-text text-secondary">Waktu Ujian :  </p>
                                            <ul class="list-arrow text-primary">
                                                <li>Kelas : <?php echo $m->kelas?></li>
                                                <!-- <li>Ruangan : <?php echo $m->kelas?> </li> -->
                                                <li>Jurusan : <?php echo $m->jurusan?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>