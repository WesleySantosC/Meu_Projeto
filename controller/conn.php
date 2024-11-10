<?php 

class User {
    protected $conn; // Define a propriedade de conexão

    public function __construct() {
        $host = "localhost";
        $dbname = "users";
        $username = "root";
        $password = "";

        $this->conn = new mysqli($host, $username, $password, $dbname);

        // Verificar a conexão
        if ($this->conn->connect_error) {
            die("Falha na conexão: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
