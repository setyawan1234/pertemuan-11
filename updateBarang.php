<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    include('./config/koneksi.php');
    $no = $_GET['no'];
    $sql = "select*from barang where no='$no'";
    // echo "$sql";
    $data = mysqli_query($koneksi, $sql);
    while ($a = mysqli_fetch_array($data)) {
        // print_r($a);
        // exit;
    ?>
        <h1>Update Barang</h1>
        <br>
        <form action="./proses/edit-barang.php" method="post">
            <label for="no">No : </label>
            <input type="text" name="no" value="<?= $a['no']; ?>" required>
            <label for="nama_merk">Nama Merek : </label>
            <input type="text" name="nama_merk" value="<?= $a['nama_merk']; ?>" required><br>
            <label for="warna">Warna : </label>
            <input type="text" name="warna" value="<?= $a['warna']; ?>" required><br>
            <label for="jumlah">Jumlah : </label>
            <input type="text" name="jumlah" value="<?= $a['jumlah']; ?>" required><br>
            <a href="./index.php">Kembali</a><input class="button" type="submit" value="Simpan">
            </div>
        </form>
    <?php
    }
    ?>
</body>

</html>