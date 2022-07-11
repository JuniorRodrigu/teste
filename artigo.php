<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include 'conexao.php';

$rls = 'SELECT * FROM artigo';

if ($res = mysqli_query($mysqli, $rls)) {
    $id_artigo = array();

    $texto = array();
    $img = array();
    $titulo = array();
    $i = 0;


    while ($reg = mysqli_fetch_assoc($res)) {
        $id_artigo[$i]    = $reg['id_artigo'];
        $img[$i]  = $reg['img'];
        $titulo[$i] = $reg['titulo'];

        $i++;


        echo $img[$i];
        echo '
        <div class="portfolio-modal modal fade" id="portfolioModal1?' . $id_artigo[$i] . '" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                  
                                    <h2 class="text-uppercase">' . $user_data['titulo'] . '</h2>
                                    <img class="img-fluid d-block mx-auto" src="' . $user_data['img'] . '" alt="..." />
                                    <p>' . $user_data['texto'] . '';
    }
}


?>

<body>
    <?php






    while ($user_data = mysqli_fetch_assoc($rlsc)) {
        echo $img[$i];
        echo '
        <div class="portfolio-modal modal fade" id="portfolioModal1?' . $user_data['id_artigo'] . '" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                  
                                    <h2 class="text-uppercase">' . $user_data['titulo'] . '</h2>
                                    <img class="img-fluid d-block mx-auto" src="' . $user_data['img'] . '" alt="..." />
                                    <p>' . $user_data['texto'] . '';
    }
    ?>
</body>

</html>