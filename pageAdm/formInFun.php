<form action="inserirFun.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <label for="codigo">Codigo:</label>
    <input type="text" name="codigo" id="codigo" required>
    <label for="cargo">Cargo:</label>
    <select name="cargo" id="cargo">
        <option value="ADM">ADM</option>
        <option value="AGENTE">AGENTE</option>
    </select>
    
    <input type="submit" value="Registrar">
    <input type="reset" value="Limpar">
</form>