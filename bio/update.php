<?php
include('../koneksi.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$bio = $_POST['bio'];

$query = "UPDATE bio SET
        nama = '$nama',
        umur = '$umur',
        bio = '$bio'
        WHERE id = '$id'";

if ($conn->query($query)) {
    echo "<script>alert('Data berhasil diperbarui!'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('Data gagal diperbarui! Silakan coba lagi.'); window.location.href = 'edit.php?id=" . $id . "';</script>";
}
?>