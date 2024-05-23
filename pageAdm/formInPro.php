<h1>Produto</h1>
<form action="inserirPro.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <label for="quant">Quantidade:</label>
    <input type="text" name="quant" id="quant" required>
    <label for="desc">Descrição:</label>
    <input type="text" name="desc" id="desc">
    <label for="cor">Cor:</label>
    <input type="text" name="cor" id="cor">
    <label for="categ">Categoria:</label>
    <select name="categ" id="categ" required>
        <?php 
        include_once("../conexao.php");
        $slq = mysqli_query($conexao,"SELECT * FROM categoria");
        while ($categorias = mysqli_fetch_array($slq)) {
            if($categorias['cat_IsActive']==true){?>

            <option value="<?php echo $categorias['cat_cod'];?>"><?php echo $categorias['cat_nome'];?></option>
            <?php }};?>
    </select>
    <input type="submit" value="Registrar">
    <input type="reset" value="Limpar">

</form>