<?php
include ('peotecao.php');
include ('conexao.php');


$consulta = "SELECT * FROM `artigo` WHERE 1"; 
 $result = $mysqli->query($consulta);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CONHECER E PROSSEGUIR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>


<body>


</head>
<a  href="formulario.php"><button type="submit">Volta</button></a>
<style>
body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #1111;
    }
    .centraliza{
        background-color: #1111;
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

    }
    button:hover{
        background-color: teal;
        cursor: pointer;
        
    }
    </style>
<body>
        
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col"></th>
            <th scope="col">Texto</th>
          </tr>
        </thead>
        <?php
while ($user_data = mysqli_fetch_assoc($result))
{
echo "<tr>";

echo"<td>".$user_data['titulo']."<td>";
echo"<td>".$user_data['texto']."<td>";





}
?>

            
</div> 
           


</div>
</div>

</body>

</html>
