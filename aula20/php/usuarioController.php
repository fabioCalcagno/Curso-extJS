<?php

require 'config.php';
require 'Usuario.php';

$usuario = new Usuario($mysql);
$usuarios = $usuario->exibirTodos();
echo $usuarios;
?>