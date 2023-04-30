<?php
include 'koneksi.php';

if(isset($_POST['no_telepon']) && isset($_POST['password'])) {
    $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM tb_masyarakat WHERE no_telepon = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $no_telepon, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        // Jika kredensial sesuai, arahkan ke halaman utama
        $row = mysqli_fetch_assoc($result);
        $_SESSION['no_telepon'] = $row['no_telepon'];
        header("location: ../Home/home.php");
        exit();
    }
    else {
        // Jika kredensial tidak sesuai, arahkan kembali ke halaman login dengan pesan error
        header("location:../Login/login.php?pesan=error&login_error=username_password_salah");
        exit();
    }
} 
?>