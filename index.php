<?php
// Mengambil koneksi data dari database config
include './config/koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- My JavaScriot -->
    <script src="./js/confirm.js"></script>
</head>

<body>
    <h1>Data Barang Laptop</h1>
    <a href="./tambahBarang.php">Tambah Data Barang</a>

    <div class="container">
        <table border="1">
            <thead>
                <th>No</th>
                <th>Nama Merek</th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Edit</th>
                <th>Hapus</th>
            </thead>

            <?php
            while ($data = mysqli_fetch_array($query)) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>" . $data['no'] . "</td>";
                echo "<td>" . $data['nama_merk'] . "</td>";
                echo "<td>" . $data['warna'] . "</td>";
                echo "<td>" . $data['jumlah'] . "</td>";
                echo '<td><a href="updateBarang.php?no=' . $data['no'] . '">Ubah</a></td>';
                echo '<td><a href="#" onclick="confirmDeleteBarang(' . $data['no'] . ')">Hapus</a></td>';
                echo "</tr>";
                echo "</tbody>";
            }
            ?>
        </table>
    </div>

    <footer>
        <p>Gilang Setyawan</p>
        <p>Tugas Semester 3</p>
    </footer>
</body>

</html>