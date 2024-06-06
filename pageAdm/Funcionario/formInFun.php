<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">
<h1>Adicionar Funcionario</h1>

<form action="inserirFun.php" method="post">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" required>
    <label for="codigo" class="form-label">Codigo:</label>
    <input type="text" name="codigo" id="codigo"  class="form-control" required>
    <label for="cargo" class="form-label">Cargo:</label>
    <select name="cargo" id="cargo" class="form-select">
        <option value="ADM">ADM</option>
        <option value="AGENTE">AGENTE</option>
    </select><br>
    
    <input type="submit" value="Registrar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-secondary">
</form>
</div>