<?php
include('../koneksi.php');
$id = $_GET['id'];

$query = "DELETE FROM bio WHERE id = '$id'";

if ($conn->query($query)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.location.href = 'index.php';</script>";
}
?>