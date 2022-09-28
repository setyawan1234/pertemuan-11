<?php
include('../config/koneksi.php');

// Mengeluarkan data dari POST
$no = $_POST['no'];
$nama_merk = $_POST['nama_merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];


$value = "INSERT INTO barang (no, nama_merk, warna, jumlah) VALUES 
    ('$no','$nama_merk', '$warna', '$jumlah')";

$query = mysqli_query($koneksi, $value);

if ($query) {
    header("Location: ../");
} else {
    header("Location: ../tambahBarang.php");
}
