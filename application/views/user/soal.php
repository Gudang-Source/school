<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-sm-8 offsset-sm-2 mx-auto">
            <form action="<?= base_url('soal/ujian') ?>" method="post">
                <?php $no = 1;
                foreach ($soal as $s) { ?>
                    <input type="hidden" name="idsek" value="<?php echo $this->uri->segment(3) ?>">
                    <input type="hidden" name="mapel"value="<?php echo $this->uri->segment(4) ?>">
                    <input type="hidden" name="kelas" value="<?php echo $s["kelas"] ?>">
                    <input type="hidden" name="nosoal" value="<?php echo $s["nosoal"] ?>">
                    <input type="hidden" name="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-y h:i:s'); ?>">

                    <div class="card-deck" style="padding-top: 1%">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6> <?= $s["nosoal"] . " . " . $s["soal"] ?></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab<?php echo $no; ?>" value="a">
                                            <label class="form-check-label">
                                                <p><?= $s["jawaba"]  ?></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="b">
                                            <label class="form-check-label">
                                                <?= strip_tags($s["jawabb"])  ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="c">
                                            <label class="form-check-label">
                                                <?= $s["jawabc"]  ?> 
                                                <p><img src="<?php echo base_url("assets/images/soal/logo.png") ?>" alt="" style="width: 10%;height: 10%;"></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="d">
                                            <label class="form-check-label">
                                                <?= strip_tags($s["jawabd"])  ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $no++;
                    $hitung = count($s);
                } ?>
                <br>
                <div class="offset-sm-5">
                    <button type="submit" class="btn btn-gradient-primary btn-rounded btn-fw">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>