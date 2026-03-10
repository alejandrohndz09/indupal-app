<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'indupal_db';
    private $username = 'root';
    private $password = '';


    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        }catch(PDOException $e){

            http_response_code(500);

            echo json_encode([
                "success" => false,
                "message" => "Error de conexión"
            ]);

            exit;
        }
    }
}
?>