
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
    <link href="css/cssINDEX.css" rel="stylesheet" />
    
</head>
<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
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
                    <li class="nav-item"><a class="nav-link" href="videoss.php">Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="contatos.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">

            <div class="masthead-heading text-uppercase"><h1 class="textoimg"><h1>Conhecer e Prosseguir</h1></div>

        </div>
    </header>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
       
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Artigos</h2>
                <h3 class="section-subheading text-muted">Ent??o conhe??amos, e prossigamos em conhecer ao Senhor; Os??ias 6:3</h3>
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


<div class="portfolio-modal modal fade" id="alus'.$user_data['id'].'" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                   
                            
                                  
                                    <h2 ></h2>
                                    <img class="img-fluid d-block mx-auto" src="' . $user_data['img'] . '" alt="..." />
                                    <p>' . $user_data['texto'] . '
                                    <ul class="list-inline">
                    
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                    
                                    </button>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
 

               
                <!-- Portfolio Modals-->
                <!-- Portfolio item 1 modal popup-->
                <?php
                $rlsc = mysqli_query($mysqli, "SELECT * FROM `artigo` WHERE 1");
                while ($user_data = mysqli_fetch_assoc($rlsc))
                    echo '
        <div class="portfolio-modal modal fade" id="alus'.$user_data['id'].'" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                   
                            
                                  
                                    <h2 >' . $user_data['titulo'] . '</h2>
                                    <img class="img-fluid d-block mx-auto" src="' . $user_data['img'] . '" alt="..." />
                                    <p>' . $user_data['texto'] . '
                                    <ul class="list-inline">
                    
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                    
                                    </button>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>';

                                
                ?>

             <!-- Footer-->
             <footer class="footer py-4">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 my-3 my-lg-0">
                                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/nathanaelkaleby.mourao" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/conhecereprosseguir" aria-label="LinkedIn"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/nathanael_kaleby/" aria-label="instagram"><i class="fab fa-instagram"></i></i></a>
                            </div>

                        </div>
                    </div>
                </footer>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7783925334660985"
     crossorigin="anonymous"></script>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>