<?php
require_once('./class/Anggota.php');
$anggota = new Anggota();
$data = $anggota->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar MAPALA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Pendaftar MAPALA</h1>
    <a href="tambah.php">Tambah Pendaftar Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Fakultas</th>
                <th>Alasan</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $d) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$d['nama']}</td>
                        <td>{$d['nim']}</td>
                        <td>{$d['fakultas']}</td>
                        <td>{$d['alasan']}</td>
                        <td>{$d['tanggal_daftar']}</td>
                    </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>