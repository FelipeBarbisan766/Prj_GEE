<?php
include_once("../../navbar.php")
?>
<div class="container">

    <h1>Produtos</h1>
    <a href="formInPro.php">Adicionar</a> 
    <a href="formRePro.php">Remover</a>
    
    <body class="BodyTable">
        <div class="containerTable">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
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