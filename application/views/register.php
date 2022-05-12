<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Polda Jateng | Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/polda2.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0 pt-5">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo col-lg-4 col-md-5">
                                <img src="<?= base_url() ?>assets/images/polda2.png" alt="logo">
                            </div>
                            <div class="tamu">
                                <h4>Buku Tamu</h4>
                                <h6 class="font-weight-light">Kepolisian Daerah Jawa Tengah</h6>
                            </div>
                            <form class="pt-3" action="<?=site_url('register/add')?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-lg" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nik" class="form-control form-control-lg" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kepentingan" class="form-control form-control-lg" placeholder="Kepentingan">
                                </div>
                                <select class="form-control" name="level">
                                    <option value="">-- PILIH --</option>
                                    <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>Tamu</option>
                                </select>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block btn-lg font-weight-medium auth-form-btn" type="submit" name="register">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>assets/js/template.js"></script>
    <script src="<?= base_url() ?>assets/js/settings.js"></script>
    <script src="<?= base_url() ?>assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
