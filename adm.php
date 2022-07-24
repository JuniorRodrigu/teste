<?php
include('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "preencha o e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "preencha a senha";
    } else {
        $email = $mysqli ->real_escape_string($_POST['email']);
        $senha = $mysqli ->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email= '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("falha".$mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: formulario.php");

        }
        else{
            echo "falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/cssADM.css" rel="stylesheet" />

    <title>admm</title>
   
   
</head>
<body>
    <div>
    <h1>Faça login</h1>
    <form action="" method="POST">
    <p>
        
        <input type="text" name="email" placeholder="Email">
    </p>
<p>
   
    <input type="password" name="senha" placeholder="Senha">

</p>
<p>
    <button type="submit">Logar</button>
</p>
    </form>
    </div>
</body>
</html>