<?php
session_start();
include 'koneksi.php';

if(isset($_POST['no_telepon']) && isset($_POST['password_lama']) && isset($_POST['password_baru'])) {
    $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
    $password_lama = mysqli_real_escape_string($conn, $_POST['password_lama']);
    $password_baru = mysqli_real_escape_string($conn, $_POST['password_baru']);

    $query = "SELECT * FROM tb_masyarakat WHERE no_telepon = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $no_telepon, $password_lama);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        // Jika kredensial sesuai, update data masyarakat dengan password baru
        $query_update = "UPDATE tb_masyarakat SET password = ? WHERE no_telepon = ?";
        $stmt_update = mysqli_prepare($conn, $query_update);
        mysqli_stmt_bind_param($stmt_update, "ss", $password_baru, $no_telepon);
        mysqli_stmt_execute($stmt_update);

        // Jika data berhasil diupdate, arahkan kembali ke halaman profil dengan pesan sukses
        if(mysqli_affected_rows($conn) > 0) {
            $_SESSION['pesan'] = "Data berhasil diubah!";
            header("location: ../Profil/profil.php");
            exit();
        }
        else {
            $_SESSION['pesan'] = "Data gagal diubah!";
            header("location: ../profil/profil.php");
            exit();
        }
    }
    else {
        // Jika kredensial tidak sesuai, arahkan kembali ke halaman profil dengan pesan error
        $_SESSION['pesan'] = "Password lama salah!";
        header("location: ../Profil/profil.php");
        exit();
    }
} 
?>
