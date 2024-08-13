<?php
include('../../conexao.php');
mb_internal_encoding('UTF-8');
$cod = $_POST['codigo'];
$nome = mb_strtoupper($_POST["nome"]);
$quant = $_POST["quant"];
$desc = mb_strtoupper($_POST["desc"]);
$categ = $_POST["categ"];
$cor = mb_strtoupper($_POST["cor"]);
$limit = $_POST['limit'];

$sql = mysqli_query($conexao,"UPDATE produto SET pro_nome='".$nome."',pro_quant=".$quant.",pro_descricao='".$desc."',cat_cod=".$categ.",pro_cor='".$cor."',pro_limite=".$limit." WHERE pro_cod=".$cod."");

if($sql){
    header('Location:produtoAdm.php?proAdm="pro"');
}else{
    echo "Erro no Insert";
}
?>