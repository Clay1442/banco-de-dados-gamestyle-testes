<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pedido_id = $_POST["pedido_id"];
    $produto_id = $_POST["produto_id"];
    $quantidade = $_POST["quantidade"];


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO detalhes_pedido (pedido_id, produto_id, quantidade) VALUES (?, ?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("iii", $pedido_id, $produto_id, $quantidade);
        $stmt->execute();
        $stmt->close();

        echo "Detalhes do pedido inseridos com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
