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
<a href='../' class="btn_voltar"> <img src="\Prj_GEE/img/seta_voltar.png" width="45em"> </a>
<div class="admpage">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="\Prj_GEE/img/produtoadm.jpg" class="card-img-top" alt="produto"  height="250rem">
          <div class="card-body">
            <h5 class="card-title">PRODUTO</h5>
            <p class="card-text">Adição e retirada de produtos</p>
            <a href="Produto/produtoAdm.php?proAdm='pro'" class="btn btn-primary btnAzul" id="btnAdm">Acessar</a>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="\Prj_GEE/img/categoriaadm.jpeg" class="card-img-top" alt="..."  height="250rem">
          <div class="card-body">
            <h5 class="card-title">CATEGORIA</h5>
            <p class="card-text">Adição e remoção de categorias</p>
            <a href="Categoria/categoriaAdm.php" class="btn btn-primary btnAzul" id="btnAdm">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="\Prj_GEE/img/funcionarioadm.jpeg" class="card-img-top" alt="..." height="250rem">
          <div class="card-body">
            <h5 class="card-title">FUNCIONARIO</h5>
            <p class="card-text">Adição e remoção de Funcionarios</p>

            <a href="Funcionario/funcionarioAdm.php" class="btn btn-primary btnAzul" id="btnAdm">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="\Prj_GEE/img/imprimiradm.jpg" class="card-img-top" alt="..."  height="250rem">
          <div class="card-body">
            <h5 class="card-title">REGISTRO</h5>
            <p class="card-text">Registros do histórico de retirada</p>
            <a href="registo.php" class="btn btn-primary btnAzul" id="btnAdm">Acessar</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>

</body>

</html>