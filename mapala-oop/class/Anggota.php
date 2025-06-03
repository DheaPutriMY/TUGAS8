<?php
require_once('./config/Koneksi.php');

class Anggota {
    private $conn;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function tampil() {
        $query = "SELECT * FROM anggota_baru ORDER BY tanggal_daftar DESC";
        $result = $this->conn->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
?>