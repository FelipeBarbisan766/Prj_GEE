<?php
include('../../conexao.php');
$cod = $_POST["cod"];
$isActive = false;

$sql = mysqli_query($conexao,"UPDATE produto SET pro_IsActive='$isActive' WHERE pro_cod='$cod'");

if($sql){
    header('Location:produtoAdm.php');
}else{
    echo "Erro no Insert";
}
?>
