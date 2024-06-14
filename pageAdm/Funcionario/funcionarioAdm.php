<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<a href='../adm.php' class="btn_voltar"> <img src="\Prj_GEE/img/seta_voltar.png" width="45em"> </a>
<div class="container">

    <h1>Funcionario</h1>
    <a href="formInFun.php" class="btn btn-primary">Adicionar</a> 
    <button href="formReFun.php" class="btn btn-danger" disabled >Remover</button>
    
    <body class="BodyTable">
        <div class="containerTable">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="alinhamento">Id</th>
                        <th scope="col" class="alinhamento">Nome</th>
                        <th scope="col" class="alinhamento">Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $slq = mysqli_query($conexao, "SELECT * FROM funcionario");
                    while ($lista = mysqli_fetch_array($slq)) {
                        if ($lista['fun_IsActive'] == true) {
                            ?>
                            <tr>
                                <td><?php echo $lista['fun_cod']; ?></td>
                                <td><?php echo $lista['fun_nome']; ?></td>
                                <td><?php echo $lista['fun_cargo']; ?></td>
                            </tr>
                            <?php }
                    }
                    echo "<hr> "; 
                    while($lista = mysqli_fetch_array($slq)) {
                        if ($lista['fun_IsActive'] == false) {
                            ?>
                            <tr>
                                <td><?php echo $lista['fun_cod']; ?></td>
                                <td><?php echo $lista['fun_nome']; ?></td>
                                <td><?php echo $lista['fun_cargo']; ?></td>
                            </tr>
                            <?php }
                    }
                     ?> 
                    
                    

                </tbody>
            </table>
        </div>
    </div>
</div>