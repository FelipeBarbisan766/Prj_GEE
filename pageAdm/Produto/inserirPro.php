<?php
include('../../conexao.php');
mb_internal_encoding('UTF-8');
$nome = mb_strtoupper($_POST["nome"]);
$quant = $_POST["quant"];
$desc = mb_strtoupper($_POST["desc"]);
$categ = $_POST["categ"];
$cor = mb_strtoupper($_POST["cor"]);
$limit = $_POST['limit'];
$isActive = True;

$sql = mysqli_query($conexao,"INSERT INTO produto(pro_nome,pro_quant,pro_descricao,pro_cor,pro_limite,pro_IsActive,cat_cod) VALUES('$nome','$quant','$desc','$cor','$limit','$isActive','$categ')");

if($sql){
    header('Location:produtoAdm.php?proAdm="pro"');
}else{
    echo "Erro no Insert";
}
?>