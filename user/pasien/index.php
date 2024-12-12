<?php
require_once "../../_config/db_konek.php";



// Ambil data pasien berdasarkan id_user
$id_user = $_SESSION['id_user'];
$query = "SELECT * FROM pasien WHERE id_user = '$id_user'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

// Periksa apakah data pasien ditemukan
$pasien = mysqli_fetch_assoc($result);

if (!$pasien) {
    echo "<h3>Data pasien tidak ditemukan.</h3>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pasien</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['user']; ?>!</h1>
    <h2>Data Pasien</h2>
    <ul>
        <li>Nama: <?php echo $pasien['nama']; ?></li>
        <li>Alamat: <?php echo $pasien['alamat']; ?></li>
        <li>No KTP: <?php echo $pasien['no_ktp']; ?></li>
        <li>No HP: <?php echo $pasien['no_hp']; ?></li>
        <li>No RM: <?php echo $pasien['no_rm']; ?></li>
    </ul>
</body>
</html>
