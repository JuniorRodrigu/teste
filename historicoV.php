<?php
include ('peotecao.php');
include ('conexao.php');


$consulta = "SELECT * FROM `video` WHERE 1"; 
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
      <table class="table table-bordered " >
        <thead>
          <tr>
            <th scope="col">LINKS</th>
            
          </tr>
        </thead>
        <?php
while ($user_data = mysqli_fetch_assoc($result))
{
echo "<tr>";

echo"<td>".$user_data['urlv']."<td>";
echo
"<td> 
<a class='btn btn-primary' href='video.php?id=$user_data[id_v]'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<td>";





}
?>

            
</div> 
           


</div>
</div>

</body>

</html>
