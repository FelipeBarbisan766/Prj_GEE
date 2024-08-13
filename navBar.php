<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="\Prj_GEE/style.css">
    <script src="\Prj_GEE/dropdown.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
    <?php
    include_once ("conexao.php");
    include_once("protect.php");
    ?>
    <div class="navbar">
        <img src="\Prj_GEE/img/Gaming_Logo-removebg-preview.png" width="47rem" class="logoimg">
        <h1 class="nomeLogo">GEE</h1>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Categorias</button>
            <div id="myDropdown" class="dropdown-content dropCategoria" >
                <a href="\Prj_GEE/lista/lista.php">GERAL</a>
                <?php
                include_once ("conexao.php");
                $slq = mysqli_query($conexao, "SELECT * FROM categoria");
                while ($categorias = mysqli_fetch_array($slq)) {
                    if ($categorias['cat_IsActive'] == true) { ?>
                        <a
                            href="\Prj_GEE/lista/lista.php?cod=<?php echo $categorias['cat_cod']; ?>"><?php echo $categorias['cat_nome']; ?></a>
                    <?php }
                }
                ; ?>
            </div>
        </div>
        <div id="divBusca">
            <form action="<?php if(isset($_GET['proAdm'])){echo '\Prj_GEE/pageAdm/Produto/produtoAdm.php';}else{
                echo '\Prj_GEE/lista/lista.php';
            } ?>" method="post">
                <input type="text" id="txtBusca" name="buscar" placeholder="" />
                <input type="submit" value="Buscar" id="busca" class="btn btn-primary btn-busca btnAzul">
            </form>
        </div>
        <div class="dropdown ">
            <button onclick="menu()" class="dropbtn dropbtn2" ><?php echo $_SESSION['nome'] ?></button>
            <div id="menuDrop" class="dropdown-content dropdown-content2">
                <a href="\Prj_GEE/SobreNois.php">Sobre nós</a>
                <a href="\Prj_GEE/index.php">Painel de Analise</a>
                <?php if($_SESSION['cargo'] == 'ADM'){?>
                    <a href="\Prj_GEE/pageAdm/adm.php">Controle Administrador</a>
                <?php } ?>
                <a href="\Prj_GEE/logoff.php">Sair</a>
            </div>
        
        </div>
        <div class="gap">.</div>
        <!-- <a class="active" href="Visualizar">Visualizar</a> -->
        <!-- <a href="#about">About</a> -->
    </div>
</body>

</html>