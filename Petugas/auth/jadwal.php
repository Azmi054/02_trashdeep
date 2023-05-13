<?php
session_start();
include '../../auth/koneksi.php';

// Periksa apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi input
    $tanggal = trim($_POST['tanggal']);
    $waktu = trim($_POST['waktu']);
    $kegiatan = trim($_POST['kegiatan']);

    if (empty($tanggal) || empty($waktu) || empty($kegiatan)) {
        echo "Mohon lengkapi semua kolom.";
    } elseif (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $tanggal)) {
        echo "Format tanggal tidak valid. Harap gunakan format YYYY-MM-DD.";
    } elseif (!preg_match("/^\d{2}:\d{2}$/", $waktu)) {
        echo "Format waktu tidak valid. Harap gunakan format HH:MM.";
    } elseif (strlen($kegiatan) > 255) {
        echo "Teks kegiatan terlalu panjang. Maksimum 255 karakter.";
    } else {
        // Periksa koneksi
        if (mysqli_connect_errno()) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        // Tambahkan data ke dalam tabel jadwal
        $query = "INSERT INTO tb_jadwal (tanggal, waktu, kegiatan) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sss", $tanggal, $waktu, $kegiatan);
        $result = mysqli_stmt_execute($stmt);

        // memeriksa apakah data berhasil ditambahkan
        if ($result) {
            header("location: ../Jadwal/jadwal.php");
        } else {
            echo "Data gagal ditambahkan ke dalam tabel jadwal.";
        }

        // menutup statement dan koneksi ke database
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>
