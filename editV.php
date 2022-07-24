

<?php
include ('peotecao.php');
include_once('conexao.php');


if(!empty($_GET['id']))
{
  
$id= $_GET['id'];
$sqlSelect = "SELECT * FROM video WHERE id=$id";
$result = $mysqli->query($sqlSelect);
if($result ->num_rows > 0)
{
    while ($user_data = mysqli_fetch_assoc($result))
    {

        $url = $user_data['urlv']; 
        $titulo = $user_data['titulo']; 
   
    }
   
}
else
{
    header('location: historivoV.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/center.css">
    <link rel="stylesheet" href="css/cssEDTV.css">
    <title>Document</title>
</head>

   
<body>
   <div class="centraliza"> 
 
    <p>
    <h1>Publica Video</h1>
    <form action="saveEdit.php" method="POST">
    <p>
    
        <input placeholder="youtube.com/watch?v=" name="urlv" id="urlv" class="urlv" value=<?php echo $url;?> required>
    </p>
    <p>
    <input placeholder="titulo" type="text" name="titulo"  value=<?php echo $titulo;?> required>

</p>
    <input type="submit" name="update" id="submit">
    <a  href="formulario.php">Publica Artigo</a>
    <br>
    <br>
        <a  href="historicoV.php">Historico de Videos</a>
        <br>
    <br>
        <a  href="sair.php">Sair</a>
        <br>
    <br>
        <a  href="historicoV.php">Volta</a>
    </p>
    
    <a  href="index.php"><img src=" https://icon-library.com/images/html-home-icon/html-home-icon-4.jpg" alt="" height="70px"></a>
      
      
       
    </div>
  
    <input type="hidden" name="id" value=<?php echo $id;?>>
                
</body>
</html>
