<?php
// Configurações do banco de dados
$host = "localhost";        // Host do banco de dados
$usuario = "root";   // Nome de usuário do banco de dados
$senha = "";       // Senha do banco de dados
$banco = "gamestyle teste"; // Nome do banco de dados

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
