<?php
    require_once "../../../_config/db_konek.php";

    if(isset($_POST['add'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $alamat= trim(mysqli_real_escape_string($con,$_POST['alamat']));
      $noKTP= trim(mysqli_real_escape_string($con,$_POST['noKTP']));
      $noHP= trim(mysqli_real_escape_string($con,$_POST['noHP']));
      mysqli_query($con,"INSERT INTO pasien ( nama, alamat, noKTP , noHP) VALUES ( '$nama', '$alamat', '$noKTP','$noHP')");
        echo"<script>window.location='index.php';</script>";
    }else if(isset($_POST['edit'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $alamat= trim(mysqli_real_escape_string($con,$_POST['alamat']));
      $noKTP= trim(mysqli_real_escape_string($con,$_POST['noKTP']));
      $noHP= trim(mysqli_real_escape_string($con,$_POST['noHP']));
      $id_pasien= $_POST['id'];
      mysqli_query($con,"UPDATE pasien SET nama='$nama',alamat = '$alamat',noKTP = '$noKTP',noHP='$noHP' WHERE id = '$id_pasien'");
       echo"<script>window.location='index.php';</script>";
    }
?>