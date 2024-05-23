<?php
include('../conexao.php');
$nome = $_POST['nome'];
$cod = $_POST['codigo'];
$cargo = $_POST['cargo'];
$isActive = true;

$sql = mysqli_query($conexao,"INSERT INTO funcionario(fun_nome,fun_senha,fun_cargo,fun_IsActive) VALUES('$nome','$cod','$cargo','$isActive')");

if($sql){
    header('Location:adm.php');
}else{
    echo "Erro no Insert";
}
?>