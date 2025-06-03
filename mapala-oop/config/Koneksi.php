<?php
class Koneksi {
    private $host = "localhost";
    private $db = "db_mapala";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
?>