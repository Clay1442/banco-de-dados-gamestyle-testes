<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCategoria = $_POST["nome"];
    
    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    
    // Preparar a consulta SQL
    $sql = "INSERT INTO categorias (nome) VALUES (?)";
    
    // Preparar a declaração
    $stmt = $conexao->prepare($sql);
    
    if ($stmt) {
        // Vincular os parâmetros e executar a consulta
        $stmt->bind_param("s", $nomeCategoria);
        $stmt->execute();
        $stmt->close();
        
        echo "Categoria inserida com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }
    
    // Fechar a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
