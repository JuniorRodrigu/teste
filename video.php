<?php
include ('peotecao.php');
include('conexao.php');


if(isset($_POST['submit']))
{
  
   $urlv = ($_POST['urlv']);
   $titulo = ($_POST['titulo']);

$result_artigo = mysqli_query($mysqli, "INSERT INTO video(urlv,titulo) 
VALUES('$urlv','$titulo')");

{
    header('location: index.php');
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
    <link rel="stylesheet" href="css/cssVV.css">
    <title>Document</title>
</head>

<body>
   <div class="centraliza"> 
    <p>
    <h1>Publica Video</h1>
    <form action="" method="POST">
    <p>
    
        <input placeholder="youtube.com/watch?v=" type="text" name="urlv" id="urlv" required>

        <input placeholder="titulo" type="text" name="titulo" id="titulo" required>

    </p>
    <button type="submit" name="submit" id="submit">Posta</button>
    <a  href="formulario.php">Publica Artigo</a>
    <br>
    <br>
        <a  href="historicoV.php">Historico de Videos</a>
        <br>
    <br>
        <a  href="sair.php">Sair</a>
    </p>
    <a  href="index.php"><img src=" https://icon-library.com/images/html-home-icon/html-home-icon-4.jpg" alt="" height="70px"></a>
       
    </div>
</body>
</html>