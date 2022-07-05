<?php 

$usuario = 'root';
$senha = '';
$databese = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $databese);

if($mysqli->error){
    die("falha ao conecta ao banco". $mysqli->error);
}
