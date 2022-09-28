<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Tambah Barang</h1>
    <br>
    <form class="form-inline" action="./proses/add-barang.php" method="post">
        <label for="no">No : </label>
        <input type="text" name="no" required><br>
        <label for="nama_merk">Nama Merek : </label>
        <input type="text" name="nama_merk" required><br>
        <label for="warna">Warna : </label>
        <input type="text" name="warna" required><br>
        <label for="jumlah">Jumlah : </label>
        <input type="number" name="jumlah" required><br>
        <div class="card-button">
            <a href="./index.php">Kembali</a>
            <input class="button" type="submit" value="Reload" onClick="document.location.reload(true)">
            <input class="button" type="submit" value="Tambah">
        </div>
    </form>
</body>
<script>
    function reloadpage() {
        location.reload()
    }
</script>

</html>