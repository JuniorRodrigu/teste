<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

   

   
    include('conexao.php');



    $consulta = "SELECT img FROM `artigo` WHERE id_artigo=6";
    $result = $mysqli->query($consulta);


    $row = mysqli_fetch_assoc($result);
    echo $row['img'];

    ?> <img src="<? echo $row['img'] ?>" width="500px" height="500px" /><?


    ?>
</body>

</html>