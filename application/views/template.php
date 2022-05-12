
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Polda Jateng</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/polda2.png" />
  <script>
  function searchTable() {
      var input;
      var saring;
      var status; 
      var tbody; 
      var tr; 
      var td;
      var i; 
      var j;
      input = document.getElementById("input");
      saring = input.value.toUpperCase();
      tbody = document.getElementsByTagName("tbody")[0];;
      tr = tbody.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td");
          for (j = 0; j < td.length; j++) {
              if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                  status = true;
              }
          }
          if (status) {
              tr[i].style.display = "";
              status = false;
          } else {
              tr[i].style.display = "none";
          }
      }
  }
  </script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- partial:partials/_navbar.html -->
    <nav class="col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center">
      <a class="navbar-brand brand-logo mr-5" href="<?= site_url('dashboard') ?>"><img src="<?= base_url() ?>assets/images/polri.png" class="mr-2" alt="logo"/></a>
      
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('tamu/add') ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Input Tamu</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Tamu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('tamu') ?>">Daftar Tamu</a></li>
                <?php if($this->session->userdata('level') == 1) { ?>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('user') ?>">Data User</a></li>
                <?php } ?>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('pengguna') ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Pengguna</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('auth/logout') ?>">
              <i class="fa fa-sign-out menu-icon" style="font-size:20px"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <?php echo $contents ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. <a href="#" target="_blank">Polda Jateng</a></span>
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
  <script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url() ?>assets/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>assets/js/template.js"></script>
  <script src="<?= base_url() ?>assets/js/settings.js"></script>
  <script src="<?= base_url() ?>assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>assets/js/dashboard.js"></script>
  <script src="<?= base_url() ?>assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

