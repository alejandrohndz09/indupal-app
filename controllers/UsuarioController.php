<?php 
require_once '../config/conn.php';
require_once '../model/Usuario.php';

$usuario = new Usuario($conn);

// Exemplo de uso
$usuarios = $usuario->selecionarTodos();