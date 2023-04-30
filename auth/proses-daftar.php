//proses daftar
<?php
include 'koneksi.php';
if(isset($_POST['username']) && isset($_POST['no_telepon']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if username already exists in the database
    $check_query = "SELECT * FROM tb_masyarakat WHERE username = ?";
    $stmt_check = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt_check, "s", $username);
    mysqli_stmt_execute($stmt_check);
    $result_check = mysqli_stmt_get_result($stmt_check);

    if(mysqli_num_rows($result_check) > 0){
        // username already exists, redirect to registration page with error message
        echo "<div id='alert-username-used'>Username sudah digunakan, silakan coba lagi.</div>";
        echo "<script src='script.js'></script>";
        echo "<script>showAlert('alert-username-used');</script>";
        echo "<script>";
        echo "alert('Username sudah digunakan, silakan coba lagi.');";
        echo "</script>";
        header("location:../Daftar/daftar.php");
        exit();
    } 
    
    else {
        // username does not exist, insert into database
        $query = "INSERT INTO tb_masyarakat (id_masyarakat, username, password, no_telepon) 
                  VALUES (NULL, ?, ?, ?)";
    
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sss", $username, $password, $no_telepon);
        $result = mysqli_stmt_execute($stmt);
    
        if($result){
            header("location: ../Login/login.php");
            exit();
        }
        else{
            header("location:../Login/login.php?pesan=error");
            exit();
        }
    }
}    
else {
    header("location:../Login/login.php?pesan=error");
    exit();
}
?>