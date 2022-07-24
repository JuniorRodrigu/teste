<?php
include ('peotecao.php');
include_once('conexao.php');


if(isset($_POST['update']))
{
   
    $id = $_POST['id'];
    $img = $_POST['img'];
    $texto = $_POST['texto'];
    $titulo = $_POST['titulo'];

    $sqlInsert  = "UPDATE artigo SET titulo='$titulo',texto='$texto',img='$img' WHERE  id='$id'";
    $result = $mysqli->query($sqlInsert);

    print_r($result);
}

header('Location: historico.php');

?>
