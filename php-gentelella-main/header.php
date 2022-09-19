<?php

  session_start();
      
  // Inicio da sessao
  if( !isset($_SESSION['nome_user'])  && $_SERVER['REQUEST_URI'] != "/php-gentelella/login.php" ){
      header("Location: login.php");
      exit();   
  }
?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">

        <!-- Animate.css -->
        <link href="css/animate.min.css" rel="stylesheet">
  </head>

  