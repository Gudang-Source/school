<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title"> Tambah Soal</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/soal') ?>">data soal</a></li>
              <li class="breadcrumb-item active" aria-current="page">tambah soal</li>
          </ol>
      </nav>
  </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Soal</h4>
            <form class="form-sample" action="<?php echo base_url('c_add/soal') ?>" enctype="multipart/form-data" method="POST">
              
                
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="mapel">
                        <?php foreach ($mapel->result_array() as $m): ?>
                        <option><?php echo $m["mapel"]?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Kelas</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="kelas">
                        <option>Kelas</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                      <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" />
                      <small id="emailHelp" class="form-text text-muted">Kosongkan Jika Kelas Tidak Ada Jurusannya</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="date" name="tgl" class="form-control" placeholder="Jurusan" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Waktu Ujian</label>
                    <div class="col-sm-4">
                      <input type="time" name="mulai" class="form-control"/>
                    </div>
                    <label class="col-form-label">S/D</label>
                    <div class="col-sm-4">
                      <input type="time" name="selesai" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">No Urut</label>
                    <div class="col-sm-8">
                      <input type="number" name="tgl" class="form-control" placeholder="No" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm- col-form-label">Password Mapel</label>
                       <label class="col-form-label">S/D</label>
                    <div class="col-sm-8">
                      <input type="password" name="selesai" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
            <hr style="width:  80%">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Soal</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="soal"></textarea>
                        <small id="emailHelp" class="form-text text-muted">jika ada rumus atau foto, kami sarankan untuk menguploadnya dalam bentuk gambar di tombol berikut</small> <br>
                    <input type="file" name="soalimg">
                  </div>
                </div>
              </div>
            </div>
            <hr style="width: 70%">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jawab A</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="jawaba"></textarea>
                    <small id="emailHelp" class="form-text text-muted">jika ada rumus atau foto, kami sarankan untuk menguploadnya dalam bentuk gambar di tombol berikut</small> <br>
                    <input type="file" name="jawabaimg">
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" name="jawaban" class="form-check-input" value="A"> Kunci Jawaban </label>
                        </div>
                  </div>
                </div>
              </div>
            </div>
            <hr style="width: 70%">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jawab B</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="jawabb"></textarea>
                    <small id="emailHelp" class="form-text text-muted">jika ada rumus atau foto, kami sarankan untuk menguploadnya dalam bentuk gambar di tombol berikut</small> <br>
                    <input type="file" name="jawabbimg">
                     <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                          <input type="checkbox" name="jawaban" class="form-check-input" value="A"> Kunci Jawaban </label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <hr style="width: 70%">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jawab C</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="jawabc"></textarea>
                    <small id="emailHelp" class="form-text text-muted">jika ada rumus atau foto, kami sarankan untuk menguploadnya dalam bentuk gambar di tombol berikut</small> <br>
                    <input type="file" name="jawabcimg">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                          <input type="checkbox" name="jawaban" class="form-check-input" value="A"> Kunci Jawaban </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr style="width: 70%">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jawab D</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="jawabd"></textarea>
                    <small id="emailHelp" class="form-text text-muted">jika ada rumus atau foto, kami sarankan untuk menguploadnya dalam bentuk gambar di tombol berikut</small> <br>
                    <input type="file" name="jawabdimg">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                          <input type="checkbox" name="jawaban" class="form-check-input" value="A"> Kunci Jawaban </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-sm-6">
                  <button class="btn btn-inverse-warning btn-rounded" type="button">sebelumya</button>
                  <a href="<?php echo  base_url('c_add/lamjut') ?>"></a><button class="btn btn-inverse-success btn-rounded" type="button">Lanjut</button>
                </div>
                <div class="col-sm-6 text-right">
                  <button class="btn btn-inverse-info btn-rounded" type="submit">Selesai</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>