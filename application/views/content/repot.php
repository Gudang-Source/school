<div class="content-wrapper">
	<div class="page-header">
      <h3 class="page-title"> Hasil Ujian </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">hasil ujian</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hasil Ujian</h4>
            <div class="row">
              <div class="col-sm-8">
                <p class="card-description"> Hasil ujian Siswa</p>
              </div>
              <div class="col-sm-4 text-right">
                <a href="<?php echo base_url('admin/prin') ?>"><button class="btn btn-primary">Print</button></a>
              </div>
            </div>
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th> tanggal </th>
                  <th> NIS</th>
                  <th> Nama </th>
                  <th> Mapel</th>
                  <th> Kelas </th>
                  <th> Jawaban </th>
                  <th> Poin </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($repot->result() as $r): ?>
                  <tr>
                    <td><?php echo $r->tanggal ?></td>
                    <td><?php echo $r->nis ?></td>
                    <td><?php echo $r->nama ?></td>
                    <td><?php echo $r->mapel ?></td>
                    <td><?php echo $r->kelas ?></td>
                    <td><?php echo $r->jawaban ?></td>
                    <td><?php echo $r-> poin ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>