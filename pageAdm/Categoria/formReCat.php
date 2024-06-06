<form action="removeCat.php" method="post">
    <label for="cod">Categorias:</label>
    <select name="cod" id="cod">
        <?php
        include_once ("../conexao.php");
        $slq = mysqli_query($conexao, "SELECT * FROM categoria");
        while ($produtos = mysqli_fetch_array($slq)) { 
            if($produtos['cat_IsActive']==true){?>
            <option value="<?php echo $produtos['cat_cod']; ?>"><?php echo $produtos['cat_nome']; ?></option>
            <?php }}
        
        ; ?>
    </select>
    <input type="submit" value="remover">
</form>