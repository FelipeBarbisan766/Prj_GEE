<?php
include('../../conexao.php');
$cod = $_POST["cod"];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao,"UPDATE funcionario SET fun_senha='$senha' WHERE fun_cod='$cod'");

if($sql){
    header('Location:funcionarioAdm.php');
}else{
    echo "Erro no alter";
}
?>
