            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Tambah Soal </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('c_soal') ?>">Tabel Soal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Soal</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Soal</h4>
                                    <br>
                                    <form class="forms-sample" action="<?php echo site_url('c_soal/addsoal') ?>" method="POST">
                                        <div class="soal" id="soal">
                                            <div class="form-group">
                                                <label for="exampleSelectGender">Id Mapel</label>
                                                <select class="form-control" name="mapel" id="exampleSelectGender">
                                                    <?php foreach ($mapel->result_array() as $s) { ?>
                                                        <option value="<?= $s["id_mapelsoal"] ?>"><?= strtoupper($s["id_mapelsoal"]) ?></option>
                                                    <?php } ?>
                                                </select>
                                                <div class="text-danger">
                                                    <?= form_error('mapel') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>No Urut Soal</label>
                                                <input type="number" class="form-control" name="no" id="exampleInputEmail3" placeholder="No Urut">
                                                <div class="text-danger">
                                                    <?= form_error('no') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Soal</label>
                                                <textarea name="soal" class="ckeditor"></textarea>
                                                <div class="text-danger">
                                                    <?= form_error('soal') ?>
                                                </div>
                                            </div>
                                        </div>
                                            <hr>
                                        <br>
                                        <div class="form-group" id="jawaba">
                                            <label>Jawaban A</label>
                                            <textarea name="jawaba" class="ckeditor"></textarea>
                                            <div class="text-danger">
                                                <?= form_error('jawaba') ?>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="jawaban" class="form-check-input" value="A"> Kunci Jawaban </label>
                                            </div>
                                            <div class="text-danger">
                                                <?= form_error('jawaban') ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group" id="jawabb">
                                            <label>Jawaban B</label>
                                            <textarea name="jawabb" class="ckeditor"></textarea>
                                            <div class="text-danger">
                                                <?= form_error('jawabb') ?>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="jawaban" class="form-check-input" value="B"> Kunci Jawaban </label>
                                            </div>
                                            <div class="text-danger">
                                                <?= form_error('jawaban') ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group" id="jawabc">
                                            <label>Jawaban C</label>
                                            <textarea name="jawabc" class="ckeditor"></textarea>
                                            <div class="text-danger">
                                                <?= form_error('jawabc') ?>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="jawaban" class="form-check-input" value="C"> Kunci Jawaban </label>
                                            </div>
                                            <div class="text-danger">
                                                <?= form_error('jawaban') ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group" id="jawabd">
                                            <label>Jawaban D</label>
                                            <textarea name="jawabd" class="ckeditor"></textarea>
                                            <div class="text-danger">
                                                <?= form_error('jawabd') ?>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="jawaban" class="form-check-input" value="D"> Kunci Jawaban </label>
                                            </div>
                                            <div class="text-danger">
                                                <?= form_error('jawaban') ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>