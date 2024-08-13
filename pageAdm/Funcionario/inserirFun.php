<?php
include('../../conexao.php');
mb_internal_encoding('UTF-8');
$nome = mb_strtoupper($_POST['nome']);
$cod = $_POST['codigo'];
$cargo = $_POST['cargo'];
$isActive = true;

$sql = mysqli_query($conexao,"INSERT INTO funcionario(fun_nome,fun_senha,fun_cargo,fun_IsActive) VALUES('$nome','$cod','$cargo','$isActive')");

if($sql){
    header('Location:funcionarioAdm.php');
}else{
    echo "Erro no Insert";
}
?>