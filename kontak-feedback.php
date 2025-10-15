<?php
$status = $_GET['status'] ?? null; // Ambil status dare URL

if ($status == 'success') {
    echo '<div class="alert alert-success text-center">Terima kasih! Umpan balik Anda berhasil dikirim dan akan segera diproses oleh Tim IT.</div>';
} elseif ($status == 'error') {
    $msg = $_GET['msg'] ?? 'Terjadi kesalahan saat menyimpan data.';
    echo '<div class="alert alert-danger text-center">Gagal mengirim umpan balik. Error: ' . htmlspecialchars($msg) . '</div>';
}
?>