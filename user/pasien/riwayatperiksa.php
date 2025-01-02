<?php
require_once "../../_config/db_konek.php";
if(isset($_SESSION['level'])){
  if ($_SESSION['level'] !== '3') {
    // Redirect jika bukan level 2
    echo "<script>alert('Akses ditolak! Halaman ini hanya untuk Pasien.');</script>";
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
    <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../../assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
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
    <a class="navbar-brand brand-logo me-5" href="index.html"><img src="../assets/images/logo.svg" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
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
          <img src="../assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="../../auth/logout.php">
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
      <a class="nav-link" href="index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="daftarpoli.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Daftar Periksa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="riwayatperiksa.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Riwayat Periksa</span>
      </a>
    </li>
</nav>
 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Riwayat Pasien </h3>
                    <h6 class="font-weight-normal mb-0">Berikut Riwayat Periksa Anda</h6>
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
                    <a type="button" href="daftarpoli.php" class="btn btn-primary">Daftar Periksa</a>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th> No. </th>
                            <th> Poli </th>
                            <th> Dokter </th>
                            <th> Hari </th>
                            <th> Mulai </th>
                            <th> Selesai </th>
                            <th> Antrian </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
            <?php
            
            $query = "
    SELECT 
        dp.id AS no,
        p.nama AS poli,
        d.nama AS dokter,
        jp.hari,
        jp.jam_mulai AS mulai,
        jp.jam_selesai AS selesai,
        dp.no_antrian AS antrian,
        CASE 
            WHEN dp.no_antrian = 0 THEN 'Selesai' 
            WHEN dp.no_antrian != 0 THEN 'Menunggu' 
            ELSE 'Tidak Diketahui' 
        END AS status
    FROM 
        daftar_poli dp
    JOIN 
        jadwal_periksa jp ON dp.id_jadwal = jp.id
    JOIN 
        dokter d ON jp.id_dokter = d.id
    JOIN 
        poli p ON d.id_poli = p.id
";

$result = mysqli_query($con, $query);

// Periksa apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($con));
}

// Loop untuk menampilkan data dalam tabel
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "
        <tr>
            <td>{$no}</td>
            <td>{$row['poli']}</td>
            <td>{$row['dokter']}</td>
            <td>{$row['hari']}</td>
            <td>{$row['mulai']}</td>
            <td>{$row['selesai']}</td>
            <td>{$row['antrian']}</td>
            <td>{$row['status']}</td>
        </tr>
    ";
    $no++;
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/chart.umd.js"></script>
    <script src="../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="../../assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>