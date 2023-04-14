<?php
include 'koneksi.php'; 

$username = $_POST['username'];
$no_telepon = $_POST['no_telepon'];
$password = $_POST['password'];

$query = "INSERT INTO tb_masyarakat (id_masyarakat, username, password, no_telepon) 
          VALUES ('', '$username', '$password', '$no_telepon')";

$result = mysqli_query($conn, $query);

if($result){
    header("location: ../login.php");
}
else{
    header("location:../login.php?pesan=error");
}
?>