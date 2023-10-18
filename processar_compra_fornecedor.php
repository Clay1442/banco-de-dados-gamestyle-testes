<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fornecedor_id = $_POST["fornecedor_id"];
    $produto_id = $_POST["produto_id"];
    $quantidade = $_POST["quantidade"];
    $data_compra = $_POST["data_compra"];


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO compras_fornecedores (fornecedor_id, produto_id, quantidade, data_compra) VALUES (?, ?, ?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("iiis", $fornecedor_id, $produto_id, $quantidade, $data_compra);
        $stmt->execute();
        $stmt->close();

        echo "Compra de fornecedor registrada com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
