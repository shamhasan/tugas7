<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="index.php?action=create" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href="index.php">Kembali ke daftar</a>
</body>
</html>
