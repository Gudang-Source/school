
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="<?php echo base_url('admin/seting'); ?>" class="nav-link">
                <div class="nav-profile-image"><?php foreach ($admin->result_array() as $a) { ?>
                  <img src="<?php echo base_url('assets/images/admin/').$a["foto"] ?>" alt="profile">
                <?php }?>
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Admin Sekolah</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin') ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Profil Sekolah</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/seting') ?>">Profil Sekolah</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/siswa')?>">Data Siswa</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/akun')?>">Akun Admin</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/soal') ?>">
                <span class="menu-title">Soal Ujian</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/repot') ?>">
                <span class="menu-title">Hasil Ujian</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">