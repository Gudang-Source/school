<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title"> Data Soal </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url("admin") ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">soal ujian</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-8 ">
                <h4 class="card-title">Data soal ujian</h4>
              </div>
              <div class="col-sm-4 text-right">
                <a href="<?php echo base_url('admin/add_soal') ?>"><button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-account-multiple-plus"></i> <span> Tambah Soal</span> </button></a>
              </div>
            </div>
            <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th> Mapel </th>
                  <th> Kelas </th>
                  <th> Tanggal </th>
                  <th> Mulai </th>
                  <th> Selesai </th>
                  <th> No </th>
                  <th> Soal </th>
                  <th> Jawab A </th>
                  <th> Jawab B </th>
                  <th> Jawab C </th>
                  <th> Jawab D </th>
                  <th> Jawaban </th>
                  <th class="text-center"> Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mapel->result_array() as $m): ?>
                <tr>
                  <td><?php echo $m["mapel"] ?></td>
                  <td><?php echo $m["kelas"]." ".$m["jurusan"] ?></td>
                  <td><?php echo $m["tanggal"] ?></td>
                  <td><?php echo $m["mulai"] ?></td>
                  <td><?php echo $m["selesai"] ?></td>
                  <td><?php echo $m["nosoal"] ?></td>
                  <td><?php echo $m["soal"] ." ".$m["soalimg"]?></td>
                  <td><?php echo $m["jawaba"] ." ".$m["jawabaimg"]?></td>
                  <td><?php echo $m["jawabb"] ." ".$m["jawabbimg"]?></td>
                  <td><?php echo $m["jawabc"] ." ".$m["jawabcimg"]?></td>
                  <td><?php echo $m["jawabd"] ." ".$m["jawabdimg"]?></td>
                  <td><?php echo $m["jawaban"]?></td>
                  <td>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?php echo site_url('soal/edit').$m["id"] ?>"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo site_url('c_delet/soal/').$m["id"] ?>"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
                        </div>
                    </div>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>