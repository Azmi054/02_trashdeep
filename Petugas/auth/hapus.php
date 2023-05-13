<?php
session_start();
include '../../auth/koneksi.php';


// Memeriksa apakah parameter id tersedia
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Menyiapkan dan menjalankan query untuk menghapus data jadwal
    $query = "DELETE FROM tb_jadwal WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    // Mengecek apakah query berhasil dijalankan
    if($result) {
        header("location: ../Jadwal/jadwal.php");
    } else {
        echo "Data jadwal gagal dihapus";
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
