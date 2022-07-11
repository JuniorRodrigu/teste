<?php
include ('peotecao.php');
include('conexao.php');


if(isset($_POST['submit']))
{
  
   $titulo = ($_POST['titulo']);
   $texto = ($_POST['texto']);
   $img = ($_POST['img']);

$result_artigo = mysqli_query($mysqli, "INSERT INTO artigo(titulo, texto, img) 
VALUES('$titulo','$texto','$img')");



}
$consulta = "SELECT * FROM `artigo` WHERE 1"; 
 $result = $mysqli->query($consulta);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/center.css">
    <title>Document</title>
</head>
<style>
body{

        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(90deg, rgb(15, 15, 223), rgb(12, 196, 40) );
    }
    .centraliza{
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 7%;
        height: 100%;
        border-radius: 15px;
        color: white;
    

    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px ;

    }
    button{
        background-color: darkblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: wheat;
        font-size: 15px;

    }
    button:hover{
        background-color: teal;
        cursor: pointer;
        
    }
    </style>
<body>
   <div class="centraliza"> 
    <p>
    <h1>Publica Artigo</h1>
    <form action="" method="POST">
    <p>
        
        <input placeholder="URL da Capa" type="text" name="img" id="img">
    </p>
    <p>
        
        <input placeholder="Titulo" type="text" name="titulo" id="titulo">
    </p>
<p >

    
    <textarea placeholder="Artigo"  type="text" name="texto" id="texto" rows="10" cols="40" maxlength="500900">
    
    </textarea>
</p>
<p>
    <button type="submit" name="submit" id="submit">Posta</button>
</p>
    </form>
    <a  href="video.php">Posta video     </a>
    <br>
    <br>
        <a  href="sair.php">    Sair</a>
    <br><br><br>
    <a href="historico.php">Historico</a>
    <br>
    <br>
    <a  href="index.php"><img src=" https://icon-library.com/images/html-home-icon/html-home-icon-4.jpg" alt="" height="70px"></a>
    </p>
  
       
    </div>

    
</body>
</html>