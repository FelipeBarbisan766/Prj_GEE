<?php
include_once ("../../conexao.php");
include_once ("../../navBar.php");
include_once ("../protectADM.php");
?>
<div class="container">
<h1>Remover Produto</h1>
    <form action="removePro.php" method="post">
        <label for="cod" class="form-label"></label>Produto:</label>
    <select name="cod" id="cod" class="form-select">
        <?php
        include_once ("../conexao.php");
        if(isset($_GET['cod'])){
        $slq = mysqli_query($conexao, "SELECT * FROM produto WHERE pro_cod=".$_GET['cod']."");
        }else{
        $slq = mysqli_query($conexao, "SELECT * FROM produto");
        }
        while ($produtos = mysqli_fetch_array($slq)) { 
            if($produtos['pro_IsActive']==true){?>
            <option value="<?php echo $produtos['pro_cod']; ?>"><?php echo $produtos['pro_nome']; ?></option>
        <?php }}
        
        ; ?>
    </select><br>
    <input type="submit" value="remover" class="btn btn-primary">
    <a type="button" href="produtoAdm.php?proAdm='pro'" class="btn btn-secondary">Cancelar</a>
</form>
</div>