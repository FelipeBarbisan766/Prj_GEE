<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">

<h1>Cadastrar Produto</h1>
<form action="inserirPro.php" method="post">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" required>
    <label for="quant" class="form-label">Quantidade:</label>
    <input type="number" name="quant" id="quant" class="form-control" required min="0" oninput="validity.valid||(value='');"/>
    <label for="desc" class="form-label">Descrição:</label>
    <input type="text" name="desc" id="desc" class="form-control">
    <label for="limit" class="form-label">Definir Alerta:</label>
    <input type="number" name="limit" id="limit" class="form-control inputalerta" placeholder="O valor padrão é 20" min="0" oninput="validity.valid||(value='');"/>
    <label for="cor" class="form-label">Cor:</label>
    <input type="text" name="cor" id="cor" class="form-control">
    <label for="categ" class="form-label">Categoria:</label>
    <select name="categ" id="categ" class="form-select" required>
        <?php 
        include_once("../conexao.php");
        $slq = mysqli_query($conexao,"SELECT * FROM categoria");
        while ($categorias = mysqli_fetch_array($slq)) {
            if($categorias['cat_IsActive']==true){?>

            <option value="<?php echo $categorias['cat_cod'];?>"><?php echo $categorias['cat_nome'];?></option>
            <?php }};?>
    </select><br>
    <input type="submit" value="Registrar" class="btn btn-primary">
    <a type="button" href="produtoAdm.php?proAdm='pro'" class="btn btn-secondary">Cancelar</a>

</form>
</div>