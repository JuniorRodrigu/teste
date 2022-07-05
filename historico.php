<?php
include ('peotecao.php');
include('conexao.php');

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
</head>
<a  href="formulario.php">Publica Artigo</a>

<body>
<body>
        
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Texto</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
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
