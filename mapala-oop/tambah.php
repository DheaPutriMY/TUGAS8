<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('./config/Koneksi.php');
    $db = new Koneksi();
    $conn = $db->conn;

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $fakultas = $_POST['fakultas'];
    $alasan = $_POST['alasan'];
    $tanggal = date('Y-m-d');

    $sql = "INSERT INTO anggota_baru (nama, nim, fakultas, alasan, tanggal_daftar)
            VALUES ('$nama', '$nim', '$fakultas', '$alasan', '$tanggal')";
    
    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulir Pendaftaran MAPALA</h1>
    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Fakultas:</label><br>
        <input type="text" name="fakultas" required><br><br>

        <label>Alasan Bergabung:</label><br>
        <textarea name="alasan" required></textarea><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>