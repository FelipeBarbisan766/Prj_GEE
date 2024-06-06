<?php
include('../conexao.php');
$nome = strtoupper($_POST["nome"]);
$quant = $_POST["quant"];
$desc = strtoupper($_POST["desc"]);
$categ = $_POST["categ"];
$cor = strtoupper($_POST["cor"]);
$isActive = True;

$sql = mysqli_query($conexao,"INSERT INTO produto(pro_nome,pro_quant,pro_descricao,pro_cor,pro_IsActive,cat_cod) VALUES('$nome','$quant','$desc','$cor','$isActive','$categ')");

if($sql){
    header('Location:adm.php');
}else{
    echo "Erro no Insert";
}
?>