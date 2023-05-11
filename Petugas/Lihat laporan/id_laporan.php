<?php
include '../../auth/koneksi.php';

// Menangkap nilai "id_laporan" dan "status" dari URL menggunakan metode GET
$id_laporan = $_GET['id'];
$status = $_GET['status'];

// Mendefinisikan nilai boolean
$si_terima = ($status == "diterima") ? 1 : 0;

// Query untuk mengubah status laporan dan mengirimkan ke kolom "si_terima" dengan nilai boolean yang telah ditentukan
$sql = "UPDATE tb_laporan SET status = '$status', si_terima = $si_terima WHERE id = '$id_laporan'";
$result = mysqli_query($conn, $sql);

// Mengecek apakah query UPDATE berhasil dijalankan
if (!$result) {
  die("Query UPDATE gagal: " . mysqli_error($conn));
}

// Query untuk mengubah nilai boolean pada kolom "si_terima" menjadi 1 pada baris dengan id 1
$sql2 = "UPDATE tb_laporan SET si_terima = 1 WHERE id = 1";
$result2 = mysqli_query($conn, $sql2);

// Mengecek apakah query UPDATE berhasil dijalankan
if (!$result2) {
  die("Query UPDATE gagal: " . mysqli_error($conn));
}

// Mengalihkan pengguna kembali ke halaman lihat_laporan.php setelah selesai mengubah status laporan
header("Location: ../Lihat laporan/lihat_laporan.php");
exit;


?>
