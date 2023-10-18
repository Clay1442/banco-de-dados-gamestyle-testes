<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $contato = $_POST["contato"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO fornecedores (nome, contato, telefone, email) VALUES (?, ?, ?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("ssss", $nome, $contato, $telefone, $email);
        $stmt->execute();
        $stmt->close();

        echo "Fornecedor inserido com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
