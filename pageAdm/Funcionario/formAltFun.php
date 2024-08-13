<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">
    

    <?php
    if (isset($_GET['codigo'])) {
        $nome = $_SESSION['nome'];
        $senha = $_GET['codigo'];
        $sql_code = "SELECT * FROM funcionario WHERE fun_nome = '$nome' AND fun_senha ='$senha'";
        $sql_query = $conexao->query($sql_code) or die("falha na execução do codigo");

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            ?>
            <h1>Alteração de Senha do Funcionario</h1>
            <form action="alterarFun.php" method="post">
                <label for="cod" class="form-label"></label>Funcionario:</label>
                <select name="cod" id="cod" class="form-select">
                    <?php
                    include_once ("../conexao.php");
                    $slq = mysqli_query($conexao, "SELECT * FROM funcionario");
                    while ($funcionario = mysqli_fetch_array($slq)) {
                        if ($funcionario['fun_IsActive'] == true) { ?>
                            <option value="<?php echo $funcionario['fun_cod']; ?>"><?php echo $funcionario['fun_nome']; ?></option>
                        <?php }
                    } ?>
                </select><br>
                <label for="senha" class="form-label">Novo Codigo:</label>
                <input type="text" name="senha" id="senha" class="form-control" required>
                <br>
                <input type="submit" value="Registrar" class="btn btn-primary">
                <a type="button" href="funcionarioAdm.php" class="btn btn-secondary">Cancelar</a>
            </form>
            <?php
        } else {
            echo '<div class="alert alert-warning" role="alert">
    <p>Codigo incorreto! Verifique novamente</p>
</div>
<form action="" method="">
            <label for="codigo" class="form-label">Digite Seu Codigo:</label>
            <input type="text" name="codigo" id="codigo" class="form-control" required><br>
            <input type="submit" value="Registrar" class="btn btn-primary">
            <a type="button" href="funcionarioAdm.php" class="btn btn-secondary">Cancelar</a>
        </form>'

            ;
        }
    } else {
        ?>
        <h3>Antes de prosseguir confirme sua indentidade</h3>
        <form action="" method="">
            <label for="codigo" class="form-label">Digite Seu Codigo:</label>
            <input type="text" name="codigo" id="codigo" class="form-control" required><br>
            <input type="submit" value="Registrar" class="btn btn-primary">
            <a type="button" href="funcionarioAdm.php" class="btn btn-secondary">Cancelar</a>
        </form>
        <?php
    }

    ?>



</div>