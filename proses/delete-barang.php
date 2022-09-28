<?php
include('../config/koneksi.php');

$id = $_GET['no'];

if (!$id) {
    header("Location: ../");
}

$query = mysqli_query($koneksi, "DELETE FROM `barang` WHERE no='$id'");
if ($query) {
    header("Location: ../");
} else {
    header("Location: ../");
}
