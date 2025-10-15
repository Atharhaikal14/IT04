<?php
// feedback_processor.php

// Panggil file koneksi
include 'db_connect.php'; 

// Cek apakah form sudah disubmit (menggunakan metode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari form dan bersihkan (sanitize)
    $nama = $conn->real_escape_string(trim($_POST['nama']));
    $departemen = $conn->real_escape_string(trim($_POST['departemen']));
    $saran = $conn->real_escape_string(trim($_POST['feedback'])); 

    // Query untuk menyimpan data
    $sql = "INSERT INTO feedback (nama, departemen, saran) 
            VALUES ('$nama', '$departemen', '$saran')";

    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke halaman kontak dengan status sukses
        header("Location: kontak-feedback.php?status=success");
        exit();
    } else {
        // Redirect dengan status gagal
        header("Location: kontak-feedback.php?status=error&msg=" . urlencode($conn->error));
        exit();
    }
}

// Tutup koneksi
$conn->close();

// Jika diakses langsung tanpa POST, redirect ke halaman kontak
header("Location: kontak-feedback.php");
exit();
?>