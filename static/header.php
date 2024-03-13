<!DOCTYPE html>
<html lang="pt_br">
<head>
    <!-- Default Wordpress -->
    <?php wp_head(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="language" content="pt-br">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Framework Alpaca">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Titulo do site -->
    <title>InovaHC</title>
    <!-- Carregando o favicon-->
    <link rel="icon" type="image/png" href="<?php tu(); ?>/assets/images/favicon.png">
    <link href="<?php tu(); ?>/assets/images/favicon.png" rel="shortcut icon">
    <!-- Carregando o CSS -->
    <link rel="stylesheet" href="<?php tu(); ?>/build/css/style.css"> 
    <!-- Carregando Classes de JS -->
    <script src="<?php tu(); ?>/build/js/classes.js"></script>
     <!-- Carregando Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">




</head>

<body >
    <!-- Carrega os SVGs -->
    <?php get_template_part('blocks/_svg'); ?>

    <div id="mainContent" data-page="<?php echo isset($current_page)?$current_page:''; ?>" > 

        <header class="top-bar" id="topBar">
                <!-- Carrega o menu -->
                <?php get_template_part('blocks/_menu-nav'); ?>
        </header>
        
    <!-- Inicia a main -->