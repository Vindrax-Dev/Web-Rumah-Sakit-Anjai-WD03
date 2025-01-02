<?php
    require_once "../../../_config/db_konek.php";
   if(isset($_POST['edit'])){
        $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
        $alamat= trim(mysqli_real_escape_string($con,$_POST['alamat']));
        $id_dokter= $_POST['id'];
        $id_poli= intval($_POST['id_poli']);
        $no_hp= trim(mysqli_real_escape_string($con,$_POST['noHP']));
        mysqli_query($con,"UPDATE dokter SET nama='$nama',alamat = '$alamat',id_poli = '$id_poli',no_hp='$no_hp' WHERE id = '$id_dokter'");
         echo "<script>alert('Data Anda Berhasil Di Ganti');</script>";
         echo"<script>window.location='index.php';</script>";
      }
?>