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
</head>

<body>
    <?php
    include_once ("conexao.php");
    include_once("protect.php");
    ?>
    <div class="navbar">
        <img src="\Prj_GEE/img/Gaming_Logo-removebg-preview.png" width="47rem">
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
            <form action="\Prj_GEE/lista/lista.php" method="post">
                <input type="text" id="txtBusca" name="buscar" placeholder="" />
                <input type="submit" value="Buscar" class="btn btn-primary">
            </form>
        </div>
        <div class="dropdown ">
            <button onclick="menu()" class="dropbtn dropbtn2"><?php echo $_SESSION['nome'] ?></button>
            <div id="menuDrop" class="dropdown-content">
                <a href="\Prj_GEE/SobreNois.php">Sobre nós</a>
                <a href="\Prj_GEE/index.php">Analistic</a>
                <a href="\Prj_GEE/pageAdm/adm.php">Adm</a>
                <a href="\Prj_GEE/configuracao/config.php">Configurações</a>
                <a href="\Prj_GEE/logoff.php">Sair</a>
            </div>
        <img src="\Prj_GEE/img/user_icon-removebg-preview.png" width="15%">
        </div>
        <!-- <a class="active" href="Visualizar">Visualizar</a> -->
        <!-- <a href="#about">About</a> -->
    </div>
</body>

</html>