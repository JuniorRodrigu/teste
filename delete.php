
<?php
include ('peotecao.php');
include('conexao.php');


if(!empty($_GET['id']));
{
  
   $id= $_GET['id'];

$consult = "SELECT * FROM video WHERE id=$id";
$result = $mysqli->query($consult);

if($result ->num_rows >0 )
{
    $sqlDelete = "DELETE FROM video WHERE id=$id";
    $resultDelete = $mysqli->query($sqlDelete);
  
   
}

    header('location: historicoV.php');



}
?>