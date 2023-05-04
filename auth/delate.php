<?php
session_start();
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    // Prepared statement untuk menghapus data laporan dari tabel tb_laporan
    $delete_query = "DELETE FROM tb_laporan WHERE id = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
  
    // Memeriksa apakah data berhasil dihapus
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Mengarahkan pengguna ke halaman laporan setelah data berhasil dihapus
        header("location: ../riwayat/riwayat.php");
        exit();
    } else {
        // Menampilkan pesan kesalahan jika data gagal dihapus
        echo "Data gagal dihapus.";
    }
  
    // Menutup prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Mengarahkan pengguna ke halaman laporan jika parameter id tidak ditemukan
    header("location: ../Riwayat/riwayat.php");
    exit();
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
