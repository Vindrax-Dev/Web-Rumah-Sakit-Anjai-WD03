<?php
require_once "../_config/db_konek.php";

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
                <h4>Register</h4>
                <h6 class="font-weight-light">Silahkan isi form registrasi </h6>
                <?php
                if (isset($_POST['add'])) {
                    // Sanitasi input
                    $username = trim(mysqli_real_escape_string($con, $_POST['username']));
                    $password = trim(mysqli_real_escape_string($con, $_POST['password']));
                    
                    // Enkripsi password menggunakan SHA1
                    $password_hashed = sha1($password);
                
                    // Query untuk memasukkan data ke tabel user
                    $sql = "INSERT INTO tb_user (username, password, level) VALUES ('$username', '$password_hashed', 3)";
                
                    // Eksekusi query dan cek apakah berhasil
                    if (mysqli_query($con, $sql)) {
                        echo "<script>alert('Registrasi berhasil!');window.location='".base_url('auth/login.php')."';</script>";
                    } else {
                        echo "Registrasi gagal: " . mysqli_error($con);
                    }
                } 
                ?>
                <form action="" method="post" class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <input type="submit" name="add" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
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