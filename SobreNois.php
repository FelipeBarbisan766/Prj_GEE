<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body id="index">
    <div class="topnav">
        <div>
            <h1 class="nomeLogoIndex"> <img src="img/logo.png" class="imgLogoIndex" width="15%"> GEE</h1>
        </div>
        <div>
            <h1 class="indexTitle">GESTÃO DE ESTOQUE ESCOLAR</h1>
        </div>
        <?php 
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['cod'])){ 
            echo '<a href="login/Login.php" class="btn_login btnAzul">Login</a>';
            
            ?>
        <?php }else{ 
            echo '<a href="index.php" class="btn_login btnAzul">Voltar</a>'
            ?>
        <?php } ?>
    </div>
    <div class="colum">
        <div>

            <h1 id="TituloPrincipal">SOBRE NÓS</h1>
            <p id="textoIndex"> Somos um grupo de jovens, composto por 3 meninas e 4 meninos. O nosso objetivo foi pensar em
                desenvolver uma plataforma que auxiliasse uma escola estadual localizada em uma cidade do interior de São
                Paulo.</p>
            </div>
        <img src="img/Cópia de Cópia de Simple Lined White Login Page Wireframe Website UI Prototype.png" id="img_Index">
    </div>
</body>

</html>