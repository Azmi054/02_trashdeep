<?php
include 'koneksi.php'; 
// Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lokasi = $_POST["lokasi"];
  $deskripsi = $_POST["deskripsi"];
  $foto = $_FILES["foto"]["name"];

  // Menyiapkan query untuk menyimpan data ke database
  $sql = "INSERT INTO tb_laporan (lokasi, deskripsi, foto) VALUES ('$lokasi', '$deskripsi', '$foto')";

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

// Menutup koneksi ke database
mysqli_close($conn);
?>