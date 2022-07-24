<?php
include ('peotecao.php');
include('conexao.php');


if(!empty($_GET['id']));
{
  
   $id= $_GET['id'];

$consult = "SELECT * FROM artigo WHERE id=$id";
$result = $mysqli->query($consult);

if($result ->num_rows >0 )
{
    $sqlDelete = "DELETE  FROM artigo WHERE id=$id";
    $resultDelete = $mysqli->query($sqlDelete);
  
}

    header('location: historico.php');



}
?>