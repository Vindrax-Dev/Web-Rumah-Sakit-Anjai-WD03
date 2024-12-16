<?php
    require_once "../../../_config/db_konek.php";

    if(isset($_POST['add'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $id_poli= $_POST['id'];
      mysqli_query($con,"INSERT INTO poli (id, nama) VALUES ('$id_obat', '$nama')");
        echo"<script>window.location='index.php';</script>";
    }else if(isset($_POST['edit'])){
      $nama= trim(mysqli_real_escape_string($con,$_POST['nama']));
      $id_poli= $_POST['id'];
      mysqli_query($con,"UPDATE poli SET nama='$nama' WHERE id = '$id_poli'");
       echo"<script>window.location='index.php';</script>";
    }
?>