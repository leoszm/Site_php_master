<?php

    session_start();

    // Capturar dados via POST
    $email_login = $_POST['email'];
    $senha_login = $_POST['senha'];

    //  Validar dados de Login
    if( $email_login != "" ){
        $_SESSION['login'] = true;
        $_SESSION['nome_user'] = "Daniel";
        $_SESSION['tipo'] = "admin"; 

        header("Location: index.php");
    }
    else{

        header("Location: login.php");

    }


    //echo "Nome do usuário = " . $_SESSION['nome_user'];
    //echo "<br>Tipo do usuário = ". $_SESSION['tipo'];


?>