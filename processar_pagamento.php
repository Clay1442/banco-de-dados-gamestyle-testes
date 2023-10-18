<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pedido_id = $_POST["pedido_id"];
    $valor = $_POST["valor"];
    $data_pagamento = $_POST["data_pagamento"];


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO pagamentos (pedido_id, valor, data_pagamento) VALUES (?, ?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("ids", $pedido_id, $valor, $data_pagamento);
        $stmt->execute();
        $stmt->close();

        echo "Pagamento registrado com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
