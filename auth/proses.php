<?php
session_start();
include 'koneksi.php'; 
// Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lokasi = $_POST["lokasi"];
  $deskripsi = $_POST["deskripsi"];
  $foto = $_FILES["foto"]["name"];
  $id_masyarakat = $_SESSION['id_masyarakat'];

  // Menyiapkan query untuk menyimpan data ke database
  $sql = "INSERT INTO tb_laporan (id_masyarakat,lokasi, deskripsi, foto) VALUES ('$id_masyarakat','$lokasi', '$deskripsi', '$foto')";

  // Menjalankan query
  if (mysqli_query($conn, $sql)) {
    // Jika data berhasil disimpan, maka file foto juga akan disimpan di folder uploads
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    header("location: ../Laporan/laporan.php");
    echo "Laporan berhasil ditambahkan!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Mengambil data dari database untuk diisi pada input
$query = "SELECT * FROM tb_laporan WHERE id_laporan =''"; // Ganti "1" dengan id_laporan yang diinginkan
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Isi nilai default input dengan data dari database
$lokasi = $data['lokasi'];
$deskripsi = $data['deskripsi'];
$foto = $data['foto'];

$_SESSION['lokasi']=$lokasi;
// Menutup koneksi ke database
mysqli_close($conn);
?>
?>