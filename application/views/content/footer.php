<!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://epelajar.id/" style="color:#DA70D6">ePelajar</a></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </di  sv>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url("assets/vendors/js/vendor.bundle.base.js") ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url("assets/js/off-canvas.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/hoverable-collapse.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/misc.js") ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script type="text/javascript">
    $(document).ready(function(){
            $.ajax({
                type: 'POST',
                url: "<?= base_url('wilayah') ?>",
                cache: false, 
                success: function(msg){
                  $("#provinsi").html(msg);
                }
            });

            $("#provinsi").change(function(){
            var provinsi = $("#provinsi").val();
              $.ajax({
                type: 'POST',
                  url: "<?= base_url('wilayah/kabupaten') ?>",
                  data: {provinsi: provinsi},
                  cache: false,
                  success: function(msg){
                    $("#kabupaten").html(msg);
                  }
              });
            });

            $("#kabupaten").change(function(){
            var kabupaten = $("#kabupaten").val();
              $.ajax({
                type: 'POST',
                  url: "<?= base_url('wilayah/kecamatan') ?>",
                  data: {kabupaten: kabupaten},
                  cache: false,
                  success: function(msg){
                    $("#kecamatan").html(msg);
                  }
              });
            });

            $("#kecamatan").change(function(){
            var kecamatan = $("#kecamatan").val();
              $.ajax({
                type: 'POST',
                  url: "get_kelurahan.php",
                  data: {kecamatan: kecamatan},
                  cache: false,
                  success: function(msg){
                    $("#kelurahan").html(msg);
                  }
              });
            });
         });
  </script>
    <!-- End custom js for this page -->
  </body>
</html>