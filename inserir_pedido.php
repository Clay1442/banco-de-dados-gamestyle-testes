<form action="processar_pedido.php" method="post">
    <label for="usuario_id">ID do Usuário:</label>
    <input type="number" name="usuario_id" required><br>

    <label for="data_pedido">Data do Pedido:</label>
    <input type="datetime-local" name="data_pedido" required><br>

    <label for="status">Status:</label>
    <select name="status">
        <option value="pendente">Pendente</option>
        <option value="processando">Processando</option>
        <option value="enviado">Enviado</option>
        <option value="entregue">Entregue</option>
    </select><br>

    <input type="submit" value="Inserir Pedido">
</form>
