<?php
require_once "../../_config/db_konek.php";

if (isset($_GET['poli_id'])) {
    $poli_id = intval($_GET['poli_id']);

    $query = "SELECT jp.id, jp.hari, jp.jam_mulai, jp.jam_selesai 
              FROM jadwal_periksa jp 
              JOIN poli p ON jp.id_dokter = p.id 
              WHERE p.id = $poli_id AND jp.stat = 1";

    $result = mysqli_query($con, $query);
    $jadwalList = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $jadwalList[] = $row;
    }

    echo json_encode($jadwalList);
}if (isset($_POST['edit'])) {
    // Ambil data dari form
    $id_user = $_SESSION['id_user']; // Ambil ID user dari session
    $id_jadwal = intval($_POST['jadwal']); // ID jadwal dari dropdown
    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));

    // Dapatkan id_pasien berdasarkan id_user
    $query_pasien = "SELECT id FROM pasien WHERE id_user = '$id_user'";
    $result_pasien = mysqli_query($con, $query_pasien);
    $data_pasien = mysqli_fetch_assoc($result_pasien);
    $id_pasien = $data_pasien['id'];

    // Hitung nomor antrian berdasarkan id_jadwal
    $query_antrian = "SELECT COUNT(*) AS total FROM daftar_poli WHERE id_jadwal = '$id_jadwal'";
    $result_antrian = mysqli_query($con, $query_antrian);
    $data_antrian = mysqli_fetch_assoc($result_antrian);
    $no_antrian = $data_antrian['total'] + 1; // Tambah 1 untuk antrian berikutnya

    // Masukkan data ke tabel daftar_poli
    $query_insert = "INSERT INTO daftar_poli (id_pasien, id_jadwal, keluhan, no_antrian) 
                     VALUES ('$id_pasien', '$id_jadwal', '$keluhan', '$no_antrian')";

    if (mysqli_query($con, $query_insert)) {
        echo "<script>alert('Data berhasil disimpan!');window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

