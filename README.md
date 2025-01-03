# Web Rumah Sakit Anjai WD03
 projek ini untuk menyelesaikan tugas akhir bimbingan karir

# Instalasi Web dari GitHub Menggunakan XAMPP

Panduan ini menjelaskan cara menginstal website yang Anda download dari GitHub beserta database menggunakan XAMPP.

## Langkah 1: Download dan Ekstrak Website
1. **Download** file repository dari GitHub dengan tombol "Code" -> "Download ZIP".
2. **Ekstrak** file ZIP ke folder yang mudah diakses, misalnya `C:\xampp\htdocs\nama_proyek`.

## Langkah 2: Pindahkan File ke Direktori XAMPP
1. **Pindahkan** folder hasil ekstraksi ke dalam folder `C:\xampp\htdocs\`.
   - Contoh: `C:\xampp\htdocs\nama_proyek`.
2. Pastikan file seperti `index.php`, `style.css`, atau file lainnya ada di dalam folder tersebut.

## Langkah 3: Konfigurasi Database
### A. Buka phpMyAdmin
1. Jalankan **XAMPP** dan aktifkan **Apache** dan **MySQL**.
2. Buka browser dan akses phpMyAdmin di:  
--- http://localhost/phpmyadmin ---

### B. Buat Database
1. Di phpMyAdmin, klik **New**.
2. Masukkan nama database, contoh: `myweb_db`, (disarankan menggunakan nama yang sama dengan databse) lalu klik **Create**.

### C. Import File SQL 
1. Pilih database yang telah dibuat, klik **Import**.
2. Pilih file `rumah_sakit_anjay (1).sql` dari folder proyek, klik **Go**.

### D. Akun User Default :
1. Dokter :
    - Username :dokter
    - Password :dokter
2. Admin
    - Username :adminanjai
    - Password :anjaiadmin
3. Pasien
    - Username :pasienasli
    - Password :aslipasien