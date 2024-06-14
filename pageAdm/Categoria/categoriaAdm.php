<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<a href='../adm.php' class="btn_voltar"> <img src="\Prj_GEE/img/seta_voltar.png" width="45em"> </a>
<div class="container">
<h1>Categoria</h1>
<a href="formInCat.php" class="btn btn-primary">Adicionar</a> 
    <a href="formReCat.php" class="btn btn-danger">Remover</a>
    <body class="BodyTable">
        <div class="containerTable">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="alinhamento">Codigo</th>
                    <th scope="col" class="alinhamento">Nome</th>
                </tr>
            </thead>
        <tbody>
            
            <?php
                    $slq = mysqli_query($conexao, "SELECT * FROM categoria");
                    while ($lista = mysqli_fetch_array($slq)) {
                        if ($lista['cat_IsActive'] == true) {
                            ?>
                            <tr>
                                <td><?php echo $lista['cat_cod']; ?></td>
                            <td><?php echo $lista['cat_nome']; ?></td>
                        </tr>
                    <?php }
                    }
                    echo "<hr> "; 
                    while($lista = mysqli_fetch_array($slq)) {
                        if ($lista['cat_IsActive'] == false) {
                            ?>
                            <tr>
                                <td><?php echo $lista['cat_cod']; ?></td>
                            <td><?php echo $lista['cat_nome']; ?></td>
                        </tr>
                    <?php }
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>