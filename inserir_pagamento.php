<form action="processar_pagamento.php" method="post">
    <label for="pedido_id">ID do Pedido:</label>
    <input type="number" name="pedido_id" required><br>

    <label for="valor">Valor do Pagamento:</label>
    <input type="text" name="valor" required><br>

    <label for="data_pagamento">Data do Pagamento:</label>
    <input type="datetime-local" name="data_pagamento" required><br>

    <input type="submit" value="Inserir Pagamento">
</form>
