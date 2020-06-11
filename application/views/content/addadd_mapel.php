            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Tambah Mapel </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('c_mapel/add_mapel') ?>">Tambah Mapel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Mapel</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Mapel</h4>
                                    <p class="card-description"> Tambah Mapel Baru </p>
                                    <form class="forms-sample" action="<?php echo site_url('c_mapel/addaddact') ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Id Mapel</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="idmapel" id="exampleInputUsername2" placeholder="ID matapelajaran">
                                                <div class="text-danger">
                                                    <?= form_error('idmapel') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Mata Pelajaran</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="mapel" id="exampleInputEmail2" placeholder="matapelajaran">
                                                <div class="text-danger">
                                                    <?= form_error('mapel') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-gradient-primary mr-2">Tambah</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>