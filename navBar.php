<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="\Prj_GEE/style.css">
    <script src="\Prj_GEE/dropdown.js"></script>
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
            <div id="myDropdown" class="dropdown-content">
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
            <input type="text" id="txtBusca" placeholder="Buscar..." />
        </div>
        <div class="dropdown ">
            <button onclick="menu()" class="dropbtn dropbtn2"><?php echo $_SESSION['nome'] ?></button>
            <div id="menuDrop" class="dropdown-content dropdown-content2">
                <a href="\Prj_GEE/SobreNois.php">Sobre nós</a>
                <a href="\Prj_GEE/index.php">Analistic</a>
                <a href="\Prj_GEE/pageAdm/adm.php">Adm</a>
                <a href="\Prj_GEE/configuracao/config.php">Configurações</a>
                <a href="\Prj_GEE/logoff.php">Sair</a>
            </div>
        </div>
        <img src="\Prj_GEE/img/user_icon-removebg-preview.png" width="3%">
        <!-- <a class="active" href="Visualizar">Visualizar</a> -->
        <!-- <a href="#about">About</a> -->
    </div>
</body>

</html>