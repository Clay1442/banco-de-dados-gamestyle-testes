<form action="processar_compra_fornecedor.php" method="post">
    <label for="fornecedor_id">ID do Fornecedor:</label>
    <input type="number" name="fornecedor_id" required><br>

    <label for="produto_id">ID do Produto:</label>
    <input type="number" name="produto_id" required><br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" required><br>

    <label for="data_compra">Data da Compra:</label>
    <input type="date" name="data_compra" required><br>

    <input type="submit" value="Inserir Compra">
</form>
