<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
include('../conexao.php');
$nome = strtoupper($_POST["nome"]);
$isActive = True;

$search = mysqli_query($conexao,"SELECT * FROM categoria WHERE cat_nome='%$nome%'");
$verificador = mysqli_fetch_array($search);
var_dump($verificador);
if($verificador == true )
{
    while($categorias = mysqli_fetch_array($search)){
        echo $categorias['cat_nome'];
    };
    
}else{

    $sql = mysqli_query($conexao,"INSERT INTO categoria(cat_nome,cat_IsActive) VALUES('$nome','$isActive')");
    
    if($sql){
        header('Location:formInPro.php');
    }else{
        echo "Erro no Insert";
    }
}
?>
</body>
</html>