<?php
date_default_timezone_set('America/Sao_Paulo');
include ('../conexao.php');
include ('../protect.php');
include ('../navBar.php');
?>
<div class="container">

    <h1><?php echo $_GET['tipo']; ?> Produto</h1>
    <form action="" method="post">
        <label for="cod" class="form-label">Produto:</label>
        <select name="cod" id="cod" class="form-select" required>
            <?php
            $slq = mysqli_query($conexao, "SELECT * FROM produto WHERE pro_cod=" . $_GET['cod'] . "");
            $produto = mysqli_fetch_array($slq)
                ?>
            <option value="<?php echo $produto['pro_cod']; ?>" selected><?php echo $produto['pro_nome']; ?></option>
            <?php
            $slq = mysqli_query($conexao, "SELECT * FROM produto");
            while ($produtos = mysqli_fetch_array($slq)) {
                if ($produtos['pro_IsActive'] == true && $produto['pro_cod'] != $produtos['pro_cod']) { ?>
                    <option value="<?php echo $produtos['pro_cod']; ?>"><?php echo $produtos['pro_nome']; ?></option>
                <?php }
            } ?>
        </select>
        <label for="quant" class="form-label">Quantidade:</label>
        <input type="number" name="quant" id="quant" class="form-control" required><br>

        <input type="hidden" name="codigo" value="<?php echo $_GET['cod']; ?>">

        <input type="hidden" name="tipagem" value="<?php echo $_GET['tipo']; ?>">

        <a type="button" href="lista.php" class="btn btn-secondary">Cancelar</a>
        <input type="submit" class="btn btn-<?php if ($_GET['tipo'] == 'adicionar') {
            echo 'primary';
        } else {
            echo 'danger';
        } ?>" value="<?php echo $_GET['tipo']; ?>">
    </form>
    <?php if (isset($_POST['tipagem'])) {
        if ($_POST['tipagem'] == "retirar") {
            $cod = $_POST["codigo"];
            $fun = $_SESSION["cod"];
            $data = date('Y-m-d H:i');
            $sqlproduto = mysqli_query($conexao, "SELECT * FROM produto WHERE pro_cod='$cod'");
            $produtos = mysqli_fetch_array($sqlproduto);
            $quant = $_POST['quant'];
            if ($quant <= $produtos['pro_quant']) {
                $quantFinal = $produtos['pro_quant'] - $quant;
                $sqlregistro = mysqli_query($conexao, "INSERT INTO registro(fun_cod,pro_cod,reg_data,reg_quant,reg_tipo) VALUES('$fun','$cod','$data','$quant','Retirado')");
                $sqlupdate = mysqli_query($conexao, "UPDATE produto SET pro_quant='$quantFinal' WHERE pro_cod='$cod'");
                echo "<script> window.location.href='lista.php'</script>";
               // header("Location: lista.php");
                exit();
            } else {
                echo '<br><div class="alert alert-danger" role="alert">Quantidade Invalida. O produto selecionado tem somente ' . $produtos['pro_quant'] . ' no estoque</div>';
            }
        } elseif ($_POST['tipagem'] == "adicionar") {
            $cod = $_POST["codigo"];
            $fun = $_SESSION["cod"];
            $data = date('Y-m-d H:i');
            $sqlproduto = mysqli_query($conexao, "SELECT * FROM produto WHERE pro_cod='$cod'");
            $produtos = mysqli_fetch_array($sqlproduto);
            $quant = $_POST['quant'];
            $quantFinal = $produtos['pro_quant'] + $quant;
            $sqlregistro = mysqli_query($conexao, "INSERT INTO registro(fun_cod,pro_cod,reg_data,reg_quant,reg_tipo) VALUES('$fun','$cod','$data','$quant','Adicionado')");
            $sqlupdate = mysqli_query($conexao, "UPDATE produto SET pro_quant='$quantFinal' WHERE pro_cod='$cod'");
            echo "<script> window.location.href='lista.php'</script>";
            exit();
        } else {

        }
    }
    ?>
</div>