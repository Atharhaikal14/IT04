<?php
// db_connect.php

// 1. KONFIGURASI KREDENSIAL
define('DB_SERVER', 'localhost'); 
define('DB_USERNAME', 'root');    
define('DB_PASSWORD', ''); // HATI-HATI: Ganti jika ada password!
define('DB_NAME', 'aplikasi_pt84_abadi'); 

// 2. MEMBUAT INSTANSI KONEKSI
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// 3. CEK KONEKSI
if ($conn->connect_error) {
    die("Koneksi Database Gagal: " . $conn->connect_error);
}

// Setel encoding ke UTF-8
$conn->set_charset("utf8mb4");

// UJI COBA KONEKSI (Hapus komentar baris di bawah ini untuk tes)
/*
echo "Koneksi ke database " . DB_NAME . " Berhasil! ✅";
*/
?>