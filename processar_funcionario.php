<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST["usuario_id"];
    $cargo = $_POST["cargo"];


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO funcionarios (usuario_id, cargo) VALUES (?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("is", $usuario_id, $cargo);
        $stmt->execute();
        $stmt->close();

        echo "Funcionário inserido com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
