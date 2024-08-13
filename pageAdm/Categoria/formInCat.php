<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">
    <h1>Adicionar Categoria</h1>
    <form action="inserirCat.php" method="post">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" required><br>
        <input type="submit" value="Registrar" class="btn btn-primary">
        <a type="button" href="categoriaAdm.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>