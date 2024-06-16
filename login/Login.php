<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include_once ("../conexao.php");
    ?>
    <a href='../' class="btn_voltar"> <img src="../img/seta_voltar.png" width="45em"> </a>
    <div class="container" id="loginContent">
        <form action="Login.php" method="post">
            <div class="block_input">
                <input type="text" name="txt_nome" class="input_form" placeholder="Nome" required>
            </div>
            <div class="block_input">
                <input type="password" name="txt_codigo" class="input_form" placeholder="Codigo" required>
            </div>
            <input type="submit" value="Login" class="btnDoLogin"> <br>
        </form>
        <?php

        if (!isset($_SESSION)) {
            session_start();
            if (isset($_SESSION['cod'])) {
                header('Location:../lista/lista.php');
            }
        }

        if (isset($_POST['txt_nome']) || isset($_POST['txt_codigo'])) // verifica se existe as variaveis email e senha
        {
            if (strlen($_POST['txt_nome']) == 0) // o "strlen" conta quantas letras existe na variavel então se for = a 0 nada foi escrito
            {
                echo '<div class="alert alert-danger" role="alert">Preencha seu E-mail!</div>';
            } else if (strlen($_POST['txt_codigo']) == 0) {
                echo '<div class="alert alert-danger" role="alert">Preencha sua Senha!</div>';
            } else {
                $nome = $conexao->real_escape_string($_POST['txt_nome']);//codigo para evitar invasão (pode ser retirado se quiser)
                $senha = $conexao->real_escape_string($_POST['txt_codigo']);

                $nome = strtoupper($nome);

                $sql_code = "SELECT * FROM funcionario WHERE fun_nome = '$nome' AND fun_senha ='$senha'";
                $sql_query = $conexao->query($sql_code) or die("falha na execução do codigo");

                $quantidade = $sql_query->num_rows;

                if ($quantidade == 1) {
                    $usuario = $sql_query->fetch_assoc();
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION['cod'] = $usuario['fun_cod'];
                    $_SESSION['nome'] = $usuario['fun_nome'];
                    $_SESSION['cargo'] = $usuario['fun_cargo'];

                    header('Location: ../index.php');

                } else {
                    echo '<div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Falha Ao Logar!</h4>
          <p>O Nome ou a senha do usuário estão incorretas, tente novamente!</p>';
                }
            }
        }
        ?>
    </div>
    <img src="../img/logo.png" alt="logo_site" class="logo" width="70em">
    <!-- o resto eu penso depois  -->
</body>

</html>