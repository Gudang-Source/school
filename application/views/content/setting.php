
    <div class="page-header">
        <h3 class="page-title"> Data Siswa </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('welcome/siswa') ?>">Data Siswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Siswa</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Siswa</h4>
                    <p class="card-description"> Lengkapi Data Siswa </p>
                    <form class="forms-sample" action="<?php echo site_url('c_siswa/add_siswact') ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama lengkap</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputName1" placeholder="Nama">
                            <div class="text-danger">
                                <?= form_error('nama') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">NIS</label>
                            <input type="number" class="form-control" name="nis" id="exampleInputEmail3" placeholder="NIS">
                            <div class="text-danger">
                                <?= form_error('nis') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Kelamin</label>
                            <select class="form-control" id="exampleSelectGender" name="jk">
                                <option value="laki - laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <div class="text-danger">
                                <?= form_error('jk') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kelas</label>
                            <select class="form-control" id="exampleSelectGender" name="kelas">
                                <?php foreach ($kelas->result() as $k) { ?>
                                    <option value="<?= $k->id_kelas ?>"><?= $k->id_kelas ?></option>
                                <?php } ?>
                            </select>

                            <div class="text-danger">
                                <?= form_error('kelas') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nomer Handphone</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" name="hp" placeholder="Nomer Handphone">
                            <small id="emailHelp" class="form-text text-muted">Nomer Hp yang bisa dihubungi</small>
                            <div class="text-danger">
                                <?= form_error('hp') ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
