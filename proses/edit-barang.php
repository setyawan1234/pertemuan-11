<?php
include('../config/koneksi.php');

// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama_merk = $_POST['nama_merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
// update data ke database
$sql = "update barang SET
nama_merk='$nama_merk',
warna='$warna',
jumlah='$jumlah' where no='$no'";
$query = mysqli_query($koneksi, $sql);
// mengalihkan halaman kembali ke index.php
header("Location: ../");

// // Mengeluarkan data dari POST
// $no = $_POST['no'];
// $nama_merk = $_POST['nama_merk'];
// $warna = $_POST['warna'];
// $jumlah = $_POST['jumlah'];

// $value = "UPDATE barang SET nama_merk = '$nama_merk', warna = '$warna', jumlah = '$jumlah' WHERE 'no' ='$no'";

// $query = mysqli_query($koneksi, $value);

// if ($query) {
//     header("Location: ../");
// } else {
//     header("Location: ../");
// }
