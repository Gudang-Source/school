<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="<?= base_url() ?>" class="nav-link">
                <?php foreach ($user->result() as $u) { ?>
                    <div class="nav-profile-image">
                        <img src="<?= base_url('assets/images/admin/' . $u->img) ?>" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2"><?php echo $u->username ?></span>
                    </div>
                <?php } ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <p class="text-secondary">Profil Sekolah</p>
                </div>
            </span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Profil sekolah</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('welcome/profil') ?>">Profil Sekolah</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('welcome/akun') ?>">Akun Sekolah</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('welcome/setel') ?>">Setelan</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('C_siswa') ?>">
                <span class="menu-title">Data Siswa</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <p class="text-secondary">Mata pelajaran</p>
                </div>
            </span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#mapel" aria-expanded="false" aria-controls="mapel">
                <span class="menu-title">Mapel</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="mapel">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('c_mapel/add_mapel') ?>">Tambah Mapel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('c_mapel') ?>">Tambah Mapel Untuk Ujian</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('C_soal') ?>">
                <span class="menu-title">Tabel Soal</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <p class="text-secondary">Ujian</p>
                </div>
            </span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Hasil Ujian</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('C_ujian') ?>"> Hasil Ujian Perkelas </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('C_ujian/ujian_mapel') ?>"> Hasil Ujian Permapel </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('C_ujian/ujian_all') ?>"> Hasil Semua Ujian </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('welcome/report') ?>">
                <span class="menu-title">Report</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>