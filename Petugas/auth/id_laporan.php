<?php
include '../../auth/koneksi.php';

// Menangkap nilai "id_laporan" dan "status" dari URL menggunakan metode GET
$id_laporan = $_GET['id'];
$status = $_GET['status'];

// Query untuk mengubah status laporan dan mengirimkan ke kolom "si_terima" dengan nilai 1
$sql = "UPDATE tb_laporan SET status = '$status', terima = 1 WHERE id_laporan = '$id_laporan'";
$result = mysqli_query($conn, $sql);

// Mengecek apakah query UPDATE berhasil dijalankan
if (!$result) {
  die("Query UPDATE gagal: " . mysqli_error($conn));
}

// Mengalihkan pengguna kembali ke halaman riwayat.php setelah selesai mengubah status laporan
header("Location: ../Lihat laporan/lihat_laporan.php");
exit;
?>
