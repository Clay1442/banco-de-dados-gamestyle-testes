<form action="processar_usuario.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br>

    <label for="tipo">Tipo:</label>
    <select name="tipo">
        <option value="cliente">Cliente</option>
        <option value="funcionario">Funcionário</option>
    </select><br>

    <input type="submit" value="Inserir Usuário">
</form>
