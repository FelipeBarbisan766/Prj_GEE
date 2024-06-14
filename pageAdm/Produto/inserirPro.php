<?php
include('../../conexao.php');
$nome = strtoupper($_POST["nome"]);
$quant = $_POST["quant"];
$desc = strtoupper($_POST["desc"]);
$categ = $_POST["categ"];
$cor = strtoupper($_POST["cor"]);
$limit = $_POST['limit'];
$isActive = True;

$sql = mysqli_query($conexao,"INSERT INTO produto(pro_nome,pro_quant,pro_descricao,pro_cor,pro_limite,pro_IsActive,cat_cod) VALUES('$nome','$quant','$desc','$cor','$limit','$isActive','$categ')");

if($sql){
    header('Location:produtoAdm.php');
}else{
    echo "Erro no Insert";
}
?>