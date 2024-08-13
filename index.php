<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php
  include_once ("conexao.php");
  include_once ("navBar.php");
  include_once ("protect.php");
  ?>
  <div class="container overflow-hidden text-center index">
    <div class="row gx-5">
      <div class="col-6">
        <div class="row gy-5">
          <div class="col-6">
            <div class="p-3 quadradoAzul">
              <h1>Produtos mais retirados da semana</h1>
              <ul>
                <?php
                $slq = mysqli_query($conexao, "SELECT p.pro_nome as nome,sum(r.reg_quant),p.pro_IsActive as active FROM registro as r INNER JOIN produto as p on r.pro_cod=p.pro_cod GROUP by r.reg_quant DESC LIMIT 5");
                while ($lista = mysqli_fetch_array($slq)) {
                  if ($lista['active'] == true) {
                    ?>
                    <li><?php echo $lista['nome']; ?></li>
                  <?php }
                }
                ; ?>


              </ul>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 quadradoAzul">
              <h1>Funcionários que mais retiraram produtos</h1>
              <ul>
                <?php
                $slq = mysqli_query($conexao, "SELECT f.fun_nome as nome,SUM(r.reg_quant) FROM registro as r INNER JOIN funcionario as f on r.fun_cod=f.fun_cod GROUP BY r.fun_cod ORDER BY r.reg_quant DESC LIMIT 5");
                while ($lista = mysqli_fetch_array($slq)) {
                  ?>
                  <li><?php echo $lista['nome']; ?></li>
                  <?php
                }
                ; ?>
              </ul>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 quadradoCinza">
              <h1>Itens em Baixa Quantidade</h1>
              <?php
              $slq = mysqli_query($conexao, "SELECT p.pro_nome as nome,p.pro_quant as quant,p.pro_IsActive as active,p.pro_limite as limite FROM produto as p ORDER BY p.pro_quant ASC");
              while ($lista = mysqli_fetch_array($slq)) {
                if ($lista['active'] == true) {
                  if ($lista['quant'] <= $lista['limite'] && $lista['quant'] > 0) {
                    ?>
                    <span>
                      <p><?php echo $lista['nome']; ?></p>
                      <p class="alerta">Alerta</p>
                    </span>
                  <?php
                  }
                }
              }
              ; ?>

            </div>
          </div>
          <div class="col-6">
            <div class="p-3 quadradoCinza2">
              <h1>Sem estoque</h1>
              <ul class="offstock">
                <?php
                $slq = mysqli_query($conexao, "SELECT p.pro_nome as nome,p.pro_quant as quant,p.pro_IsActive as active FROM produto as p WHERE p.pro_quant=0 ");
                while ($lista = mysqli_fetch_array($slq)) {
                  if ($lista['active'] == true) {
                    ?>
                    <li class="grayBoxLi"><?php echo $lista['nome']; ?></li>
                  <?php }
                }
                ; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 quadradoCinza3">
          <h1>Historico de retirada</h1>
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Quem retirou</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
              </tr>
            </thead>
            <tbody>


              <?php
              $slq = mysqli_query($conexao, 'SELECT f.fun_nome as funNome,p.pro_nome as proNome, r.reg_quant as quant,r.reg_data FROM produto as p INNER JOIN registro as r on r.pro_cod=p.pro_cod INNER JOIN funcionario as f on r.fun_cod=f.fun_cod  WHERE r.reg_tipo="Retirado" ORDER BY r.reg_data DESC LIMIT 11' );
              while ($lista = mysqli_fetch_array($slq)) { ?>
                <tr>
                  <td><?php echo $lista['funNome']; ?></td>
                  <td><?php echo $lista['proNome']; ?></td>
                  <td><?php echo $lista['quant']; ?></td>
                </tr>
                <?php
              }
              ; ?>



            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>