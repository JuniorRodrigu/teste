

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
    }
   
}
else
{
    header('location: historivoV.php');
}
}
else
    {
        header('location: historivoV.php');
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
    #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
   
<body>
   <div class="centraliza"> 
 
    <p>
    <h1>Publica Video</h1>
    <form action="saveEdit.php" method="POST">
    <p>
    
        <input placeholder="youtube.com/watch?v=" name="urlv" id="urlv" class="urlv" value=<?php echo $url;?> required>
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
