<?php
require_once "../_config/db_konek.php";

if(isset($_SESSION['user'])){
  echo "<script>window.location='".base_url()."';</script>";
}else{
  
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
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="../assets/images/logo.jpeg" alt="logo">
                </div>
                <h4>Login</h4>
                <h6 class="font-weight-light">Silahkan Login untuk melanjutkan!</h6>
                <?php
                if (isset($_POST['login'])) {
                  // Ambil dan sanitasi input
                  $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                  $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
              
                  // Query untuk memeriksa user
                  $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'") or die(mysqli_error($con));
                  
                  if (mysqli_num_rows($sql_login) > 0) {
                      $data = mysqli_fetch_assoc($sql_login); // Ambil data user
                      
                      $_SESSION['user'] = $data['username'];  // Simpan username di session
                      $_SESSION['level'] = $data['level'];    // Simpan level di session
                      $_SESSION['id_user'] = $data['id_user'];
                      // Redirect berdasarkan level
                      switch ($data['level']) {
                          case '1':
                              echo "<script>window.location='" . base_url('user/admin/index.php') . "';</script>";
                              break;
                          case '2':
                              echo "<script>window.location='" . base_url('user/admin/index.php') . "';</script>";
                              break;
                          case '3':
                              echo "<script>window.location='" . base_url('user/pasien/index.php') . "';</script>";
                              break;
                          default:
                              echo "<script>alert('Level tidak dikenali!');</script>";
                              echo "<script>window.location='" . base_url() . "login';</script>";
                              break;
                      }
                  } else {
                      // Jika login gagal
                      echo "<script>alert('Username atau Password salah!');</script>";
                      echo "<script>window.location='" . base_url('auth/login.php') . "';</script>";
                  }
              }
                ?>
                <form action="" method="post" class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="user" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="pass" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <input type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  </div>
                   <div class="text-center mt-4 font-weight-light"> Didnt have an account? <a href="login.html" class="text-primary">Register here!</a>
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
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>