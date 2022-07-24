<?php
include('peotecao.php');
include_once('conexao.php');


if (!empty($_GET['id'])) {

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM artigo WHERE id=$id";
    $result = $mysqli->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {

            
            $img = $user_data['img'];
            $titulo = $user_data['titulo'];
            $texto = $user_data['texto'];
        }
    } else {
        header('location: historivoV.php');
    }
} else {
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
    <link rel="stylesheet" href="css/cssEDTV.css">
    <title>Document</title>
</head>


<body>
    <div class="centraliza">

        <p>
        <h1>Publica Video</h1>
        <form action="sEdi.php" method="POST">
            <p>

                <input placeholder="capa" type="text" name="img" id="img" class="img" value=<?php echo $img; ?> required>
            </p>
            <p>

                <input placeholder="Titulo" type="text" name="titulo" id="titulo" class="titulo" value=<?php echo $titulo; ?> required>
            </p>
            <p>
            <textarea class="form-control" type="text" rows="10" cols="40" name="texto" id="texto" class="texto" ><?php echo $texto; ?> </textarea>
            </p>
            <input type="submit" name="update" id="submit">
            <a href="formulario.php">Publica Artigo</a>
            <br>
            <br>
            <a href="historicoV.php">Historico de Videos</a>
            <br>
            <br>
            <a href="sair.php">Sair</a>
            <br>
            <br>
            <a href="historicoV.php">Volta</a>
            </p>

            <a href="index.php"><img src=" https://icon-library.com/images/html-home-icon/html-home-icon-4.jpg" alt="" height="70px"></a>



    </div>

    <input type="hidden" name="id" value=<?php echo $id; ?>>

</body>

</html>