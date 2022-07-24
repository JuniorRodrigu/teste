<?php
include('conexao.php');


$consulta = "SELECT * FROM `artigo` WHERE 1";
$result = $mysqli->query($consulta);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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
    <link href="artigo.css" rel="stylesheet" />
    
</head>
<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container" id="navediv">
            <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="artig.php">Artigos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Contato</a></li>

                </ul>
            </div>
        </div>
    </nav>
<section class="page-section bg-light" id="portfolio">
       
       <div class="text-center">
           <h2 class="section-heading text-uppercase">Artigos</h2>
           <h3 class="section-subheading text-muted">Então conheçamos, e prossigamos em conhecer ao Senhor; Oséias 6:3</h3>
       </div>
       <?php
       $consulta = "SELECT * FROM `artigo` WHERE 1";
       $result = $mysqli->query($consulta);
       while ($user_data = mysqli_fetch_assoc($result)) {
           echo '
       
                
                   <div class="portfolio-item ">
                       <a class="portfol"  id="aartig" data-bs-toggle="modal" href="#alus'.$user_data["id"].'">
                       
                           
<img class="centraliza" src=' . $user_data['img'] . ' alt="Imagem da fachada" class="img-fachada">
                       </a>
                       <div class="tituloos">
                       <h1> '.$user_data['titulo'].'</h1>
                           
                       </div>
                       </div>
                   ';
       }
       ?> 