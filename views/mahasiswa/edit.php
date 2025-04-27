<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="index.php?action=edit&id=<?php echo $mahasiswa['id']; ?>" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($mahasiswa['nama']); ?>" required><br><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($mahasiswa['nim']); ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali ke daftar</a>
</body>
</html>
