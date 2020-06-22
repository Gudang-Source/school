<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Print Ujian</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Hasil Ujian Siswa</h3>
          <?php foreach ($sekolah->result() as $s): ?>
          <h5><?php echo $s->nama ?></h5>
          <?php endforeach ?>
        </div>
      </div><br>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NIS</th>
          <th scope="col">NAMA</th>
          <th scope="col">MAPEL</th>
          <th scope="col">KELAS</th>
          <th scope="col">TANGGAL</th>
          <th scope="col">JAWABAN</th>
          <th scope="col">POIN</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($prin->result() as $p) {?>
        <tr>
          <td><?php echo $p->nis ?></td>
          <td><?php echo $p->nama ?></td>
          <td><?php echo $p->mapel?></td>
          <td><?php echo $p->kelas?></td>
          <td><?php echo $p->tanggal ?></td>
          <td><?php echo $p->jawaban ?></td>
          <td><?php echo $p->poin ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>