<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'db_perpustakaan';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnection() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch(PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
        return $this->conn;
    }
}
