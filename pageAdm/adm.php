<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TabelaProd</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<?php
include_once ("../conexao.php");
include_once ("../navBar.php");
include_once ("protectADM.php");
?>
<div class="container">

    <a href="formInPro.php" class="">Produto</a>

    <a href="formInCat.php" class="">Categoria</a>

    <a href="formInFun.php" class="">Funcionario</a>

    <a href="registo.php">Imprimir Registro</a>

    
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                        include_once ("../conexao.php");
                        $slq = mysqli_query($conexao, "SELECT * FROM categoria");
                        while ($categorias = mysqli_fetch_array($slq)) {
                            if ($categorias['cat_IsActive'] == true) { ?>

                                <option value="<?php echo $categorias['cat_cod']; ?>"><?php echo $categorias['cat_nome']; ?>
                                </option>
                            <?php }
                        }
                        ; ?>
                    </select>
                    <input type="submit" value="Registrar">
                    <input type="reset" value="Limpar">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>