<link rel="stylesheet" href="styleReg.css" media="print">
<?php
include_once("../navbar.php")
?>
<div class="container">

    <h1>Historico de retirada</h1>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">Codigo do Funcionario</th>
                <th scope="col">Nome do Funcionario</th>
                <th scope="col">Cargo do Funcionario</th>
                
                <th scope="col">Codigo do Produto</th>
                <th scope="col">Nome do Produto</th>
                
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
                <th scope="col">Ação</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

include_once ("../conexao.php");
$slq = mysqli_query($conexao, "SELECT f.fun_cod as codfun,f.fun_nome as nomefun,f.fun_cargo as cargo,p.pro_cod as codpro,p.pro_nome as nomepro,r.reg_quant as quant,r.reg_data as datareg,r.reg_tipo as acao FROM produto as p INNER JOIN registro as r on r.pro_cod=p.pro_cod INNER JOIN funcionario as f on r.fun_cod=f.fun_cod ORDER BY r.reg_data DESC ");
while ($lista = mysqli_fetch_array($slq)) { ?>
            <tr>
                <td><?php echo $lista['codfun']; ?></td>
                <td><?php echo $lista['nomefun']; ?></td>
                <td><?php echo $lista['cargo']; ?></td>
                <td><?php echo $lista['codpro']; ?></td>
                <td><?php echo $lista['nomepro']; ?></td>
                <td><?php echo $lista['quant']; ?></td>
                <td><?php echo $lista['datareg']; ?></td>
                <td><?php echo $lista['acao']; ?></td>
            </tr>
            <?php
        }
        ; ?>
    </tbody>
</table>
</div>