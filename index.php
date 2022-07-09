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
    </head>
    <body id="page-top">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">CONHECER E PROSSEGUIR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Artigos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Videos</a></li>
                      
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                
                <div class="masthead-heading text-uppercase">Conhecer e Prosseguir</div>
               
            </div>
        </header>
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artigos</h2>
                    <h3 class="section-subheading text-muted">Então conheçamos, e prossigamos em conhecer ao Senhor; Oséias 6:3</h3>
                </div>
                <?php
                $rls = mysqli_query($mysqli, "SELECT * FROM `artigo` WHERE 1");
while ($user_data = mysqli_fetch_assoc($rls))
{


echo"  
                <div class='row'>
                    <div class='col-lg-4 col-sm-6 mb-4'>
                        <!-- Portfolio item 1-->
                        <div class='portfolio-item'>
                            <a href='video.php?id=$user_data[id_v]'>
                                <div class='portfolio-hover'>
                                    <div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>
                                </div>
                                
  <img src='.$user_data[img].' alt='Imagem da fachada' class='img-fachada'>
                            </a>
                            <div class='portfolio-caption'>
                                <div class='portfolio-caption-heading'>'.$user_data[titulo].'</div>
                                
                            </div>
                        </div>";





}
?>
                               
                    </div>
      
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Videos</h2>
                </div>
                <?php
$result = mysqli_query($mysqli, "SELECT * FROM `video` WHERE 1");
while ($user_data = mysqli_fetch_assoc($result))
{



echo'   <div> 
<iframe width="420" height="315"
src='.$user_data['urlv'].'>
</iframe>

</iframe>
</div>';






}
?>
         
              
        
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <?php
                                   $rlsc = mysqli_query($mysqli, "SELECT * FROM `artigo` WHERE 1");
                                   while ($user_data = mysqli_fetch_assoc($rlsc))
                                    echo '
        <div class="" id='.$user_data['id_artigo'].' tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                  
                                    <h2 class="text-uppercase">'.$user_data['titulo'].'</h2>
                                    <img class="img-fluid d-block mx-auto" src="'.$user_data['img'].'" alt="..." />
                                    <p>'.$user_data['texto'].''
                                 
                                    ;
                                    ?>
                                   
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
