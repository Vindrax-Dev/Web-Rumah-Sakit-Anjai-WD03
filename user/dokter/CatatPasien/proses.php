<?php

require_once "../../../_config/db_konek.php";

if (isset($_POST['edit'])) {
    // Ambil data dari form
    $id_daftarpoli = $_POST['idp']; // ID dari halaman sebelumnya (periksa.php)
    $tgl_periksa = $_POST['tgl_periksa']; // Tanggal periksa
    $catatan = $_POST['catatan']; // Catatan dari form
    $obat_ids = isset($_POST['obat']) ? $_POST['obat'] : [];

    // Biaya dasar
    $total_biaya = 150000;

    // Menyimpan nama obat
    $nama_obat = [];

    // Hitung biaya obat dan ambil nama obat
    if (!empty($obat_ids)) {
        // Query untuk mengambil nama obat dan harga
        $query_obat = "SELECT nama, harga FROM obat WHERE id IN (" . implode(',', $obat_ids) . ")";
        
        // Jalankan query dan cek hasilnya
        $result_obat = mysqli_query($con, $query_obat);

        if ($result_obat) {
            // Jika query berhasil, proses hasilnya
            while ($obat = mysqli_fetch_assoc($result_obat)) {
                $nama_obat[] = $obat['nama'];  // Menyimpan nama obat
                $total_biaya += $obat['harga'];    // Menambahkan harga obat
            }
        } else {
            // Jika query gagal, tampilkan kesalahan
            echo "Error saat mengambil data obat: " . mysqli_error($con);
        }
    }

    // Gabungkan nama obat menjadi satu string
    $nama_obat_string = implode(', ', $nama_obat);

    // Menyimpan data ke tabel periksa
    $query_periksa = "INSERT INTO periksa (id_daftar_poli, tgl_periksa, catatan, biaya, nama_obat) 
                      VALUES ('$id_daftarpoli', '$tgl_periksa', '$catatan', '$total_biaya', '$nama_obat_string')";

    if (mysqli_query($con, $query_periksa)) {
        // Update no_antrian menjadi 0 setelah pemeriksaan berhasil
        $query_update_antrian = "UPDATE daftar_poli SET no_antrian = 0 WHERE id = '$id_daftarpoli'";

        if (mysqli_query($con, $query_update_antrian)) {
            echo "Data berhasil disimpan dan antrian diperbarui!";
            // Redirect ke halaman lain jika perlu
            header("Location: index.php");
        } else {
            echo "Error saat memperbarui no antrian: " . mysqli_error($con);
        }
    } else {
        echo "Error saat menyimpan data periksa: " . mysqli_error($con);
    }
}
?>
