<form action="processar_detalhes_pedido.php" method="post">
    <label for="pedido_id">ID do Pedido:</label>
    <input type="number" name="pedido_id" id="pedido_id" required><br>

    <label for="produto_id">ID do Produto:</label>
    <input type="number" name="produto_id" required><br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" required><br>

    <input type="submit" value="Inserir Detalhes do Pedido">
</form>
