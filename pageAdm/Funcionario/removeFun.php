<?php
include('../../conexao.php');
$cod = $_POST["cod"];
$isActive = false;

$sql = mysqli_query($conexao,"UPDATE funcionario SET fun_IsActive='$isActive' WHERE fun_cod='$cod'");

if($sql){
    header('Location:funcionarioAdm.php');
}else{
    echo "Erro no remove";
}
?>
