<?php
    require_once "../../../_config/db_konek.php";

    if(isset($_POST['add'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $kemasan= trim(mysqli_real_escape_string($con,$_POST['kemasan']));
      $id_obat= intval($_POST['id_obat']);
      $harga= intval($_POST['harga']);
      mysqli_query($con,"INSERT INTO obat (id, nama_obat, kemasan, harga) VALUES ('$id_obat', '$nama', '$kemasan', '$harga')");
        echo"<script>window.location='index.php';</script>";
    }else{
      echo "<script>window.location='".base_url('../../../auth/login.php')."';</script>";
      
    }
?>