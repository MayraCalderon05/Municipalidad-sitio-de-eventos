<?php

class Database {
   /*private $host = "172.16.20.30";
    private $db_name = "eventos_municipales";
    private $username = "desarrollo";
    private $password = "fisca1234";
    private $conn;*/

    private $host = "localhost";
    private $db_name = "eventos_municipales";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>