<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST["usuario_id"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO clientes (usuario_id, endereco, telefone) VALUES (?, ?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("iss", $usuario_id, $endereco, $telefone);
        $stmt->execute();
        $stmt->close();

        echo "Cliente inserido com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
