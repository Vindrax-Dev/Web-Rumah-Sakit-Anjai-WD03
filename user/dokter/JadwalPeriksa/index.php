<?php
require_once "../../../_config/db_konek.php";
if(isset($_SESSION['level'])){
  if ($_SESSION['level'] !== '2') {
    // Redirect jika bukan level 2
    echo "<script>alert('Akses ditolak! Halaman ini hanya untuk Dokter.');</script>";
    echo "<script>window.location='".base_url('../../auth/login.php')."';</script>";
    exit;
}
}else{
  echo "<script>window.location='".base_url('../../auth/login.php')."';</script>";
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
            <div>
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Jangan lupa follow instagram saya di @Vindrax_</p>
                <a href="https://www.instagram.com/Vindrax_" target="_blank" class="btn me-2 buy-now-btn border-0">Click here to Follow</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="ti-close text-white"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="index.html"><img src="../../assets/images/logo.svg" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="../../assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="../../../auth/logout.php">
            <i class="ti-power-off text-primary" ></i> Logout </a>
        </div>
      </li>
    </ul>
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
      <a class="nav-link" href="../index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../EditData/index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Edit Data</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../JadwalPeriksa/index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Jadwal Periksa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../CatatPasien/index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Periksa Pasien</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../RiwayatPasien/index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Riwayat Pasien</span>
      </a>
    </li>
  </ul>
</nav>
 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Jadwal Periksa </h3>
                    <h6 class="font-weight-normal mb-0">Berikut Jadwal Periksa Anda</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <div class="table-responsive">
                    <a type="button" href="add.php" class="btn btn-primary">Input Jadwal Periksa</a>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th> No. </th>
                            <th> Hari </th>
                            <th> Jam Mulai </th>
                            <th> Jam Selesai </th>
                            <th> Status </th>
                            <th> Aktifkan Jadwal </th>
                          </tr>
                        </thead>
                        <tbody>
            <?php
            // Query untuk mengambil data dari tabel pasien
            $no=1;
            $id=@$_GET['id'];
            $sql_dataperiksa = mysqli_query($con,"SELECT * FROM jadwal_periksa where id_dokter = '$_SESSION[id_user]'") or die(mysqli_error($con));
            if (mysqli_num_rows($sql_dataperiksa) > 0) {
                // Output data setiap baris
                while ($data=mysqli_fetch_array($sql_dataperiksa)) {?>
                   <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($data['hari']); ?></td>
            <td><?php echo htmlspecialchars($data['jam_mulai']); ?></td>
            <td><?php echo htmlspecialchars($data['jam_selesai']); ?></td>
            <td><?php echo $data['stat'] == 1 ? 'Aktif' : 'Tidak Aktif'; ?></td>
            <td>
                <?php if ($data['stat'] != 1) { ?>
                  <a href="proses.php?set_stat=<?=$data['id']?>"><button type="button" class="btn btn-success">Set Aktif</button></a>
                <?php } ?>
            </td>
            </tr>
                  <?php
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Dashboard ini dibuat oleh : <a href="https://www.instagram/vindrax_/" target="_blank">vindrax</a> from Konoha Island</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
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
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/chart.js/chart.umd.js"></script>
    <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="../../../assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../../assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>