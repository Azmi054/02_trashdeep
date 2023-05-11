<?php
session_start();
include '../../auth/koneksi.php';

if(isset($_POST['no_telepon']) && isset($_POST['password'])) {
    $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM tb_petugas WHERE no_telepon = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $no_telepon, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        // Jika kredensial sesuai, arahkan ke halaman utama
        $row = mysqli_fetch_assoc($result);
        $_SESSION['no_telepon'] = $row['no_telepon'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['id_petugas'] = $row['id_petugas'];
        header("location: ../Home petugas/home.php");
        exit();
    }
    else {
        // Jika kredensial tidak sesuai, arahkan kembali ke halaman login dengan pesan error
        header("location:../Login petugas/login.php?pesan=error&login_error=username_password_salah");
        exit();
    }
} 
?>