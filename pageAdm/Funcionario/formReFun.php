<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">
<h1>Remover Funcionario</h1>
    <form action="removeFun.php" method="post">
        <label for="cod" class="form-label"></label>Funcionario:</label>
    <select name="cod" id="cod" class="form-select">
        <?php
        include_once ("../conexao.php");
        $slq = mysqli_query($conexao, "SELECT * FROM funcionario");
        while ($funcionario = mysqli_fetch_array($slq)) { 
            if($funcionario['fun_IsActive']==true){?>
            <option value="<?php echo $funcionario['fun_cod']; ?>"><?php echo $funcionario['fun_nome']; ?></option>
        <?php }}?>
    </select><br>
    <input type="submit" value="remover" class="btn btn-primary">
    <a type="button" href="funcionarioAdm.php" class="btn btn-secondary">Cancelar</a>
</form>
</div>