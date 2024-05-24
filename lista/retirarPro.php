<?php
include('../conexao.php');
include('../protect.php');
$cod = $_POST["cod"];
$sqlproduto = mysqli_query($conexao, "SELECT * FROM produto WHERE pro_cod='$cod'");
$produtos = mysqli_fetch_array($sqlproduto);
$quant=$_POST['quant'];
if($quant < $produtos['pro_quant']){
    $quantFinal =  $produtos['pro_quant'] - $quant;
}else{
    // echo "<script type='javascript'>javascript:alert('Quantidade Indisponivel!');";
    // echo "javascript:window.location='formRePro.php';</script>";
    header("location:javascript:alert(\"Quantidade Indisponivel!\");location.href=\"formRePro.php\";"); 
    //  header("location:formRePro.php");
    //  exit();
}
$fun = $_SESSION["cod"];
$data = date('Y-m-d H:i:s') ;


$sqlregistro = mysqli_query($conexao,"INSERT INTO registro(fun_cod,pro_cod,reg_data,reg_quant,reg_tipo) VALUES('$fun','$cod','$data','$quant','Retirada')");
$sqlupdate = mysqli_query($conexao,"UPDATE produto SET pro_quant='$quantFinal' WHERE pro_cod='$cod'");


    // header('Location:lista.php');


?>
