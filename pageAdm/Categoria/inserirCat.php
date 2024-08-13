    <?php
include('../../conexao.php');
mb_internal_encoding('UTF-8');

$nome = mb_strtoupper($_POST["nome"]);
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
        header('Location:categoriaAdm.php');
    }else{
        echo "Erro no Insert";
    }
}
?>