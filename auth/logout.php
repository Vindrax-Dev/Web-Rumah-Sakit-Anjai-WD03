<?php
require_once "../_config/db_konek.php";

unset($_SESSION['user']);
unset($_SESSION['level']);
echo "<script>window.location='".base_url('auth/login.php')."';</script>";
?>