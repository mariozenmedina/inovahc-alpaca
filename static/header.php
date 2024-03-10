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