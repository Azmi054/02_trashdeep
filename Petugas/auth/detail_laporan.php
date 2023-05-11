<?php
include '../../auth/koneksi.php';

// Menangkap nilai "id_laporan" dan "status" dari URL menggunakan metode GET
$id_laporan = $_GET['id'];
$status = $_GET['status'];

// Query untuk mendapatkan data laporan dari database
$sql = "SELECT * FROM tb_laporan WHERE id_laporan = '$id_laporan'";
$result = mysqli_query($conn, $sql);

// Mengecek apakah query SELECT berhasil dijalankan
if (!$result) {
  die("Query SELECT gagal: " . mysqli_error($conn));
}

// Menampilkan data laporan
$row = mysqli_fetch_assoc($result);
echo "ID Laporan: " . $row['id_laporan'] . "<br>";
echo "Judul Laporan: " . $row['judul_laporan'] . "<br>";
echo "Isi Laporan: " . $row['isi_laporan'] . "<br>";
echo "Status Laporan: " . $status . "<br>";
?>
