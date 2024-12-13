<?php
    require_once "../../../_config/db_konek.php";

    if(isset($_POST['add'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $kemasan= trim(mysqli_real_escape_string($con,$_POST['kemasan']));
      $harga= intval($_POST['harga']);
      mysqli_query($con,"INSERT INTO obat ( nama, kemasan, harga) VALUES ( '$nama', '$kemasan', '$harga')");
        echo"<script>window.location='index.php';</script>";
    }else if(isset($_POST['edit'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $kemasan= trim(mysqli_real_escape_string($con,$_POST['kemasan']));
      $id_obat= $_POST['id'];
      $harga= intval($_POST['harga']);
      mysqli_query($con,"UPDATE obat SET nama='$nama',kemasan = '$kemasan',harga = '$harga' WHERE id = '$id_obat'");
       echo"<script>window.location='index.php';</script>";
    }
?>