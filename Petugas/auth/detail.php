<?php
include '../../auth/koneksi.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Menangkap data form dan membersihkannya dari karakter khusus
  $komentar = mysqli_real_escape_string($conn, $_POST['komentar']);
  $laporan_id = mysqli_real_escape_string($conn, $_POST['laporan_id']);
  $status = mysqli_real_escape_string($conn, $_POST['status']);

  // Validasi laporan_id
  if (!is_numeric($laporan_id)) {
    echo '<div class="alert alert-danger" role="alert">Laporan ID harus berupa angka.</div>';
    exit;
  }

  // Query untuk mengupdate komentar dan status ke dalam tabel laporan
  $query = "UPDATE tb_laporan SET komentar='$komentar', status='$status' WHERE id=$laporan_id";
  $result = mysqli_query($conn, $query);

  // Menjalankan query dan memeriksa apakah query berhasil dijalankan
  if ($result) {
    if (mysqli_affected_rows($conn) > 0) {
      header("location: ../Lihat laporan/");
      echo '<div class="alert alert-success" role="alert">Komentar dan status berhasil diupdate.</div>';
    } else {
      echo '<div class="alert alert-warning" role="alert">Tidak ada laporan dengan ID tersebut.</div>';
    }
  } else {
    echo '<div class="alert alert-danger" role="alert">Terjadi kesalahan pada query: ' . mysqli_error($conn) . '</div>';
  }

  // Menutup koneksi ke database
  mysqli_close($conn);
}
?>
