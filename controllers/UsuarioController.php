<?php 
require_once '../config/conn.php';
require_once '../model/Usuario.php';

class UsuarioController{
    private $usuario;

    public function __construct($conn) {
        $this->usuario = new Usuario($conn);
    }

    public function listarUsuarios() {
        $usuarios = $this->usuario->selecionarTodos();
        Response::success($usuarios);
    }

}
