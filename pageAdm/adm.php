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

    <h1>Forms</h1>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Produto
    </button> -->
    <a href="formInPro.php" class="">Add Produto</a>
    <a href="formInCat.php" class="">Add Categoria</a>
    <a href="formRePro.php" class="">remover produto</a>
    <a href="formReCat.php" class="">remover categoria</a>

    <a href="formInFun.php" class="">Adicionar funcionario</a>

    <a href="registo.php">Imprimir Registro</a>

    <h1>Lista de Produtos</h1>

    <body class="BodyTable">
        <div class="containerTable">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Cor</th>
                        <th scope="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $slq = mysqli_query($conexao, "SELECT p.pro_cor as cor,p.pro_nome as nome,p.pro_quant as quant,p.pro_descricao as descri,c.cat_nome as nomecat,p.pro_IsActive as active,c.cat_IsActive as activecat FROM produto as p INNER JOIN categoria as c on c.cat_cod=p.cat_cod");
                    while ($lista = mysqli_fetch_array($slq)) {
                        if ($lista['active'] == true && $lista['activecat'] == true) {
                            ?>
                            <tr>
                                <td><?php echo $lista['nome']; ?></td>
                                <td><?php echo $lista['quant']; ?></td>
                                <td><?php echo $lista['descri']; ?></td>
                                <td><?php echo $lista['cor']; ?></td>
                                <td><?php echo $lista['nomecat']; ?> </td>
                            </tr>


                        <?php }
                    }
                    ; ?>


                </tbody>
            </table>
        </div>
</div>
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