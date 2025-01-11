<?php
include('../koneksi.php');
$nama = htmlspecialchars($_POST['nama']);
$umur = (int) $_POST['umur'];
$bio = htmlspecialchars($_POST['bio']);

$query = "INSERT INTO bio (nama, umur, bio) VALUES ('$nama', '$umur', '$bio')";

if ($conn->query($query)) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan! Silakan coba lagi.'); window.location.href = 'create.php';</script>";
}
?>