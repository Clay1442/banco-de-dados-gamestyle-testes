<form action="processar_produto.php" method="post">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" required><br>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao"></textarea><br>

    <label for="preco">Preço:</label>
    <input type="text" name="preco" required><br>

    <label for="estoque">Estoque:</label>
    <input type="number" name="estoque" required><br>

    <label for="categoria_id">Categoria:</label>
<select name="categoria_id" id="categoria_id">
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
    <!-- Outras opções de categoria aqui -->
</select>

    <input type="submit" value="Inserir Produto">
</form>
