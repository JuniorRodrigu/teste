<?php
include ('peotecao.php');
include_once('conexao.php');


if(isset($_POST['update']))
{
   
    
    $id = $_POST['id'];
    $url = $_POST['urlv'];
    $titulo = $_POST['titulo'];

    $sqlInsert  = "UPDATE video SET urlv='$url', titulo='$titulo' WHERE id='$id'";
    $result = $mysqli->query($sqlInsert);

    print_r($result);
}
header('Location: historicoV.php');


?>
