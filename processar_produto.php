<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];
    $categoria_id = $_POST["categoria_id"];
    
    if (isset($_POST["categoria_id"])) {
        $categoria_id = $_POST["categoria_id"];
        // Resto do seu código que lida com $categoria_id
    } else {
        echo "A chave 'categoria_id' não foi enviada no formulário.";
    }
    


    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Prepare a consulta SQL
    $sql = "INSERT INTO produtos (nome, descricao, preco, estoque, categoria_id) VALUES (?, ?, ?, ?, ?)";

    // Prepare a declaração
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros e execute a consulta
        $stmt->bind_param("ssdii", $nome, $descricao, $preco, $estoque, $categoria_id);
        $stmt->execute();
        $stmt->close();

        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro na consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
