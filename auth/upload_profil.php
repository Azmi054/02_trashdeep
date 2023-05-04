<?php
session_start();
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $id_masyarakat = $_SESSION['id_masyarakat'];
    $foto_profil = addslashes(file_get_contents($_FILES['foto_profil']['tmp_name']));

    $query = "UPDATE tb_masyarakat SET foto_profil = ? WHERE id_masyarakat = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "si", $foto_profil, $id_masyarakat);
    mysqli_stmt_execute($stmt);

    if(mysqli_affected_rows($conn) > 0) {
        // Jika data berhasil diupdate, arahkan kembali ke halaman profil dengan pesan sukses
        header("location: ../Profil/profil.php?pesan=sukses");
        exit();
    }
    else {
        // Jika data gagal diupdate, arahkan kembali ke halaman profil dengan pesan error
        header("location: ../Profil/profil.php?pesan=gagal");
        exit();
    }
} 
?>
