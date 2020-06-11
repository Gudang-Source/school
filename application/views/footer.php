<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://epelajar.id/" target="_blank">epelajar</a></span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url('assets/vendors/js/jquery-3.3.1.js') ?>"></script>
<script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
<script src="<?= base_url('assets/vendors/sweetalrt/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/ckeditor/ckeditor.js') ?>"></script>
<script src="<?= base_url('assets/vendors/bootstrap-datetimepicker-master/build/js/transition.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/moment-master/moment.js') ?>"></script>
<script src="<?= base_url('assets/vendors/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/bootstrap-4.5.0-dist/js/bootstrap.min.js')?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
<script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
<script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
<script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>

<script src="<?= base_url('assets/js/style.js') ?>"></script>

<script type="text/javascript">
    $(function() {
        CKEDITOR.replace('ckeditor', {
            filebrowserImageBrowseUrl: '<?php echo base_url('assets/vendors/kcfinder/browse.php'); ?>',
            height: '400px'
        });
    });
</script>
<!-- End custom js for this page -->

<script type="text/javascript">
        $(function () {
            $('#datetimepicker8').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                }
            });
        });
    </script>
</body>

</html>