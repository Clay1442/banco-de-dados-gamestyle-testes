<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $tipo = $_POST["tipo"];
    
    
    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    
    // Preparar a consulta SQL
    $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, ?)";
    
    // Preparar a declaração
    $stmt = $conexao->prepare($sql);
    
    if ($stmt) {
        // Vincular os parâmetros e executar a consulta
        $stmt->bind_param("ssss", $nome, $email, $senha, $tipo);
        $stmt->execute();
        $stmt->close();
        
        echo "Usuário inserido com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }
    
    // Fechar a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
