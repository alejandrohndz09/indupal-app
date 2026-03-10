<?php

class Usuario {
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function selecionarTodos()
    {
        $query = "SELECT * FROM usuarios";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    }

    public function inserir($dados)
    {
        $query = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        return $stmt->execute();
    }
}