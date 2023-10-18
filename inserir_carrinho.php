<form action="processar_carrinho.php" method="post">
    <label for="usuario_id">ID do Usuário:</label>
    <input type="number" name="usuario_id" required><br>

    <label for="produto_id">ID do Produto:</label>
    <input type="number" name="produto_id" required><br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" required><br>

    <input type="submit" value="Inserir no Carrinho">
</form>
