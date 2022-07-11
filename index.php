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
<style>
    .videos{
        width: 400px;
       height: 400px;
        
     
        top: 50%;
        left: 50%;
        
       
        border-radius: 15px;
       
     
   
    }
  .tituloos{

    margin-right: auto;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: large;
    text-align: center;
  }
  .centraliza{
       
    width: 400px;
        border-radius: 15px;

    
    display: flex;
    justify-content: center;

 
  margin: 10px;
  position: relative;
  text-align: center;

  
  


    }
    
#aartig{
       
       width: 400px;
       height: 400px;
           border-radius: 15px;
           
  
   
       display: flex;
       justify-content: center;
   
    
     margin: 10px;
     position: relative;
     text-align: center;
   

     
     
   
   
       }
   
    </style>

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
            $consulta = "SELECT * FROM `artigo` WHERE 1";
            $result = $mysqli->query($consulta);
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo '
            
                     
                        <div class="portfolio-item ">
                            <a class="portfol"  id="aartig" data-bs-toggle="modal" href="#alus'.$user_data["id_artigo"].'">
                            
                                
  <img class="centraliza" src=' . $user_data['img'] . ' alt="Imagem da fachada" class="img-fachada">
                            </a>
                            <div class="tituloos">
                                <div class="tituloos">' . $user_data['titulo'] . '</div>
                                
                            </div>
                            </div>
                        ';
            }
            ?> 

        </div>

        <!-- About-->
        <section class="page-section" id="about">
            
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Videos</h2>
                </div>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM `video` WHERE 1");
                while ($user_data = mysqli_fetch_assoc($result)) {



                    echo '   <div class="videos" > 
<iframe width="420" height="315"
src="https://www.youtube.com/embed/'.$user_data['urlv'].'">
</iframe>

</iframe>
</div>';
                }
                ?>




               
                <!-- Portfolio Modals-->
                <!-- Portfolio item 1 modal popup-->
                <?php
                $rlsc = mysqli_query($mysqli, "SELECT * FROM `artigo` WHERE 1");
                while ($user_data = mysqli_fetch_assoc($rlsc))
                    echo '
        <div class="portfolio-modal modal fade" id="alus'.$user_data['id_artigo'].'" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                   
                            
                                  
                                    <h2 class="text-uppercase">' . $user_data['titulo'] . '</h2>
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
                            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                            <div class="col-lg-4 my-3 my-lg-0">
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>
                </footer>

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