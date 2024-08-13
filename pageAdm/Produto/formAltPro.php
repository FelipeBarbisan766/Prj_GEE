<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
$slq = mysqli_query($conexao, "SELECT * FROM produto WHERE pro_cod=".$_GET['cod']."");
$lista = mysqli_fetch_array($slq);
?>
<div class="container">

<h1>Alterar Produto</h1>
<form action="alterarPro.php" method="post">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo $lista['pro_nome'] ?>" class="form-control" required>
    <label for="quant" class="form-label">Quantidade:</label>
    <input type="number" name="quant" id="quant" class="form-control" value="<?php echo $lista['pro_quant'] ?>" required min="0" oninput="validity.valid||(value='');"/>
    <label for="desc" class="form-label">Descrição:</label>
    <input type="text" name="desc" id="desc" class="form-control" value="<?php echo $lista['pro_descricao'] ?>">
    <label for="limit" class="form-label">Definir Alerta:</label>
    <input type="number" name="limit" id="limit" class="form-control inputalerta" value="<?php echo $lista['pro_limite'] ?>" placeholder="O valor padrão é 20" min="0" oninput="validity.valid||(value='');"/>
    <label for="cor" class="form-label">Cor:</label>
    <input type="text" name="cor" id="cor" class="form-control" value="<?php echo $lista['pro_cor'] ?>">
    <label for="categ" class="form-label">Categoria:</label>
    <select name="categ" id="categ" class="form-select" required>
        <?php 
        $slqid = mysqli_query($conexao,"SELECT * FROM categoria WHERE cat_cod=".$lista['cat_cod']."");
        $slq = mysqli_query($conexao,"SELECT * FROM categoria");
        $categoria = mysqli_fetch_array($slqid);?>
        <option value="<?php echo $categoria['cat_cod'];?>"><?php echo $categoria['cat_nome'];?></option><?php
        while ($categorias = mysqli_fetch_array($slq)) {
            if($categorias['cat_IsActive']==true && $categorias['cat_cod']!= $categoria['cat_cod']){?>

            <option value="<?php echo $categorias['cat_cod'];?>"><?php echo $categorias['cat_nome'];?></option>
            <?php }};?>
    </select><br>
    <input type="hidden" name="codigo" value="<?php echo $_GET['cod']; ?>">
    <input type="submit" value="Registrar" class="btn btn-primary">
    <a type="button" href="produtoAdm.php?proAdm='pro'" class="btn btn-secondary">Cancelar</a>

</form>
</div>