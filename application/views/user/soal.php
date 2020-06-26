<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-sm-8  mx-auto">
            <form action="<?= base_url('soal/ujian') ?>" method="post">
                <?php $no = 1;
                foreach ($soal as $s) { ?>
                   <?php echo"<input type='hidden' name='idsek' value='".$this->uri->segment(3)."'>"?>
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
                                        <p><img src="<?php echo base_url("assets/images/soal/").$s["soalimg"] ?>" alt="" style="width: 25%;height: 25%;"></p>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab<?php echo $no; ?>" value="a">
                                                    <label class="form-check-label">
                                                        <p><?= $s["jawaba"]  ?></p>
                                                        <p><img src="<?php echo base_url("assets/images/soal/").$s["jawabaimg"] ?>" alt="" style="width: 25%;height: 25%;"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="b">
                                                    <label class="form-check-label">
                                                        <?= strip_tags($s["jawabb"])  ?>
                                                        <p><img src="<?php echo base_url("assets/images/soal/").$s["jawabbimg"] ?>" alt="" style="width: 25%;height: 25%;"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="c">
                                                    <label class="form-check-label">
                                                        <?= $s["jawabc"]  ?> 
                                                        <p><img src="<?php echo base_url("assets/images/soal/").$s["jawabcimg"] ?>" alt="" style="width: 25%;height: 25%;"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="d">
                                                    <label class="form-check-label">
                                                        <?= strip_tags($s["jawabd"])  ?>
                                                        <p><img src="<?php echo base_url("assets/images/soal/").$s["jawabdimg"] ?>" alt="" style="width: 25%;height: 25%;"></p>
                                                    </label>
                                                </div>
                                            </div>
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
                <div class="text-center">
                    <button type="submit" class="btn btn-gradient-primary btn-rounded btn-fw">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>