<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">
<h1>Remover Categoria</h1>
    <form action="removeCat.php" method="post">
        <label for="cod" class="form-label">Categorias:</label>
        <select name="cod" id="cod" class="form-select">
            <?php
            include_once ("../conexao.php");
            $slq = mysqli_query($conexao, "SELECT * FROM categoria");
            while ($produtos = mysqli_fetch_array($slq)) {
                if ($produtos['cat_IsActive'] == true) { ?>
                    <option value="<?php echo $produtos['cat_cod']; ?>"><?php echo $produtos['cat_nome']; ?></option>
                <?php }
            }

            ; ?>
        </select><br>
        <input type="submit" value="remover" class="btn btn-primary">
        <a type="button" href="categoriaAdm.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>