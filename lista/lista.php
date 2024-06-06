<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TabelaProd</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="BodyTable">
    <?php 
    include_once("../navBar.php");
    include_once ("../conexao.php");
    include_once("../protect.php");
    ?>
      <div class="container">

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
                    if(isset($_GET['cod'])){
                        $cod = $_GET['cod'];
                        $slq = mysqli_query($conexao, "SELECT p.pro_cod as cod,p.pro_cor as cor,p.pro_nome as nome,p.pro_quant as quant,p.pro_descricao as descri,c.cat_nome as nomecat,p.pro_IsActive as active,c.cat_IsActive as activecat FROM produto as p INNER JOIN categoria as c on c.cat_cod=p.cat_cod WHERE c.cat_cod=$cod");
                        
                        }elseif(isset($_POST['buscar'])){
                            $busc = strtoupper($_POST['buscar']);
                            $slq = mysqli_query($conexao, "SELECT p.pro_cod as cod,p.pro_cor as cor,p.pro_nome as nome,p.pro_quant as quant,p.pro_descricao as descri,c.cat_nome as nomecat,p.pro_IsActive as active,c.cat_IsActive as activecat FROM produto as p INNER JOIN categoria as c on c.cat_cod=p.cat_cod WHERE p.pro_nome LIKE '%".$busc."%'");
                            
                            }
                            else{
                                
                                $slq = mysqli_query($conexao, "SELECT p.pro_cod as cod,p.pro_cor as cor,p.pro_nome as nome,p.pro_quant as quant,p.pro_descricao as descri,c.cat_nome as nomecat,p.pro_IsActive as active,c.cat_IsActive as activecat FROM produto as p INNER JOIN categoria as c on c.cat_cod=p.cat_cod");
                                }
                                while ($lista = mysqli_fetch_array($slq)) { 
                                    if($lista['active'] == true && $lista['activecat'] == true){
                                        ?>
                        <tr>
                            <td><?php echo $lista['nome']; ?></td>
                        <td><?php echo $lista['quant']; ?></td>
                    <td><?php echo $lista['descri']; ?></td>
                <td><?php echo $lista['cor']; ?></td>
            <td><?php echo $lista['nomecat']; ?> </td>
        <td>
            <a href="form.php?cod=<?php echo $lista['cod']; ?>&tipo=adicionar" class="btn btn-primary">adicionar produto</a>
            <a href="form.php?cod=<?php echo $lista['cod']; ?>&tipo=retirar" class="btn btn-danger">retirar produto</a>
                            </td>
                        </tr>
                    
                    
                    <?php }}
                    ; ?>


</tbody>
</table>
</div>
</div>
</div>  
</body>

</html>