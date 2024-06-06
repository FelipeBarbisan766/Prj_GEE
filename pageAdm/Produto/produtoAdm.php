<h1>Produtos</h1>
<a href="formInPro.php">Adicionar</a> 
<a href="formRePro.php">Remover</a>
<hr>

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