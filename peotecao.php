<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
die("vc não pode acessar essa pagina.<p><a href=\"admm.php\">Entrar</a></p>");
}
?>