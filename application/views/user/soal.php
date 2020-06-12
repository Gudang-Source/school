<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <div class="col-sm-8 offsset-sm-2 mx-auto">
            <form action="<?= base_url('ujian') ?>" method="post">
                <?php $no = 1;
                foreach ($soal->result_array() as $s) { ?>
                    <div class="card-deck" style="padding-top: 1%">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6><?= $s["nomer"] . " . " . strip_tags($s["soal"]) ?></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="a">
                                                <?= strip_tags( $s["jawab_a"])  ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="b">
                                                <?= strip_tags($s["jawab_b"])  ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="c">
                                                <?= strip_tags($s["jawab_c"])  ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jawab_<?php echo $no; ?>" id="jawab_<?php echo $no; ?>" value="d">
                                                <?= strip_tags($s["jawab_d"])  ?>
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