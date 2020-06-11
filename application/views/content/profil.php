            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Profil Sekolah </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Profil Sekolah</h4>
                                    <p class="card-description"> Lengkapi Data Profil Sekolah </p>
                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <?php foreach ($profil->result() as $p) { ?>
                                                <img src="<?php echo base_url('assets/images/sekolah/' . $p->foto) ?>" class="img-thumbnail">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <address class="text-primary">
                                                <?php foreach ($profil->result() as $p) { ?>
                                                    <h5 class="font-weight-bold"> No Sekolah </h5>
                                                    <h6 class="mb-2"> <?php echo $p->id_sek ?> </h6>
                                                    <h5 class="font-weight-bold"> Nama Sekolah </h5>
                                                    <h6> <?php echo $p->nama ?></h6>
                                                    <h5 class="font-weight-bold"> Alamat </h5>
                                                    <h6> <?php echo $p->alamat . ", " . $p->kec . ", " . $p->kab . ", " . $p->provinsi ?></h6>
                                                    <h5 class="font-weight-bold"> Email</h5>
                                                    <h6> <?php echo $p->email ?></h6>
                                                    <h5 class="font-weight-bold"> Kontak </h5>
                                                    <h6> <?php echo $p->kontak ?></h6>
                                                <?php } ?>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>