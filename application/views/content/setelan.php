            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Setel Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Setelan Sekolah</h4>
                                    <p class="card-description"> Setelan Menyesuaikan Kebutuhan Sekolah</p>
                                    <ul class="list-arrow template-demo">
                                        <h4>
                                            <li><a href="<?php echo site_url('welcome/add_profil') ?>" class="text-primary" style="text-decoration: none">Update data profil sekolah</a></li>
                                            <li><a href="<?php echo site_url('welcome/editakun') ?>" class="text-primary" style="text-decoration: none">Update data profil Admin</a></li>
                                            <li><a href="<?= site_url('welcome/kelas') ?>" class="text-primary" style="text-decoration: none">Update Kelas</a></li>
                                            <li><a href="<?= site_url('c_siswa/upsiswa') ?>" class="text-primary" style="text-decoration: none">Update Data Siswa</a></li>
                                        </h4>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>