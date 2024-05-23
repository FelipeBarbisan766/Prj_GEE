<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['cod'])){
    header('Location:\Prj_GEE/SobreNois.php');
}
?>