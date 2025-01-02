<?php
require_once "../../../_config/db_konek.php";

if (isset($_POST['add'])) {
    $hari = trim(mysqli_real_escape_string($con, $_POST['hari']));
    $stat = 0;
    $id_dokter = $_SESSION['id_user'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    mysqli_query($con, "INSERT INTO jadwal_periksa (hari, jam_mulai, jam_selesai, stat, id_dokter) VALUES ('$hari', '$jam_mulai', '$jam_selesai', '$stat', '$id_dokter')");
    echo "<script>window.location='index.php';</script>";
} else if (isset($_POST['edit'])) {
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $id_poli = $_POST['id'];
    mysqli_query($con, "UPDATE poli SET nama='$nama' WHERE id = '$id_poli'");
    echo "<script>window.location='index.php';</script>";
} else if (isset($_GET['set_stat'])) {
    $id_jadwal = $_GET['set_stat']; // ID jadwal yang dipilih
    $id_dokter = $_SESSION['id_user'];

    // Update semua stat menjadi 0 untuk dokter terkait
    mysqli_query($con, "UPDATE jadwal_periksa SET stat = 0 WHERE id_dokter = '$id_dokter'");

    // Set stat menjadi 1 untuk ID jadwal yang dipilih
    mysqli_query($con, "UPDATE jadwal_periksa SET stat = 1 WHERE id = '$id_jadwal'");

    echo "<script>window.location='index.php';</script>";
}
?>
