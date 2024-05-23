<?php
if(!isset($_SESSION)){
    session_start();
}
if($_SESSION['cargo'] == "AGENTE"){
    header('Location: ../');
}
?>