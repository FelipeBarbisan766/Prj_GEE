<form action="retirarPro.php" method="post">
    <label for="cod">Produto:</label>
    <select name="cod" id="cod">
        <?php
        include_once ("../conexao.php");
        $slq = mysqli_query($conexao, "SELECT * FROM produto");
        while ($produtos = mysqli_fetch_array($slq)) { 
            if($produtos['pro_IsActive']==true){?>
            <option value="<?php echo $produtos['pro_cod']; ?>"><?php echo $produtos['pro_nome']; ?></option>
            <?php }}
        
        ; ?>
    </select>
    <label for="quant">Quantidade:</label>
    <input type="number" name="quant" id="quant">
    <input type="submit" value="remover">
</form>