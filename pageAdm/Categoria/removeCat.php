<?php
include('../../conexao.php');
$cod = $_POST["cod"];
$isActive = false;

$sql = mysqli_query($conexao,"UPDATE categoria SET cat_IsActive='$isActive' WHERE cat_cod='$cod'");

if($sql){
    header('Location:categoriaAdm.php');
}else{
    echo "Erro no Insert";
}
?>
