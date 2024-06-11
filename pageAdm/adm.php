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
    <div class="admpage">
<div class="container">

        
        <a href="Produto/produtoAdm.php" class="btn btn-primary" id="btnAdm">Produto</a>
    
    <a href="Categoria/categoriaAdm.php" class="btn btn-primary" id="btnAdm">Categoria</a>

<a href="Funcionario/funcionarioAdm.php" class="btn btn-primary" id="btnAdm">Funcionario</a>

<a href="registo.php" class="btn btn-primary" id="btnAdm">Imprimir Registro</a>

</div>
</div>

</body>

</html>