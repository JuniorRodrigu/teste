<?php
include ('peotecao.php');
include('conexao.php');


if(isset($_POST['submit']))
{
  
   $urlv = ($_POST['urlv']);

$result_artigo = mysqli_query($mysqli, "INSERT INTO video(urlv) 
VALUES('$urlv')");

}
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
    div{
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 88px;
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
        margin-bottom: 28px;
        margin-top: 28px;

    }
    button:hover{
        background-color: teal;
        cursor: pointer;
        
    }
    </style>
<body>
   <div class="centraliza"> 
    <p>
    <h1>Publica Video</h1>
    <form action="" method="POST">
    <p>
    
        <input placeholder="URL do video" type="text" name="urlv" id="urlv">
    </p>
    <button type="submit" name="submit" id="submit">Posta</button>
    <a  href="formulario.php">Publica Artigo</a>
    <br>
    <br>
        <a  href="sair.php">Sair</a>
    </p>
    <a  href="index.php"><img src=" https://icon-library.com/images/html-home-icon/html-home-icon-4.jpg" alt="" height="70px"></a>
       
    </div>
</body>
</html>